<?php $this->load->view('templates/includes/head'); ?>
<body> 
<?php $this->load->view('templates/includes/menu'); ?>
<style>
@media print, screen and (min-width: 60em){
.content-section, .content-section-multi-container {
    padding: 4rem 1rem;
}
.heading-3 {
    font-size: 1.5rem;
    line-height: 2rem;
}
}
.content-section, .content-section-multi-container {
	position:relative;
}
.content-section-main .breadcrumb-list {
    background-color: #fbf8f6;
    border-radius: 4px;
    display: inline-block;
    margin: 0;
    padding: .5rem 1rem;
}
.caregory-content-box{
	background-color:#fbf8f6;
}
.caregory-content-box .card-header{
	background-color:#fff;
}
.caregory-content-box .card{
    -webkit-box-shadow: 0 8px 32px 0 rgba(0,0,0,.1);
    box-shadow: 0 8px 32px 0 rgba(0,0,0,.1);
}
.heading-5{
	font-weight:900;
}
.show-for-medium{
}
</style>
<div class="container">
    <div class="row">
		<div class="col-md-12">
            <div class="content-section content-section-main ">
                <div class="grid-container p-0">
                    <div class="row justify-content-md-center">
                        <!-- text-column -->
                        <div class="col-sm-6 col-lg-6 pt-0 pb-0 ">
                            <!-- breadcrumb list -->
                            <ul class="breadcrumb-list mb list-unstyled">
                                <li property="itemListElement" typeof="ListItem">
                                    <i class="fa fa-angle-left"></i>
                                    <a href="<?='category'?>" class=""><span property="name">Browse fundraisers</span>
                                    </a>
                                    <meta property="position" content="1">
                                </li>
                            </ul>
                            <!-- content -->
                            <h1 class="heading-1" role="heading" aria-level="1">Fundraising categories</h1>
                            <div class="heading-3" role="heading" aria-level="2">People around the world are raising money for what they are passionate about.</div>
                        </div>
                        <div class="col-sm-6 col-lg-6 pt-0 pb-0 ">
							<img src="assets/frontends/img/category.jpg" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--container-->

<!--<div class="caregory-content-box pt-4 pb-4">
	<div class="container">
        <div class="row">
<?php
if($categories){
	foreach($categories as $set_data):
?>
    <div class="col-md-4">
		<a href="<?=$_cancel.'/view/'.$set_data->id?>">
            <div class="card">
              <div class="card-header p-4"><strong><?=$set_data->name?></strong></div>
            </div>
		</a>
    </div>
<?php	
	endforeach;
}
?>
        </div>
    </div>
</div>--><!--category area-->

<div class="caregory-content-box pt-4 pb-4">
	<div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <div class="cell auto grid-x align-middle">
                    <div class="heading-5">Donor protection guarantee</div>
                    <p class="show-for-medium mt-3 mb-3"><?=$settings['site_name']?> has the first and only donor guarantee in the industry.</p>
                </div>
	        </div>
            <div class="col-md-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <div class="cell auto grid-x align-middle">
                    <div class="heading-5">Simple setup</div>
                    <p class="show-for-medium mt-3 mb-3">You can personalize and share your <?=$settings['site_name']?> in just a few minutes.</p>
                </div>
	        </div>
            <div class="col-md-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <div class="cell auto grid-x align-middle">
                    <div class="heading-5">0% platform fee</div>
                    <p class="show-for-medium mt-3 mb-3">With a 0% platform fee, you get to keep even more of your money.</p>
                </div>
	        </div>
            <div class="col-md-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <div class="cell auto grid-x align-middle">
                    <div class="heading-5">Mobile app</div>
                    <p class="show-for-medium mt-3 mb-3">The <?=$settings['site_name']?> app makes it simple to launch and manage your campaign on the go.</p>
                </div>
	        </div>
            <div class="col-md-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <div class="cell auto grid-x align-middle">
                    <div class="heading-5">Social reach</div>
                    <p class="show-for-medium mt-3 mb-3">Harness the power of social media to spread your story and get more support.</p>
                </div>
	        </div>
            <div class="col-md-4">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <div class="cell auto grid-x align-middle">
                    <div class="heading-5">24/7 expert advice</div>
                    <p class="show-for-medium mt-3 mb-3">Our best-in-class Customer Happiness agents will answer your questions, day or night.</p>
                </div>
	        </div>
	    </div>
	</div>
</div>

<?php $this->load->view('templates/includes/footer'); ?>

  </body>
</html>