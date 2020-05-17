<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Add Users</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Innovovision</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Add Services</li>
            </ol>
        </div>
        
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($this->session->flashdata('message')) {
                    ?>
                                                                                                                                        <!--<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/toastr/toastr.min.js"></script>-->
                    <script>

                        Command: toastr["success"]("<strong><?php echo $this->session->flashdata('message') ?></strong>");

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

                if ($this->session->flashdata('message')) {
                    ?>
                    <div class="alert alert-success successmsg">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>
                    </div>
                    <?php
                }

                if ($this->session->flashdata('err_message')) {
                    ?>
                    <div class="alert alert-danger successmsg">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('err_message'); ?>
                    </div>
                    <?php
                }
                ?>

                <div class="widget">
                    <div class="widget-heading">
                        <h3 class="widget-title">Service Form</h3>
                    </div>
                    <div class="widget-body">

                        <form id="adduser" action="<?php echo site_url('welcome/service_process'); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group row"> 
                                <label class="col-sm-2 form-control-label text-xs-right">
                                    Title:
                                </label>
                                <div class="col-sm-10"> 
                                    <input  type="text" name="title" id="title" class="form-control boxed" placeholder="Enter Tittle" value="<?php echo set_value('tittle'); ?>"> 
                                    <div style="color: coral "><?php echo form_error('tittle'); ?></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2" form-control-label text-xs-right>
                                    Logo:
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo" id="logo" class="form-control boxed">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">
                                    Description:
                                </label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="description" id="description" class="form-control boxed" placeholder="Enter Description" value="<?php echo set_value('description') ?>" rows="5"></textarea>
                                    <div style="color: coral "><?php echo form_error('description'); ?></div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-left: 500px">
                                <input type="submit" name="submit" id="submit" class="btn btn-raised btn-primary d-flex justify-content-center" value="Submit"> 
                                <a href="<?php echo site_url('welcome/manage_services') ?>" class="btn btn-raised btn-default">Back</a>
                            </div>

                            <div class="clearfix"></div>  

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


