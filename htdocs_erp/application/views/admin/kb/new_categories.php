<?php
$created = can_action('142', 'created');
$edited = can_action('142', 'edited');
if (!empty($created) || !empty($edited)) {
    if (!empty($category_info)) {
        $kb_category_id = $category_info->kb_category_id;
        $companies_id = $category_info->companies_id;
    } elseif (!empty($inline)) {
        $kb_category_id = $inline;
        $companies_id = null;
    } else {
        $kb_category_id = null;
        $companies_id = null;
    }
    ?>
    <div class="panel panel-custom">
        <div class="panel-heading">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                    class="sr-only">Close</span></button>
            <h4 class="modal-title"
                id="myModalLabel"><?= lang('new') . ' ' . lang('categories') ?></h4>
        </div>
        <div class="modal-body wrap-modal wrap">
            <?php echo form_open(base_url('admin/knowledgebase/saved_categories/' . $kb_category_id), array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '', 'role' => 'form')); ?>

            <?php super_admin_form($companies_id, 3, 8) ?>
            <div class="form-group">
                <label class="col-sm-3 control-label"><?= lang('categories') ?> <span
                        class="required">*</span></label>
                <div class="col-sm-8">
                    <input type="text" name="category" required class="form-control" value="<?php
                    if (!empty($category_info->category)) {
                        echo $category_info->category;
                    }
                    ?>"/>
                </div>
            </div>
            <input type="hidden" name="type" required class="form-control" value="kb"/>
            <div class="form-group">
                <label class="col-sm-3 control-label"><?= lang('description') ?></label>
                <div class="col-sm-8">
                        <textarea class="form-control textarea_2"
                                  name="description"><?php if (!empty($category_info->description)) {
                                echo $category_info->description;
                            } ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label"><?= lang('order') ?> <span class="required">*</span></label>
                <div class="col-sm-3">
                    <input type="text" name="sort" class="form-control" value="<?php
                    if (!empty($category_info->sort)) {
                        echo $category_info->sort;
                    }
                    ?>" required/>
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-3 control-label"><?= lang('status') ?></label>
                <div class="col-sm-8">
                    <div class="col-sm-4 row">
                        <div class="checkbox-inline c-checkbox">
                            <label>
                                <input <?= (!empty($category_info->status) && $category_info->status == '1' || empty($category_info) ? 'checked' : ''); ?>
                                    class="select_one" type="checkbox" name="status" value="1">
                                <span class="fa fa-check"></span> <?= lang('active') ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="checkbox-inline c-checkbox">
                            <label>
                                <input <?= (!empty($category_info->status) && $category_info->status == '2' ? 'checked' : ''); ?>
                                    class="select_one" type="checkbox" name="status" value="2">
                                <span class="fa fa-check"></span> <?= lang('inactive') ?>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                    <button type="submit" id="sbtn" class="btn btn-primary btn-block"><?= lang('save') ?></button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
<?php }
if (!empty($inline)) { ?>
    <script type="text/javascript">
        $(document).on("submit", "form", function (event) {
            var form = $(event.target);
            if (form.attr('action') == '<?= base_url('admin/knowledgebase/saved_categories/' . $inline)?>') {
                event.preventDefault();
            }
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize()
            }).done(function (response) {
                response = JSON.parse(response);
                if (response.status == 'success') {
                    if (typeof(response.id) != 'undefined') {
                        var groups = $('select[name="kb_category_id"]');
                        groups.prepend('<option selected value="' + response.id + '">' + response.category + '</option>');
                        var select2Instance = groups.data('select2');
                        var resetOptions = select2Instance.options.options;
                        groups.select2('destroy').select2(resetOptions)
                    }
                    toastr[response.status](response.message);
                }
                $('#myModal').modal('hide');
            }).fail(function () {
                alert('There was a problem with AJAX');
            });
        });
    </script>
<?php }
?>

