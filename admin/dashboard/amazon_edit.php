<script src="<?=site_url()?>assets/plugins/jquery.validate.js"></script>   
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
                 <?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
                <div class="form-body">	                    
<div class="form-group row">
    <label class="col-md-2 control-label">SMTP Host</label>
    <div class="col-md-9">
       <?=form_input('smtp_host', set_value('smtp_host', $form_data->smtp_host), 'class="form-control" required')?>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 control-label">SMTP User</label>
    <div class="col-md-9">
      <?=form_input('smtp_user', set_value('smtp_user', $form_data->smtp_user), 'class="form-control" required')?>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 control-label">SMTP Password</label>
    <div class="col-md-9">
      <?=form_input('smtp_password', set_value('smtp_password',$form_data->smtp_password), 'class="form-control" required')?>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 control-label">SMTP Port</label>
    <div class="col-md-9">
      <?=form_input('smtp_port', set_value('smtp_port',$form_data->smtp_port), 'class="form-control" required')?>
    </div>
</div>

                </div>
                    
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
        <button type="submit" class="btn btn-primary submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Saving">Update</button>
                        </div>
                    </div>
				</div>                    
            </form>
            </div>
        </div>
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

</script>