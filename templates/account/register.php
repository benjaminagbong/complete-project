<?php $this->load->view('templates/includes/header'); ?>
<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>
<style>
.register-form-agree{
	-webkit-appearance:checkbox !important;
	width:18px;
	height:18px;
	padding-top:5px;
	color:#F00;
    position: absolute;
    top: 5px;
    left: 0;
}

</style>
<body>
<div class="page-wrapper">
<?php $this->load->view('templates/includes/menu'); ?>
<main class="main">
<section class="promo-primary promo-primary--shop">
    <picture>
        <source srcset="<?=site_url()?>assets/themes/img/shop.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=site_url()?>assets/themes/img/shop.jpg" alt="img"/>
    </picture>
    <div class="promo-primary__description"> <span>Freedom</span></div>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item"><!--<span class="promo-primary__pre-title">Helpo</span>-->
                        <h1 class="promo-primary__title"><span>Account</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section start-->
<section class="section background--brown">
    <div class="container">
        <div class="row offset-margin">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-4 col-xl-4 margin-bottom">
<?php
if($this->session->flashdata('success')) {
$msg = $this->session->flashdata('success');
?>
<div class="alert alert-success" style="margin-bottom:5px;"><?php echo $msg;?></div>
<?php	
}
if($this->session->flashdata('error')) {
$msg = $this->session->flashdata('error');
?>
<div class="alert alert-danger" style="margin-bottom:5px;"><?php echo $msg;?></div>
<?php
}
?>
<form class="form account-form sign-in-form" id="frmLoginRegister" method="post">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />		
<div class="form__fieldset">
	<h6 class="form__title">Sign Up</h6>
<div class="row">
    <div class="col-12">
          <input type="text" name="first_name" class="form__field" placeholder="First Name" required/>
          <input type="text" name="last_name" class="form__field" placeholder="Last Name" required/>
          <input type="email" name="email" class="form__field" id="input-email" placeholder="Email Address" required />
          <input type="number" name="phone" class="form__field" placeholder="Phone"/>
          <input type="password" name="password" class="form__field" id="input-password" placeholder="Password" required/>
          <input type="password" name="confirm_password" class="form__field" placeholder="Confirm Password"/>
    </div>

            <div class="col-12">
            	<input type="checkbox" name="agree" class="register-form-agree" required>
            	<strong style="padding-left:10px;">I agree with <a class="form__link" href="#">Term of Services</a></strong></div>
                <label id="agree-error" class="error" for="agree"></label>
            <div class="col-12 text-center">
                <button class="form__submit submitBtn" type="submit">Sign Up</button>
            </div>
            <div class="col-12 text-center"><strong><a class="form__link" href="<?='mylogin/login'?>">Sign in</a> if you an account</strong></div>
    
</div>
</div>
</form>                
            </div>
            
        </div>
    </div>
</section>
<!-- section end-->
<!-- bottom bg start-->
<section class="bottom-background background--brown">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bottom-background__img"><img src="<?=site_url()?>assets/themes/img/bottom-bg.png" alt="img"/></div>
            </div>
        </div>
    </div>
</section>
<!-- bottom bg end-->
</main>
			<!-- footer start-->
<?php $this->load->view('templates/includes/footer'); ?>
			
			<!-- footer end-->
		</div>
		<!-- libs-->
<?php $this->load->view('templates/includes/script'); ?>
<script>
jQuery.extend(jQuery.validator.messages, {
    required: "This field is required.",
    remote: "Please correct this field.",
    email: "Please enter a valid email address.",
	url: "Please enter a valid URL.",
    equalTo: "Please enter the same value again.",
});

$( "#frmLoginRegister" ).validate({
	rules: {
		password:{
			minlength:6,
		},
		email: {
			required: true,
			email: true,
			remote: {
				url: "<?='secure/register_email_exists'?>",
				type: "GET",
				data: {
					email: function(){ return $("#input-email").val(); }
				}
			}				
		},
		confirm_password: {
		  equalTo: "#input-password"
		}
	},
	messages: {
		email: {
			remote: 'Email already used.'
		},
		confirm_password: {
			equalTo: 'The confirm password does not match.'
		},
	}, 
    submitHandler: function (form) {
		$('.submitBtn').prop('disabled', true)
		var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
		$('.submitBtn').html(loadingText);
		return true;
	}
});

</script>	
<style>
label.error{
	font-size:13px;
	color:#F00;
	display:block;
	text-align:center;
}
.alert{
	padding:15px 35px;
}

</style>
		
	</body>
</html>
