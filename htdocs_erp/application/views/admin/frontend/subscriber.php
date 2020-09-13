<div class="panel panel-custom">
    <div class="panel-heading">
        <?= lang('subscriptions') . ' ' . lang('list') ?>
    </div>
    <!-- ************** general *************-->
    <div class="table-responsive">
        <table class="table table-striped da" id="DataTables">
            <thead>
            <tr>
                <th><?= lang('email') ?></th>
                <th><?= lang('status') ?></th>
                <th><?= lang('ip_address') ?></th>
                <th><?= lang('user_agent') ?></th>
                <th><?= lang('created_at') ?></th>
                <th><?= lang('action') ?></th>
            </tr>
            </thead>
            <tbody id="pricing">
            <?php
            $all_subscriber = get_order_by('tbl_subscribers');
            if (!empty($all_subscriber)) {
                foreach ($all_subscriber as $subscriber) {
                    if ($subscriber->status == '1') {
                        $label = 'success';
                        $status = lang('subscribed');
                        $type = 0;
                        $type_label = 'warning';
                        $type_text = lang('un_subscribed');
                    } else {
                        $label = 'warning';
                        $status = lang('un_subscribed');
                        $type = 1;
                        $type_label = 'success';
                        $type_text = lang('subscribed');
                    }
                    ?>
                    <tr class="pricing" id="table_pricing_<?= $subscriber->subscribers_id ?>">
                        <td><?= $subscriber->email ?></td>
                        <td><span class="label label-<?= $label ?>"> <?= $status ?></span></td>
                        <td><?= $subscriber->ip ?></td>
                        <td><?= $subscriber->user_agent ?></td>
                        <td><?= display_datetime($subscriber->created_at) ?></td>
                        <td>
                            <a data-toggle="tooltip" data-placement="top"
                               class="btn btn-<?= $type_label ?> btn-xs"
                               title="Click to <?= $type_text ?> "
                               href="<?php echo base_url('admin/frontend/subscriber_action/' . $type . '/' . $subscriber->subscribers_id) ?>"><span
                                    class="fa fa-<?= ($subscriber->status == 0) ? 'check' : 'times' ?>"></span></a>
                            <?php echo ajax_anchor(base_url("admin/frontend/delete/tbl_subscribers/$subscriber->subscribers_id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_pricing_" . $subscriber->subscribers_id)); ?>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
