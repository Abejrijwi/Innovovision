<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Settings</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="<?php echo site_url('welcome') ?>">Home</a></li>
                <li><a href="#">Settings</a></li>
                <li class="active">Change Password</li>
            </ol>
        </div>
    </div>
    <div class="page-content container-fluid">
        <h3 class="mt-0">Change Password</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-heading">
                        <?php
                        if ($this->session->flashdata('msg')) {
                            ?>
                            <script type="text/javascript" src="<?php echo base_url("public/"); ?>plugins/toastr/toastr.min.js"></script>

                            <script>

                                Command: toastr["success"]("<strong><?php echo $this->session->flashdata('msg') ?></strong>")

                                toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }


                            </script>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="widget-body">
                        <form action="<?php echo site_url('Account/changePassword') ?>" method="post">

                            <div class="form-group">
                                <label for="passwordInput">Old Password</label>
                                <input id="passwordInput" name="old_pass" type="password"  autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passwordInput">New Password</label>
                                <input id="passwordInput" name="new_pass" autocomplete="off" type="password" class="form-control">
                            </div>

                            <button type="submit" name="submit" class="btn btn-outline btn-success">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        $('#user-msg').delay(3000).fadeOut();
    });



</script>
