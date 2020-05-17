<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<div class="page-container">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h4 class="mt-0 mb-5">Settings</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="<?php echo site_url('welcome') ?>">Home</a></li>
                <li><a href="#">Settings</a></li>
            </ol>
        </div>
    </div>
    <div class="page-content container-fluid">
        <h3 class="mt-0">Settings</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-heading">

                        <div class="successmsg"></div>

                        <?php
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

                    </div>
                    <div class="widget-body">

                        <form class="form form-horizontal" id="about_form1" action="<?= site_url('welcome/save_about_content') ?>" method="post" enctype="multipart/form-data">

                            <hr class="col-sm-12"><br><br><br>

                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span class="icon icon-info-circle icon-lg"></span>
                                <!--<small>In any form it is enough to set the attribute <code>data-toggle="validator"</code> and the rest will be taken care by the plugin itself, even if the form is horizontal. If a field has-->
                                <strong>Edit</strong> 
                                <strong>About Content</strong> 
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control class_ckeditor" name="about_contnt"  id="editor_box2" value="" placeholder="Enter About Content">
                                        <?php
                                        if ($contents[0]->page == 'about' && $contents[0]->content != '')
                                            echo $contents[0]->content;
                                        ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <div class="col-sm-3" style="margin-left: 172px;">
                                    <input class="btn btn-primary btn-block" name="submit" type="submit" value="Save Change">
                                </div>
                            </div>


                            <hr class="col-sm-12"><br><br><br>
                        </form>  

                        <form class="form form-horizontal" id="about_form111" action="<?= site_url('welcome/updateAddress') ?>" method="post" enctype="multipart/form-data">

                            <hr class="col-sm-12"><br><br><br>

                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span class="icon icon-info-circle icon-lg"></span>
                                <!--<small>In any form it is enough to set the attribute <code>data-toggle="validator"</code> and the rest will be taken care by the plugin itself, even if the form is horizontal. If a field has-->
                                <strong>Edit</strong> 
                                <strong>Contact Address</strong> 
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control class_ckeditor" name="address"  id="editor_box" value="" placeholder="Enter Address">
                                        <?php
                                        if ($contents[1]->page == 'contact' && $contents[1]->content != '')
                                            echo $contents[1]->content;
                                        ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <div class="col-sm-3" style="margin-left: 172px;">
                                    <input class="btn btn-primary btn-block" name="submit" type="submit" value="Save Change">
                                </div>
                            </div>


                            <hr class="col-sm-12"><br><br><br>
                        </form>  

                        <form class="form form-horizontal" id="about_form111" action="<?= site_url('welcome/updateEmail') ?>" method="post" enctype="multipart/form-data">

                            <hr class="col-sm-12"><br><br><br>

                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span class="icon icon-info-circle icon-lg"></span>
                                <!--<small>In any form it is enough to set the attribute <code>data-toggle="validator"</code> and the rest will be taken care by the plugin itself, even if the form is horizontal. If a field has-->
                                <strong>Edit</strong> 
                                <strong>Contact Email</strong> 
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="
                                    <?php
                                    if ($contents[2]->page == 'email' && $contents[2]->content != '')
                                        echo $contents[2]->content;
                                    ?>" />
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <div class="col-sm-3" style="margin-left: 172px;">
                                    <input class="btn btn-primary btn-block" name="submit" type="submit" value="Save Change">
                                </div>
                            </div>


                            <hr class="col-sm-12"><br><br><br>
                        </form>  



                        <form class="form form-horizontal" id="about_form111" action="<?= site_url('welcome/updateCopy') ?>" method="post" enctype="multipart/form-data">

                            <hr class="col-sm-12"><br><br><br>

                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span class="icon icon-info-circle icon-lg"></span>
                                <!--<small>In any form it is enough to set the attribute <code>data-toggle="validator"</code> and the rest will be taken care by the plugin itself, even if the form is horizontal. If a field has-->
                                <strong>Edit</strong> 
                                <strong> Copy Right</strong> 
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Copy Right</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="copy_right" id="copy_right" placeholder="Enter Copy right" value="<?php
                                    if ($contents[3]->page == 'copy' && $contents[3]->content != '')
                                        echo $contents[3]->content;
                                    ?>" />
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <div class="col-sm-3" style="margin-left: 172px;">
                                    <input class="btn btn-primary btn-block" name="submit" type="submit" value="Save Change">
                                </div>
                            </div>


                            <hr class="col-sm-12"><br><br><br>
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

    // Sample: Massive Inline Editing

    // This code is generally not necessary, but it is here to demonstrate
    // how to customize specific editor instances on the fly. This fits this
    // demo well because some editable elements (like headers) may
    // require a smaller number of features.

    // The "instanceCreated" event is fired for every editor instance created.
    CKEDITOR.on('instanceCreated', function (event) {
        var editor = event.editor,
                element = editor.element;

        // Customize editors for headers and tag list.
        // These editors do not need features like smileys, templates, iframes etc.
        if (element.is('h1', 'h2', 'h3') || element.getAttribute('id') == 'taglist') {
            // Customize the editor configuration on "configLoaded" event,
            // which is fired after the configuration file loading and
            // execution. This makes it possible to change the
            // configuration before the editor initialization takes place.
            editor.on('configLoaded', function () {

                // Remove redundant plugins to make the editor simpler.
                editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                        'forms,iframe,image,newpage,removeformat,' +
                        'smiley,specialchar,stylescombo,templates';

                // Rearrange the toolbar layout.
                editor.config.toolbarGroups = [{
                        name: 'editing',
                        groups: ['basicstyles', 'links']
                    },
                    {
                        name: 'undo'
                    },
                    {
                        name: 'clipboard',
                        groups: ['selection', 'clipboard']
                    },
                    {
                        name: 'about'
                    }
                ];
            });
        }
    });



    $("#descrp").focusout(function () {
        var discrData = $(this).html();
        $.ajax({
            url: "<?php echo site_url('welcome/updateDescription') ?>",
            data: 'discrData=' + discrData,
            success: function (response) {
                if (response === "success") {
                    $('#descrp').html(discrData);
                }
            }
        });

    });

    $(function () {
        $("#about_form").submit(function (event) {

            for (instance in CKEDITOR.instances)
            {
                CKEDITOR.instances[instance].updateElement();
            }


            event.preventDefault();
            var form = $('#about_form');
            var url = '<?php echo site_url('welcome/save_about_contnt') ?>';
            $.ajax({
                url: url,
                type: $(this).attr("method"),
                dataType: "JSON",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data) {

                    if (data.st == 0) {
                        var successmsg = '<div class="box-body">';
                        successmsg += '<div class="alert alert-success alert-dismissable">';
                        successmsg += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">Ã—</button>';
                        successmsg += '<h4>	<i class="icon fa fa-check"></i> Alert!</h4>';
                        successmsg += data.msg;
                        successmsg += '</div>';
                        successmsg += '</div>';
                        $('.successmsg').html(successmsg);
                    }
                    if (data.st == 1) {
                        $("#about_form")[0].reset();
                        var successmsg = '<div class="box-body">';
                        successmsg += '<div class="alert alert-success alert-dismissable">';
                        successmsg += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">Ã—</button>';
                        successmsg += '<h4>	<i class="icon fa fa-check"></i> Alert!</h4>';
                        successmsg += data.msg;
                        successmsg += '</div>';
                        successmsg += '</div>';
                        $('.successmsg').html(successmsg);
                    }
                }
            });
        });
    });
</script>
<script>

    CKEDITOR.replace('editor_box2');
    CKEDITOR.replace('editor_box');

</script>
