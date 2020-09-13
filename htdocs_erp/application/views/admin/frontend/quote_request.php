<div class="panel panel-custom" style="border: none;" data-collapsed="0">
    <div class="panel-heading">
        <div class="panel-title">
            <?= lang('all') . ' ' . lang('quote_request') ?>
        </div>
    </div>
    <div class="table-responsive panel-body">
        <table class="table table-striped" id="DataTables">
            <thead>
            <tr>
                <th><?= lang('name') ?></th>
                <th><?= lang('email') ?></th>
                <th><?= lang('phone') ?></th>
                <th><?= lang('city') ?></th>
                <th><?= lang('country') ?></th>
                <th><?= lang('message') ?></th>
                <th class="col-options no-sort"><?= lang('action') ?></th>
            </tr>
            </thead>
            <tbody id="pricing">
            <?php
            $all_quote_request = get_order_by('tbl_request_quote', null, 'id');
            if (!empty($all_quote_request)) {
                foreach ($all_quote_request as $quote_request) {
                    ?>
                    <tr class="pricing" id="table_pricing_<?= $quote_request->id ?>">
                        <td class=""><?= $quote_request->name ?></td>
                        <td><?= $quote_request->email ?></td>
                        <td><?= $quote_request->phone ?></td>
                        <td><?= $quote_request->city ?></td>
                        <td><?= $quote_request->country ?></td>
                        <td><?= $quote_request->message ?></td>
                        <td>
                            <?php echo ajax_anchor(base_url("admin/frontend/delete/tbl_request_quote/$quote_request->id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_pricing_" . $quote_request->id)); ?>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
