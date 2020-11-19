<script src="<?=site_url()?>assets/plugins/jquery.validate.js"></script>   
<div class="row">
    <div class="col-md-12">
	<div class="card shadow mb-4">
<div class="card-body">
<?php //echo validation_errors();?>
<?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
<div class="form-body">
<div class="form-group row" >
	<label class="col-md-2 control-label" style="padding-top:0">Email</label>
    <div class="col-md-10">
	    <?=$user_details->{'email'}?>
    </div>
</div>


    <div class="form-group row" >
	<label class="col-md-2 control-label">First Name</label>
    <div class="col-md-10">
	    <?=form_input('first_name', set_value('first_name', $user_details->{'first_name'}), 'class="form-control " readonly')?>
    </div>
</div>
	
    <div class="form-group row" >
        <label class="col-md-2 control-label">Last Name</label>
        <div class="col-md-10">
        <?=form_input('last_name', set_value('last_name', $user_details->{'last_name'}), 'class="form-control " readonly')?>
        </div>
    </div>

    <div class="form-group row" >
        <label class="col-md-2 control-label">Phone</label>
	    <div class="col-md-10">
    	    <?=form_input('phone', set_value('phone', $user_details->{'phone'}), 'class="form-control " readonly')?>
        </div>
    </div>

    <div class="form-group row" >
        <label class="col-md-2 control-label">Address</label>
	    <div class="col-md-10">
    	    <?=form_input('address', set_value('address', $user_details->{'address'}), 'class="form-control "')?>
        	<span class="error-span"><?php echo form_error('address'); ?></span>
        </div>
    </div>

    <div class="row form-group" >
        <label class="col-md-2 control-label">Country</label>
        <div class="col-md-10">
            <select name="country" class="form-control" required>
            <option value="">Select</option>
<?php
foreach($country_list as $key=>$val){
?>
    <option value="<?=$val?>" <?= $user_details->{'country'}==$val?'selected':''?>><?=$val?></option>
<?php
}
?>
            </select>
            <span class="error-span"><?php echo form_error('country'); ?></span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label class=" control-label">Image</label>
        </div>
            <div class="col-md-10">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
    <img src="<?=!empty($user_details->image) ? base_url('assets/uploads/users/thumbnails').'/'.$user_details->image:'assets/uploads/no-image.gif'; ?>" />
            </div>
            <div>
            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
            <input type="file" name="image" ></span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
        </div>
        </div>
            <!--<input type="file" name="logo" id="logo" />-->
      </div>
        </div>
</div>
         <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-9">
        <button type="submit" class="btn btn-primary submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Update">Update</button>
                    </div>
                </div>
            </div>
     <?=form_close()?>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
<link href="<?=site_url()?>assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="<?=site_url()?>assets/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript" language="javascript"></script> 

<script>
$('.edit-form').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});

$( ".edit-form" ).validate({
	submitHandler: function (form) {
//		$(".submitBtn").button('loading');
		$('.submitBtn').prop('disabled', true)
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
		$('.submitBtn').html(loadingText);
		return true;
	}
});

</script>