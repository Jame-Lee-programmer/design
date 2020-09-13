<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php
    $direction = $this->session->userdata('direction');
    if (!empty($direction) && $direction == 'rtl') {
        $RTL = 'on';
    } else {
        $RTL = config_item('RTL');
    }
    ?>
    <style>

        .payment_history td {
            padding: 5px 0px 0px 5px;
        <?php if(!empty($RTL)){?> text-align: right;<?php }else{?>text-align: left;<?php }?>
            border: 1px solid black;
            font-size: 13px;
        }
    </style>
</head>

<body style="width: 100%;">
<div style="width: 100%; border-bottom: 2px solid black;">
    <table style="width: 100%; vertical-align: middle;">
        <tr>
            <td style="width: 50px; border: 0px;">
                <img style="width: 50px;height: 50px;margin-bottom: 5px;"
                     src="<?= base_url() . config_item('company_logo') ?>" alt="" class="img-circle"/>
            </td>

            <td style="border: 0px;">
                <p style="margin-left: 10px; font: 14px lighter;"><?= config_item('company_name') ?></p>
            </td>
        </tr>
    </table>
</div>
<br/>
<br/>
<div style="padding: 5px 0; width: 100%;">
    <div>
        <table style="width: 100%; border-radius: 3px;">
            <tr>
                <td style="width: 150px;">
                    <table style="border: 1px solid grey;">
                        <tr>
                            <td style="background-color: lightgray; border-radius: 2px;">
                                <?php if ($emp_salary_info->avatar): ?>
                                    <img src="<?php echo base_url() . $emp_salary_info->avatar; ?>"
                                         style="width: 132px; height: 138px; border-radius: 3px;">
                                <?php else: ?>
                                    <img alt="Employee_Image">
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table style="width: 300px; margin-left: 10px; margin-bottom: 10px; font-size: 13px;">
                        <tr>
                            <td colspan="2">
                                <h2><?php echo "$emp_salary_info->fullname" ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td><strong><?= lang('departments') ?></strong> :</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo "$emp_salary_info->deptname"; ?></td>
                        </tr>
                        <tr>
                            <td><strong><?= lang('designation') ?></strong> :</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo "$emp_salary_info->designations"; ?></td>
                        </tr>
                        <tr>
                            <td><strong><?= lang('joining_date') ?></strong> :</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?= display_datetime($emp_salary_info->joining_date) ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
<div style="width: 100%; margin-top: 55px;">
    <div>
        <div style="width: 100%; background: #E3E3E3;padding: 1px 0px 1px 10px; color: black; vertical-align: middle; ">
            <p style="margin-left: 10px; font-size: 15px; font-weight: lighter;">
                <strong><?= lang('salary_details') ?></strong></p>
        </div>
        <br/>
        <table style="width: 100%;padding: 10px 0;">
            <tr class="payment_history">
                <th><?= lang('month') ?></th>
                <th><?= lang('date') ?></th>
                <th><?= lang('gross_salary') ?></th>
                <th><?= lang('total_deduction') ?></th>
                <th><?= lang('net_salary') ?></th>
                <th><?= lang('fine_deduction') ?></th>
                <th><?= lang('amount') ?></th>
            </tr>
            <?php
            if (!empty($payment_history)): foreach ($payment_history as $v_payment_history) :
                ?>
                <tr class="payment_history">
                    <td><?php echo date('F-Y', strtotime($v_payment_history->payment_month)); ?></td>
                    <td><?php echo date('d-M-y', strtotime($v_payment_history->paid_date)); ?></td>
                    <td><?php echo display_money($total_paid_amount[$index], $currency->symbol); ?></td>
                    <td><?php echo display_money($total_deduction[$index], $currency->symbol); ?></td>
                    <td><?php echo display_money($net_salary = $gross - $deduction, $currency->symbol); ?></td>
                    <td><?php
                        if (!empty($v_payment_history->fine_deduction)) {
                            echo display_money($fine_deduction = $v_payment_history->fine_deduction, $currency->symbol);
                        } else {
                            $fine_deduction = 0;
                        }
                        ?></td>
                    <td><?php echo display_money($net_salary - $fine_deduction, $currency->symbol); ?></td>
                </tr>
                <?php
            endforeach;
                ?>
            <?php else : ?>
                <tr>
                    <td colspan="9">
                        <strong><?= lang('no_data_to_display') ?></strong>
                    </td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>

</body>
</html>