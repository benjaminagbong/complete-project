<style>
.files-list { 
    list-style-type: none;
    margin: 0;
    padding: 0;
	margin-top:10px;
    width: 100%; 
}
.files-list li{
    margin-bottom:5px; 
	
    padding: 10px; 
    display:block;
    height: auto;
    border:1px solid #E5E5E5;
    position:relative;
}

.files-list li .btn-close{
	position:absolute;
	top:0;
	right:0;
	width: 44px;
    height: 34px;
}


.img-list{ 
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%; 
}
.img-list li{
    margin: 3px 3px 3px 0; 
    padding: 1px; 
    display:block;
    float: left; 
    width: 164px; 
    height: auto;
    border:1px solid #E5E5E5;
    cursor: move;
    position:relative;
}

.img-list li .btn-default{
    text-align:center;
	padding:4px 10px;
}

.img-list li:hover{
    background: #F5F5F5;
}

</style>
<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>   

<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-body">
<?php //echo validation_errors();?>
<?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
<div id="more_pic"></div>
<div class="form-body">

<div class="form-group row" >
	<label class="col-md-3 control-label" >Currency</label>
    <div class="col-md-9">
<select name="currency" class="form-control" required>
<option value="">Select</option>
<?php
foreach($currency_list as $set_val){
?>
<option value="<?=$set_val?>" <?=$set_val==$form_data->{'currency'}?'selected':''?>><?=$set_val?></option>
<?php
}
?>                
</select>	    
    </div>
</div>

<div class="form-group row" >
	<label class="col-md-3 control-label" >Funds Required</label>
    <div class="col-md-9">
	    <input type="number" name="campaign_funds" value="<?=set_value('campaign_funds', $form_data->{'campaign_funds'})?>" class="form-control " min="1" required>
    </div>
</div>

<div class="form-group row" >
	<label class="col-md-3 control-label" >Title</label>
    <div class="col-md-9">
		<?=form_input('name', set_value('name', $form_data->{'name'}), 'class="form-control " required')?>
    </div>
</div>


<div class="form-group row" >
	<label class="col-md-3 control-label" >Who are you raising money for?</label>
    <div class="col-md-9">
		<select name="money_for" class="form-control" required>
            	<option value="">Select</option>
<?php
foreach($money_for as $set_val){
?>
	<option value="<?=$set_val?>" <?=$set_val==$form_data->{'money_for'}?'selected':''?>><?=$set_val?></option>
<?php
}
?>                
            </select>    
    </div>
</div>

<div class="form-group row" >
	<label class="col-md-3 control-label" >Beneficiary Name</label>
    <div class="col-md-9">
		<div class="row" >
		    <div class="col-md-6">
				<?=form_input('b_f_name', set_value('b_f_name', $form_data->{'b_f_name'}), 'class="form-control " placeholder="First Name" required')?>
		    </div>
		    <div class="col-md-6">
		<?=form_input('b_l_name', set_value('b_l_name', $form_data->{'b_l_name'}), 'class="form-control " placeholder="Last Name" required')?>
		    </div>
	    </div>
        
    </div>
</div>
	
<div class="form-group row" >
	<label class="col-md-3 control-label" >Category</label>
    <div class="col-md-9">
		<select name="category" class="form-control" required>
            	<option value="">Select</option>
<?php
if($category){
foreach($category as $set_category){
	$category_name	= print_value('categories',array('id'=>$set_category->id),'name');
//echo $category_name;
?>
	<option value="<?=$set_category->id?>" <?=$set_category->id==$form_data->{'category'}?'selected':''?>><?=$category_name?></option>
<?php
}
}
?>                
            </select>    
    </div>
</div>

<div class="form-group row" >
	<label class="col-md-3 control-label" >Fundraised As</label>
    <div class="col-md-9">
<select name="fund_raised" class="form-control" required>
	<option value="">Select</option>
<?php
foreach($fund_raised as $set_fundraised){
?>
<option value="<?=$set_fundraised?>" <?=$set_fundraised==$form_data->{'fund_raised'}?'selected':''?>><?=$set_fundraised?></option>
<?php
}
?>                
</select>    
    </div>
</div>
	
<div class="form-group row" >
<label class="col-md-3 control-label" >Cause Duration</label>
<div class="col-md-9">
<select name="duration" class="form-control" required>
<option value="">Select</option>
<?php
foreach($duration_list as $val){
?>
<option value="<?=$val?>" <?=$val==$form_data->{'duration'}?'selected':''?>><?=$val==1?$val.' month':$val.' months'?></option>
<?php
}
?>                
</select>    
</div>
</div>
	
<div class="form-group row" >
	<label class="col-md-3 control-label" >Description</label>
    <div class="col-md-9">
            <textarea name="description" class="form-control ci-editor" rows="10" required="required"><?=$form_data->description?></textarea>
    </div>
</div>
	
<div class="form-group row" >
	<label class="col-md-3 control-label" >Image</label>
    <div class="col-md-9">
		<div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
    <img src="<?=!empty($form_data->image) ? base_url('assets/uploads/campaigns/').'/'.$form_data->image:'assets/uploads/no-image.gif'; ?>" />
            </div>
            <div>
            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
            <input type="file" name="image" <?=$form_data->image==''?'required':''?> ></span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
        </div>
        </div>            
    </div>
</div>

<?php
if($this->data['session_data']['license_session']['cause_count']==70||$this->data['session_data']['license_session']['cause_count']==0){
?>
<div class="form-group row" >
    <label class="col-md-2 control-label">Youtube Url</label>
    <div class="col-md-10">
		<div class="row" >
<div class="col-md-2">
<button type="button" class="btn btn-secondary" onclick="add_option()" >Add</button>
</div>
	    </div>
		<div class="row" >
		    <div class="col-md-12">
<ul class=" option-list-wp files-list">
<?php
$j=0;
if($product_added){
	foreach($product_added as $val){
		$j++;
?>
<li class="item" id="i-l-<?=$j?>"  >
<div class="row">
	<div class="col-md-10">
    	<div><input type="text" name="options_data[<?=$j?>][link]" class="form-control" value="<?=$val['link']?>" required/></div>
    </div>
	<button  class="btn btn-default btn-close" onclick="remove_option(<?=$j?>)" ><i class="fa fa-times"></i></button>
</div>    
</li>
<?php
	}
}
?>
</ul>
</div>
		</div>
	</div>
</div>
<?php
}
?>

</div>

         <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-2 col-md-9">
<button type="submit" class="btn btn-primary submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?=show_static_text($lang_id,235)?>"><?=show_static_text($lang_id,235)?></button>
                    </div>
                </div>
            </div>
     <?=form_close()?>
            </div>
        </div>
</div>

<?php
if($this->data['session_data']['license_session']['cause_count']==0){
?>
<div class="col-md-12 user-color" style="margin-top:20px; ">
<div class="card">
    <div class="card-body">
            <h5>More Image</h5>
<div class="">
<div class="form-group">
<input type="hidden" name="comment_form" value="set">                    	
<div class="form-group">
<div class="col-sm-4">
<div id="fileuploader" class="fileuploader" style="background-color:#52B6EC">Upload Image</div>
<span id="filesUpload" class="filesUpload"></span>
<div id="status"></div>        		            
</div>
</div>
<div style="clear:both"></div>                    

    <div id="product_files_content" style="margin-top:30px;">
      <ul ui-sortable="sortableOptions" ng-model="leftArray" class="files img-list ui-sortable">
<?php
if($products_file){
foreach($products_file as $set_products_file){
?>
<li class="item" id="product_image_<?=$set_products_file->id?>" data-id="<?=$set_products_file->id?>" >
    <div class="pi-img-wrapper">
<img style="height:100px;width:100%" alt="" class="img-responsive" src="assets/uploads/campaigns/<?=$set_products_file->image?>">
</div>
<div class="file-option" style="text-align:center">
<button  class="btn btn-default" onclick="delete_image('<?=$set_products_file->id?>')" href="javascript:void(0)" style="margin-top:10px">Delete</button>
</div>
</il>
<?php
}
}
?>    
	</ul>
</div>
<div style="clear:both"></div>

</div>

            
            </div>            
		</div>            
	</div>
</div>
<?php
}
?>
</div>

<link href="<?=base_url()?>assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="<?=base_url()?>assets/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript" language="javascript"></script> 

<style>
.error-span p{
	margin-bottom:0px;
	color:#C00;
	font-size:13px;
}

</style>

<script type="text/javascript">
$(".edit-form" ).validate({
	rules:{
		description:{
			maxlength:1000,
		},
		youtube_url:{
			url:true
		},
	},
	messages: {
		description: {
			maxlength: 'Max Characters Allowed 1000'
		},
	}, 
    submitHandler: function (form) {
		$('.submitBtn').prop('disabled', true)
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
		$('.submitBtn').html(loadingText);
		return true;
	}
});
</script>
<?php
if($this->data['session_data']['license_session']['cause_count']==0){
?>
<link href="<?=site_url()?>assets/plugins/uploader/css/uploadfile.css" rel="stylesheet">
<script src="<?=site_url()?>assets/plugins/uploader/js/jquery.uploadfile.min.js"></script>
<script>
var moreCount = 1;
$(document).ready(function(){
	$(".fileuploader").uploadFile({
		url:"<?=$_cancel.'/ajax_upload'?>",
		fileName:"myfile",
		formData: {<?=$this->security->get_csrf_token_name();?>:'<?=$this->security->get_csrf_hash();?>' },
		showStatusAfterSuccess:false,
		uploadButtonClass:"ajax-file-upload-blue",
		allowedTypes:"*",
		multiple: true,
		onSuccess:function(files,data,xhr){
			var obj = jQuery.parseJSON(data);
			if(obj.result=='error'){
				$('.ajax-file-upload-statusbar').hide();
				$("#status").html("<font color='red'>"+obj.msg+"</font>");
			}
			else if(obj.result=='success'){
				var pic_id = '<input type="hidden" name="more_pic[]" value="'+obj.msg+'" class="more-img-'+moreCount+'" />';
				$('#more_pic').append(pic_id);
				refresh_image(obj.msg,moreCount);
				moreCount++;
			}
			
		},
		onError: function(files,status,errMsg){		
			$("#status").html("<font color='red'>Upload is Failed</font>");
		}

	});
});

function refresh_image(d_img,page_id){
	html = $('#uploaded_img').html();
	//console.log(html);
	html = html.replace(/%%ID%%/g, page_id);
	html = html.replace(/%%IMAGE%%/g,d_img);
	//console.log(html);
	$('.img-list').append(html);

}

function delete_img(id){
	$('.more-img-'+id).remove();
	$('#product_img_'+id).remove();
}

function delete_image(id){
	$.ajax({
		type:"GET",
		url:"<?=$_cancel.'/delete_photo'?>",
		data:{id:id,<?=$this->security->get_csrf_token_name();?>:'<?=$this->security->get_csrf_hash();?>'},
		success:function(data){
			$('#product_image_'+id).hide();
		}
	});
}
</script>
<script id="uploaded_img" type="text/html">
<li class="item" id="product_img_%%ID%%" data-id="%%ID%%" >
	<div class="pi-img-wrapper">
			<img style="height:100px;width:100%" alt="" class="img-responsive" src="assets/uploads/campaigns/%%IMAGE%%">
	</div>
	<div class="file-option" style="text-align:center">
		<button  class="btn btn-default" onclick="delete_img(%%ID%%)" href="javascript:void(0)" style="margin-top:10px">Delete</button>
	</div>
</il>
</script>
<?php
}
?>

<script id="options_script" type="text/html">
<li class="item" id="i-l-%%IDS%%"  >
	<div class="row">
	<div class="col-md-10">
    	<div><input type="text" name="options_data[%%IDS%%][link]" class="form-control" value="" required/></div>
    </div>
	<button  class="btn btn-close" onclick="remove_option(%%IDS%%)" ><i class="fa fa-times"></i></button>
</div>    
</li>
</script>

<script>
var j = parseInt(<?=$j++;?>);
var limited = parseInt('<?=$this->data['session_data']['license_session']['cause_count']?>');
var wrapper         = $(".option-list-wp"); //Fields wrapper
function add_option(){ //on add input button click
	j++;
	if(limited==70&&j==1){
		html = $('#options_script').html();
		html = html.replace(/%%IDS%%/g, j);
		$(wrapper).append(html); 
	}
	else if(limited==0){
		html = $('#options_script').html();
		html = html.replace(/%%IDS%%/g, j);
		$(wrapper).append(html); 
	}
}
function remove_option(id){
	$('#i-l-'+id).remove();
}
</script>

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
