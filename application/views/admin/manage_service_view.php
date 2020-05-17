<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Manage Sevices</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Innovovision</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Services View</li>
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

                        <div class="form-group row"> 
                            <label class="col-sm-2 form-control-label text-xs-right">
                                Title:
                            </label>
                            <div class="col-sm-10"> 
                                <input  type="text" name="title" id="title" class="form-control boxed" placeholder="Enter Tittle" value="<?php echo $servicelist->title ?>" disabled="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" form-control-label text-xs-right>
                                Logo:
                            </label>
                            <div class="col-sm-10">
                                <img class="img-responsive" src="<?php echo base_url('./public/admin/services_img') . '/' . $servicelist->logo ?>" style="height: 100px; width: 700px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 form-control-label text-xs-right">
                                Description:
                            </label>
                            <div class="col-sm-10">
                                <textarea type="text" name="description" id="description" class="form-control boxed" placeholder="Enter Description" rows="5" disabled=""><?php echo $servicelist->description ?></textarea>
                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 500px">
                            <a href="<?php echo site_url('welcome/manage_services') ?>" class="btn btn-raised btn-default">Back</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>