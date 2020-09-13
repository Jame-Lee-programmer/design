<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Braintree extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('invoice_model');
    }

    function pay($invoice_id = NULL)
    {
        $data['title'] = lang('make_payment');
        $invoice_info = $this->invoice_model->check_by(array('invoices_id' => $invoice_id), 'tbl_invoices');

        $invoice_due = $this->invoice_model->calculate_to('invoice_due', $invoice_id);
        if ($invoice_due <= 0) {
            $invoice_due = 0.00;
        }
        $data['invoice_info'] = array(
            'item_name' => $invoice_info->reference_no,
            'item_number' => $invoice_id,
            'currency' => $invoice_info->currency,
            'client_id' => $invoice_info->client_id,
            'amount' => $invoice_due);

        $data['client_token'] = $this->paypal_braintree_gateway->generate_invoice_token();
        $data['subview'] = $this->load->view('payment/braintree', $data, true);
        $client_id = $this->session->userdata('client_id');
        if (!empty($client_id)) {
            $this->load->view('client/_layout_main', $data);
        } else {
            $this->load->view('frontend/_layout_main', $data);
        }
    }

    public function purchase()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['nonce'] = $this->input->post('payment_method_nonce');
            $oResponse = $this->paypal_braintree_gateway->finish_invoice_payment($data);
            if (!empty($oResponse) && $oResponse->isSuccessful()) {
                $transactionid = $oResponse->getTransactionReference();
                $paymentResponse = $this->paypal_braintree_gateway->fetch_invoice_payment($transactionid);
                $paymentData = $paymentResponse->getData();
                $result = $this->stripe_gateway->addPayment($data['invoice_id'], $data['amount']);
                if ($result['type'] == 'success') {
                    set_message($result['type'], $result['message']);
                } else {
                    set_message($result['type'], $result['message']);
                }

            } elseif ($oResponse->isRedirect()) {
                $oResponse->redirect();
            } else {
                set_message('error', $oResponse->getMessage());
            }
            $client_id = $this->session->userdata('client_id');
            if (!empty($client_id)) {
                redirect('client/dashboard');
            } else {
                redirect('frontend/view_invoice/' . url_encode($data['invoice_id']));
            }
        }
    }


    public function make_subs_payment()
    {
        $data['title'] = lang('make_payment');
        $input_data = $this->session->userdata('input_info');
        if (!empty($input_data)) {
            $data['input_data'] = $input_data;
            $data['client_token'] = $this->paypal_braintree_gateway->generate_token();
            $data['subview'] = $this->load->view('payment/subscriptions/braintree', $data, true);
            $user_id = $this->session->userdata('user_id');
            if (!empty($user_id) && empty($front_end)) {
                $this->load->view('admin/_layout_main', $data); //page load
            } elseif (!empty($front_end)) {
                $this->load->view('admin/_layout_open', $data); //page load
            } else {
                $this->load->view('frontend/_layout_main', $data); //page load
            }
        }
    }

    public function complete_purchase()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['input_data'] = json_decode($data['input_data']);
            $data['amount'] = $data['input_data']->total;
            $data['nonce'] = $this->input->post('payment_method_nonce');
            $data['currency'] = $data['input_data']->currency;
            $oResponse = $this->paypal_braintree_gateway->finish_payment($data);
            if ($oResponse->isSuccessful()) {
                $transactionid = $oResponse->getTransactionReference();
                $paymentResponse = $this->paypal_braintree_gateway->fetch_payment($transactionid);
                $paymentData = $paymentResponse->getData();

                $data['input_data']->transaction_id = $transactionid;
                $result = $this->stripe_gateway->addSubsPayment($data['input_data']);
                if ($result['type'] == 'success') {
                    set_message($result['type'], $result['message']);
                } else {
                    set_message($result['type'], $result['message']);
                }
                redirect('admin/dashboard');

            } elseif ($oResponse->isRedirect()) {
                $oResponse->redirect();
            } else {
                set_message('error', $oResponse->getMessage());
                redirect('checkoutPayment');
            }
        }
    }

}

////end 