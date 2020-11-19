<?php
$bottom_page = $this->comman_model->get_by('page',array('bottom_menu'=>1,'enabled'=>1),false,array('order'=>'asc'),false);
$bottum_menu_2 = $this->comman_model->get_by('page',array('middle_menu'=>1,'enabled'=>1),false,array('order'=>'asc'),false);
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-logo"><a class="footer-logo__link" href=""><img class="footer-logo__img" src="<?=site_url()?>assets/uploads/sites/<?=$settings['logo']?>" alt="logo"/></a></div>
                <!-- footer socials start-->
                <ul class="footer-socials">
<?php
if($settings['facebook_url']){
?> 
<li class="footer-socials__item"><a class="footer-socials__link" href="<?=$settings['facebook_url']?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<?php	
}
if($settings['twitter_url']){
?> 
<li class="footer-socials__item"><a class="footer-socials__link" href="<?=$settings['twitter_url']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<?php	
}
if($settings['google_plus']){
?> 
<li class="footer-socials__item"><a class="footer-socials__link" href="<?=$settings['google_plus']?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
<?php	
}
if($settings['instagram_url']){
?> 
<li class="footer-socials__item"><a class="footer-socials__link" href="<?=$settings['instagram_url']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<?php	
}
?> 
                </ul>
                <!-- footer socials end-->
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4 class="footer__title">Contacts</h4>
                <div class="footer-contacts">
                    <p class="footer-contacts__address"><?=$settings['address']?></p>
                    <p class="footer-contacts__phone">Phone: <a href="tel:<?=$settings['phone']?>"><?=$settings['phone']?></a></p>
                    <p class="footer-contacts__mail">Email: <a href="mailto:<?=$settings['site_email']?>"><?=$settings['site_email']?></a></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4 class="footer__title">Menu & Links</h4>
                <!-- footer nav start-->
                <nav>
                    <ul class="footer-menu">
                        <li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link" href="">Home</a></li>
<?php
if($bottom_page){
	foreach($bottom_page as $set_page){
?>
<li class="footer-menu__item"><a class="footer-menu__link"  href="<?=site_url().'pages/'.$set_page->slug?>"><?=$set_page->name?></a></li>
<?php		
	}
}
?>                        
<li class="footer-menu__item"><a class="footer-menu__link"  href="<?=site_url().'contact'?>">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- footer nav end-->
            </div>
            <div class="col-sm-6 col-lg-3">
                <h4 class="footer__title">Donate</h4>
                <p>Help Us Change the Lives of Children in World</p><a class="button footer__button button--filled" href="category">Donate</a>
            </div>
        </div>
        <div class="row align-items-baseline">
            <div class="col-md-6">
                <p class="footer-copyright">&copy; 2020 <?=$settings['site_name']?>
<?php
if(isset($settings['is_hide_powered'])){
	if($settings['is_hide_powered']==0){
?>
                                    Software <strong>powered by</strong> 
                                    <a href="<?='http://vobbie.com/'?>"><strong>vobbie.com</strong></a>
<?php
	}
}
else{
?>
                                    Software <strong>powered by</strong> 
                                    <a href="<?='http://vobbie.com/'?>"><strong>vobbie.com</strong></a>
<?php	
}
?>                                    
                </p>
            </div>
            <div class="col-md-6">
                <div class="footer-privacy">
<?php
if($bottum_menu_2){
	foreach($bottum_menu_2 as $set_page){
?>
                	<a class="footer-privacy__link" href="<?=site_url().'pages/'.$set_page->slug?>"><?=$set_page->name?></a><span class="footer-privacy__divider">|</span>
<?php
	}
}
?>
            </div>
        </div>
    </div>
</footer>
<script>
$(function() {
	$(this).bind("contextmenu", function(e) {
		e.preventDefault();
	});
});
</script>