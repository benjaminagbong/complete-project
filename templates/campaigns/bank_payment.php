<?php
$string = "select sum(amount) as t_amount from campaigns_payment where campaign_id=".$view_data->id;
$campaign_payment_data = $this->comman_model->get_query($string,true);
$campaign_payment = 0;
$payment_per = 0;
if($campaign_payment_data&&!empty($campaign_payment_data->t_amount)){
	$campaign_payment = round($campaign_payment_data->t_amount,2);
	if($campaign_payment>$view_data->campaign_funds){
		$payment_per = 100;
	}
	else{
		$payment_per = round($campaign_payment/$view_data->campaign_funds*100);
	}
}

$this->load->view('templates/includes/header')?>
<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>   
<link href="<?=site_url()?>/assets/themes/css/campaign.css?v=<?=time()?>" rel="stylesheet"> 
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
			<div class="col-md-8 col-sm-12">
<?php
if($this->session->flashdata('success')) {
$msg = $this->session->flashdata('success');
?>
<div class="alert alert-success"><?php echo $msg;?></div>
<?php	
}
if($this->session->flashdata('error')) {
$msg = $this->session->flashdata('error');
?>
<div class="alert alert-danger"><?php echo $msg;?></div>
<?php
}
?>
				<div class="causes-details-desc">
					<div class="causes-details-text">
                        <div class="entry-meta">
<div class="bank_details">
<h2>Account Detail</h2>
<div class="">Bank Name: <?=$bank_detail->bank_name?></div>
<div class="">Account Number: <?=$bank_detail->account_name?></div>
<div class="">Bank Address: <?=$bank_detail->address?></div>
<div class="">Swift Code: <?=$bank_detail->ifsc?></div>
</div>
<form class="form-horizontal edit-form" id="paymentFrm" method="post">
<input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />
<div class="form-body">

<div class="row form-group" >
<label class="col-md-2">Amount</label>
<div class="col-md-10">
<input type="number" name="amount" class="form-control" required />
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">Currency</label>
<div class="col-md-10">
<select name="currency" class="form-control" required>
    <option value="">Currency</option>
    <option value="NGN">NGN</option>
    <option value="USD">USD</option>
</select>
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">First Name</label>
<div class="col-md-10">
<input type="text" name="first_name" class="form-control" required />
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">Last Name</label>
<div class="col-md-10">
<input type="text" name="last_name" class="form-control" required/>
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">Your Email</label>
<div class="col-md-10">
<input type="email" name="email" class="form-control" required/>
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">Country</label>
<div class="col-md-10">
<select name="country" class="form-control" required>
    <option value="">Country</option>
<?php
foreach ($country_list as $key=>$val){
?>
<option value="<?=$val?>"><?=$val?></option>
<?php	
}
?>                
</select>
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">Zip Code</label>
<div class="col-md-10">
<input type="number" name="zip" class="form-control" required/>
</div>
</div>

<div class="row form-group" >
<label class="col-md-2">Message</label>
<div class="col-md-10">
<textarea  name="message" class="form-control"></textarea>
</div>
</div>
</div>

<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-2 col-md-9">
<button type="submit" class="btn form__submit submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Saving">Submit</button>
&nbsp;&nbsp;&nbsp;<a href="<?=site_url().'campaigns/view/'.$view_data->id?>">Back</a>
        </div>
    </div>
</div>
</form>                        
                        </div>                        
					</div>


				</div>
			</div>

			<div class="col-md-4 col-sm-12">
<div class="causes-details-desc " style="">
<img src="assets/uploads/campaigns/<?=$view_data->image?>" alt="image">
<div class="causes-details-text no-box">
<div class="progress-info clearfix">
<div class="progress clearfix">
<span style="width: <?=$payment_per?>%;" class="progress-bar progress-bar-success ">
<span class="sr-only"><?=$payment_per?>%</span>
</span>
</div>
<div class="status">
<div class="status-title">Raised:<?=$campaign_payment?></div>
<div class="status-number">         <span>Goal:</span> 
<?=$view_data->campaign_funds?>
</div>
</div>
</div>						

</div>
</div>
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
<script type="text/javascript">
$(".edit-form" ).validate({
	rules:{
		email:{
			email:true,
		},
	},
    submitHandler: function (form) {
//		$(".submitBtn").button('loading');
		$('.submitBtn').prop('disabled', true)
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
		$('.submitBtn').html(loadingText);
		return true;
	}
});
</script>
</body>
</html>
