<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Frontend extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('job_circular_model');
        $this->load->model('invoice_model');
        $this->load->model('estimates_model');
        $this->load->model('proposal_model');
        $this->load->model('kb_model');
        $this->load->helper('string');
        $this->load->library('gst');
    }

    function index()
    {
        $data['title'] = config_item('website_name');
        $data['slider'] = true;
        $data['currency_wise_price'] = $this->get_currencywise_price(true);
        $this->load->view('frontend/home_v2', $data);


    }

    function jobs()
    {
        $data['title'] = lang('our_best_features');
        $data['breadcrumb'] = lang('features');
        $data['subview'] = $this->load->view('frontend/job_vacancy', $data, TRUE);
        $this->load->view('frontend/home_v2', $data);
    }

    function features()
    {
        $data['title'] = lang('our_best_features');
        $data['breadcrumb'] = lang('features');
        $data['subview'] = $this->load->view('frontend/features', $data, TRUE);
        $this->load->view('frontend/_index', $data);
    }

    function get_currencywise_price($frontend = null, $currency_price = null)
    {
        if (!empty($currency_price)) {
            $currencywise_price = $currency_price;
        } else {
            $currencywise_price = $this->input->post('currencywise_price', true);
            if (empty($currencywise_price)) {
                $currencywise_price = config_item('default_currency');
            }
        }
        $currency = get_old_data('tbl_currencies', array('code' => $currencywise_price));
        $this->old_db = new_database(true, true);
        $all_pricing = $this->old_db->where('currency', $currencywise_price)->group_by('frontend_pricing_id')->get('tbl_currencywise_price')->result();
        $result = array();

        foreach ($all_pricing as $v_price) {
            $pricing_info = get_old_data('tbl_frontend_pricing', array('id' => $v_price->frontend_pricing_id));

            if (!empty($pricing_info)) {
                $v_price->name = $pricing_info->name;
                $v_price->currency = $currency->symbol;
                array_push($result, $v_price);
            }
        }
        if (!empty($frontend)) {
            return $result;
        } else {
            echo json_encode($result);
            exit();
        }
    }


    function term_of_service($type = null)
    {
        if (!empty($type)) {
            $type = 'tos';
        } else {
            $type = 'privacy';
        }
        $data['title'] = $type;
        $data['type'] = $type;
        $data['subview'] = $this->load->view('frontend/term_of_service', $data, TRUE);
        $this->load->view('frontend/_index', $data);
    }

    function signed_up()
    {
        $login_data = $this->job_circular_model->array_from_post(array('name', 'email', 'domain'));
        $this->load->library('uuid');
        $login_data['activation_tocken'] = $this->uuid->v4();
        // check whether this input data already exist or not
        $check_id = null;
        $email = array('email' => $login_data['email']);
        $domain = array('domain' => $login_data['domain']);

        $check_email = $this->job_circular_model->check_update('tbl_users', $email, $check_id);
        $check_domain = $this->job_circular_model->check_update('tbl_subscriptions', $domain, $check_id);
        if (!empty($check_email) || !empty($check_domain)) { // if input data already exist show error alert
            if (empty($check_email)) {
                $error = $login_data['domain'];
            } else {
                $error = $login_data['email'];
            }
            // massage for user
            $type = 'error';
            $message = "<strong style='color:#000'>" . $error . '</strong>  ' . lang('already_exist');
        } else {
            $pricing_id = $this->input->post('pricing_id', true);
            if (!empty($pricing_id)) {
                $plan_info = get_row('tbl_frontend_pricing', array('id' => $pricing_id));
                if (!empty($plan_info)) {
                    $sdata['companies_id'] = null;
                    $sdata['name'] = $this->input->post('name', true);
                    $sdata['email'] = $this->input->post('email', true);
                    $sdata['domain'] = $this->input->post('domain', true);
                    $sdata['frequency'] = $this->input->post('interval_type', true);
                    $sdata['currency'] = $this->input->post('currency_type', true);
                    $sdata['country'] = $this->input->post('country', true);
                    $sdata['mobile'] = $this->input->post('mobile', true);
                    $sdata['pricing_id'] = $pricing_id;
                    $sdata['trial_period'] = $plan_info->trial_period;
                    $sdata['status'] = 'pending';
                    $sdata['activation_tocken'] = $login_data['activation_tocken'];

                    $this->job_circular_model->_table_name = 'tbl_subscriptions';
                    $this->job_circular_model->_primary_key = 'subscriptions_id';
                    $subscriptions_id = $this->job_circular_model->save_data($sdata);

                    $amount_info = get_row('tbl_currencywise_price', array('frontend_pricing_id' => $pricing_id, 'currency' => $sdata['currency']));
                    if (!empty($amount_info)) {
                        if ($sdata['frequency'] == 'yearly') {
                            $amount = $amount_info->yearly;
                        } else {
                            $amount = $amount_info->monthly;
                        }
                    } else {
                        $amount = '';
                    }
                    $sh_data['subscriptions_id'] = $subscriptions_id;
                    $sh_data['currency'] = $sdata['currency'];
                    $sh_data['frequency'] = $sdata['frequency'];
                    $sh_data['amount'] = $amount;
                    $sh_data['ip'] = $this->input->ip_address();
                    $sh_data['name'] = $plan_info->name;
                    $sh_data['multi_branch'] = $plan_info->multi_branch;
                    $sh_data['employee_no'] = $plan_info->employee_no;
                    $sh_data['client_no'] = $plan_info->client_no;
                    $sh_data['project_no'] = $plan_info->project_no;
                    $sh_data['invoice_no'] = $plan_info->invoice_no;
                    $sh_data['leads'] = $plan_info->leads;
                    $sh_data['accounting'] = $plan_info->accounting;
                    $sh_data['bank_account'] = $plan_info->bank_account;
                    $sh_data['online_payment'] = $plan_info->online_payment;
                    $sh_data['calendar'] = $plan_info->calendar;
                    $sh_data['mailbox'] = $plan_info->mailbox;
                    $sh_data['live_chat'] = $plan_info->live_chat;
                    $sh_data['tickets'] = $plan_info->tickets;
                    $sh_data['tasks'] = $plan_info->tasks;
                    $sh_data['filemanager'] = $plan_info->filemanager;
                    $sh_data['stock_manager'] = $plan_info->stock_manager;
                    $sh_data['recruitment'] = $plan_info->recruitment;
                    $sh_data['attendance'] = $plan_info->attendance;
                    $sh_data['payroll'] = $plan_info->payroll;
                    $sh_data['leave_management'] = $plan_info->leave_management;
                    $sh_data['performance'] = $plan_info->performance;
                    $sh_data['training'] = $plan_info->training;
                    $sh_data['reports'] = $plan_info->reports;
                    $sh_data['disk_space'] = $plan_info->disk_space;
                    $sh_data['status'] = 'pending';

                    $this->job_circular_model->_table_name = 'tbl_subscriptions_history';
                    $this->job_circular_model->_primary_key = 'id';
                    $this->job_circular_model->save_data($sh_data);


                    $sbdata['email'] = $sdata['email'];
                    $sbdata['status'] = 1;
                    $sbdata['ip'] = $this->input->ip_address();
                    $sbdata['user_agent'] = $this->returnUserAgent();

                    $this->job_circular_model->_table_name = 'tbl_subscribers';
                    $this->job_circular_model->_primary_key = 'subscribers_id';
                    $this->job_circular_model->save_data($sbdata);

                    $login_data['activation_period'] = config_item('email_activation_expire') / 3600;
                    $this->send_token_activation_email($login_data['email'], $login_data);
                }
            }

            $type = 'success';
            $message = lang('registration_success');
        }

        set_message($type, $message);
        redirect('#pricing');
    }

    public function returnUserAgent()
    {
        $this->load->library('user_agent');

        $agent = '';
        // is it browser? if yes get browser name and version
        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } // robot?
        elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } // mobile ?
        elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }

        return $agent;
    }

    function create_config($companies_id = null)
    {
        $config_data = $this->db->where('companies_id', null)->get('tbl_config')->result();
        $configs = array();
        foreach ($config_data as $config) {
            $config->companies_id = $companies_id;
            array_push($configs, $config);
        }

        $this->db->insert_batch('tbl_config', $configs);
        return true;
    }

    function create_working_days($companies_id = null)
    {
        $all_working_day = $this->db->where('companies_id', null)->get('tbl_working_days')->result();

        $working_day = array();
        foreach ($all_working_day as $working_days) {
            $working_days->working_days_id = null;
            $working_days->companies_id = $companies_id;
            array_push($working_day, $working_days);
        }
        $this->db->insert_batch('tbl_working_days', $working_day);
        return true;
    }

    function create_menu($companies_id = null)
    {
        $all_menu = $this->db->where('companies_id', null)->get('tbl_menu')->result();
        $menu = array();
        foreach ($all_menu as $menus) {
            $menus->menu_id = null;
            $menus->companies_id = $companies_id;
            array_push($menu, $menus);
        }
        $this->db->insert_batch('tbl_menu', $menu);

        $all_company_menu = $this->db->where('companies_id', $companies_id)->get('tbl_menu')->result();
        foreach ($all_company_menu as $c_menu) {
            if ($c_menu->label == 'sales') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 12), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'tickets') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 6), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'quotations') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 21), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'transactions') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 29), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'transactions_r') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 146), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'report') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 42), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'project') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 59), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'utilities') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 73), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'payroll') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 89), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'stock') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 75), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'assign_stock') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 78), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'manage_stock') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 77), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'performance') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 85), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'job_circular') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 102), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'attendance') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 105), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'settings') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 25), array('parent' => $c_menu->menu_id));
            }
            if ($c_menu->label == 'knowledgebase') {
                update('tbl_menu', array('companies_id' => $companies_id, 'parent' => 141), array('parent' => $c_menu->menu_id));
            }
        }

        return true;
    }

    function create_dashboard($companies_id = null)
    {
        $all_menu = $this->db->where('companies_id', null)->get('tbl_dashboard')->result();
        $menu = array();
        foreach ($all_menu as $menus) {
            $menus->id = null;
            $menus->companies_id = $companies_id;
            array_push($menu, $menus);
        }
        $this->db->insert_batch('tbl_dashboard', $menu);
        return true;
    }

    function create_client_menu($companies_id = null)
    {
        $all_client_menu = $this->db->where('companies_id', null)->get('tbl_client_menu')->result();
        $menu = array();
        foreach ($all_client_menu as $client_menus) {
            $client_menus->menu_id = null;
            $client_menus->companies_id = $companies_id;
            array_push($menu, $client_menus);
        }
        $this->db->insert_batch('tbl_client_menu', $menu);
        return true;
    }

    function create_email_template($companies_id = null)
    {
        $all_email_templates = $this->db->where('companies_id', null)->get('tbl_email_templates')->result();
        $templates = array();
        foreach ($all_email_templates as $email_templates) {
            $email_templates->email_templates_id = null;
            $email_templates->companies_id = $companies_id;
            array_push($templates, $email_templates);
        }
        $this->db->insert_batch('tbl_email_templates', $templates);
        return true;
    }

    function send_token_activation_email($email, $data)
    {
        $default_url = preg_replace('#^https?://#', '', rtrim(config_item('default_url'), '/'));
        $sub_domain = (isset($_SERVER['HTTPS']) ? "https://" : "http://");
        $sub_domain .= $data['domain'] . '.';
        $sub_domain .= $default_url;

        $email_template = $this->job_circular_model->check_by(array('email_group' => 'token_activate_account'), 'tbl_email_templates');

        $activatation_token = str_replace("{ACTIVATION_TOKEN}", $data['activation_tocken'], $email_template->template_body);
        $activate_url = str_replace("{ACTIVATE_URL}", $sub_domain, $activatation_token);
        $activate_period = str_replace("{ACTIVATION_PERIOD}", $data['activation_period'], $activate_url);
        $message = str_replace("{SITE_NAME}", config_item('company_name'), $activate_period);

        $params['recipient'] = $email;
        $params['subject'] = '[ ' . config_item('company_name') . ' ]' . ' ' . $email_template->subject;
        $params['message'] = $message;
        $params['resourceed_file'] = '';
        $this->job_circular_model->send_email($params);
    }

    function send_activation_email($email, $data)
    {
        $email_template = $this->job_circular_model->check_by(array('email_group' => 'activate_account'), 'tbl_email_templates');

        $activate_url = str_replace("{ACTIVATE_URL}", site_url('/login/activate/' . $data['user_id'] . '/' . $data['new_email_key']), $email_template->template_body);
        $activate_period = str_replace("{ACTIVATION_PERIOD}", $data['activation_period'], $activate_url);
        $username = str_replace("{USERNAME}", $data['username'], $activate_period);
        $user_email = str_replace("{EMAIL}", $data['email'], $username);
        $user_password = str_replace("{PASSWORD}", $data['password'], $user_email);
        $message = str_replace("{SITE_NAME}", config_item('company_name'), $user_password);

        $params['recipient'] = $email;
        $params['subject'] = '[ ' . config_item('company_name') . ' ]' . ' ' . $email_template->subject;
        $params['message'] = $message;
        $params['resourceed_file'] = '';

        $this->job_circular_model->send_email($params);
    }

    public function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }

    public function circular_details($id)
    {
        $data['title'] = lang('view_circular_details');

        //get all training information
        $data['circular_details'] = $this->db->where('job_circular_id', $id)->get('tbl_job_circular')->row();

        $data['subview'] = $this->load->view('frontend/circular_details', $data, TRUE);
        $this->load->view('frontend/_layout_main', $data);
    }

    public function apply_jobs($id)
    {
        $data['title'] = lang('view_circular_details');

        //get all training information
        $data['circular_info'] = $this->db->where('job_circular_id', $id)->get('tbl_job_circular')->row();

        $data['subview'] = $this->load->view('frontend/apply_jobs', $data, false);
        $this->load->view('admin/_layout_modal_lg', $data);
    }

    public function save_job_application($id)
    {
        $data = $this->job_circular_model->array_from_post(array('name', 'email', 'mobile', 'cover_letter'));
        // Resume File upload
        if (!empty($_FILES['resume']['name'])) {
            $val = $this->job_circular_model->uploadFile('resume');
            $val == TRUE || redirect('frontend/circular_details/' . $id);
            $data['resume'] = $val['path'];
        }
        $data['job_circular_id'] = $id;

        $this->job_circular_model->_table_name = 'tbl_job_appliactions';
        $this->job_circular_model->_primary_key = 'job_appliactions_id';
        $job_appliactions_id = $this->job_circular_model->save($data);

        $circular_info = $this->db->where('job_circular_id', $id)->get('tbl_job_circular')->row();

        $job_circular_email = config_item('job_circular_email');
        if (!empty($circular_info->designations_id)) {
            $design_info = $this->db->where('designations_id', $circular_info->designations_id)->get('tbl_designations')->row();
            $dept_head_id = $this->db->where('departments_id', $design_info->departments_id)->get('tbl_departments')->row();
            $user_info = $this->job_circular_model->check_by(array('user_id' => $dept_head_id->department_head_id), 'tbl_users');
            if (!empty($user_info)) {
                if (!empty($job_circular_email) && $job_circular_email == 1) {
                    $email_template = $this->job_circular_model->check_by(array('email_group' => 'new_job_application_email'), 'tbl_email_templates');

                    $message = $email_template->template_body;
                    $subject = $email_template->subject;
                    $name = str_replace("{NAME}", $data['name'], $message);
                    $job_title = str_replace("{JOB_TITLE}", $circular_info->job_title, $name);
                    $email = str_replace("{EMAIL}", $data['email'], $job_title);
                    $mobile = str_replace("{MOBILE}", $data['mobile'], $email);
                    $cover_letter = str_replace("{COVER_LETTER}", $data['cover_letter'], $mobile);
                    $Link = str_replace("{LINK}", base_url() . 'admin/job_circular/view_jobs_application/' . $job_appliactions_id, $cover_letter);
                    $message = str_replace("{SITE_NAME}", config_item('company_name'), $Link);
                    $data['message'] = $message;
                    $message = $this->load->view('email_template', $data, TRUE);

                    $params['subject'] = $subject;
                    $params['message'] = $message;
                    $params['resourceed_file'] = '';
                    $params['recipient'] = $user_info->email;
                    $this->job_circular_model->send_email($params);
                }
                $notifyUser = array($user_info->user_id);
            }
            if (!empty($notifyUser)) {
                foreach ($notifyUser as $v_user) {
                    add_notification(array(
                        'to_user_id' => $v_user,
                        'description' => 'not_new_job_application',
                        'icon' => 'globe',
                        'link' => 'admin/job_circular/view_jobs_application/' . $job_appliactions_id,
                        'value' => lang('by') . ' ' . $data['name'],
                    ));
                }
            }
            if (!empty($notifyUser)) {
                show_notification($notifyUser);
            }
        }
        // messages for user
        $type = "success";
        $message = lang('job_application_submitted');
        set_message($type, $message);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function jobs_posted_pdf($id)
    {
        $data['job_posted'] = $this->db->where('job_circular_id', $id)->get('tbl_job_circular')->row();

        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/job_circular/jobs_posted_pdf', $data, true);
        pdf_create($view_file, lang('jobs_posted') . '- ' . $data['job_posted']->job_title);
    }

    public function view_invoice($id)
    {
        $data['title'] = lang('invoice_details');
        $id = url_decode($id);
        $data['invoice_info'] = $this->invoice_model->check_by(array('invoices_id' => $id), 'tbl_invoices');
        if (!empty($data['invoice_info'])) {
            $data['client_info'] = $this->invoice_model->check_by(array('client_id' => $data['invoice_info']->client_id), 'tbl_client');

            $lang = $this->invoice_model->all_files();
            foreach ($lang as $file => $altpath) {
                $shortfile = str_replace("_lang.php", "", $file);
                //CI will record your lang file is loaded, unset it and then you will able to load another
                //unset the lang file to allow the loading of another file
                if (isset($this->lang->is_loaded)) {
                    $loaded = sizeof($this->lang->is_loaded);
                    if ($loaded < 3) {
                        for ($i = 3; $i <= $loaded; $i++) {
                            unset($this->lang->is_loaded[$i]);
                        }
                    } else {
                        for ($i = 0; $i <= $loaded; $i++) {
                            unset($this->lang->is_loaded[$i]);
                        }
                    }
                }
                if (!empty($data['client_info']->language)) {
                    $language = $data['client_info']->language;
                } else {
                    $language = 'english';
                }
                $data['language_info'] = $this->lang->load($shortfile, $language, TRUE, TRUE, $altpath);
            }
        } else {
            set_message('error', 'No data Found');
            redirect('frontend/');
        }

        $data['subview'] = $this->load->view('frontend/invoice/invoice_details', $data, TRUE);
        $this->load->view('frontend/_layout_main', $data);
    }

    public function estimates($id)
    {
        $data['title'] = lang('invoice_details');
        $id = url_decode($id);
        $data['estimates_info'] = $this->estimates_model->check_by(array('estimates_id' => $id), 'tbl_estimates');
        $data['client_info'] = $this->estimates_model->check_by(array('client_id' => $data['estimates_info']->client_id), 'tbl_client');
        if (empty($data['estimates_info'])) {
            set_message('error', 'No data Found');
            redirect('frontend/');
        }
        $lang = $this->invoice_model->all_files();
        foreach ($lang as $file => $altpath) {
            $shortfile = str_replace("_lang.php", "", $file);
            //CI will record your lang file is loaded, unset it and then you will able to load another
            //unset the lang file to allow the loading of another file
            if (isset($this->lang->is_loaded)) {
                $loaded = sizeof($this->lang->is_loaded);
                if ($loaded < 3) {
                    for ($i = 3; $i <= $loaded; $i++) {
                        unset($this->lang->is_loaded[$i]);
                    }
                } else {
                    for ($i = 0; $i <= $loaded; $i++) {
                        unset($this->lang->is_loaded[$i]);
                    }
                }
            }
            if (!empty($data['client_info']->language)) {
                $language = $data['client_info']->language;
            } else {
                $language = 'english';
            }
            $data['language_info'] = $this->lang->load($shortfile, $language, TRUE, TRUE, $altpath);
        }

        $data['subview'] = $this->load->view('frontend/estimate/estimates_details', $data, TRUE);
        $this->load->view('frontend/_layout_main', $data);
    }

    public function proposals($id)
    {
        $data['title'] = lang('invoice_details');
        $id = url_decode($id);
        $data['proposals_info'] = $this->proposal_model->check_by(array('proposals_id' => $id), 'tbl_proposals');
        if (empty($data['proposals_info'])) {
            set_message('error', 'No data Found');
            redirect('frontend/');
        }
        $data['subview'] = $this->load->view('frontend/proposals/proposals_details', $data, TRUE);
        $this->load->view('frontend/_layout_main', $data);
    }

    public function pdf_invoice($id)
    {
        $data['title'] = "Invoice PDF"; //Page title
        // get all invoice info by id
        $data['invoice_info'] = $this->invoice_model->check_by(array('invoices_id' => $id), 'tbl_invoices');
        $this->load->helper('dompdf');
        $viewfile = $this->load->view('frontend/invoice/invoice_pdf', $data, TRUE);
        pdf_create($viewfile, 'Invoice  # ' . $data['invoice_info']->reference_no);
    }

    public function pdf_estimates($id)
    {
        $data['estimates_info'] = $this->invoice_model->check_by(array('estimates_id' => $id), 'tbl_estimates');
        $data['title'] = "Estimates PDF"; //Page title
        $this->load->helper('dompdf');
        $viewfile = $this->load->view('frontend/estimate/estimates_pdf', $data, TRUE);
        pdf_create($viewfile, lang('estimate') . '# ' . $data['estimates_info']->reference_no);
    }

    public function pdf_proposals($id)
    {
        $data['proposals_info'] = $this->proposal_model->check_by(array('proposals_id' => $id), 'tbl_proposals');
        $data['title'] = lang('proposal') . "PDF"; //Page title
        $this->load->helper('dompdf');
        $viewfile = $this->load->view('frontend/proposals/proposals_pdf', $data, TRUE);
        pdf_create($viewfile, lang('proposal') . '# ' . $data['proposals_info']->reference_no);
    }

    public function knowledgebase()
    {
        $data['title'] = lang('knowledgebase');
        $data['all_kb_category'] = get_result('tbl_kb_category', array('type' => 'kb', 'status' => 1));
        $data['subview'] = $this->load->view('frontend/kb/kb_list', $data, TRUE);
        $this->load->view('frontend/_layout_main', $data); //page load
    }

    public function kb_details($type, $id)
    {
        $data['title'] = lang('articles') . ' ' . lang('details');
        $data['all_kb_category'] = get_result('tbl_kb_category', array('type' => 'kb', 'status' => 1));
        if ($type == 'articles') {
            $this->kb_model->increase_total_view($id);
            $data['articles_info'] = $this->kb_model->get_kb_info('articles', $id);
        } else {
            $data['articles_by_category'] = $this->kb_model->get_kb_info('category', $id);
        }
        $data['subview'] = $this->load->view('frontend/kb/articles_details', $data, TRUE);
        $this->load->view('frontend/_layout_main', $data); //page load
    }

    public function kb_download($id, $fileName)
    {
        if (!empty($fileName)) {
            $this->load->helper('download');
            if ($id) {
                $down_data = file_get_contents('uploads/' . $fileName); // Read the file's contents
                force_download($fileName, $down_data);
            } else {
                $type = "error";
                $message = 'Operation Fieled !';
                set_message($type, $message);
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }

    public function requestQuote()
    {
        $data = $this->job_circular_model->array_from_post(array('name', 'email', 'phone', 'city', 'country', 'message'));
        if (!empty($data['name'])) {
            $this->job_circular_model->_table_name = 'tbl_request_quote';
            $this->job_circular_model->_primary_key = 'id';
            $this->job_circular_model->save_data($data);

            $notifiedUsers = get_result('tbl_users', array('super_admin' => 'Yes', 'activated' => 1));
            if (!empty($notifiedUsers)) {
                foreach ($notifiedUsers as $users) {
                    add_notification(array(
                        'to_user_id' => $users->user_id,
                        'from_user_id' => true,
                        'description' => 'not_new_quote_request',
                        'link' => '#',
                        'value' => lang('name') . ' ' . $data['name'],
                    ));
                    $params['recipient'] = $users->email;
                    $params['subject'] = '[ New Quotation request from frontend ]';
                    $params['message'] = 'Hello,<br/>Here is new New Quotation request from frontend <br/> name:' . $data['name'] . '<br/>email:' . $data['email'] . '<br/>phone:' . $data['phone'] . '<br/><br/><br/><br/>message:' . $data['message'];
                    $params['resourceed_file'] = '';
                    $this->job_circular_model->send_email($params);
                }
                show_notification($notifiedUsers);
            }


            $type = "success";
            $message = lang('thank_you_for_your_interest_we_will_contact_you_soon');
            set_message($type, $message);
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    function get_page_content()
    {
        $data['control'] = $this->input->post('control');
        $data['title'] = $this->input->post('title');

        if ($data['control'] == 'team') {
            echo $this->load->view('frontend/component/team', $data, TRUE);
            exit;
        } elseif ($data['control'] == 'partners') {
            echo $this->load->view('frontend/component/team', $data, TRUE);
            exit;
        } else {
            $data['content'] = config_item($data['control']);
            echo $this->load->view('frontend/component/modal_page', $data, TRUE);
            exit;
        }
    }

    function choosePlan_()
    {
        $data['packege_id'] = $this->input->post('pricing_id', true);
        $data['interval_type'] = $this->input->post('interval_type', true);

        $data['currency_type'] = $this->input->post('currency_type', true);

        $data['c_pricing_info'] = $this->get_currencywise_price(true, $data['currency_type']);

        if (empty($data['packege_id'])) {
            $data['packege_id'] = $data['c_pricing_info'][0]->frontend_pricing_id;
        }
        $data['title'] = lang('sign-up');;
        $data['breadcrumb'] = lang('sign-up');
        $data['plan_info'] = get_row('tbl_frontend_pricing', array('id' => $data['packege_id']));
        // get all countries
        $this->invoice_model->_table_name = "tbl_countries"; //table name
        $this->invoice_model->_order_by = "id";
        $data['countries'] = $this->invoice_model->get();

        $data['subview'] = $this->load->view('frontend/choosePlan', $data, TRUE);

        echo $data['subview'];
        exit;
    }


    function contact()
    {
        $data['name'] = $this->input->post('name', true);
        $data['email'] = $this->input->post('email', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['subject'] = 'You Have a Pre-Sell Query: ' . $this->input->post('subject', true);
        $data['message'] = $this->input->post('message', true);

        $this->load->library('email');

        $this->email->from('admin@' . base_url(), 'Site Title');
        $this->email->to(config_item('company_email'));

        $this->email->subject($data['subject']);
        $this->email->message($data['message']);

        $this->email->send();

        $type = "success";
        $message = 'Your message sent. Thanks for contacting. We will Contact you Soon.';

        $Response = array('status' => $type, 'message' => $message);
        echo json_encode($Response);
        exit();
    }


    function subscribe()
    {
        $sbdata['email'] = $this->input->post('email');
        $sbdata['status'] = 1;
        $sbdata['ip'] = $this->input->ip_address();
        $sbdata['user_agent'] = $this->returnUserAgent();

        $this->job_circular_model->_table_name = 'tbl_subscribers';
        $this->job_circular_model->_primary_key = 'subscribers_id';
        $this->job_circular_model->save_data($sbdata);


        $type = "Success";
        $message = 'Subscribed Successfully.';

        $Response = array('status' => $type, 'message' => $message);
        echo json_encode($Response);

        exit;
    }


}
