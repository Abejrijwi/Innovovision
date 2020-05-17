<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Add Users</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Innovovision</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Add Users</li>
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
                        <h3 class="widget-title">User Form</h3>
                    </div>
                    <div class="widget-body">

                        <form class="col-md-6" id="adduser" action="<?php echo site_url('welcome/user_process'); ?>" method="post">

                            <form id="adduser" action="<?php echo site_url('Users/add_user_process'); ?>" method="post">

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Name:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input  type="text" name="name" id="name" class="form-control boxed" placeholder="Enter Name" value="<?php echo set_value('name'); ?>"> 
                                        <div style="color: coral "> <?php echo form_error('name'); ?></div>
                                    </div>
                                </div>


                                <!--                            <div class="form-group row"> 
                                                                <label class="col-sm-2 form-control-label text-xs-right">
                                                                    Salary:
                                                                </label>
                                                                <div class="col-sm-10"> 
                                                                    <input  type="text" name="salary" id="salary" class="form-control boxed" placeholder="Enter Name" value="<?php echo set_value('salary'); ?>"> 
                                                                    <div style="color: coral "> <?php echo form_error('salary'); ?></div>
                                                                </div>
                                                            </div>-->

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Gender:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <div> 
                                            <label>
                                                <input class="radio" name="gender" id="gender" type="radio" value="Male" <?php echo set_value('gender') == "Male" ? 'checked=""' : ""; ?>>
                                                <span>Male</span>
                                            </label>
                                            <label>
                                                <input class="radio" name="gender" id="gender" type="radio" value="Female" <?php echo set_value('gender') == "Female" ? 'checked=""' : ""; ?>>
                                                <span>Female</span>
                                            </label>
                                        </div> 
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Address:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="text" name="address" id="address" class="form-control boxed"placeholder="Enter Address" value="<?php echo set_value('address'); ?>">
                                        <div style="color: coral "> <?php echo form_error('address'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        City:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="text" name="city" id="city"  class="form-control boxed" placeholder="Enter City Name"value="<?php echo set_value('city'); ?>">
                                        <div style="color: coral "> <?php echo form_error('address'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        State:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="text" name="state" id="state"  class="form-control boxed" placeholder="Enter State Name" value="<?php echo set_value('state'); ?>">
                                        <div style="color: coral "> <?php echo form_error('state'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Country:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="text" name="country" id="country"  class="form-control boxed" placeholder="Enter Country Name"value="<?php echo set_value('country'); ?>">
                                        <div style="color: coral "> <?php echo form_error('country'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        User Id/Email:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="email" name="username" id="username" class="form-control boxed" placeholder="Enter Email Id as a User Name" value="<?php echo set_value('username'); ?>"> 
                                        <div style="color: coral "> <?php echo form_error('username'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Password:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="password" name="password" id="password" class="form-control boxed" placeholder="Enter Password"value="<?php echo set_value('password'); ?>">
                                        <div style="color: coral "> <?php echo form_error('password'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Re-Password:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="password" name="repassword" id="repassword" class="form-control boxed" placeholder="Enter Re-Password"value="<?php echo set_value('repassword'); ?>">
                                        <div style="color: coral "> <?php echo form_error('repassword'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Mobile No.:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <input type="text" name="mobile" id="mobile"  class="form-control boxed" placeholder="Enter Mobile Number" value="<?php echo set_value('mobile'); ?>">
                                        <div style="color: coral "> <?php echo form_error('mobile'); ?></div>
                                    </div>
                                </div>

                                
                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        User Role:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <select name="role" id="role" class="form-control">
                                            <option selected value="" disabled="">--Select Role--</option>
                                            <?php foreach ($role as $val) {
                                                ?>
                                                <option <?php if (set_value('role') == $val->id) echo 'selected=""'; ?> value="<?php echo $val->id; ?>"><?php echo $val->user_name; ?></option>
                                            <?php } ?>
                                        </select> 
                                        <div style="color: coral "> <?php echo form_error('role'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group row"> 
                                    <label class="col-sm-2 form-control-label text-xs-right">
                                        Status:
                                    </label>
                                    <div class="col-sm-10"> 
                                        <select name="status" id="status" class="c-select form-control boxed">
                                            <option selected value="" disabled="">--Select Status--</option>
                                            <option <?php if (set_value('status') == 1) echo 'selected=""'; ?> value="1">Approve</option>
                                            <option <?php if (set_value('status') == 0) echo 'selected=""'; ?> value="0">Reject</option>
                                        </select> 
                                        <div style="color: coral "> <?php echo form_error('status'); ?></div>
                                    </div>
                                </div>                            

                                <div class="form-group marg-top-20">
                                    <br/>
                                    <br/>
                                    <input type="submit" name="submit" id="submit" class="btn btn-raised btn-primary" value="Submit"> 
                                    <a href="<?php echo site_url('welcome/manage_users') ?>" class="btn btn-raised btn-default">Back</a>                            
                                </div>

                                <div class="clearfix"></div>

                            </form>
                            <div class="clearfix"></div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


