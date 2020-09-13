<div class="panel panel-custom">
    <div class="panel-heading">
        <?= lang('subscriptions') . ' ' . lang('list') ?>
    </div>
    <!-- ************** general *************-->
    <div class="table-responsive">
        <table class="table table-striped da" id="DataTables">
            <thead>
            <tr>
                <th><?= lang('plan') ?></th>
                <th><?= lang('domain') ?></th>
                <th><?= lang('trial_period') ?></th>
                <th><?= lang('currency') ?></th>
                <th><?= lang('frequency') ?></th>
                <th><?= lang('status') ?></th>
                <th><?= lang('date') ?></th>
                <th><?= lang('action') ?></th>
            </tr>
            </thead>
            <tbody id="subscriptions_info">
            <?php
            $all_pricing = get_order_by('tbl_subscriptions');
            if (!empty($all_pricing)) {
                foreach ($all_pricing as $pricing) {
                    if (empty($pricing->currency)) {
                        $currency_code = config_item('default_currency');
                    } else {
                        $currency_code = $pricing->currency;
                    }
                    $currency = $this->account_model->check_by(array('code' => $currency_code), 'tbl_currencies');
                    if ($pricing->status == 'pending') {
                        $label = 'primary';
                    } else if ($pricing->status == 'running') {
                        $label = 'success';
                    } else if ($pricing->status == 'expired') {
                        $label = 'warning';
                    } else {
                        $label = 'danger';
                    }
                    ?>
                    <tr class="pricing" id="table_pricing_<?= $pricing->subscriptions_id ?>">
                        <td>
                            <a data-toggle='modal' data-target='#myModal'
                               href="<?= base_url('admin/global_controller/package_details/' . $pricing->pricing_id) ?>"
                               class="text-center"><?= $this->db->where(array('id' => $pricing->pricing_id))->get('tbl_frontend_pricing')->row()->name ?></a>
                        </td>
                        <td><?= $pricing->domain ?></td>
                        <td><?= $pricing->trial_period . ' ' . lang('days') ?></td>
                        <td><?= $currency->name . '(' . $currency->symbol . ')' ?></td>
                        <td><?= lang($pricing->frequency) ?></td>
                        <td><span class="label label-<?= $label ?>"> <?= lang($pricing->status) ?></span></td>
                        <td><?= strftime(config_item('date_format'), strtotime($pricing->created_date)) ?></td>
                        <td>
                            <?php if ($pricing->status == 'pending') { ?>
                                <a data-toggle="tooltip" data-placement="top" class="btn btn-success btn-xs"
                                   title="<?= lang('send_activation_token') ?>"
                                   href="<?= base_url('admin/frontend/send_activation_token/' . $pricing->subscriptions_id) ?>" ><span class="fa fa-envelope-o"></span></a>
                            <?php } ?>
                            <?php echo ajax_anchor(base_url("admin/frontend/delete_subscriptions/$pricing->subscriptions_id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_pricing_" . $pricing->subscriptions_id)); ?>
                            <?= btn_view(base_url('admin/frontend/subscriptions_details/' . $pricing->subscriptions_id)) ?>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
