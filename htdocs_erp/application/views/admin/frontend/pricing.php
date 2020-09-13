<div class="nav-tabs-custom">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs">
        <li class="<?= $active == 1 ? 'active' : ''; ?>"><a href="#manage"
                                                            data-toggle="tab"><?= lang('all') . ' ' . lang('pricing') ?></a>
        </li>
        <li class="<?= $active == 2 ? 'active' : ''; ?>"><a href="#create"
                                                            data-toggle="tab"><?= lang('new') . ' ' . lang('pricing') ?></a>
        </li>
    </ul>
    <div class="tab-content bg-white">
        <!-- ************** general *************-->
        <div class="tab-pane <?= $active == 1 ? 'active' : ''; ?>" id="manage">
            <div class="table-responsive">
                <table class="table table-striped" id="">
                    <thead>
                    <tr>
                        <th><?= lang('name') ?></th>
                        <th><?= lang('trail_period') ?></th>
                        <th><?= lang('recommended') ?></th>
                        <th><?= lang('published') ?></th>
                        <th class="col-options no-sort"><?= lang('action') ?></th>
                    </tr>
                    </thead>
                    <tbody id="pricing">
                    <?php
                    $all_pricing = get_order_by('tbl_frontend_pricing', null, 'sort', true);
                    if (!empty($all_pricing)) {
                        foreach ($all_pricing as $pricing) {
                            ?>
                            <tr class="pricing" data-id="<?= $pricing->id ?>"
                                id="table_pricing_<?= $pricing->id ?>">
                                <td class="dragger pl-lg"><?= $pricing->name ?></td>
                                <td><?= $pricing->trial_period . ' ' . lang('days') ?></td>
                                <td><?= lang($pricing->recommended) ?></td>
                                <td>
                                    <div class="checkbox ajax_change_status">
                                        <input data-id="<?= $pricing->id ?>" data-toggle="toggle"
                                               name="status"
                                               value="1" <?php if ($pricing->status == 1) {
                                                echo 'checked';
                                            } ?> data-on="<?= lang('yes') ?>" data-off="<?= lang('no') ?>"
                                               data-onstyle="success btn-xs"
                                               data-offstyle="danger btn-xs" type="checkbox"
                                    </div>
                                </td>
                                <td>

                                    <a href="<?= base_url() ?>admin/frontend/pricing/<?= $pricing->id ?>"
                                       class="btn btn-xs btn-primary"
                                       data-toggle="tooltip" title="<?= lang('edit') ?>"
                                       data-placement="top">
                                        <i class="fa fa-pencil-square-o"></i></a>

                                    <a data-toggle="modal" data-target="#myModal"
                                       href="<?= base_url("admin/global_controller/package_details/$pricing->id") ?>"
                                       class="btn btn-info btn-xs"><span class="fa fa-list-alt"></span></a>

                                    <?php echo ajax_anchor(base_url("admin/frontend/delete/tbl_frontend_pricing/$pricing->id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_pricing_" . $pricing->id)); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane <?= $active == 2 ? 'active' : ''; ?>" id="create">
            <?php
            if (!empty($pricing_info)) {
                $id = $pricing_info->id;
            } else {
                $id = null;
            }
            echo form_open(base_url('admin/frontend/save_pricing/' . $id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>

            <div class="row mb-lg ">
                <div class="col-sm-6 col-xs-12 br pv">
                    <div class="row">
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?= lang('name') ?>
                                <span class="required">*</span></label>

                            <div class="col-sm-8">
                                <input required type="text" name="name"
                                       placeholder="<?= lang('enter') . ' ' . lang('name') ?>"
                                       class="form-control" value="<?php
                                if (!empty($pricing_info->name)) {
                                    echo $pricing_info->name;
                                }
                                ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?= lang('amount') ?>
                                <span class="required">*</span></label>

                            <div class="col-sm-8">
                                <input required data-parsley-type="number" type="text" name="amount"
                                       placeholder="<?= lang('enter') . ' ' . lang('amount') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->amount)) {
                                    echo $pricing_info->amount;
                                }
                                ?>"/>
                            </div>
                        </div>
                        <div id="add_new">
                            <?php
                            if (!empty($pricing_info)) {
                                $all_currency_price = get_result('tbl_currencywise_price', array('frontend_pricing_id' => $pricing_info->id));
                                if (!empty($all_currency_price)) {
                                    foreach ($all_currency_price as $currency_price) { ?>
                                        <input type="hidden" value="<?= $currency_price->currencywise_price_id ?>"
                                               name="currencywise_price_id[]"/>

                                        <div id="div_<?= '00' . $currency_price->currencywise_price_id ?>">
                                            <div class="form-group">
                                                <label for="discount_type"
                                                       class="control-label col-sm-3"><?= lang('change') . ' ' . lang('currency') ?></label>
                                                <div class="col-sm-8">
                                                    <select name="currency[]" class="select_box" data-width="100%">
                                                        <?php $cur = $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row(); ?>

                                                        <?php
                                                        $currencies = get_result('tbl_currencies');
                                                        foreach ($currencies as $cur) : ?>
                                                            <option
                                                                    value="<?= $cur->code ?>"<?= ($currency_price->currency == $cur->code ? ' selected="selected"' : '') ?>><?= $cur->name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3"></label>
                                                <div class="col-sm-4">
                                                    <label for="field-1"><?= lang('monthly') ?></label>
                                                    <div class="">
                                                        <input required data-parsley-type="number" type="text"
                                                               name="monthly[]"
                                                               placeholder="<?= lang('monthly') ?>"
                                                               class="form-control"
                                                               value="<?= $currency_price->monthly ?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="field-1"><?= lang('yearly') ?></label>
                                                    <div class="">
                                                        <input required data-parsley-type="number" type="text"
                                                               name="yearly[]"
                                                               placeholder="<?= lang('yearly') ?>"
                                                               class="form-control"
                                                               value="<?= $currency_price->yearly ?>"/>
                                                    </div>
                                                    <div class="margin pull-right">
                                                        <strong><a href="javascript:void(0);"
                                                                   id="remove_<?= '00' . $currency_price->currencywise_price_id ?>"
                                                                   class="remCF_deduc"> <i
                                                                        class="fa fa-times text-danger"></i>
                                                            </a></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                }
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="discount_type"
                                   class="control-label col-sm-3"><?= lang('select') . ' ' . lang('currency') ?><span
                                        class="required"> *</span></label>
                            <div class="col-sm-8">
                                <select name="currency[]" class="select_box" data-width="100%">
                                    <?php $cur = $this->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row(); ?>

                                    <?php
                                    $currencies = get_result('tbl_currencies');
                                    foreach ($currencies as $cur) : ?>
                                        <option
                                                value="<?= $cur->code ?>"<?= (config_item('default_currency') == $cur->code ? ' selected="selected"' : '') ?>><?= $cur->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-4">
                                <label for="field-1"><?= lang('monthly') ?></label>
                                <div class="">
                                    <input data-parsley-type="number" type="text" name="monthly[]"
                                           placeholder="<?= lang('monthly') ?>"
                                           class="form-control" value="<?php
                                    if (isset($pricing_info->interval_value)) {
                                        echo $pricing_info->interval_value;
                                    } ?>"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="field-1"><?= lang('yearly') ?></label>
                                <div class="">
                                    <input data-parsley-type="number" type="text" name="yearly[]"
                                           placeholder="<?= lang('yearly') ?>"
                                           class="form-control" value="<?php
                                    if (isset($pricing_info->interval_value)) {
                                        echo $pricing_info->interval_value;
                                    } ?>"/>
                                </div>
                                <div class="margin pull-right">
                                    <strong><a href="javascript:void(0);" id="add_more" class="addCF "><i
                                                    class="fa fa-plus"></i>&nbsp;<?= lang('mores') ?></a></strong>
                                </div>
                            </div>

                        </div>
                        <div id="add_new">
                        </div>

                        <script type="text/javascript">
                            $(document).ready(function () {


                                // Init bootstrap select picker
                                var nextindex = 0;
                                $("#add_more").click(function () {
                                    var add_new = $('<div id=div_' + nextindex + '><div class="form-group"  >\n\
    <label for="discount_type" class="control-label col-sm-3"><?= lang('select') . ' ' . lang('currency') ?><span class="required"> *</span></label>\n\
<div class="col-sm-8"><select name="currency[]" class="select_box form-control" data-width="100%">\n\
 <?php $currencies = get_result('tbl_currencies'); foreach ($currencies as $cur) { ?><option value="<?= $cur->code ?>"><?= $cur->name ?></option>\n\<?php }; ?>
</select></div></div><div class="form-group"><label class="col-sm-3"></label>\n\
<div class="col-sm-4"><label for="field-1"><?= lang('monthly') ?></label>\n\
<div class=""> <input required data-parsley-type="number" type="text" name="monthly[]" placeholder="<?= lang('monthly') ?>" class="form-control" /></div></div>\n\
<div class="col-sm-4"><label for="field-1"><?= lang('yearly') ?></label>\n\
<div class=""> <input required data-parsley-type="number" type="text" name="yearly[]" placeholder="<?= lang('yearly') ?>" class="form-control" /></div></div>\n\
<strong><a href="javascript:void(0);" id=remove_' + nextindex + ' class="remCF_deduc"><i class="fa fa-times text-danger"></i></a></strong></div>');
                                    nextindex++;
                                    $("#add_new").append(add_new);
                                    $(".select_box").select2({});

                                });

                                $("#add_new").on('click', '.remCF_deduc', function () {
                                    var id = this.id;
                                    var split_id = id.split("_");
                                    var deleteindex = split_id[1];
                                    $("#div_" + deleteindex).remove();
                                });
                            });
                        </script>

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?= lang('trail_period') ?><span
                                        class="required">*</span></label>
                            <div class="col-sm-8">
                                <input required data-parsley-type="number" type="text" name="trial_period"
                                       placeholder="<?= lang('enter') . ' ' . lang('trial_period') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->trial_period)) {
                                    echo $pricing_info->trial_period;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('trail_period_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('employee') . ' ' . lang('no') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="employee_no"
                                       placeholder="<?= lang('enter') . ' ' . lang('employee') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->employee_no)) {
                                    echo $pricing_info->employee_no;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('client') . ' ' . lang('no') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="client_no"
                                       placeholder="<?= lang('enter') . ' ' . lang('client') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->client_no)) {
                                    echo $pricing_info->client_no;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('leads') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="leads"
                                       placeholder="<?= lang('enter') . ' ' . lang('leads') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->leads)) {
                                    echo $pricing_info->leads;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('accounting') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="accounting"
                                       placeholder="<?= lang('enter') . ' ' . lang('expense') . ' & ' . lang('deposit') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->accounting)) {
                                    echo $pricing_info->accounting;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('bank') . ' ' . lang('account') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="bank_account"
                                       placeholder="<?= lang('enter') . ' ' . lang('bank') . ' ' . lang('account') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->bank_account)) {
                                    echo $pricing_info->bank_account;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('tasks') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="tasks"
                                       placeholder="<?= lang('enter') . ' ' . lang('tasks') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->tasks)) {
                                    echo $pricing_info->tasks;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('project') . ' ' . lang('no') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="project_no"
                                       placeholder="<?= lang('enter') . ' ' . lang('project') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->project_no)) {
                                    echo $pricing_info->project_no;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('invoice') . ' ' . lang('no') ?></label>
                            <div class="col-sm-8">
                                <input data-parsley-type="number" type="text" name="invoice_no"
                                       placeholder="<?= lang('enter') . ' ' . lang('invoice') . ' ' . lang('no') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->invoice_no)) {
                                    echo $pricing_info->invoice_no;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('pricing_help_text') ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-3 control-label"><?= lang('disk_space') ?></label>
                            <div class="col-sm-8">
                                <input type="text" name="disk_space"
                                       placeholder="<?= lang('enter') . ' ' . lang('disk_space') ?>"
                                       class="form-control" value="<?php
                                if (isset($pricing_info->disk_space)) {
                                    echo $pricing_info->disk_space;
                                }
                                ?>"/>
                                <small class="text-danger "><?= lang('disk_space_help_text') ?></small>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 br pv">
                    <div class="row">
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('multi_branch') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->multi_branch == 'Yes') {
                                                echo 'checked';
                                            } ?> name="multi_branch">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('online_payment') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->online_payment == 'Yes') {
                                                echo 'checked';
                                            } ?> name="online_payment">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('calendar') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->calendar == 'Yes') {
                                                echo 'checked';
                                            } ?> name="calendar">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('mailbox') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->mailbox == 'Yes') {
                                                echo 'checked';
                                            } ?> name="mailbox">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('live_chat') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->live_chat == 'Yes') {
                                                echo 'checked';
                                            } ?> name="live_chat">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('support') . ' ' . lang('tickets') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->tickets == 'Yes') {
                                                echo 'checked';
                                            } ?> name="tickets">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('filemanager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->filemanager == 'Yes') {
                                                echo 'checked';
                                            } ?> name="filemanager">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('job_circular') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->recruitment == 'Yes') {
                                                echo 'checked';
                                            } ?> name="recruitment">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('attendance') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->attendance == 'Yes') {
                                                echo 'checked';
                                            } ?> name="attendance">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('payroll') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->payroll == 'Yes') {
                                                echo 'checked';
                                            } ?> name="payroll">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('leave') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->leave_management == 'Yes') {
                                                echo 'checked';
                                            } ?> name="leave_management">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('performance') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->performance == 'Yes') {
                                                echo 'checked';
                                            } ?> name="performance">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('training') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->training == 'Yes') {
                                                echo 'checked';
                                            } ?> name="training">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('report') . ' ' . lang('manager') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->reports == 'Yes') {
                                                echo 'checked';
                                            } ?> name="reports">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="field-1"
                                   class="col-sm-4 control-label"><?= lang('recommended') ?></label>
                            <div class="col-sm-8">
                                <div class="checkbox c-checkbox">
                                    <label class="needsclick">
                                        <input type="checkbox" value="Yes"
                                            <?php if (!empty($pricing_info) && $pricing_info->recommended == 'Yes') {
                                                echo 'checked';
                                            } ?> name="recommended">
                                        <span class="fa fa-check"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <?php if (config_item('paypal_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_paypal') ?></label>
                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_paypal == 'Yes') {
                                                    echo 'checked';
                                                } ?> name="allow_paypal">
                                            <span class="fa fa-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if (config_item('stripe_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_stripe') ?></label>
                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_stripe == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_stripe"><span class="fa fa-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (config_item('2checkout_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_2checkout') ?></label>

                                <div class="col-sm-8">

                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_2checkout == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_2checkout"><span
                                                    class="fa fa-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (config_item('authorize_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_authorize.net') ?></label>

                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_authorize == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_authorize"><span
                                                    class="fa fa-check"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (config_item('ccavenue_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_ccavenue') ?></label>

                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_ccavenue == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_ccavenue"><span
                                                    class="fa fa-check"></span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (config_item('braintree_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_braintree') ?></label>

                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_braintree == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_braintree"><span
                                                    class="fa fa-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (config_item('mollie_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_mollie') ?></label>

                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_mollie == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_mollie"><span
                                                    class="fa fa-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (config_item('payumoney_status') == 'active'): ?>
                            <div class="form-group">
                                <label for="field-1"
                                       class="col-sm-4 control-label"><?= lang('allow_payumoney') ?></label>

                                <div class="col-sm-8">
                                    <div class="checkbox c-checkbox">
                                        <label class="needsclick">
                                            <input type="checkbox" value="Yes"
                                                <?php if (!empty($pricing_info) && $pricing_info->allow_payumoney == 'Yes') {
                                                    echo 'checked';
                                                } ?>
                                                   name="allow_payumoney"><span
                                                    class="fa fa-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?= lang('status') ?><span
                                        class="required">*</span></label>

                            <div class="col-sm-8">
                                <div class="col-sm-6 row">
                                    <div class="checkbox-inline c-checkbox">
                                        <label>
                                            <input <?= (!empty($pricing_info->status) && $pricing_info->status == '1' ? 'checked' : ''); ?>
                                                    class="select_one" type="checkbox" name="status" value="1">
                                            <span class="fa fa-check"></span> <?= lang('published') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox-inline c-checkbox">
                                        <label>
                                            <input <?= (!empty($pricing_info->status) && $pricing_info->status == '0' ? 'checked' : ''); ?>
                                                    class="select_one" type="checkbox" name="status" value="0">
                                            <span class="fa fa-check"></span> <?= lang('unpublished') ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 ">
                    <div class="col-sm-12">
                        <label class="col-lg-1 control-label"><?= lang('description') ?> </label>
                        <div class="col-lg-11">
                        <textarea name="description" class="textarea"><?php
                            if (!empty($pricing_info)) {
                                echo $pricing_info->description;
                            }
                            ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 pull-right row">
                    <button type="submit" id="sbtn" name="sbtn" value="1"
                            class="btn btn-block btn-success"><?= lang('save') ?></button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<style type="text/css">
    .dragger {
        background: url(../../assets/img/dragger.png) 0px 15px no-repeat;
        cursor: pointer;
    }
</style>

<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-u.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('.ajax_change_status input[type="checkbox"]').change(function () {
            var id = $(this).data().id;
            var status = $(this).is(":checked");
            if (status == true) {
                status = 1;
            } else {
                status = 0;
            }
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: '<?= base_url()?>admin/frontend/change_status/tbl_frontend_pricing/' + id + '/' + status, // the url where we want to POST
                dataType: 'json', // what type of data do we expect back from the server
                encode: true,
                success: function (res) {
                    console.log(res);
                    if (res) {
//                        toastr[res.status](res.message);
                    } else {
                        alert('There was a problem with AJAX');
                    }
                }
            })
        });
    })

    $(function () {
        $('tbody[id^="pricing"]').sortable({
            connectWith: ".pricing",
            placeholder: 'ui-state-highlight',
            forcePlaceholderSize: true,
            stop: function (event, ui) {
                var id = JSON.stringify(
                    $('tbody[id^="pricing"]').sortable(
                        'toArray',
                        {
                            attribute: 'data-id'
                        }
                    )
                );
                var formData = {
                    'pricing': id
                };
                console.log(formData);
                $.ajax({
                    type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url: '<?= base_url()?>admin/frontend/save_pricing/', // the url where we want to POST
                    data: formData, // our data object
                    dataType: 'json', // what type of data do we expect back from the server
                    encode: true,
                    success: function (res) {
                        if (res) {
//                            toastr[res.status](res.message);
                        } else {
                            alert('There was a problem with AJAX');
                        }
                    }
                })

            }
        });
    });
</script>