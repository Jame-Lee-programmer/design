<div class="panel panel-custom">
    <div class="panel-heading">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= lang('see_password') ?></h4>
    </div>
    <div class="modal-body form-horizontal">
        <div class="form-group">
            <div class="col-lg-12">
                <input type="password" class="form-control"
                       placeholder="<?= lang('enter') . ' ' . lang('your') . ' ' . lang('current') . ' ' . lang('password') ?>"
                       name="my_password">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?= lang('close') ?></button>
            <button type="submit" class="btn btn-primary check_current_password"><?= lang('update') ?></button>
        </div>
    </div>
</div>
<script>
    function handle_error(element, error_res) {
        $(element).html(error_res);
        $(element).show();
    }

    function remove_error(element) {
        $(element).empty();
    }

    $('#myModal').on('loaded.bs.modal', function () {
        <?php if(empty($activationtoken)){?>
        setTimeout(function () {
            $('#show_password').fadeOut('fast');
        }, 10000);
        <?php }?>
        $('body').on('click', '.check_current_password', function () {
            var my_password = $('input[name="my_password"]').val();
            var encrypt_password = '<?= $password?>';
            var row = '<?= $row ?>';
            $.ajax({
                url: base_url + "admin/global_controller/check_current_password/",
                type: "POST",
                data: {
                    name: my_password,
                    row: row,
                    encrypt_password: encrypt_password,
                },
                dataType: 'json',
                success: function (res) {
                    console.log(res);
                    if (res.error) {
                        handle_error("#hosting_password", res.error);
                        return;
                    } else {
                        remove_error("#hosting_password");
                        handle_error("#show_password", res.password);
                        $('#myModal').modal('hide');
                        return;
                    }
                }
            });
        });
    });
</script>