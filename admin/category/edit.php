<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>   
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
                <?php //echo validation_errors();?>
				<?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
					<div class="form-body">                    
	
    
    <div class="form-group row" >
            <label class="col-md-2 control-label">Name</label>
            <div class="col-md-10">
				<?=form_input('name', set_value('name', $category->{'name'}), 'class="form-control"required')?>
                <span class="error-span"><?php echo form_error('name'); ?></span>
            </div>
    </div>
	</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-9">
	        <button type="submit" class="btn btn-primary submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?=show_static_text($lang_id,235)?>"><?=show_static_text($lang_id,235)?></button>
    	    <a href="<?=$_cancel;?>" class="btn btn-default" type="button"><?=show_static_text($adminLangSession['lang_id'],22);?></a>
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
</script>


<script type="text/javascript">
$(".edit-form" ).validate({

    submitHandler: function (form) {
		$(".submitBtn").button('loading');
		return true;
	}
});
</script>

