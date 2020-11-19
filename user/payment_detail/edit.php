<script src="<?=site_url()?>assets/plugins/jquery.validate.js"></script>   
<div class="row">
    <div class="col-md-12">
	<div class="card shadow mb-4">
<div class="card-body">
<?php //echo validation_errors();?>
<?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
<div class="form-body">

<div class="form-group row" >
	<label class="col-lg-2 control-label">Type</label>
    <div class="col-md-10">
<select name="type" class="form-control input-type" onchange="select_type()" required>
<?php
foreach($type_list as $val){
?>
<option value="<?=$val?>" <?=$val==$form_data->type?'selected':''?>><?=$val?></option>
<?php
}
?>
</select>
    </div>
</div>

<div class="bank-detail-data">
<div class="form-group row" >
<label class="col-lg-2 control-label">First Name</label>
<div class="col-md-10">
    <?=form_input('first_name', set_value('first_name', $form_data->{'first_name'}), 'class="form-control " ')?>
</div>
</div>

<div class="form-group row" >
    <label class="col-lg-2 control-label">Last Name</label>
    <div class="col-md-10">
    <?=form_input('last_name', set_value('last_name', $form_data->{'last_name'}), 'class="form-control " ')?>
    </div>
</div>

<div class="form-group row" >
    <label class="col-lg-2 control-label">Phone</label>
    <div class="col-lg-10">
        <?=form_input('phone', set_value('phone', $form_data->{'phone'}), 'class="form-control " ')?>
    </div>
</div>

<div class="form-group row" >
    <label class="col-lg-2 control-label">Bank name </label>
    <div class="col-lg-10">
		<?=form_input('bank_name', set_value('bank_name', $form_data->{'bank_name'}), 'class="form-control "')?>
    </div>
</div>

<div class="row form-group" >
    <label class="col-lg-2 control-label">Bank Country</label>
    <div class="col-lg-10">
        <select name="bank_country" class="form-control" required>
        <option value="">Select</option>
<?php
foreach($country_list as $key=>$val){
?>
<option value="<?=$val?>" <?= $form_data->{'bank_country'}==$val?'selected':''?>><?=$val?></option>
<?php
}
?>
        </select>
    </div>
</div>

<div class="row form-group" >
    <label class="col-lg-2 control-label">Account Number</label>
    <div class="col-lg-10">
		<input type="text" name="account_number" value="<?=set_value('account_number', $form_data->{'account_number'})?>"  class="form-control" required />
    </div>
</div>

<div class="row form-group" >
    <label class="col-lg-2 control-label">Swift Code</label>
    <div class="col-lg-10">
		<input type="text" name="swift_code" value="<?=set_value('swift_code', $form_data->{'swift_code'})?>"  class="form-control" required />
    </div>
</div>
</div>
<div class="paypal-detail-data " style="display:none">
<div class="form-group row" >
<label class="col-lg-2 control-label">Paypal Email ID</label>
<div class="col-md-10">
    <?=form_input('paypal_id', set_value('paypal_id', $form_data->{'paypal_id'}), 'class="form-control " ')?>
</div>
</div>
</div>
</div>
         <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-9">
        <button type="submit" class="btn btn-primary submitBtn">Save</button>
                    </div>
                </div>
            </div>
     <?=form_close()?>
            </div>
        </div>
        <!-- end panel -->
    </div>
</div>
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
function select_type(){
	val = $('.input-type').val();
	console.log(val);
	if(val=='Paypal'){
		$('.paypal-detail-data').show();
		$('.paypal-detail-data .form-control').attr('required',true);
		$('.bank-detail-data').hide();
		$('.bank-detail-data .form-control').attr('required',false);
	}
	else{
		$('.bank-detail-data').show();
		$('.bank-detail-data .form-control').attr('required',true);
		$('.paypal-detail-data').hide();
		$('.paypal-detail-data .form-control').attr('required',false);
	}
}
select_type();
</script>