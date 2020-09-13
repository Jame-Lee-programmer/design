<?= message_box('success'); ?>
<?= message_box('error');
$created = can_action('39', 'created');
$edited = can_action('39', 'edited');
$deleted = can_action('39', 'deleted');
if (!empty($created) || !empty($edited)){
?>
<div class="nav-tabs-custom">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs">
        <li class="<?= $active == 1 ? 'active' : ''; ?>"><a href="#manage"
                                                            data-toggle="tab"><?= lang('all_items') ?></a></li>
        <li class="<?= $active == 2 ? 'active' : ''; ?>"><a href="#create"
                                                            data-toggle="tab"><?= lang('new_items') ?></a></li>

        <li class="<?= $active == 3 ? 'active' : ''; ?>"><a href="#group"
                                                            data-toggle="tab"><?= lang('group') . ' ' . lang('list') ?></a>
        </li>
    </ul>
    <div class="tab-content bg-white">
        <!-- ************** general *************-->
        <div class="tab-pane <?= $active == 1 ? 'active' : ''; ?>" id="manage">
            <?php } else { ?>
            <div class="panel panel-custom">
                <header class="panel-heading ">
                    <div class="panel-title"><strong><?= lang('all_items') ?></strong></div>
                </header>
                <?php } ?>
                <div class="table-responsive">
                    <table class="table table-striped DataTables " id="DataTables" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <?php super_admin_opt_th() ?>
                            <th><?= lang('image') ?></th>
                            <th><?= lang('name') ?></th>
                            <?php
                            $invoice_view = config_item('invoice_view');
                            if (!empty($invoice_view) && $invoice_view == '2') {
                                ?>
                                <th><?= lang('hsn_code') ?></th>
                            <?php } ?>
                            <th class="col-sm-1"><?= lang('cost_price') ?></th>
                            <th class="col-sm-1"><?= lang('unit_price') ?></th>
                            <th class="col-sm-1"><?= lang('unit') . ' ' . lang('type') ?></th>
                            <th class="col-sm-2"><?= lang('tax') ?></th>
                            <th class="col-sm-1"><?= lang('group') ?></th>
                            <?php if (!empty($edited) || !empty($deleted)) { ?>
                                <th class="col-sm-2"><?= lang('action') ?></th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $all_items = get_result('tbl_saved_items');
                        $currency = $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row();
                        foreach ($all_items as $v_items):
                            $group = $this->db->where('customer_group_id', $v_items->customer_group_id)->get('tbl_customer_group')->row();
                            $item_name = $v_items->item_name ? $v_items->item_name : strip_html_tags($v_items->item_desc);
                            $manufacturer_info = get_row('tbl_manufacturer', array('manufacturer_id' => $v_items->manufacturer_id));
                            ?>
                            <tr id="table_items_<?= $v_items->saved_items_id ?>">
                                <?php super_admin_opt_td($v_items->companies_id) ?>
                                <td class="col-sm-1 custom-img ">
                                    <a data-toggle="modal" data-target="#myModal_lg"
                                       href="<?= base_url('admin/items/items_details/' . $v_items->saved_items_id) ?>">
                                        <img src="<?= product_image($v_items->saved_items_id) ?>"
                                             alt="<?= $v_items->item_name ?>">
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal_lg"
                                       href="<?= base_url('admin/items/items_details/' . $v_items->saved_items_id) ?>">
                                        <strong
                                                class="block"><?= $item_name ?></strong></a>
                                    <span class="black block"><?= lang('code') ?>:<?= $v_items->code ?></span>
                                    <span class="black block"><?= lang('manufacturer') ?>:<?= (!empty($manufacturer_info) ? $manufacturer_info->manufacturer : '-') ?></span>
                                    <hr class="m0 p0">
                                    <span class="black block"><?= lang('available') ?>
                                        : <?= $v_items->quantity ?></span>
                                </td>
                                <?php
                                $invoice_view = config_item('invoice_view');
                                if (!empty($invoice_view) && $invoice_view == '2') {
                                    ?>
                                    <td><?= $v_items->hsn_code ?></td>
                                <?php } ?>
                                <td><?= display_money($v_items->cost_price, $currency->symbol); ?></td>
                                <td><?= display_money($v_items->unit_cost, $currency->symbol); ?></td>
                                <td><?= $v_items->unit_type; ?></td>
                                <td>
                                    <?php
                                    if (!is_numeric($v_items->tax_rates_id)) {
                                        $tax_rates = json_decode($v_items->tax_rates_id);
                                    } else {
                                        $tax_rates = null;
                                    }
                                    if (!empty($tax_rates)) {
                                        foreach ($tax_rates as $key => $tax_id) {
                                            $taxes_info = $this->db->where('tax_rates_id', $tax_id)->get('tbl_tax_rates')->row();
                                            if (!empty($taxes_info)) {
                                                echo $key + 1 . '. ' . $taxes_info->tax_rate_name . '&nbsp;&nbsp; (' . $taxes_info->tax_rate_percent . '% ) <br>';
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                                <td><?= (!empty($group->customer_group) ? $group->customer_group : ' '); ?></td>
                                <?php if (!empty($edited) || !empty($deleted)) { ?>
                                    <td>
                                        <?php if (!empty($edited)) { ?>
                                            <?= btn_edit('admin/items/items_list/' . $v_items->saved_items_id) ?>
                                        <?php }
                                        if (!empty($deleted)) { ?>
                                            <?php echo ajax_anchor(base_url("admin/items/delete_items/" . $v_items->saved_items_id), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_items_" . $v_items->saved_items_id)); ?>
                                        <?php } ?>

                                        <a class="btn btn-inverse btn-xs" target="_blank"
                                           href="<?= base_url('admin/items/single_barcode/' . $v_items->saved_items_id) ?>"><i
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="<?= lang('print') . ' ' . lang('barcode') ?>"
                                                    class="fa fa-barcode"></i></a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php if (!empty($created) || !empty($edited)) {
                if (!empty($items_info)) {
                    $saved_items_id = $items_info->saved_items_id;
                    $companies_id = $items_info->companies_id;
                } else {
                    $saved_items_id = null;
                    $companies_id = null;
                }
                ?>
                <div class="tab-pane <?= $active == 2 ? 'active' : ''; ?>" id="create">
                    <?php echo form_open(base_url('admin/items/saved_items/' . $saved_items_id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>
                    <div class="row">
                        <div class="col-lg-7">
                            <?php super_admin_form($companies_id, 3, 5) ?>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('name') ?> <span
                                            class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($items_info)) {
                                        echo $items_info->item_name;
                                    }
                                    ?>" name="item_name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('code') ?> <span
                                            class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($items_info)) {
                                        echo $items_info->code;
                                    }
                                    ?>" name="code" required="" placeholder="<?= lang('product_code_help') ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('barcode_symbology') ?> <span
                                            class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <?php
                                    if (!empty($items_info->barcode_symbology)) {
                                        $barcode_symbology = $items_info->barcode_symbology;
                                    } else {
                                        $barcode_symbology = null;
                                    }
                                    $bs = array('code25' => 'Code25', 'code39' => 'Code39', 'code128' => 'Code128', 'ean8' => 'EAN8', 'ean13' => 'EAN13', 'upca ' => 'UPC-A', 'upce' => 'UPC-E');
                                    echo form_dropdown('barcode_symbology', $bs, set_value('barcode_symbology', $barcode_symbology), 'class="form-control select2" id="barcode_symbology" required="required" style="width:100%;"');
                                    ?>
                                </div>
                            </div>
                            <?php
                            $invoice_view = config_item('invoice_view');
                            if (!empty($invoice_view) && $invoice_view == '2') {
                                ?>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?= lang('hsn_code') ?></label>
                                    <div class="col-lg-9">
                                        <input type="text" data-parsley-type="number" class="form-control" value="<?php
                                        if (!empty($items_info)) {
                                            echo $items_info->hsn_code;
                                        }
                                        ?>" name="hsn_code" required="">
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label
                                        class="col-lg-3 control-label"><?= lang('select') . ' ' . lang('group') ?> </label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select name="customer_group_id" class="form-control select_box"
                                                style="width: 100%">
                                            <option value=""><?= lang('none') ?></option>
                                            <?php

                                            if (!empty($all_customer_group)) {
                                                foreach ($all_customer_group as $customer_group) {
                                                    ?>
                                                    <option value="<?= $customer_group->customer_group_id ?>" <?php
                                                    if (!empty($items_info) && $items_info->customer_group_id == $customer_group->customer_group_id) {
                                                        echo 'selected';
                                                    }
                                                    ?>><?= $customer_group->customer_group ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div class="input-group-addon"
                                             title="<?= lang('new') . ' ' . lang('item') . ' ' . lang('group') ?>"
                                             data-toggle="tooltip" data-placement="top">
                                            <a data-toggle="modal" data-target="#myModal"
                                               href="<?= base_url() ?>admin/items/items_group"><i
                                                        class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-3 control-label"><?= lang('manufacturer') ?></label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <select class="form-control select_box" style="width: 100%"
                                                name="manufacturer_id">
                                            <option
                                                    value=""><?= lang('select') . ' ' . lang('manufacturer') ?></option>
                                            <?php
                                            $manufacturer_info = by_company('tbl_manufacturer', 'manufacturer_id', null, $companies_id);
                                            if (!empty($manufacturer_info)) {
                                                foreach ($manufacturer_info as $manufacturer) {
                                                    ?>
                                                    <option value="<?= $manufacturer->manufacturer_id ?>"
                                                        <?php
                                                        if (!empty($items_info->manufacturer_id)) {
                                                            echo $items_info->manufacturer_id == $manufacturer->manufacturer_id ? 'selected' : null;
                                                        }
                                                        ?>
                                                    ><?= $manufacturer->manufacturer ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div class="input-group-addon"
                                             title="<?= lang('new') . ' ' . lang('manufacturer') ?>"
                                             data-toggle="tooltip" data-placement="top">
                                            <a data-toggle="modal" data-target="#myModal"
                                               href="<?= base_url() ?>admin/items/manufacturer"><i
                                                        class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('cost_price') ?> <span
                                            class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" data-parsley-type="number" class="form-control" value="<?php
                                    if (!empty($items_info->cost_price)) {
                                        echo $items_info->cost_price;
                                    }
                                    ?>" name="cost_price" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('unit_price') ?> <span
                                            class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" data-parsley-type="number" class="form-control" value="<?php
                                    if (!empty($items_info)) {
                                        echo $items_info->unit_cost;
                                    }
                                    ?>" name="unit_cost" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('unit') . ' ' . lang('type') ?></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($items_info)) {
                                        echo $items_info->unit_type;
                                    }
                                    ?>" placeholder="<?= lang('unit_type_example') ?>"
                                           name="unit_type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('quantity') ?> <span
                                            class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" data-parsley-type="number" class="form-control" value="<?php
                                    if (!empty($items_info)) {
                                        echo $items_info->quantity;
                                    }
                                    ?>" name="quantity" required="">
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('select[name="companies_id"]').on('change', function () {
                                        var companies_id = $(this).val();
                                        if (companies_id) {
                                            $.ajax({
                                                url: '<?= base_url('admin/global_controller/json_by_company/tbl_customer_group/')?>' + companies_id + '/type' + '/items',
                                                type: "GET",
                                                dataType: "json",
                                                success: function (data) {
                                                    $('select[name="customer_group_id"]').find('option').not(':first').remove();
                                                    $.each(data, function (key, value) {
                                                        $('select[name="customer_group_id"]').append('<option value="' + value.customer_group_id + '">' + value.customer_group + '</option>');
                                                    });
                                                }
                                            });
                                            $.ajax({
                                                url: '<?= base_url('admin/global_controller/json_by_company/tbl_manufacturer/')?>' + companies_id,
                                                type: "GET",
                                                dataType: "json",
                                                success: function (data) {
                                                    $('select[name="manufacturer_id"]').find('option').not(':first').remove();
                                                    $.each(data, function (key, value) {
                                                        $('select[name="manufacturer_id"]').append('<option value="' + value.manufacturer_id + '">' + value.manufacturer + '</option>');
                                                    });
                                                }
                                            });
                                            $.ajax({
                                                url: '<?= base_url('admin/stock/json_get_stock/')?>' + companies_id,
                                                type: "GET",
                                                dataType: "json",
                                                success: function (data) {
//                        $('select[name="client_id"]').empty();
                                                    $('select[name="stock_sub_category_id[]"]').empty();
                                                    $.each(data, function (key, value) {
                                                        $('select[name="stock_sub_category_id[]"]').append('<optgroup label="' + key + '">');
                                                        $.each(value, function (keys, values) {
                                                            $('select[name="stock_sub_category_id[]"]').append('<option value="' + values.stock_sub_category_id + '">' + values.stock_sub_category + '</option>');
                                                        });
                                                        $('select[name="stock_sub_category_id[]"]').append('</optgroup>');
                                                    });
                                                }
                                            });
                                        } else {
                                            $('select[name="manufacturer_id"]').find('option').not(':first').remove();
                                            $('select[name="customer_group_id"]').find('option').not(':first').remove();
                                            $('select[name="stock_sub_category_id[]"]').empty();
                                        }
                                    });
                                });
                            </script>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('tax') ?></label>
                                <div class="col-lg-9">
                                    <?php

                                    $taxes = get_order_by('tbl_tax_rates', null, 'tax_rate_percent', true);
                                    if (!empty($items_info->tax_rates_id) && !is_numeric($items_info->tax_rates_id)) {
                                        $tax_rates_id = json_decode($items_info->tax_rates_id);
                                    }
                                    $select = '<select class="selectpicker" data-width="100%" name="tax_rates_id[]" multiple data-none-selected-text="' . lang('no_tax') . '">';
                                    foreach ($taxes as $tax) {
                                        $selected = '';
                                        if (!empty($tax_rates_id) && is_array($tax_rates_id)) {
                                            if (in_array($tax->tax_rates_id, $tax_rates_id)) {
                                                $selected = ' selected ';
                                            }
                                        }
                                        $select .= '<option value="' . $tax->tax_rates_id . '"' . $selected . 'data-taxrate="' . $tax->tax_rate_percent . '" data-taxname="' . $tax->tax_rate_name . '" data-subtext="' . $tax->tax_rate_name . '">' . $tax->tax_rate_percent . '%</option>';
                                    }
                                    $select .= '</select>';
                                    echo $select;
                                    ?>
                                </div>
                            </div>
                            <div class="form-group terms">
                                <label class="col-lg-3 control-label"><?= lang('description') ?> </label>
                                <div class="col-lg-9">
                        <textarea name="item_desc" class="form-control textarea_"><?php
                            if (!empty($items_info)) {
                                echo $items_info->item_desc;
                            }
                            ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"></label>
                                <div class="col-lg-5">
                                    <button type="submit" class="btn btn-sm btn-primary"><?= lang('updates') ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <div class="panel panel-custom">
                                <div class="panel-heading">
                                    <?= lang('product_image') ?>
                                </div>
                                <div class="panel-body">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 210px;">
                                            <?php if (!empty($items_info->product_image)) : ?>
                                                <img src="<?php echo product_image($items_info->saved_items_id); ?>">
                                                <!-- hidden  old_path when update  -->
                                                <input type="hidden" name="old_path" value="<?php
                                                if (!empty($items_info->image_path)) {
                                                    echo $items_info->image_path;
                                                }
                                                ?>">
                                            <?php else: ?>
                                                <img src="http://placehold.it/350x260"
                                                     alt="Please Connect Your Internet">
                                            <?php endif; ?>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="width: 210px;"></div>
                                        <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">
                                            <input type="file" name="product_image" value="upload"
                                                   data-buttonText="<?= lang('choose_file') ?>" id="myImg"/>
                                            <span class="fileinput-exists"><?= lang('change') ?></span>
                                        </span>
                                        <a href="#" class="btn btn-default fileinput-exists"
                                           data-dismiss="fileinput"><?= lang('remove') ?></a>
                                        </div>
                                        <div id="valid_msg" style="color: #e11221"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="tab-pane <?= $active == 3 ? 'active' : ''; ?>" id="group">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <?php super_admin_opt_th() ?>
                                <th><?= lang('group') . ' ' . lang('name') ?></th>
                                <th><?= lang('description') ?></th>
                                <?php if (!empty($edited) || !empty($deleted)) { ?>
                                    <th><?= lang('action') ?></th>
                                <?php } ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($all_customer_group)) {
                                foreach ($all_customer_group as $customer_group) {
                                    ?>
                                    <tr id="table_items_group_<?= $customer_group->customer_group_id ?>">
                                        <?php $id = $this->uri->segment(5);
                                        if (!empty($id) && $id == $customer_group->customer_group_id) { ?>
                                        <form method="post"
                                              action="<?= base_url() ?>admin/items/saved_group/<?php
                                              if (!empty($group_info)) {
                                                  echo $group_info->customer_group_id;
                                              }
                                              ?>" class="form-horizontal">
                                            <?php
                                            super_admin_inline($customer_group->companies_id);
                                            } else {
                                                super_admin_opt_td($customer_group->companies_id);
                                            }
                                            ?>
                                            <td><?php
                                                $id = $this->uri->segment(5);
                                                if (!empty($id) && $id == $customer_group->customer_group_id) { ?>
                                                    <input type="text" name="customer_group" value="<?php
                                                    if (!empty($customer_group)) {
                                                        echo $customer_group->customer_group;
                                                    }
                                                    ?>" class="form-control"
                                                           placeholder="<?= lang('enter') . ' ' . lang('group') . ' ' . lang('name') ?>"
                                                           required>
                                                <?php } else {
                                                    echo $customer_group->customer_group;
                                                }
                                                ?></td>
                                            <td><?php
                                                $id = $this->uri->segment(5);
                                                if (!empty($id) && $id == $customer_group->customer_group_id) { ?>
                                                    <textarea name="description" rows="1" class="form-control"><?php
                                                        if (!empty($customer_group)) {
                                                            echo $customer_group->description;
                                                        }
                                                        ?></textarea>
                                                <?php } else {
                                                    echo $customer_group->description;
                                                }
                                                ?></td>
                                            <td>
                                                <?php
                                                $id = $this->uri->segment(5);
                                                if (!empty($id) && $id == $customer_group->customer_group_id) { ?>
                                                <?= btn_update() ?>
                                        </form>
                                    <?= btn_cancel('admin/items/items_list/group/') ?>
                                    <?php } else { ?>
                                        <?= btn_edit('admin/items/items_list/group/' . $customer_group->customer_group_id) ?>
                                        <?php echo ajax_anchor(base_url("admin/items/delete_group/" . $customer_group->customer_group_id), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_items_group_" . $customer_group->customer_group_id)); ?>
                                        </td>
                                    <?php } ?>
                                    </tr>
                                <?php }
                            }

                            ?>

                            <form role="form"
                                  enctype="multipart/form-data" id="form"
                                  action="<?php echo base_url(); ?>admin/items/saved_group/<?php
                                  if (!empty($group_info)) {
                                      echo $group_info->customer_group_id;
                                  }
                                  ?>" method="post" class="form-horizontal  ">
                                <tr>
                                    <?php super_admin_inline() ?>
                                    <td><input required type="text" name="customer_group" class="form-control"
                                               placeholder="<?= lang('enter') . ' ' . lang('group') . ' ' . lang('name') ?>">
                                    </td>
                                    <td><textarea name="description" rows="1" class="form-control"></textarea></td>
                                    <td><?= btn_add() ?></td>
                                </tr>
                                <?php echo form_close(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>