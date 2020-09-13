<?= message_box('success'); ?>
<?= message_box('error');

?>
<div class="nav-tabs-custom">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs">
        <li class="<?= $active == 1 ? 'active' : ''; ?>"><a href="#manage"
                                                            data-toggle="tab"><?= lang('all') . ' ' . lang('companies') ?></a>
        </li>
        <li class="<?= $active == 2 ? 'active' : ''; ?>"><a href="#create"
                                                            data-toggle="tab"><?= lang('new') . ' ' . lang('company') ?></a>
        </li>
    </ul>
    <div class="tab-content bg-white">
        <!-- ************** general *************-->
        <div class="tab-pane <?= $active == 1 ? 'active' : ''; ?>" id="manage">

            <div class="table-responsive">
                <table class="table table-striped DataTables " id="">
                    <thead>
                    <tr>
                        <th><?= lang('logo') ?></th>
                        <th><?= lang('name') ?></th>
                        <th><?= lang('primary_contact') ?></th>
                        <th><?= lang('email') ?></th>
                        <th><?= lang('mobile') ?></th>
                        <th><?= lang('active') ?></th>
                        <th class="col-options no-sort"><?= lang('action') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($all_companies)) {
                        foreach ($all_companies as $v_companies) { ?>
                            <tr id="table_<?= $v_companies->companies_id ?>">
                                <td><img style="width: 36px;margin-right: 10px;"
                                         src="<?= base_url() ?><?= $v_companies->logo ?>" class="img-circle">
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/companies/details/' . $v_companies->companies_id) ?>">
                                        <?= $v_companies->name ?>
                                    </a>
                                </td>
                                <td><?php
                                    if ($v_companies->primary_contact != 0) {
                                        $contacts = $v_companies->primary_contact;
                                    } else {
                                        $contacts = NULL;
                                    }
                                    $primary_contact = $this->companies_model->check_by(array('user_id' => $contacts), 'tbl_account_details');
                                    if (!empty($primary_contact)) {
                                        echo $primary_contact->fullname;
                                    } else {
                                        echo '-';
                                    }
                                    ?></td>
                                <td><?= ($v_companies->email) ?></td>
                                <td><?= ($v_companies->mobile) ?></td>
                                <td>
                                    <div class="change_companies_status">
                                        <input data-id="<?= $v_companies->companies_id ?>"
                                               data-toggle="toggle"
                                               name="active" value="1" <?php
                                        if (!empty($v_companies->status) && $v_companies->status == '1') {
                                            echo 'checked';
                                        }
                                        ?> data-on="<?= lang('yes') ?>" data-off="<?= lang('no') ?>"
                                               data-onstyle="success btn-xs"
                                               data-offstyle="danger btn-xs" type="checkbox">
                                    </div>
                                    <?php
                                    if ($v_companies->banned == 1) {
                                        ?>
                                        <span class="label label-danger" data-toggle='tooltip' data-placement='top'
                                              title="<?= $v_companies->ban_reason ?>"><?= lang('banned') ?></span>
                                    <?php }
                                    ?></td>
                                <td>
                                    <?php if ($v_companies->banned == 1): ?>
                                        <a data-toggle="tooltip" data-placement="top"
                                           class="btn btn-success btn-xs"
                                           title="Click to <?= lang('unbanned') ?> "
                                           href="<?php echo base_url() ?>admin/companies/set_banned/0/<?php echo $v_companies->companies_id; ?>"><span
                                                class="fa fa-check"></span></a>
                                    <?php else: ?>
                                        <span data-toggle="tooltip" data-placement="top"
                                              title="Click to <?= lang('banned') ?> ">
                                                <?php echo btn_banned_modal('admin/companies/change_banned/1/' . $v_companies->companies_id); ?>
                                                    </span>
                                    <?php endif; ?>
                                    <?php echo btn_edit('admin/companies/index/' . $v_companies->companies_id); ?>
                                    <?php echo ajax_anchor(base_url("admin/companies/delete_company/$v_companies->companies_id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_" . $v_companies->companies_id)); ?>
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

        <div class="tab-pane <?= $active == 2 ? 'active' : ''; ?>" id="create">
            <?php
            if (!empty($company_info)) {
                $companies_id = $company_info->companies_id;
            } else {
                $companies_id = null;
            }
            echo form_open(base_url('admin/companies/save_companies/' . $companies_id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('branch_name') ?> <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->name;
                            }
                            ?>" name="name" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><strong><?= lang('logo') ?></strong></label>
                        <div class="col-lg-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 210px;">
                                    <?php
                                    if (!empty($company_info)) :
                                        ?>
                                        <img src="<?php echo base_url() . $company_info->logo; ?>">
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
                                                <input type="file" name="logo" value="upload"
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
                    <?php if (empty($company_info)) { ?>
                        <div class="form-group">
                            <label class="col-lg-4 control-label"><?= lang('full') . ' ' . lang('name') ?> <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" value="" name="fullname" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                class="col-lg-4 control-label"><strong> <?= lang('username'); ?></strong><span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" name="username" id="check_username"
                                       placeholder="<?= lang('eg') ?> <?= lang('enter_your') . ' ' . lang('username') ?>"
                                       class="input-sm form-control" required>
                                <span class="required" id="check_username_error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 control-label"><strong><?= lang('password') ?> </strong><span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="password" id="new_password" placeholder="<?= lang('password') ?>"
                                       name="password" class="input-sm form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                class="col-lg-4 control-label"><strong><?= lang('confirm_password') ?> </strong><span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="password" data-parsley-equalto="#new_password"
                                       placeholder="<?= lang('confirm_password') ?>"
                                       name="confirm_password" class="input-sm form-control" required>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('email') ?> <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->email;
                            }
                            ?>" name="email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label"></label>
                        <div class="col-lg-8">
                            <button type="submit" id="new_company"
                                    class="btn btn-sm btn-primary"><?= lang('update') ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('phone') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->phone;
                            }
                            ?>" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('mobile') ?> <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->mobile;
                            }
                            ?>" name="mobile" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('city') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->city;
                            }
                            ?>" name="city">
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            class="col-lg-4 control-label"><?= lang('country') ?></label>
                        <div class="col-lg-8">
                            <select name="country" class="form-control select_box"
                                    style="width: 100%">
                                <optgroup label="Default Country">
                                    <option
                                        value="<?= $this->config->item('company_country') ?>"><?= $this->config->item('company_country') ?></option>
                                </optgroup>
                                <optgroup label="<?= lang('other_countries') ?>">
                                    <?php if (!empty($countries)): foreach ($countries as $country): ?>
                                        <option
                                            value="<?= $country->value ?>" <?= (!empty($company_info->country) && $company_info->country == $country->value ? 'selected' : NULL) ?>><?= $country->value ?>
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
                        <label class="col-lg-4 control-label"><?= lang('zip_code') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->zip_code;
                            }
                            ?>" name="zip_code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('vat') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info)) {
                                echo $company_info->vat;
                            }
                            ?>" name="vat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            class="col-lg-4 control-label"><?= lang('skype_id') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info->skype_id)) {
                                echo $company_info->skype_id;
                            }
                            ?>" name="skype_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            class="col-lg-4 control-label"><?= lang('facebook_profile_link') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info->facebook)) {
                                echo $company_info->facebook;
                            }
                            ?>" name="facebook">
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            class="col-lg-4 control-label"><?= lang('twitter_profile_link') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info->twitter)) {
                                echo $company_info->twitter;
                            }
                            ?>" name="twitter">
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            class="col-lg-4 control-label"><?= lang('linkedin_profile_link') ?></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="<?php
                            if (!empty($company_info->linkedin)) {
                                echo $company_info->linkedin;
                            }
                            ?>" name="linkedin">
                        </div>
                    </div>
                    <!-- End discount Fields -->
                    <div class="form-group">
                        <label class="col-lg-4 control-label"><?= lang('address') ?> </label>
                        <div class="col-lg-8">
                        <textarea name="description" class="form-control"><?php
                            if (!empty($company_info)) {
                                echo $company_info->address;
                            }
                            ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script>
    $(document).on("change", function () {
//        alert('done');
        var check_username = $('#check_username').val();
        if (check_username) {
            id = 'check_username_error';
            btn = 'new_company';
            url = 'check_existing_user_name'
            value = check_username;
            $.ajax({
                url: base_url + "admin/global_controller/" + url,
                type: "POST",
                data: {
                    name: value,
                },
                dataType: 'json',
                success: function (res) {
                    if (res.error) {
                        handle_error("#" + id, res.error);
                        disable_button("#" + btn);
                        return;
                    } else {
                        remove_error("#" + id);
                        disable_remove("#" + btn);
                        return;
                    }
                }
            });
        }
    });
    $(document).ready(function () {
        $('.change_companies_status input[type="checkbox"]').change(function () {
            var companies_id = $(this).data().id;
            var status = $(this).is(":checked");
            if (status == true) {
                status = 1;
            } else {
                status = 0;
            }
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: '<?= base_url()?>admin/companies/change_status/' + status + '/' + companies_id, // the url where we want to POST
                dataType: 'json', // what type of data do we expect back from the server
                encode: true,
                success: function (res) {
                    if (res) {
                        toastr[res.status](res.message);
                    } else {
                        alert('There was a problem with AJAX');
                    }
                }
            })

        });

    })
</script>