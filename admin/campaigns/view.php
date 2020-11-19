<style>
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
    width: 24%; 
    height: auto;
    border:1px solid #E5E5E5;
    cursor: move;
    position:relative;
}
.img-list li img{
	height:130px;
	width:100%
}
.static-info{
	margin-bottom:10px;
}
.campaigns-img img{
	max-width:100px;
	height:auto;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
<div class="card-body">

<div class="row static-info">
	<div class="col-md-3 name"><b>Title</b></div>
	<div class="col-md-9 value"><?=$view_data->name?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Beneficiary Name</b></div>
	<div class="col-md-9 value"><?=$view_data->b_f_name.' '.$view_data->b_l_name?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Campaign Funds</b></div>
	<div class="col-md-9 value"><?=$view_data->campaign_funds?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Who are you raising money for?</b></div>
	<div class="col-md-9 value"><?=$view_data->money_for?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Category</b></div>
	<div class="col-md-9 value"><?=print_value('categories',array('id'=>$view_data->category),'name')?></div>
</div>    

<div class="row static-info">
	<div class="col-md-3 name"><b>description</b></div>
	<div class="col-md-9 value"><?=$view_data->description?></div>
</div>    

<div class="row static-info">
	<div class="col-md-3 name"><b>Status</b></div>
	<div class="col-md-9 value"><?=$view_data->status==1?'Approved':'Pending'?></div>
</div>    


<div class="row static-info">
	<div class="col-md-3 name"><b>Status</b></div>
	<div class="col-md-9 value campaigns-img"><img src="assets/uploads/campaigns/<?=$view_data->image;?>" /></div>
</div>    

<?php
if($more_link){
?>
<div class="row static-info">
	<div class="col-md-3 name"><b>Youtube Link</b></div>
	<div class="col-md-9 value campaigns-img">
<?php	
$i=0;
foreach($more_link as $value){
$i++;
?>
<?=$value->link?><br />
<?php	
}
?>
</div>
</div>
<?php

}
?>

<?php
if($more_image){
?>
	<div class="row static-info">
		<div class="col-md-3 name"><b>More Images</b></div>
		<div class="col-md-9 value">
<ul class="files img-list ">
<?php
if($more_image){
foreach($more_image as $set_products_file){
?>
<li class="item" >
    <div class="pi-img-wrapper">
<img class="img-responsive" src="assets/uploads/campaigns/<?=$set_products_file->image?>">
</div>

</il>
<?php
}
}
?>    
	</ul>
            </div>
	</div>
<?php
}
?>
                            <!--end col-md-8-->
                            
                        </div>
        
    </div>
</div>
</div>