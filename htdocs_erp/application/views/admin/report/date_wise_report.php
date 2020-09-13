<form role="form" enctype="multipart/form-data" id="form"
      action="<?php echo base_url(); ?>admin/report/date_wise_report" method="post" class="form-horizontal  ">

    <div class="form-group">
        <label class="col-lg-3 control-label"><?= lang('from_date') ?></label>
        <div class="col-lg-3">
            <div class="input-group">
                <input type="text" name="start_date" class="form-control datepicker" value="<?php
                if (!empty($start_date)) {
                    echo $start_date;
                } else {
                    echo date('Y-m-d H:i');
                }
                ?>" data-date-format="<?= config_item('date_picker_format'); ?>">
                <div class="input-group-addon">
                    <a href="#"><i class="fa fa-calendar"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><?= lang('to_date') ?></label>
        <div class="col-lg-3">
            <div class="input-group">
                <input type="text" name="end_date" class="form-control datepicker" value="<?php
                if (!empty($end_date)) {
                    echo $end_date;
                } else {
                    echo date('Y-m-d H:i');
                }
                ?>" data-date-format="<?= config_item('date_picker_format'); ?>">
                <div class="input-group-addon">
                    <a href="#"><i class="fa fa-calendar"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"></label>
        <div class="col-lg-2">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> <?= lang('submit') ?>
            </button>
        </div>
    </div>
</form>
<?php if (!empty($report)): ?>
    <div id="printReport">
        <div class="show_print">
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
        </div>
        <div class="panel panel-custom">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <div class="panel-title">
                    <strong><?= lang('transactions') . ' ' . lang('report_from') ?> :<?= display_datetime($start_date); ?></strong>
                    <strong><?= lang('transactions') . ' ' . lang('report_to') ?> :<?= display_datetime($end_date); ?></strong>

                    <?php
                    if (!empty($all_transaction_info)):
                        ?>
                        <div class="pull-right hidden-print">
                            <a href="<?php echo base_url() ?>admin/report/date_wise_report_pdf/<?= date('Y-m-dH:i', strtotime($start_date)) . '/' . date('Y-m-dH:i', strtotime($end_date)) ?>"
                               class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top"
                               title="<?= lang('pdf') ?>"><?= lang('pdf') ?></a>
                            <a onclick="print_sales_report('printReport')" class="btn btn-xs btn-danger"
                               data-toggle="tooltip" data-placement="top"
                               title="<?= lang('print') ?>"><?= lang('print') ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped DataTables " id="Export_DataTables" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th style="width: 15%"><?= lang('date') ?></th>
                        <th style="width: 15%"><?= lang('account') ?></th>
                        <th><?= lang('type') ?></th>
                        <th><?= lang('notes') ?></th>
                        <th><?= lang('amount') ?></th>
                        <th><?= lang('credit') ?></th>
                        <th><?= lang('debit') ?></th>
                        <th><?= lang('balance') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total_amount = 0;
                    $total_debit = 0;
                    $total_credit = 0;
                    $total_balance = 0;
                    $curency = $this->report_model->check_by(array('code' => config_item('default_currency')), 'tbl_currencies');
                    if (!empty($all_transaction_info)): foreach ($all_transaction_info as $v_transaction) :
                        $account_info = $this->report_model->check_by(array('account_id' => $v_transaction->account_id), 'tbl_accounts');
                        ?>
                        <tr class="custom-tr custom-font-print">
                            <td><?= display_datetime($v_transaction->date); ?></td>
                            <td class="vertical-td"><?= $account_info->account_name ?></td>
                            <td class="vertical-td"><?= lang($v_transaction->type) ?> </td>
                            <td class="vertical-td"><?= $v_transaction->notes ?></td>
                            <td><?= display_money($v_transaction->amount, $curency->symbol) ?></td>
                            <td><?= display_money($v_transaction->credit, $curency->symbol) ?></td>
                            <td><?= display_money($v_transaction->debit, $curency->symbol) ?></td>
                            <td><?= display_money($v_transaction->total_balance, $curency->symbol) ?></td>
                        </tr>
                        <?php
                        $total_amount += $v_transaction->amount;
                        $total_debit += $v_transaction->debit;
                        $total_credit += $v_transaction->credit;
                        $total_balance += $v_transaction->total_balance;
                        ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                    <tfoot>
                    <tr class="custom-color-with-td">
                        <td style="text-align: right;" colspan="4"><strong><?= lang('total') ?>:</strong></td>
                        <td><strong><?= display_money($total_amount, $curency->symbol) ?></strong></td>
                        <td><strong><?= display_money($total_credit, $curency->symbol) ?></strong></td>
                        <td><strong><?= display_money($total_debit, $curency->symbol) ?></strong></td>
                        <td><strong><?= display_money($total_credit - $total_debit, $curency->symbol) ?></strong>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        function print_sales_report(printReport) {
            var printContents = document.getElementById(printReport).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

    </script>

<?php endif; ?>
