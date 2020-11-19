<?php $this->load->view('templates/includes/header'); ?>
<body> 
<div class="page-wrapper">
<?php $this->load->view('templates/includes/menu'); ?>

<section class="section">
<div class="container">
    <div class="row">
		<div class="col-md-12">
            <div class="content-section content-section-main ">
                <div class="grid-container p-0">
                    <div class="row justify-content-md-center">
                        <!-- text-column -->
                        <div class="col-sm-12 col-lg-12 pt-0 pb-0 ">
                            <!-- breadcrumb list -->
                            <!--<ul class="breadcrumb-list mb list-unstyled">
                                <li property="itemListElement" typeof="ListItem">
                                    <i class="fa fa-angle-left"></i>
                                    <a href="<?=site_url()?>" class=""><span property="name">Home</span>
                                    </a>
                                    <meta property="position" content="1">
                                </li>
                            </ul>-->
                            <!-- content -->
                            <h1 class="heading-1" role="heading" aria-level="1">Fundraising categories</h1>
                            <div class="heading-3" role="heading" aria-level="2">People around the world are raising money for what they are passionate about.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--container-->

<div class="caregory-content-box pt-4 pb-4">
	<div class="container">
        <div class="row">
<?php
if($categories){
	foreach($categories as $set_data):
?>
    <div class="col-md-4">
		<a href="<?=$_cancel.'/view/'.$set_data->id?>">
            <div class="card">
              <div class="card-header p-4"><strong class="category-name-line"><?=$set_data->name?></strong></div>
            </div>
		</a>
    </div>
<?php	
	endforeach;
}
?>
        </div>
    </div>
</div><!--category area-->

<?php $this->load->view('templates/comman/category_content'); ?>
</section>
<?php $this->load->view('templates/includes/footer'); ?>
</div>
<?php $this->load->view('templates/includes/script'); ?>
  </body>
</html>