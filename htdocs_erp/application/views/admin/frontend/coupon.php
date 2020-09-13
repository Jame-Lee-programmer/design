<div class="nav-tabs-custom">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs">
        <li class="<?= $active == 1 ? 'active' : ''; ?>"><a href="#manage"
                                                            data-toggle="tab"><?= lang('all') . ' ' . lang('coupon') ?></a>
        </li>
        <li class="<?= $active == 2 ? 'active' : ''; ?>"><a href="#create"
                                                            data-toggle="tab"><?= lang('new') . ' ' . lang('coupon') ?></a>
        </li>
    </ul>
    <div class="tab-content bg-white">
        <!-- ************** general *************-->
        <div class="tab-pane <?= $active == 1 ? 'active' : ''; ?>" id="manage">
            <div class="table-responsive">
                <table class="table table-striped" id="">
                    <thead>
                    <tr>
                        <th><?= lang('coupon') . ' ' . lang('for') ?></th>
                        <th><?= lang('name') ?></th>
                        <th><?= lang('code') ?></th>
                        <th><?= lang('amount') ?></th>
                        <th><?= lang('end_date') ?></th>
                        <th><?= lang('published') ?></th>
                        <th class="col-options no-sort"><?= lang('action') ?></th>
                    </tr>
                    </thead>
                    <tbody id="coupon">
                    <?php
                    $all_coupon = get_order_by('tbl_frontend_coupon', null, 'id', true);
                    if (!empty($all_coupon)) {
                        foreach ($all_coupon as $coupon) {
                            ?>
                            <tr class="coupon" data-id="<?= $coupon->id ?>"
                                id="table_coupon_<?= $coupon->id ?>">
                                <td><?php
                                    if (empty($coupon->pricing_id) || $coupon->pricing_id == 0) {
                                        echo lang('all') . ' ' . lang('package');
                                    } else {
                                        echo plan_name($coupon->pricing_id);
                                    }
                                    ?></td>
                                <td><?= $coupon->name ?></td>
                                <td><?= $coupon->code ?></td>
                                <td><?= $coupon->amount . ' ' . ($coupon->type == 1 ? '%' : lang('flat')) ?></td>
                                <td><?= strftime(config_item('date_format'), strtotime($coupon->end_date)) ?></td>
                                <td>
                                    <div class="checkbox ajax_change_status">
                                        <input data-id="<?= $coupon->id ?>" data-toggle="toggle"
                                               name="status"
                                               value="1" <?php if ($coupon->status == 1) {
                                                echo 'checked';
                                            } ?> data-on="<?= lang('yes') ?>" data-off="<?= lang('no') ?>"
                                               data-onstyle="success btn-xs"
                                               data-offstyle="danger btn-xs" type="checkbox"
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= base_url() ?>admin/frontend/coupon/<?= $coupon->id ?>"
                                       class="btn btn-xs btn-primary"
                                       data-toggle="tooltip" title="<?= lang('edit') ?>"
                                       data-placement="top">
                                        <i class="fa fa-pencil-square-o"></i></a>
                                    <?php echo ajax_anchor(base_url("admin/frontend/delete/tbl_frontend_coupon/$coupon->id"), "<i class='btn btn-xs btn-danger fa fa-trash-o'></i>", array("class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#table_coupon_" . $coupon->id)); ?>
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
            if (!empty($coupon_info)) {
                $id = $coupon_info->id;
            } else {
                $id = null;
            }
            echo form_open(base_url('admin/frontend/save_coupon/' . $id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>


            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label"><?= lang('name') ?>
                    <span class="required">*</span></label>

                <div class="col-sm-5">
                    <input required type="text" name="name"
                           placeholder="<?= lang('enter') . ' ' . lang('name') ?>"
                           class="form-control" value="<?php
                    if (!empty($coupon_info->name)) {
                        echo $coupon_info->name;
                    }
                    ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label"><?= lang('code') ?>
                    <span class="required">*</span></label>

                <div class="col-sm-5">
                    <input required type="text" name="code"
                           placeholder="<?= lang('enter') . ' ' . lang('code') ?>"
                           class="form-control" value="<?php
                    $this->load->helper('string');
                    if (!empty($coupon_info)) {
                        echo $coupon_info->code;
                    } else {
                        echo strtoupper(random_string('alnum', 8));
                    }
                    ?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label"><?= lang('amount') ?>
                    <span class="required">*</span></label>

                <div class="col-sm-5">
                    <div class="input-group">
                        <input required data-parsley-type="number" type="text" name="amount"
                               placeholder="<?= lang('enter') . ' ' . lang('amount') ?>"
                               class="form-control br0" value="<?php
                        if (isset($coupon_info->amount)) {
                            echo $coupon_info->amount;
                        }
                        ?>"/>
                        <div class="input-group-addon p0 b0">
                            <select name="type" class="selectpicker" data-width="100%">
                                <option value="1" <?php
                                if (isset($coupon_info)) {
                                    if ($coupon_info->type == '1') {
                                        echo 'selected';
                                    }
                                } ?>><?php echo lang('percentage'); ?></option>
                                <option value="0" <?php if (isset($coupon_info)) {
                                    if ($coupon_info->type == '0') {
                                        echo 'selected';
                                    }
                                } ?>><?php echo lang('flat'); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label
                        class="col-lg-3 control-label"><?= lang('end_date') ?></label>
                <div class="col-lg-5">
                    <div class="input-group">
                        <input required type="text" name="end_date"
                               class="form-control datepicker"
                               value="<?php
                               if (!empty($coupon_info->end_date)) {
                                   echo $coupon_info->end_date;
                               } else {
                                   echo date('Y-m-d');
                               }
                               ?>"
                               data-date-format="<?= config_item('date_picker_format'); ?>">
                        <div class="input-group-addon">
                            <a href="#"><i class="fa fa-calendar"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="discount_type"
                       class="control-label col-sm-3"><?= lang('select') . ' ' . lang('package') ?><span
                            class="required">*</span></label>
                <div class="col-sm-5">
                    <select name="pricing_id" class="selectpicker" data-width="100%">
                        <option value="0"><?= lang('all') . ' ' . lang('package') ?></option>
                        <?php
                        $all_pricing = get_order_by('tbl_frontend_pricing', null, 'sort', true);
                        if (!empty($all_pricing)) {
                            foreach ($all_pricing as $pricing) {
                                ?>
                                <option value="<?php echo $pricing->id; ?>" <?php
                                if (isset($coupon_info)) {
                                    if ($coupon_info->pricing_id == $pricing->id) {
                                        echo 'selected';
                                    }
                                } ?>><?php echo $pricing->name; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1"
                       class="col-sm-3 control-label"><?= lang('showing_on_pricing') ?></label>

                <div class="col-sm-5">
                    <div class="checkbox c-checkbox">
                        <label class="needsclick">
                            <input type="checkbox" value="Yes"
                                <?php if (!empty($coupon_info->show_on_pricing) && $coupon_info->show_on_pricing == 'Yes') {
                                    echo 'checked';
                                } ?>
                                   name="show_on_pricing"><span
                                    class="fa fa-check"></span>
                        </label>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <label for="discount_type" class="control-label col-sm-3"></label>
                <div class="col-sm-4">
                    <button type="submit" id="sbtn" name="sbtn" value="1"
                            class="btn btn-block btn-success"><?= lang('save') ?></button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo form_close(); ?>

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
                url: '<?= base_url()?>admin/frontend/change_status/tbl_frontend_coupon/' + id + '/' + status, // the url where we want to POST
                dataType: 'json', // what type of data do we expect back from the server
                encode: true,
                success: function (res) {
//                    console.log(res);
                    if (res) {
//                        toastr[res.status](res.message);
                    } else {
                        alert('There was a problem with AJAX');
                    }
                }
            })
        });
    })
</script>