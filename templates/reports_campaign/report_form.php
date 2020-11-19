<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/includes/header'); ?>  
<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>
<!-- page wrapper -->
<style>
@media (min-width: 900px){
.report-form-box{
	width:700px;
	margin:0 auto;
}
}
</style>
<body class="boxed_wrapper">
<div class="page-wrapper">
<?php $this->load->view('templates/includes/menu'); ?> 
<section class="section">
<div class="container">
	<div class="row">
    	<div class="col-md-12">
        	<div class="report-form-box mb-5 mt-5">
                <h1>Contact Us</h1>
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
                <form action="" method="post" id="report_form">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name(); ?>" value="<?=$this->security->get_csrf_hash();?>" />		
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" id="input-email" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" name="c_email" class="form-control" placeholder="Confirm Email" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
								<label>Do you know the Campaign Organizer?</label>
								<select class="form-control" name="know_organizer" required>
                                	<option value="">Select</option>
                                	<option value="1">Yes, I know the Campaign Organizer.</option>
                                	<option value="0">No, I do not know the Campaign Organizer</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="know_description" class="form-control" placeholder="How are you connected to the campaign?" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
								<label>Which best describes you?</label>
								<select class="form-control" name="role" id="role-campaign" required>
                                	<option value="">Please select one.</option>
                                	<option value="I am a beneficiary.">I am a beneficiary.</option>
                                	<option value="I am a donor.">I am a donor.</option>
                                	<option value="I am an individual concerned about this campaign." onChange="individual('individual')">I am an individual concerned about this campaign.</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="description" class="form-control" placeholder="Message" required ></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn float-left">
                                <button type="submit" class="form__submit submitBtn">Submit</button>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div> 	

</section>
<?php $this->load->view('templates/includes/footer'); ?> 
</div>
<script>
jQuery.extend(jQuery.validator.messages, {
    required: "This field is required.",
    remote: "Please correct this field.",
    email: "Please enter a valid email address.",
	url: "Please enter a valid URL.",
    equalTo: "Please enter the same value again.",
});

$( "#report_form" ).validate({
	rules: {
		c_email: {
		  equalTo: "#input-email"
		}
	},
	messages: {
		c_email: {
			equalTo: 'The confirm email does not match.'
		},
	}, 
    submitHandler: function (form) {
		return true;
	}
});

</script>
<style>
label.error{
	font-size:13px;
	color:#F00;
}
</style>
</body><!-- End of .page_wrapper -->
</html>

