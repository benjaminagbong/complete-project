<?php
$this->data['menu_uri_1'] = $this->uri->segment(1);
$this->data['menu_uri_2'] = $this->uri->segment(2);
$this->data['menu_uri_3']= $this->uri->segment(3);
$top_page = $this->comman_model->get_by('page',array('top_menu'=>1,'enabled'=>1),false,array('order'=>'asc'),false);
?>
<style>
.mobile-hidden{
	display:block;
}
@media (max-width:992px) {
	.mobile-hidden{
		display:none;
	}
	.top-menu-ci{
		height:68px;
	}
}
</style>
<!-- aside dropdown start-->
<div class="aside-dropdown">
<div class="aside-dropdown__inner">
<span class="aside-dropdown__close">
    <svg class="icon">
        <use xlink:href="#close"></use>
    </svg></span>

<div class="aside-dropdown__item d-lg-none d-block">
    <ul class="aside-menu">
        <li class="aside-menu__item"><a class="aside-menu__link" href="<?=site_url()?>"><span>Home</span></a></li>
<?php
if($top_page){
	foreach($top_page as $set_page){
?>
        <li class="aside-menu__item"><a class="aside-menu__link" href="<?=site_url().'pages/'.$set_page->slug?>"><span><?=$set_page->name?></span></a></li>
<?php		
	}
}
?>        
    <li class="aside-menu__item"><a class="aside-menu__link" href="category"><span>Category</span></a></li>
    </ul>
</div>
<div class="aside-dropdown__item">
    <!-- aside menu start-->
    <ul class="aside-menu mobile-hidden">
<?php
if($top_page){
	foreach($top_page as $set_page){
?>
        <li class="aside-menu__item"><a class="aside-menu__link" href="<?=site_url().'pages/'.$set_page->slug?>"><span><?=$set_page->name?></span></a></li>
<?php		
	}
}
?>
    <li class="aside-menu__item"><a class="aside-menu__link" href="category"><span>Category</span></a></li>
    </ul>
    <!-- aside menu end-->
    <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:<?=$settings['site_email']?>"><?=$settings['site_email']?></a></div>
    <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:<?=$settings['phone']?>"><?=$settings['phone']?></a>
    </div>
    <ul class="aside-socials">
<?php
if($settings['instagram_url']){
?> 
<li class="aside-socials__item"><a class="aside-socials__link" href="<?=$settings['instagram_url']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<?php	
}
if($settings['google_plus']){
?> 
<li class="aside-socials__item"><a class="aside-socials__link" href="<?=$settings['google_plus']?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
<?php	
}
if($settings['twitter_url']){
?> 
<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="<?=$settings['twitter_url']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<?php	
}
if($settings['facebook_url']){
?> 
<li class="aside-socials__item"><a class="aside-socials__link" href="<?=$settings['facebook_url']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<?php	
}
?> 
    </ul>
</div>
<?php
if(isset($user_details)){
?>
<div class="aside-dropdown__item d-md-none d-lg-none"><a class="button button--squared" href="<?=site_url().'user/account'?>"><span>My Account</span></a></div>
<?php
}
else{
?>
<div class="aside-dropdown__item d-md-none d-lg-none"><a class="button button--squared" href="<?=site_url().'mylogin/login'?>"><span>Login</span></a></div>
<?php
}
?>
</div>
</div>
<!-- aside dropdown end-->
<!-- header start-->
<header class="header <?=$this->data['menu_uri_1']=='front'||$this->data['menu_uri_1']==''?'header--front ':' header--inner header--shop'?>">
<div class="container-fluid">
    <div class="row no-gutters justify-content-between top-menu-ci">
        <div class="col-auto d-flex align-items-center">
            <div class="dropdown-trigger <?=$this->data['menu_uri_1']=='front'||$this->data['menu_uri_1']==''?'':'dropdown-trigger--inner'?> d-none d-sm-block">
                <div class="dropdown-trigger__item"></div>
            </div>
            <div class="header-logo">
            <a class="header-logo__link" href="<?=site_url()?>">
<img class="header-logo__img <?=$this->data['menu_uri_1']=='front'||$this->data['menu_uri_1']==''?'logo--light':''?>" src="<?=site_url()?>assets/uploads/sites/<?=$settings['logo']?>" alt="logo"/>
<?php
if($this->data['menu_uri_1']=='front'||$this->data['menu_uri_1']==''){
?>
<img class="header-logo__img logo--dark" src="<?=site_url()?>assets/uploads/sites/<?=$settings['logo']?>" alt="logo"/>
<?php
}
?>
</a>
            </div>
        </div>
        <div class="col-auto">
            <!-- main menu start-->
            <nav>
                <ul class="main-menu <?=$this->data['menu_uri_1']=='front'||$this->data['menu_uri_1']==''?'':'main-menu--inner'?>">
<li class="main-menu__item"><a class="main-menu__link" href="<?=site_url()?>"><span>Home</span></a></li>
<?php
if($top_page){
	foreach($top_page as $set_page){
?>
<li class="main-menu__item"><a class="main-menu__link" href="<?=site_url().'pages/'.$set_page->slug?>"><span><?=$set_page->name?></span></a></li>
<?php		
	}
}
?>
 <li class="main-menu__item"><a class="main-menu__link" href="<?=site_url()?>category"><span>Category</span></a></li>
                </ul>
            </nav>
            <!-- main menu end-->
        </div>
        <div class="col-auto d-flex align-items-center">
            <!-- lang select end-->
            <div class="dropdown-trigger d-block d-sm-none">
                <div class="dropdown-trigger__item"></div>
            </div>
<?php
if(isset($user_details)){
?>
<a class="button button--squared" href="<?=site_url().'user/account'?>"><span>My Account</span></a>
<?php
}
else{
?>
<a class="button button--squared" href="<?=site_url().'mylogin/login'?>"><span>Login</span></a>
<?php
}
?>            
        </div>
    </div>
</div>
</header>
<!-- header end-->
