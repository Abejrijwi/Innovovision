<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Manage Contact us Query</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Innovovision</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Manage Contacts</li>
            </ol>
        </div>
        <!--          <div class="pull-right">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-outline"><img src="<?php echo base_url("public/admin/"); ?>build/images/flags/us.jpg" alt="" class="flag-icon">English</button>
                      <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                      <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                        <li><a href="#"><img src="<?php echo base_url("public/admin/"); ?>build/images/flags/de.jpg" alt="" class="flag-icon">German</a></li>
                        <li><a href="#"><img src="<?php echo base_url("public/admin/"); ?>build/images/flags/fr.jpg" alt="" class="flag-icon">French</a></li>
                        <li><a href="#"><img src="<?php echo base_url("public/admin/"); ?>build/images/flags/es.jpg" alt="" class="flag-icon">Spanish</a></li>
                        <li><a href="#"><img src="<?php echo base_url("public/admin/"); ?>build/images/flags/it.jpg" alt="" class="flag-icon">Italian</a></li>
                        <li><a href="#"><img src="<?php echo base_url("public/admin/"); ?>build/images/flags/jp.jpg" alt="" class="flag-icon">Japanese</a></li>
                      </ul>
                    </div>
                  </div>-->
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
                if (empty($contact)) {
                    ?>
                    <div class="box-body">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-info"></i> Alert!</h4>
                            Currently There is no Contacts.
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
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Subject</th>                                   
                                        <th>Message</th>                                   
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>+</th>                                        
                                        <th>#</th>                                        
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Subject</th>                                   
                                        <th>Message</th>                                   
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($contact as $value) {
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $value->first_name ?></td>
                                            <td><?php echo $value->address ?></td>
                                            <td><?php echo $value->country ?></td>
                                            <td><?php echo $value->email ?></td>
                                            <td><?php echo $value->mobile ?></td>
                                            <td><?php echo $value->subject ?></td>
                                            <td><?php echo $value->message ?></td>
                                            <td>
                                                <button  type="button" data-toggle="modal" data-target="#confirm-modal<?php echo $value->id; ?>" class="btn btn-danger btn-sm"><i class="ti-trash"></i></button>
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
                                                        <p class="lead text-muted" style="display: block;">Your will not be able to recover this file!</p>
                                                    </div>
                                                    <div class="modal-footer"> 
                                                        <div class="text-center">                                                     
                                                            <a href="<?php echo site_url('welcome/delete_contact') . "/" . $value->id ?>" class="confirm btn btn-lg btn-raised btn-danger">Yes, delete it!</a> 
                                                            <button type="button" class="cancel btn btn-lg btn-raised btn-default" data-dismiss="modal">Cancel</button> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal ends -->
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>


