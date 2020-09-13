<?php include_once 'asset/admin-ajax.php'; ?>
<?php echo message_box('success'); ?>
<?php echo message_box('error');
$created = can_action('81', 'created');
$edited = can_action('81', 'edited');
$deleted = can_action('81', 'deleted');
if (!empty($created) || !empty($edited)){
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs" style="margin-top: 1px">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs">
            <li class="<?= $active == 1 ? 'active' : '' ?>"><a href="#task_list"
                                                               data-toggle="tab"><?= lang('all') . ' ' . lang('stock') ?></a>
            </li>
            <li class="<?= $active == 2 ? 'active' : '' ?>"><a href="#assign_task"
                                                               data-toggle="tab"><?= lang('new') . ' ' . lang('stock') ?></a>
            </li>
        </ul>
        <div class="tab-content bg-white">
            <div class="tab-pane <?= $active == 1 ? 'active' : '' ?>" id="task_list" style="position: relative;">
                <?php } else { ?>
                <div class="panel panel-custom">
                    <header class="panel-heading ">
                        <div class="panel-title"><strong><?= lang('all') . ' ' . lang('stock') ?></strong></div>
                    </header>
                    <?php } ?>
                    <div class="row">
                        <?php $key = 0;
                        $category = lang('undefined_category');
                        $companies_id = null;
                        if (!empty($all_stock_info)) : ?>
                            <?php foreach ($all_stock_info as $category_id => $v_stock_info):
                                if (!empty($category_id)) {
                                    $category_info = get_row('tbl_stock_category', array('stock_category_id' => $category_id));
                                    if (!empty($category_info)) {
                                        $category = $category_info->stock_category;
                                        $companies_id = $category_info->companies_id;
                                    }
                                }
                                ?>
                                <div class="col-sm-6">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php if (!empty($v_stock_info)): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                               href="#<?php echo $key ?>" aria-expanded="false"
                                               aria-controls="collapseOne">
                                                <i class="fa fa-plus"> </i> <?php echo $category; ?>
                                            </a>
                                        </h4>
                                        <?php
                                        super_admin_invoice($companies_id);
                                        ?>
                                    </div>
                                    <div id="<?php echo $key ?>" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingOne">
                                        <?php foreach ($v_stock_info as $sub_category => $v_stock): ?>
                                            <div class="panel-body">
                                                <table class="table table-bordered" style="margin-bottom: 0px;">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="3"
                                                            style="background-color: #E3E5E6;color: #000000 ">
                                                            <strong><?php echo $sub_category; ?></strong></th>
                                                    </tr>
                                                    <tr style="font-size: 13px;color: #000000">
                                                        <th><?= lang('item_name') ?></th>
                                                        <th><?= lang('total_stock') ?></th>
                                                        <?php if (!empty($deleted) || !empty($edited)) { ?>
                                                            <th class="col-sm-2"><?= lang('action') ?></th>
                                                        <?php } ?>
                                                    </tr>
                                                    </thead>
                                                    <tbody style="margin-bottom: 0px;background: #FFFFFF;font-size: 12px;">
                                                    <?php foreach ($v_stock as $stock) : ?>
                                                        <tr>
                                                            <td><?php echo itemsName($stock->saved_items_id); ?></td>
                                                            <td><?php echo $stock->total_stock ?></td>
                                                            <?php if (!empty($deleted) || !empty($edited)) { ?>
                                                                <td>
                                                                    <?php if (!empty($edited)) { ?>
                                                                        <?php echo btn_edit('admin/stock/stock_list/' . $stock->stock_id); ?>
                                                                    <?php }
                                                                    if (!empty($deleted)) { ?>
                                                                        <?php echo btn_delete('admin/stock/delete_stock/' . $stock->stock_id); ?>
                                                                    <?php } ?>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                </div>
                                </div>
                            <?php endif; ?>
                                <?php $key++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!empty($created) || !empty($edited)) {
                if (!empty($stock_info->item_history_id)) {
                    $item_history_id = $stock_info->item_history_id;
                    $companies_id = $stock_info->companies_id;
                } else {
                    $item_history_id = null;
                    $companies_id = null;
                }
                ?>
                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="assign_task" style="position: relative;">
                    <?php echo form_open(base_url('admin/stock/save_stock/' . $item_history_id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>
                    <?php super_admin_form($companies_id, 3, 5) ?>
                    <div class="form-group ">
                        <label class="control-label col-sm-3"><?= lang('stock_category') ?><span
                                    class="required">*</span></label>
                        <div class="col-sm-5">

                            <select name="stock_sub_category_id" style="width: 100%"
                                    class="form-control select_box" onchange="get_item_name_by_id(this.value)">
                                <option value=""><?= lang('select') . ' ' . lang('stock_category') ?></option>
                                <?php if (!empty($all_category_info)): foreach ($all_category_info as $cate_name => $v_category_info) : ?>
                                    <?php if (!empty($v_category_info)):
                                        if (!empty($cate_name)) {
                                            $cate_name = $cate_name;
                                        } else {
                                            $cate_name = lang('undefined_category');
                                        }
                                        ?>
                                        <optgroup label="<?php echo $cate_name; ?>">
                                            <?php foreach ($v_category_info as $sub_category) :
                                                if (!empty($sub_category->stock_sub_category)) {
                                                    ?>
                                                    <option
                                                            value="<?php echo $sub_category->stock_sub_category_id; ?>"
                                                        <?php
                                                        if (!empty($stock_info->stock_sub_category_id)) {
                                                            echo $sub_category->stock_sub_category_id == $stock_info->stock_sub_category_id ? 'selected' : '';
                                                        }
                                                        ?>><?php echo $sub_category->stock_sub_category ?></option>
                                                    <?php
                                                }
                                            endforeach;
                                            ?>
                                        </optgroup>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?= lang('item_name') ?><span
                                    class="required">*</span></label>

                        <div class="col-sm-5">
                            <select required class="form-control" name="saved_items_id" id="item_name">
                                <option value=""><?= lang('select') . ' ' . lang('item_name') ?></option>
                                <?php if (!empty($items_stock_info)): ?>
                                    <?php foreach ($items_stock_info as $v_stock_info): ?>
                                        <option value="<?php echo $v_stock_info->saved_items_id ?>" <?php
                                        if (!empty($stock_info->saved_items_id)) {
                                            echo $v_stock_info->saved_items_id == $stock_info->saved_items_id ? 'selected' : '';
                                        }
                                        ?>><?php echo itemsName($v_stock_info->saved_items_id) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('select[name="companies_id"]').on('change', function () {
                                var companies_id = $(this).val();
                                if (companies_id) {
                                    $.ajax({
                                        url: '<?= base_url('admin/stock/json_get_stock/')?>' + companies_id,
                                        type: "GET",
                                        dataType: "json",
                                        success: function (data) {
//                        $('select[name="client_id"]').empty();
                                            $('select[name="stock_sub_category_id"]').empty();
                                            $.each(data, function (key, value) {
                                                $('select[name="stock_sub_category_id"]').append('<optgroup label="' + key + '">');
                                                $.each(value, function (keys, values) {
                                                    $('select[name="stock_sub_category_id"]').append('<option value="' + values.stock_sub_category_id + '">' + values.stock_sub_category + '</option>');
                                                });
                                                $('select[name="stock_sub_category_id"]').append('</optgroup>');
                                            });
                                        }
                                    });
                                } else {
//                                    $('select[name="stock_sub_category_id"]').find('option').not(':first').remove();
                                    $('select[name="stock_sub_category_id"]').empty();
                                }
                            });
                        });
                    </script>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?= lang('inventory') ?> <span
                                    class="required">*</span></label>

                        <div class="col-sm-5">
                            <input required type="text" data-parsley-type="number" name="inventory" placeholder=""
                                   class="form-control"
                                   value="<?php
                                   if (!empty($stock_info->total_stock)) {
                                       echo $stock_info->total_stock;
                                   }
                                   ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" id="sbtn" class="btn btn-primary"
                                    id="i_submit"><?= lang('save') ?></button>
                        </div>
                    </div>
                    <!-- Hidden input field-->
                    <input type="hidden" name="item_history_id" value="<?php
                    if (!empty($stock_info->item_history_id)) {
                        echo $stock_info->item_history_id;
                    }
                    ?>">
                    <?php echo form_close(); ?>
                </div>
            </div>
            <?php }else{ ?>
        </div>
        <?php } ?>
    </ul>
</div>
