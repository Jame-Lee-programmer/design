<?php echo message_box('success') ?>
<div class="row">
    <!-- Start Form -->
    <div class="col-lg-12">
        <form action="<?php echo base_url() ?>admin/settings/save_purchases" enctype="multipart/form-data"
              class="form-horizontal" method="post">
            <div class="panel panel-custom">
                <header class="panel-heading  "><?= lang('purchase_settings') ?></header>
                <div class="panel-body">
                    <input type="hidden" name="settings" value="<?= $load_setting ?>">

                    <div class="form-group">
                        <label class="col-lg-3 control-label"><?= lang('purchase_prefix') ?> <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-7">
                            <input type="text" name="purchase_prefix" class="form-control" style="width:260px"
                                   value="<?= config_item('purchase_prefix') ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label"><?= lang('purchase_start_no') ?> <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-7">
                            <input type="text" name="purchase_start_no" class="form-control" style="width:260px"
                                   value="<?= config_item('purchase_start_no') ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label"><?= lang('increment_purchase_number') ?></label>
                        <div class="col-lg-6">
                            <div class="checkbox c-checkbox">
                                <label class="needsclick">
                                    <input type="hidden" value="off" name="increment_purchase_number"/>
                                    <input type="checkbox" <?php
                                    if (config_item('increment_purchase_number') == 'TRUE') {
                                        echo "checked=\"checked\"";
                                    }
                                    ?> name="increment_purchase_number">
                                    <span class="fa fa-check"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label"><?= lang('show_item_tax') ?></label>
                        <div class="col-lg-6">
                            <div class="checkbox c-checkbox">
                                <label class="needsclick">
                                    <input type="hidden" value="off" name="show_purchase_tax"/>
                                    <input type="checkbox" <?php
                                    if (config_item('show_purchase_tax') == 'TRUE') {
                                        echo "checked=\"checked\"";
                                    }
                                    ?> name="show_purchase_tax">
                                    <span class="fa fa-check"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group terms">
                        <label class="col-lg-3 control-label"><?= lang('purchase_terms') ?></label>
                        <div class="col-lg-9">
                            <textarea class="form-control textarea"
                                      name="purchase_terms"><?= config_item('purchase_terms') ?></textarea>
                        </div>
                    </div>
                    <div class="form-group terms">
                        <label class="col-lg-3 control-label"><?= lang('purchase_footer') ?></label>
                        <div class="col-lg-9">
                        <textarea class="form-control textarea"
                                  name="purchase_footer"><?= config_item('purchase_footer') ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-3 control-label"></div>
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-sm btn-primary"><?= lang('save_changes') ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Form -->
</div>