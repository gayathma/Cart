<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">Edit Item</h4>
</div>
<form id="edit_item_form" name="edit_item_form">
    <div class="modal-body" style="background-color: #ffffff">
        <input type="hidden" name="item_id" value="<?php echo $item->ItemID; ?>">

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" name="name" value="<?php echo $item->ItemName; ?>"/>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" class="form-control" name="title" value="<?php echo $item->ItemTitle; ?>"/>
        </div>

        <div class="form-group">
            <label for="des">Description</label>
            <textarea id="des" class="form-control" name="des"><?php echo $item->ItemDes; ?></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input id="price" class="form-control" name="price" value="<?php echo $item->ItemPrice; ?>"/>
        </div>

        <div class="form-group">
            <label for="colour">Colour</label>
            <select id="colour" class="form-control" name="colour">
               <option value="">Select Colour</option>
               <option value="Green" <?php if($item->ItemType == "Green"){?> selected="true" <?php } ?>>Green</option>
               <option value="Black" <?php if($item->ItemType == "Black"){?> selected="true" <?php } ?>>Black</option>
               <option value="Red" <?php if($item->ItemType == "Red"){?> selected="true" <?php } ?>>Red</option>
               <option value="White" <?php if($item->ItemType == "White"){?> selected="true" <?php } ?>>White</option>
           </select>
       </div>

       <div class="form-group">
        <label for="colour">Sizes</label>
        <?php 
        $size = explode(',',$item->ItemSize);
        ?>
        <input type="checkbox" name="size[]" <?php if(in_array('S',$size)){?> checked="true" <?php } ?> value="S"/>S
        <input type="checkbox" name="size[]" <?php if(in_array('M',$size)){?> checked="true" <?php } ?> value="M"/>M
        <input type="checkbox" name="size[]" <?php if(in_array('L',$size)){?> checked="true" <?php } ?> value="L"/>L
        <input type="checkbox" name="size[]" <?php if(in_array('XL',$size)){?> checked="true" <?php } ?> value="XL"/>XL
    </div>

    <script src="<?php echo base_url(); ?>admin_resources/file_upload_plugin/ajaxupload.3.5.js"
    type="text/javascript"></script>
    <script>
                                //upload image 1
                                $(function () {
                                    var btnUpload = $('#upload_image1e');
                                    new AjaxUpload(btnUpload, {
                                        action: '<?php echo site_url(); ?>/items/upload_image',
                                        name: 'uploadfile',
                                        onSubmit: function (file, ext) {
                                            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                                // extension is not allowed
                                                toastr.error('Only JPG, PNG or GIF files are allowed');
                                                return false;
                                            }
                                        },
                                        onComplete: function (file, response) {
                                            $("#upload_image1e").html("");
                                            //Add uploaded file to list
                                            if (response != "error") {
                                                $('#imagee').val(response);
                                                $('#upload_image1e').html('<img id="wizardPicturePreviewe" height="200px" title="" class="item-img" src="<?php echo base_url(); ?>uploads/' + response + '"  />');

                                            }
                                        }
                                    });

});

                                //upload image 2
                                $(function () {
                                    var btnUpload = $('#upload_image2e');
                                    new AjaxUpload(btnUpload, {
                                        action: '<?php echo site_url(); ?>/items/upload_image',
                                        name: 'uploadfile',
                                        onSubmit: function (file, ext) {
                                            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                                // extension is not allowed
                                                toastr.error('Only JPG, PNG or GIF files are allowed');
                                                return false;
                                            }
                                        },
                                        onComplete: function (file, response) {
                                            $("#upload_image2e").html("");
                                            //Add uploaded file to list
                                            if (response != "error") {
                                                $('#image2e').val(response);
                                                $('#upload_image2e').html('<img id="wizardPicturePreview2e" height="200px" title="" class="item-img" src="<?php echo base_url(); ?>uploads/' + response + '"  />');

                                            }
                                        }
                                    });

});

                                //upload image 3
                                $(function () {
                                    var btnUpload = $('#upload_image3e');
                                    new AjaxUpload(btnUpload, {
                                        action: '<?php echo site_url(); ?>/items/upload_image',
                                        name: 'uploadfile',
                                        onSubmit: function (file, ext) {
                                            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                                // extension is not allowed
                                                toastr.error('Only JPG, PNG or GIF files are allowed');
                                                return false;
                                            }
                                        },
                                        onComplete: function (file, response) {
                                            $("#upload_image3e").html("");
                                            //Add uploaded file to list
                                            if (response != "error") {
                                                $('#image3e').val(response);
                                                $('#upload_image3e').html('<img id="wizardPicturePreview3e" height="200px" title="" class="item-img" src="<?php echo base_url(); ?>uploads/' + response + '"  />');

                                            }
                                        }
                                    });

});
</script>
<div class="col-md-4">
    <div class="form-group">
        <label for="logo">Image 1 </label>

        <div id="upload_image1e">
            <img id="wizardPicturePreviewe" height="200px" title="" class="item-img" src="<?php
            echo base_url();
            ?>uploads/<?php echo $item->ItemImg; ?>"/>
        </div>
    </div>
    <input type="hidden" id="imagee" class="form-control" name="image" value="default.jpg"/>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="logo">Image 2 </label>

        <div id="upload_image2e">
            <img id="wizardPicturePreview2e" height="200px" title="" class="item-img" src="<?php
            echo base_url();
            ?>uploads/<?php echo $item->ItemImg2; ?>"/>
        </div>
    </div>
    <input type="hidden" id="image2e" class="form-control" name="image2" value="default.jpg"/>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="logo">Image 3 </label>

        <div id="upload_image3e">
            <img id="wizardPicturePreview3e" height="200px" title="" class="item-img" src="<?php
            echo base_url();
            ?>uploads/<?php echo $item->ItemImg3; ?>"/>
        </div>
    </div>
    <input type="hidden" id="image3e" class="form-control" name="image3" value="default.jpg"/>
</div>


</div>
<div class="modal-footer" style="background-color: #ffffff">
    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
    <button class="btn btn-success" type="submit">Save</button>

</div>
</form>
<script type="text/javascript">

$("#edit_item_form").validate({
    rules: {
        name: "required",
        title: "required",
        des: "required",
        colour: "required",
        price: {
            required:true,
            number:true
        }

    }, submitHandler: function (form) {
        $.post(site_url + '/items/edit_item', $('#edit_item_form').serialize(), function (msg) {
            if (msg == 1) {
                edit_item_form.reset();
                toastr.success("Successfully saved !!", "Jäger");
                location.reload();

            } else {
                toastr.error("Error Occurred !!", "Jäger");
            }
        });
    }
});
</script>