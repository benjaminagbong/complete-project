<?php $this->load->view('templates/includes/header')?>
<body class="campaign-view-page"> 
<div class="page-wrapper">
    <!-- header start-->
<?php $this->load->view('templates/includes/menu')?>
    <!-- header end-->
<main class="main">
    <!-- donation start-->
    <section class="section donation">
        <div class="container">
            <div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-body">
<div class="causes-details-area ">
	<div class="row">
			<div class="col-md-12">
<h2 class="">Payment Processing...</h2>            
<?=form_open('paypal_payment/confirm', array('class' => 'form-horizontal', 'role'=>'form','id'=>'payment-form', 'enctype'=>"multipart/form-data"))?>
<input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />
<?=form_close()?>
				
			</div>
		</div>
</div>        
    </div>
	</div>
        </div>
    </section>
    <!-- donation end-->
</main>
<!-- footer start-->
<?php $this->load->view('templates/includes/footer')?>
<!-- footer end-->
</div>
<!-- libs-->
<?php $this->load->view('templates/includes/script')?>
<script>
$(window).on('load', function () {
	$( "#payment-form" ).submit();
});	
jQuery(document).ready(function() {
/*	jQuery(window).load(function() { 
		$( "#payment-form" ).submit();
	});*/
});

</script>
</body>
</html>
