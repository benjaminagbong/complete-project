<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>   
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
<?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
					<div class="form-body">                    
<div class="form-group row" >
    <label class="col-md-2 control-label">Message</label>
    <div class="col-md-10">
	    <textarea name="description" class="form-control ci-editor" required><?=set_value('description', $form_data->{'description'})?></textarea>
        <div>{report_link}</div>
    </div>
</div>	

                    
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-9">
	        <button type="submit" class="btn btn-primary submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Saving..">Save</button>
    	    <a href="<?=$_cancel;?>" class="btn btn-default" type="button">Cancel</a>
        </div>
    </div>
</div>
                 <?=form_close()?>
	<div style="clear:both"></div>
                 
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
$(".edit-form" ).validate({
    submitHandler: function (form) {
		$('.submitBtn').prop('disabled', true)
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
		$('.submitBtn').html(loadingText);
		return true;
	}
});
</script>

<link href="<?=site_url()?>assets/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
<script src="<?=site_url()?>assets/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<script>
$('.ci-editor').summernote({
	height: 300,
	toolbar: [
		['style', ['style']],
		['font', ['bold', 'italic', 'underline']],
		['para', ['ul', 'ol', 'paragraph']],
		['insert', ['link']],
	    ['view', ['fullscreen', 'codeview']],
	],
});

</script>                        
