<?= message_box('success'); ?>
<?= message_box('error');
$created = can_action('149', 'created');
$edited = can_action('149', 'edited');
$deleted = can_action('149', 'deleted');
if (!empty($created) || !empty($edited)){
?>
<div class="nav-tabs-custom">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs">
        <li class="<?= $active == 1 ? 'active' : ''; ?>"><a href="#manage"
                                                            data-toggle="tab"><?= lang('manage') . ' ' . lang('supplier') ?></a>
        </li>
        <li class="<?= $active == 2 ? 'active' : ''; ?>"><a href="#create"
                                                            data-toggle="tab"><?= lang('new') . ' ' . lang('supplier') ?></a>
        </li>
    </ul>
    <div class="tab-content bg-white">
        <!-- ************** general *************-->
        <div class="tab-pane <?= $active == 1 ? 'active' : ''; ?>" id="manage">
            <?php } else { ?>
            <div class="panel panel-custom">
                <header class="panel-heading ">
                    <div class="panel-title"><strong><?= lang('manage_account') ?></strong></div>
                </header>
                <?php } ?>
                <div class="table-responsive">
                    <table class="table table-striped DataTables " id="">
                        <thead>
                        <tr>
                            <?php super_admin_opt_th() ?>
                            <th><?= lang('name') ?></th>
                            <th><?= lang('address') ?></th>
                            <th><?= lang('email') ?></th>
                            <th><?= lang('phone') ?></th>
                            <?php if (!empty($edited) || !empty($deleted)) { ?>
                                <th class="col-options no-sort"><?= lang('action') ?></th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (!empty($all_supplier)) {
                            foreach ($all_supplier as $v_supplier) {
                                $can_edit = $this->purchase_model->can_action('tbl_suppliers', 'edit', array('supplier_id' => $v_supplier->supplier_id));
                                $can_delete = $this->purchase_model->can_action('tbl_suppliers', 'delete', array('supplier_id' => $v_supplier->supplier_id));
                                ?>
                                <tr id="table_supplier_<?= $v_supplier->supplier_id ?>">
                                    <?php super_admin_opt_td($v_supplier->companies_id) ?>
                                    <td><?= $v_supplier->name ?></td>
                                    <td><?= $v_supplier->address ?></td>
                                    <td><?= $v_supplier->email ?></td>
                                    <td><?= $v_supplier->phone ?></td>
                                    <td>
                                        <?php if (!empty($can_edit) && !empty($edited)) { ?>
                                            <?= btn_edit('admin/purchase/supplier/' . $v_supplier->supplier_id) ?>
                                        <?php }
                                        if (!empty($can_delete) && !empty($deleted)) {
                                            ?>
                                            <?php echo ajax_anchor(base_url("admin/purchase/delete_supplier/$v_supplier->supplier_id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_supplier_" . $v_supplier->supplier_id)); ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                            };
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <?php if (!empty($created) || !empty($edited)) {
                if (!empty($supplier_info)) {
                    $supplier_id = $supplier_info->supplier_id;
                    $companies_id = $supplier_info->companies_id;
                } else {
                    $supplier_id = null;
                    $companies_id = null;
                }
                ?>
                <div class="tab-pane <?= $active == 2 ? 'active' : ''; ?>" id="create">
                    <?php echo form_open(base_url('admin/purchase/save_supplier/' . $supplier_id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>

                    <div class="col-sm-6 col-xs-12 br pv">
                        <div class="row">
                            <?php super_admin_form($companies_id, 4, 7) ?>
                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?= lang('name') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->name;
                                    }
                                    ?>" name="name" required="">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?= lang('email') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->email;
                                    }
                                    ?>" name="email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?= lang('phone') ?> <span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->phone;
                                    }
                                    ?>" name="phone" required="">
                                </div>
                            </div>
                            <!-- End discount Fields -->
                            <div class="form-group terms">
                                <label class="col-lg-4 control-label"><?= lang('address') ?> </label>
                                <div class="col-lg-7">
                        <textarea name="address" class="form-control"><?php
                            if (!empty($supplier_info)) {
                                echo $supplier_info->address;
                            }
                            ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?= lang('city') ?></label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->city;
                                    }
                                    ?>" name="city">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 br pv">
                        <div class="row">
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('state') ?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->state;
                                    }
                                    ?>" name="state">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('zip_code') ?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->zip_code;
                                    }
                                    ?>" name="zip_code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    class="col-lg-3 control-label"><?= lang('country') ?></label>
                                <div class="col-lg-5">
                                    <select name="country" class="form-control select_box"
                                            style="width: 100%">
                                        <optgroup label="Default Country">
                                            <option
                                                value="<?= $this->config->item('company_country') ?>"><?= $this->config->item('company_country') ?></option>
                                        </optgroup>
                                        <optgroup label="<?= lang('other_countries') ?>">
                                            <?php if (!empty($countries)): foreach ($countries as $country): ?>
                                                <option
                                                    value="<?= $country->value ?>" <?= (!empty($supplier_info->country) && $supplier_info->country == $country->value ? 'selected' : NULL) ?>><?= $country->value ?>
                                                </option>
                                                <?php
                                            endforeach;
                                            endif;
                                            ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?= lang('tax') ?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?php
                                    if (!empty($supplier_info)) {
                                        echo $supplier_info->tax;
                                    }
                                    ?>" name="tax">
                                </div>
                            </div>


                            <div class="form-group" id="border-none">
                                <label for="field-1" class="col-sm-3 control-label"><?= lang('permission') ?> <span
                                        class="required">*</span></label>
                                <div class="col-sm-9">
                                    <div class="checkbox c-radio needsclick">
                                        <label class="needsclick">
                                            <input id="" <?php
                                            if (!empty($supplier_info->permission) && $supplier_info->permission == 'all') {
                                                echo 'checked';
                                            } elseif (empty($supplier_info)) {
                                                echo 'checked';
                                            }
                                            ?> type="radio" name="permission" value="everyone">
                                            <span class="fa fa-circle"></span><?= lang('everyone') ?>
                                            <i title="<?= lang('permission_for_all') ?>"
                                               class="fa fa-question-circle" data-toggle="tooltip"
                                               data-placement="top"></i>
                                        </label>
                                    </div>
                                    <div class="checkbox c-radio needsclick">
                                        <label class="needsclick">
                                            <input id="" <?php
                                            if (!empty($supplier_info->permission) && $supplier_info->permission != 'all') {
                                                echo 'checked';
                                            }
                                            ?> type="radio" name="permission" value="custom_permission"
                                            >
                                            <span class="fa fa-circle"></span><?= lang('custom_permission') ?> <i
                                                title="<?= lang('permission_for_customization') ?>"
                                                class="fa fa-question-circle" data-toggle="tooltip"
                                                data-placement="top"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group <?php
                            if (!empty($supplier_info->permission) && $supplier_info->permission != 'all') {
                                echo 'show';
                            }
                            ?>" id="permission_user_1">
                                <label for="field-1"
                                       class="col-sm-3 control-label"><?= lang('select') . ' ' . lang('users') ?>
                                    <span
                                        class="required">*</span></label>
                                <div class="col-sm-9">
                                    <?php
                                    if (!empty($permission_user)) {
                                        foreach ($permission_user as $key => $v_user) {

                                            if ($v_user->role_id == 1) {
                                                $role = '<strong class="badge btn-danger">' . lang('admin') . '</strong>';
                                            } else {
                                                $role = '<strong class="badge btn-primary">' . lang('staff') . '</strong>';
                                            }

                                            ?>
                                            <div class="checkbox c-checkbox needsclick">
                                                <label class="needsclick">
                                                    <input type="checkbox"
                                                        <?php
                                                        if (!empty($supplier_info->permission) && $supplier_info->permission != 'all') {
                                                            $get_permission = json_decode($supplier_info->permission);
                                                            foreach ($get_permission as $user_id => $v_permission) {
                                                                if ($user_id == $v_user->user_id) {
                                                                    echo 'checked';
                                                                }
                                                            }

                                                        }
                                                        ?>
                                                           value="<?= $v_user->user_id ?>"
                                                           name="assigned_to[]"
                                                           class="needsclick">
                                                        <span
                                                            class="fa fa-check"></span><?= $v_user->username . ' ' . $role ?>
                                                </label>

                                            </div>
                                            <div class="action_1 p
                                                <?php

                                            if (!empty($supplier_info->permission) && $supplier_info->permission != 'all') {
                                                $get_permission = json_decode($supplier_info->permission);

                                                foreach ($get_permission as $user_id => $v_permission) {
                                                    if ($user_id == $v_user->user_id) {
                                                        echo 'show';
                                                    }
                                                }

                                            }
                                            ?>
                                                " id="action_1<?= $v_user->user_id ?>">
                                                <label class="checkbox-inline c-checkbox">
                                                    <input id="<?= $v_user->user_id ?>" checked type="checkbox"
                                                           name="action_1<?= $v_user->user_id ?>[]"
                                                           disabled
                                                           value="view">
                                                        <span
                                                            class="fa fa-check"></span><?= lang('can') . ' ' . lang('view') ?>
                                                </label>
                                                <label class="checkbox-inline c-checkbox">
                                                    <input id="<?= $v_user->user_id ?>"
                                                        <?php

                                                        if (!empty($supplier_info->permission) && $supplier_info->permission != 'all') {
                                                            $get_permission = json_decode($supplier_info->permission);

                                                            foreach ($get_permission as $user_id => $v_permission) {
                                                                if ($user_id == $v_user->user_id) {
                                                                    if (in_array('edit', $v_permission)) {
                                                                        echo 'checked';
                                                                    };

                                                                }
                                                            }

                                                        }
                                                        ?>
                                                           type="checkbox"
                                                           value="edit" name="action_<?= $v_user->user_id ?>[]">
                                                        <span
                                                            class="fa fa-check"></span><?= lang('can') . ' ' . lang('edit') ?>
                                                </label>
                                                <label class="checkbox-inline c-checkbox">
                                                    <input id="<?= $v_user->user_id ?>"
                                                        <?php

                                                        if (!empty($supplier_info->permission) && $supplier_info->permission != 'all') {
                                                            $get_permission = json_decode($supplier_info->permission);
                                                            foreach ($get_permission as $user_id => $v_permission) {
                                                                if ($user_id == $v_user->user_id) {
                                                                    if (in_array('delete', $v_permission)) {
                                                                        echo 'checked';
                                                                    };
                                                                }
                                                            }

                                                        }
                                                        ?>
                                                           name="action_<?= $v_user->user_id ?>[]"
                                                           type="checkbox"
                                                           value="delete">
                                                        <span
                                                            class="fa fa-check"></span><?= lang('can') . ' ' . lang('delete') ?>
                                                </label>
                                                <input id="<?= $v_user->user_id ?>" type="hidden"
                                                       name="action_<?= $v_user->user_id ?>[]" value="view">

                                            </div>


                                            <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-primary pull-left ml">
                            <?= lang('update') ?>
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            <?php } else { ?>
        </div>
        <?php } ?>
    </div>
</div>