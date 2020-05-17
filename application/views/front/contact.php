<!--==========================
  Contact Section
============================-->
<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>We provide cutting-edge custom software development services to help make business operations more efficient, collaborative, and manageable.</p>
        </div>

        <!--        <div class="row contact-info">
        
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address> B-803, Gera Emerald City North, Near World Trade Center, Kharadi Pune</address>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+91 9673428800</a></p>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">innovovision@gmail.com</a></p>
                        </div>
                    </div>
        
                </div>-->




        <!--    </div>
        
        
            <div class="container">-->

        <div class="row">
            <div class="form col-lg-8">               
                <!--<div id="sendmessage">-->
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
                <!--</div>-->
                <form action="<?= site_url('contact/save_contacts') ?>" method="post" role="form" class="contactForm">
                    <h3>Contact us Form</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input value="<?php echo set_value('name'); ?>" type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"><?php echo form_error('name'); ?></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input value="<?php echo set_value('email'); ?>" type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"><?php echo form_error('email'); ?></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input value="<?php echo set_value('address'); ?>" type="text" name="address" class="form-control" id="address" placeholder="Your Address" />
                            <div class="validation"><?php echo form_error('address'); ?></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input value="<?php echo set_value('contact'); ?>" type="number" class="form-control" name="contact" id="contact" placeholder="Your contact" />
                            <div class="validation"><?php echo form_error('contact'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input value="<?php echo set_value('country'); ?>" type="text" class="form-control" name="country" id="country" placeholder="Your Country" />
                        <div class="validation"><?php echo form_error('country'); ?></div>
                    </div>
                    <div class="form-group">
                        <input value="<?php echo set_value('subjects'); ?>" type="text" class="form-control" name="subjects" id="subjects" placeholder="Subject" />
                        <div class="validation"><?php echo form_error('subjects'); ?></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?php echo set_value('message'); ?></textarea>
                        <div class="validation"><?php echo form_error('message'); ?></div>
                    </div>
                    <div class="text-left"><button type="submit">Send Message</button></div>
                </form>
            </div> 

            <div class="col-lg-4">


                <div class="contact-info">

                    <div class="col-md-12">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <h4>Innovovision Technology Consulting Pvt. Ltd.</h4>
                            <address> B-803, Gera Emerald City North, Near World Trade Center, Kharadi, Pune, Maharashtra, India</address>
                        </div>
                    </div>

                    <!--                <div class="col-md-4">
                                        <div class="contact-phone">
                                            <i class="ion-ios-telephone-outline"></i>
                                            <h3>Phone Number</h3>
                                            <p><a href="tel:+155895548855">+91 9673428800</a></p>
                                        </div>
                                    </div>-->

                    <div class="col-md-12">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">innovovision@gmail.com</a></p>
                        </div>
                    </div>

                </div>


            </div>


        </div>   

    </div>       

<!--    <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7195.841352363202!2d85.1169665!3d25.607552000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1557131341404!5m2!1sen!2sin"  width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>        -->

</section><!-- #contact -->