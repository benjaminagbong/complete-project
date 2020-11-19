<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
			<?php echo validation_errors(); ?>
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
					<input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" value="<?=set_value('gps', $settings['gps'])?>" id="inputGps" name="gps">
                <div class="form-body">
                    <div class="form-group row">
                      <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],253);?></label>
                      <div class="col-md-3">
				      	<div class="fileinput fileinput-new" data-provides="fileinput">
							<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                <?php echo !isset($settings['logo']) ? '<img src="assets/uploads/no-image.gif">' :'<img src="'.base_url('assets/uploads/sites').'/'.$settings['logo'].'" >'; ?>
                            </div>
							<div>
						    <span class="btn btn-default btn-file"><span class="fileinput-new"><?=show_static_text($adminLangSession['lang_id'],159);?></span><span class="fileinput-exists"><?=show_static_text($adminLangSession['lang_id'],160);?></span>
    	    	            <input type="file" name="logo" id="logo"></span>
						    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><?=show_static_text($adminLangSession['lang_id'],109);?></a>
                                <?php
                                if(!empty($settings['logo'])){
                                	echo '<a class="btn " href="'.$admin_link.'/account/remove_image?logo='.$settings['logo'].'" onclick="" >'.show_static_text($adminLangSession['lang_id'],109).'</a>';
                                }
                                ?>
                     	</div>
                   		</div>
                            <!--<input type="file" name="logo" id="logo" />-->
                      </div>
                    </div>
                    <hr>
                    

<div class="form-group row">
                        
                        <label class="col-sm-2 control-label"><?=show_static_text($adminLangSession['lang_id'],246);?><br>(To send message)</label>
                        <div class="col-sm-4">
                            <input type="email" name="site_email" class="form-control" placeholder="Site Email" value="<?php echo set_value('site_email', isset($settings['site_email'])?$settings['site_email']:'');?>" >
                        </div>
                        
                            <label class="col-sm-2 control-label"><?=show_static_text($adminLangSession['lang_id'],1000);?>Email<br>(To receive message)</label>
                            <div class="col-sm-4">
                                <input type="email" name="reveice_email" class="form-control" placeholder="" value="<?php echo set_value('reveice_email', isset($settings['reveice_email'])?$settings['reveice_email']:'');?>" >
                            </div>
                    </div>                    
                    <div class="form-group row">
                        <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],251);?></label>
                        <div class="col-md-4">
							<?php echo form_dropdown('website_active', array('1'=>"Online",'0'=>"Offline"),$settings['website_active'], 'class="form-control" '); ?>
                        </div>
                        
                        <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],82);?></label>
                        <div class="col-md-4">
                           <?=form_input('phone', set_value('phone', isset($settings['phone'])?$settings['phone']:''), 'class="form-control" id="Phone" placeholder="Phone"')?>
                        </div>
                        
                        
                        
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],250);?></label>
                        <div class="col-md-4">
							<textarea name="analytic_code" class="form-control"  style="height:100px" > <?=isset($settings['analytic_code'])?$settings['analytic_code']:'';?></textarea>
                        </div>
                                                
                    </div>
                    
                    <hr>
                    
                    
                    <h5>Translation data</h5>
                    <hr>
                    
                    <div class="form-group row">
                        <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],245);?></label>
                        <div class="col-md-4">
                           <?=form_input('site_name', set_value('site_name', isset($settings['site_name'])?$settings['site_name']:''), 'class="form-control"  placeholder="Site Name"')?>
                        </div>
                        
                        <label class="col-sm-2 control-label"><?=show_static_text($adminLangSession['lang_id'],247);?></label>
                        <div class="col-sm-4">
                            <input type="text" name="meta_title" class="form-control" placeholder="Mate Title Name" value="<?php echo set_value('meta_title', isset($settings['meta_title'])?$settings['meta_title']:'');?>" >
                        </div>
                        
                    </div>
                    
                    <div class="form-group row">
                        
                        <label class="col-sm-2 control-label"><?=show_static_text($adminLangSession['lang_id'],27);?></label>
                        <div class="col-sm-10">
                            <input type="text" name="keywords" class="form-control bootstrap-tagsinput" placeholder="Keywords" value="<?php echo set_value('keywords', isset($settings['keywords'])?$settings['keywords']:'');?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?=show_static_text($adminLangSession['lang_id'],248);?></label>
                        <div class="col-sm-10">
                            <textarea name="meta_description" class="form-control"><?php echo set_value('meta_description', isset($settings['meta_description'])?$settings['meta_description']:'');?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],249);?></label>
                        <div class="col-md-4">
                           <?=form_input('home_title', set_value('home_title', isset($settings['home_title'])?$settings['home_title']:''), 'class="form-control" id="facebook_url" placeholder="Home Title"')?>
                        </div>
                    
                        <label class="col-sm-2 control-label"><?=show_static_text($adminLangSession['lang_id'],46);?></label>
                        <div class="col-sm-4">
                            <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo set_value('address', isset($settings['address'])?$settings['address']:'');?>" >
                        </div>
                                                
                    </div>
                    
                    
					<div class="form-group row">
                        <label class="col-md-2 control-label"><?=show_static_text($adminLangSession['lang_id'],252);?></label>
                        <div class="col-md-10">
							<textarea name="website_desc" class="form-control ci-editor"  style="height:100px" > <?=isset($settings['website_desc'])?$settings['website_desc']:'';?></textarea>
                        </div>
                    </div>
                </div>
                    
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-9">
                            <button type="submit" class="btn btn-primary btn-label-left"><?=show_static_text($adminLangSession['lang_id'],56);?></button>
                        </div>
                    </div>
				</div>                    
            </form>
            </div>
        </div>
    </div>
</div>


<style>
.gmap{
    margin:0 auto;
    border:1px dashed #C0C0C0;
    width:68%;
    height:250px;
}
</style>


<link href="<?=site_url()?>assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
<script src="<?=site_url()?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<script>
$('.ci-editor').summernote({
	height: 300,
	toolbar: [
		['style', ['style']],
		['font', ['bold', 'italic', 'underline']],
		['para', ['ul', 'ol', 'paragraph']],
	],
});

</script>                        



<link href="<?=site_url()?>assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="<?=site_url()?>assets/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript" language="javascript"></script> 

<script type="text/javascript">
function delete_file(id){
	var id = id;
	if(id){
		$.ajax({
			type: "POST",
			url: "<?=$admin_link?>/account/remove_image", /* The country id will be sent to this file */
			dataType: "json",
		   	data: {id:id,<?=$this->security->get_csrf_token_name();?>:'<?=$this->security->get_csrf_hash();?>'},
			success: function(msg){
				if(msg['result']=='success'){
				   $('.remove_'+id).remove();
				}
			}
	   });
		
	}
}

</script>
