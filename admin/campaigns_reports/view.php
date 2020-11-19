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
	<div class="col-md-9 value"><?=print_value('campaigns',array('id'=>$view_data->campaign_id),'name')?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Who reported</b></div>
	<div class="col-md-9 value"><?=$view_data->name?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Phone</b></div>
	<div class="col-md-9 value"><?=$view_data->phone?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Email</b></div>
	<div class="col-md-9 value"><?=$view_data->email?></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Page URl</b></div>
	<div class="col-md-9 value"><a class="" href="<?='campaigns/view/'.$view_data->campaign_id?>"><?=site_url().'campaigns/view/'.$view_data->campaign_id?></a></div>
</div>

<div class="row static-info">
	<div class="col-md-3 name"><b>Know organizer</b></div>
	<div class="col-md-9 value"><?=$view_data->know_organizer==1?'Yes, I know the Campaign Organizer.':'No, I do not know the Campaign Organizer'?></div>
</div>    

<div class="row static-info">
	<div class="col-md-3 name"><b>Role</b></div>
	<div class="col-md-9 value"><?=$view_data->role?></div>
</div>    

<div class="row static-info">
	<div class="col-md-3 name"><b>Know organizer description</b></div>
	<div class="col-md-9 value"><?=$view_data->know_description?></div>
</div>    

<div class="row static-info">
	<div class="col-md-3 name"><b>description</b></div>
	<div class="col-md-9 value"><?=$view_data->description?></div>
</div>    
                            <!--end col-md-8-->
                            
                        </div>
        
    </div>
</div>
</div>