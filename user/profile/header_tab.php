<div class="container pa-0 page-header-section fluid" style="margin-bottom:15px">
<ul class="breadcrumbs" style="justify-content: flex-start;">
<h2 class="text-capitalize mb-0"><?=$name?></h2>  
</ul>
</div>      
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
        	<ul class="edit-profile-tab">
            	<li class="<?=$active=='Profile'?'active':''?>"><a href="<?=$_cancel.'/edit_profile'?>">Profile</a></li>
            	<li class="<?=$active=='Change Password'?'active':''?>"><a href="<?=$_cancel.'/change_password'?>">Change Password</a></li>
            </ul>
        </div>
    </div>
</div>
<style>
.edit-profile-tab{
    list-style: none;
    padding-left: 0px;
	border-bottom:1px solid #ccc;
}
.edit-profile-tab >li{
	display:inline-block;
	padding:5px 10px;
}
.edit-profile-tab >li.active{
	border-bottom:2px solid #8a3bbb
}
.edit-profile-tab >li.active>a{
	color:#3c3c3c;
}
.edit-profile-tab >li>a{
	color:#666;
}
.edit-profile-tab a:hover,.edit-profile-tab a:active,.edit-profile-tab a:focus{
	text-decoration:none;
}
</style>