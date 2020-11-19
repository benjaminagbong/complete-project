<?php $this->load->view('templates/includes/header'); ?>
	<body>
		<div class="page-wrapper">
<?php $this->load->view('templates/includes/menu'); ?>
<!-- header end-->
<main class="main">
<section class="promo-primary">
    <picture>
        <source srcset="<?=site_url()?>assets/themes/img/about.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=site_url()?>assets/themes/img/about.jpg" alt="img"/>
    </picture>
    <div class="promo-primary__description"> <span><?=$page_view->name?></span></div>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item">
                        <h1 class="promo-primary__title"><span><?=$page_view->name?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-us start-->
<section class="section about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
<?php
echo $page_view->description;
?>                
            </div>
        </div>
    </div>
</section>
<!-- donors end-->
</main>
<!-- footer start-->
<?php $this->load->view('templates/includes/footer'); ?>
			
			<!-- footer end-->
		</div>
<?php $this->load->view('templates/includes/script'); ?>
		
	</body>
</html>