<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Manage Services</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Innovovision</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Manage Services</li>
            </ol>
        </div>

    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <?php
                if ($this->session->flashdata('message')) {
                    ?>

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
                ?>


                <?php
                if ($this->session->flashdata('message')) {
                    ?>
                    <div class="alert alert-success successmsg">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>
                    </div>
                    <?php
                }
                ?>
                <!--</div>-->
                <!--<div id="errormessage">-->
                <?php
                if ($this->session->flashdata('err_message')) {
                    ?>
                    <div class="alert alert-danger successmsg">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('err_message'); ?>
                    </div>
                    <?php
                }
                ?>

                <?php
                if (empty($servicelist)) {
                    ?>
                    <div class="box-body">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Alert!</h4>
                            Currently There is no records.
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="widget">
                        <div class="widget-heading">
                            <h3 class="widget-title">Data List</h3>
                        </div>
                        <div class="widget-body">
                            <table id="example-2" cellspacing="0" width="100%" class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>+</th>                                        
                                        <th>#</th>                                        
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>+</th>                                        
                                        <th>#</th>                                        
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $i = 1;

                                    foreach ($servicelist as $value) {
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $value->title ?></td>  
                                            <td><img class="img-responsive" src="<?php echo base_url('./public/admin/services_img') . '/' . $value->logo ?>" style="height: 70px"></td>
                                            <td><?php echo $value->description ?></td>

                                            <td class="text-center">
                                                <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                                                    <a href="<?php echo site_url('welcome/service_view') . "/" . $value->id ?>" class="btn btn-raised btn-warning"><i class="ti-eye"></i></a>
                                                    <a href="<?php echo site_url('welcome/service_edit') . "/" . $value->id ?>" class="btn btn-raised btn-primary"><i class="ti-pencil"></i></a>
                                                    <a href="<?php echo site_url('welcome/delete_services') . "/" . $value->id ?>" class="btn btn-raised btn-danger"><i class="ti-trash"></i></a>
                                                </div>
                                            </td>

                                        </tr>

                                        <!-- /.modal starts -->
                                    <div class="modal fade" id="confirm-modal<?php echo $value->id; ?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header"> 
                                                    <div class="modal-body text-center">
                                                        <div class="text-danger">
                                                            <i class="ti-alert" style="font-size: 40px;"></i> 
                                                        </div>

                                                        <h2>Are you sure?</h2>
                                                        <p class="lead text-muted" style="display: block;">Your will not be able to recover this records!</p>
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <div class="text-center">                                                     
                                                            <a href="<?php echo site_url('welcome/delete_user') . "/" . $value->id ?>" class="confirm btn btn-lg btn-raised btn-danger">Yes, delete it!</a> 
                                                            <button type="button" class="cancel btn btn-lg btn-raised btn-default" data-dismiss="modal">Cancel</button> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </div>
                                    <!-- /.modal ends -->
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


