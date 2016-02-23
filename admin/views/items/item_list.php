<div class="row">
    <div class="col-sm-12">
        <div>
            <header class="panel-heading" style="padding:0;margin:0;">
                <div class="col-md-4" style="padding:0;margin:0;"><a
                        href="<?php echo site_url(); ?>/login/load_login"><i
                            class="fa fa-arrow-left"></i>Workspace</a></div>
                <div class="col-md-4" style="text-align: CENTER;margin-bottom: 40px !important;">

                </div>
                <div class="col-md-4 rl" style="padding:0;margin:0;">Items</div>
            </header>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 bk">
        <div class="panel">
            <div class="large" id="question_list">
                <div class="small" id="add_new" onclick="$('#add_item_modal').modal('show')">
                    <h3>Click to add Item here</h3>
                </div>
                <?php
                $i = 0;
                foreach ($items as $item):
                    ?>
                    <div class="line-holder" id="item_<?php echo $item->ItemID; ?>">

                        <span class="numbering"><?php echo++$i; ?></span>

                        <div class="line">
                            <?php echo $item->ItemName . '- (Rs. ' . $item->ItemPrice . ')'; ?>
                            <div class="btn-holder">

                                <a class="bt"
                                   onclick="edit_item(<?php echo $item->ItemID; ?>)">
                                    <i class="fa fa-pencil" title="Update"></i>
                                </a>
                                <a class="bt" onclick="delete_item(<?php echo $item->ItemID; ?>)">
                                    <i class="fa fa-trash-o " title="Delete"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>


<!--Item Edit Modal -->
<div class="modal fade " id="item_edit_div" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" id="item_edit_content">

    </div>
</div>

<!--Item Add Modal -->
<div class="modal fade " id="add_item_modal" tabindex="-1" role="dialog" aria-labelledby="add_item_modal_label"
     aria-hidden="true">
    <div class="modal-dialog">
        <form id="add_item_form" name="add_item_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="q_cat_title">Add New Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12" style="border-right: 1px solid #F3F3F3;">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" name="name"/>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" name="title"/>
                            </div>

                            <div class="form-group">
                                <label for="des">Description</label>
                                <textarea id="des" class="form-control" name="des"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" name="price"/>
                            </div>

                            <div class="form-group">
                                <label for="colour">Colour</label>
                                <select id="colour" class="form-control" name="colour">
                                    <option value="">Select Colour</option>
                                    <option value="Green">Green</option>
                                    <option value="Black">Black</option>
                                    <option value="Red">Red</option>
                                    <option value="White">White</option>
                                    <option value="Purple">Purple</option>
                                    <option value="Brown">Brown</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="colour">Sizes</label>
                                <input type="checkbox" name="size[]" value="S"/>S
                                <input type="checkbox" name="size[]" value="M"/>M
                                <input type="checkbox" name="size[]" value="L"/>L
                                <input type="checkbox" name="size[]" value="XL"/>XL
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="checkbox" name="type_b[]" value="Girls"/>Girls
                                <input type="checkbox" name="type_b[]" value="Guys"/>Guys
                            </div>

                            <script src="<?php echo base_url(); ?>admin_resources/file_upload_plugin/ajaxupload.3.5.js"
                            type="text/javascript"></script>
                            <script>
                    //upload image 1
                    $(function() {
                        var btnUpload = $('#upload_image1');
                        new AjaxUpload(btnUpload, {
                            action: '<?php echo site_url(); ?>/items/upload_image',
                            name: 'uploadfile',
                            onSubmit: function(file, ext) {
                                if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                    // extension is not allowed
                                    toastr.error('Only JPG, PNG or GIF files are allowed');
                                    return false;
                                }
                            },
                            onComplete: function(file, response) {
                                $("#upload_image1").html("");
                                //Add uploaded file to list
                                if (response != "error") {
                                    $('#image').val(response);
                                    $('#upload_image1').html('<img id="wizardPicturePreview" height="200px" title="" class="item-img" src="<?php echo base_url(); ?>uploads/' + response + '"  />');

                                }
                            }
                        });

                    });

                    //upload image 2
                    $(function() {
                        var btnUpload = $('#upload_image2');
                        new AjaxUpload(btnUpload, {
                            action: '<?php echo site_url(); ?>/items/upload_image',
                            name: 'uploadfile',
                            onSubmit: function(file, ext) {
                                if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                    // extension is not allowed
                                    toastr.error('Only JPG, PNG or GIF files are allowed');
                                    return false;
                                }
                            },
                            onComplete: function(file, response) {
                                $("#upload_image2").html("");
                                //Add uploaded file to list
                                if (response != "error") {
                                    $('#image2').val(response);
                                    $('#upload_image2').html('<img id="wizardPicturePreview2" height="200px" title="" class="item-img" src="<?php echo base_url(); ?>uploads/' + response + '"  />');

                                }
                            }
                        });

                    });

                    //upload image 3
                    $(function() {
                        var btnUpload = $('#upload_image3');
                        new AjaxUpload(btnUpload, {
                            action: '<?php echo site_url(); ?>/items/upload_image',
                            name: 'uploadfile',
                            onSubmit: function(file, ext) {
                                if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                    // extension is not allowed
                                    toastr.error('Only JPG, PNG or GIF files are allowed');
                                    return false;
                                }
                            },
                            onComplete: function(file, response) {
                                $("#upload_image3").html("");
                                //Add uploaded file to list
                                if (response != "error") {
                                    $('#image3').val(response);
                                    $('#upload_image3').html('<img id="wizardPicturePreview3" height="200px" title="" class="item-img" src="<?php echo base_url(); ?>uploads/' + response + '"  />');

                                }
                            }
                        });

                    });
                            </script>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Image 1 </label>

                                    <div id="upload_image1">
                                        <img id="wizardPicturePreview" height="200px" title="" class="item-img" src="<?php
                                        echo base_url();
                                        ?>uploads/default.jpg"/>
                                    </div>
                                </div>
                                <input type="hidden" id="image" class="form-control" name="image" value="default.jpg"/>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Image 2 </label>

                                    <div id="upload_image2">
                                        <img id="wizardPicturePreview2" height="200px" title="" class="item-img" src="<?php
                                        echo base_url();
                                        ?>uploads/default.jpg"/>
                                    </div>
                                </div>
                                <input type="hidden" id="image2" class="form-control" name="image2" value="default.jpg"/>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Image 3 </label>

                                    <div id="upload_image3">
                                        <img id="wizardPicturePreview3" height="200px" title="" class="item-img" src="<?php
                                        echo base_url();
                                        ?>uploads/default.jpg"/>
                                    </div>
                                </div>
                                <input type="hidden" id="image3" class="form-control" name="image3" value="default.jpg"/>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-primary" type="submit">Save</button>

                    </div>
                </div>
        </form>
    </div>
</div>
<!-- modal -->


<script type="text/javascript">
    $(document).ready(function($) {

        //add new item form validation
        $("#add_item_form").validate({
            rules: {
                name: "required",
                title: "required",
                des: "required",
                colour: "required",
                price: {
                    required: true,
                    number: true
                }
            },
            submitHandler: function(form) {
                $.post(site_url + '/items/save_item', $('#add_item_form').serialize(), function(msg) {
                    if (msg == 1) {
                        toastr.success("Successfully saved !!", "Jäger");
                        location.reload();
                    } else {
                        toastr.error("Error Occurred !!", "Jäger");
                    }
                });


            }
        });

    });

    //Edit Item
    function edit_item(item_id) {

        $.post(site_url + '/items/load_edit_item_content', {item_id: item_id}, function(msg) {

            $('#item_edit_content').html('');
            $('#item_edit_content').html(msg);
            $('#item_edit_div').modal('show');
        });
    }


    //delete item
    function delete_item(id) {

        swal({
            title: "Are you sure?",
            text: "You want to delete this Item?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1abc9c",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function() {

            $.ajax({
                type: "POST",
                url: site_url + '/items/delete_item',
                data: "id=" + id,
                success: function(msg) {
                    if (msg == 1) {
                        $('#item_' + id).hide();
                        swal("Deleted!", "Your item has been deleted.", "success");
                    }
                    else if (msg == 2) {
                        swal("Error!", "Cannot be deleted as it is already assigned.", "error");

                    }
                }
            });
        });
    }
</script>
