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
<script type="text/javascript" src="<?='https://js.stripe.com/v2/'?>"></script>
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
<h3>Payment</h3>
<form class="form-horizontal edit-form" id="paymentFrm" method="post">
<input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />
<div class="form-body">

<div class="cardbox" style="margin-bottom:20px;">
<div class="form-group row">
<div class="col-md-4 mb-3">
<input type="number" class="form-control required-field" name="amount" min="1" value="" placeholder="Amount" required>
</div>      

<div class="col-md-4 mb-3">
<input type="text" class="form-control required-field" id="cc-name" name="cardname" value="" placeholder="Name on card" required>
</div>      

<div class="col-md-4 mb-3">
<input type="text" class="form-control required-field" id="card_num" name="card_num"  value="" placeholder="Credit card number" required>
</div>  
</div>

<div class="row" >
<div class="col-md-4">
<select name="card_expire_month"  class="form-control required-field" id="card-expiry-month" required>
<option value="">Month</option>
<option value="01" >01 - JAN</option>
<option value="02" >02 - FEB</option>
<option value="03" >03 - MAR</option>
<option value="04" >04 - APR</option>
<option value="05" >05 - MAY</option>
<option value="06" >06 - JUN</option>
<option value="07" >07 - JUL</option>
<option value="08" >08 - AUG</option>
<option value="09" >09 - SEP</option>
<option value="10" >10 - OCT</option>
<option value="11" >11 - NOV</option>
<option value="12" >12 - DEC</option>
</select>
</div>

<div class="col-md-4">
<select name="card_expire_year"  class="form-control required-field" id="card-expiry-year" required>
<option value="">Year</option>
<?php
for($i=date('Y');$i<=(date('Y')+20);$i++){
?>
<option value="<?=$i?>" ><?=$i?></option>
<?php
}
?>    
</select>                
</div>            
<div class="col-sm-4">
<input type="text" name="card_cvv" id="card-cvc" maxlength="3" class="form-control required-field" autocomplete="off" placeholder="CVC" value="<?php echo set_value('cvc'); ?>" required>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div id="payment-errors"></div>
</div>
</div>        
</div>

<div class="row form-group" >
<label class="col-md-12">Your Name</label>
<div class="col-md-6">
<input type="text" name="first_name" class="form-control" placeholder="First Name" required/>
</div>
<div class="col-md-6">
<input type="text" name="last_name" class="form-control" placeholder="Last Name" required/>
</div>
</div>

<div class="row form-group" >
<label class="col-md-12">Your Email</label>
<div class="col-md-6">
<input type="email" name="email" class="form-control" placeholder="Email Address" required/>
</div>
</div>

<div class="row " >
<div class="col-md-6" >
<div class="row form-group" >
<label class="col-md-12">Country</label>
<div class="col-md-12">
<select name="country" class="form-control">
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
</div>
<div class="col-md-6" >
<div class="row form-group" >
<label class="col-md-12">Zip Code</label>
<div class="col-md-12">
<input type="text" name="zip" class="form-control" required/>
</div>
</div>
</div>
</div>            
<div class="row form-group" >
<label class="col-md-12">Message</label>
<div class="col-md-12">
<textarea  name="message" class="form-control"></textarea>
</div>
</div>
</div>

<div class="form-actions">
    <div class="row">
        <div class="col-md-9">
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
<div class="status-number"><span>Goal:</span><?=$view_data->campaign_funds?></div>
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
		Stripe.createToken({
			number: $('#card_num').val(),
			cvc: $('#card-cvc').val(),
			exp_month: $('#card-expiry-month').val(),
			exp_year: $('#card-expiry-year').val()
		}, stripeResponseHandler);

/*		$('.submitBtn').prop('disabled', true)
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
		$('.submitBtn').html(loadingText);*/
		return true;
	}
});
</script>
<script type="text/javascript">
//set your publishable key
Stripe.setPublishableKey('<?php echo $this->data['payment_data']->username?>');

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
	if (response.error) {
		//enable the submit button
		//$('#payBtn').removeAttr("disabled");
		$('#payment-errors').addClass('alert alert-danger');
		$("#payment-errors").html(response.error.message);
	} else {
		var form$ = $("#paymentFrm");
		//get token id
		var token = response['id'];
		//insert the token into the form
		form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
		//submit form to the server
		form$.get(0).submit();
	}
}
$(document).ready(function() {
/*	//on form submit
	$("#paymentFrm").submit(function(event) {
		Stripe.createToken({
			number: $('#card_num').val(),
			cvc: $('#card-cvc').val(),
			exp_month: $('#card-expiry-month').val(),
			exp_year: $('#card-expiry-year').val()
		}, stripeResponseHandler);
		return false;
	});*/
});
</script>

</body>
</html>

