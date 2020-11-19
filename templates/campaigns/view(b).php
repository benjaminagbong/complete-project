<?php
$more_image = $this->comman_model->get_by('campaigns_images',array('campaign_id'=>$view_data->id));
$category	= print_value('categories',array('id'=>$view_data->category),'name');

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
<h2><?=$view_data->name?></h2>
<div class="causes-details-image">
<img src="assets/uploads/campaigns/<?=$view_data->image?>" alt="image">
</div>

<div class="causes-details-share d-block d-sm-none">
<div class="row">
<div class="col">
<a href="javascript:;" class="btn btn-block form__submit " onClick="share_modal();"><i class="fa fa-share"></i> Share</a>                    
</div>        
<?php
if($view_data->is_donation==1){
?>
<div class="col">
<a href="javascript:;" class="btn btn-block form__submit " onClick="donate_modal();"><i class="fa fa-donate"></i> Donate</a>
</div>
<?php
}
?>
</div>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom:0;margin-top:10px">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tab-home" role="tab" aria-controls="home" aria-selected="true">Description</a>
</li>
<?php
if($campaign_video_list){
?>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tab-video" role="tab" aria-controls="home" aria-selected="true">Video</a>
</li>
<?php
}
?>  
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#tab-donate" role="tab" aria-controls="home" aria-selected="true">Donations</a>
</li>
<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-image" role="tab" aria-controls="contact" aria-selected="false">Pictures</a>
</li>
</ul>
<div class="tab-content card shadow p-3 mb-5 bg-white rounded" id="myTabContent">
<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="tab-home">
<div class="comments-area"><?=$view_data->description?></div>
</div>

<?php
if($campaign_video_list){
?>
<div class="tab-pane fade" id="tab-video" role="tabpanel" aria-labelledby="tab-donate">
<div class="comments-area">
<div class="row">
<?php
foreach($campaign_video_list as $set_data){
$y_id = h_youtube_id($set_data->link);
?>
<div class="col-md-6">
<iframe height="315" src="//www.youtube.com/embed/<?=$y_id?>" frameborder="0" style="width:100%"  allowfullscreen></iframe>
</div>
<?php
}
?>
</div>
</div>
</div>
<?php
}
?>

<div class="tab-pane fade" id="tab-donate" role="tabpanel" aria-labelledby="tab-donate">
<div class="comments-area">
<?php
if($donation_list){
?>
<ul class="list-unstyled o-donation-list">
<?php
foreach($donation_list as $set_data){
?>
<li class="o-donation-list-item">
<div class="m-donation m-person-info">
<img class="mr-1 a-avatar" alt="" src="<?=site_url().'assets/uploads/profile.jpg'?>">
<div>
<div class="m-person-info-name"><?=$set_data->is_show==2?'Anonymous':$set_data->first_name?> <span class="amount"><?=$set_data->currency?> <?=$set_data->amount?></span></div>
<div class="cause-comment-text"><?=$set_data->message?></div>
<div class="cause-time">
<!--<span class="c-gray"><?=time_elapsed_string($set_data->created)?></span>-->
</div>
</div>
</div>
</li>
<?php
}
?>
</ul>
<?php
}
?>

</div>
</div>

<div class="tab-pane fade" id="tab-image" role="tabpanel" aria-labelledby="contact-tab">
<div class="comments-area">
<?php
if($more_image){
?>
<div class="row img-list">
<?php
foreach($more_image as $set_image){
?>
<div class="col-md-3 col-sm-6 mb-1">
<img class="img-responsive" src="assets/uploads/campaigns/<?=$set_image->image?>">
</div>
<?php
}
?>
</div>
<?php
}
?>

</div>
</div>
</div>

</div>
</div>

<div class="col-md-4 col-sm-12 d-none d-sm-block">
<div class="card shadow p-3 mb-5 bg-white rounded"><!--shadow-sm-->
<div class="card-body">
<div class="causes-details-desc " style="">
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
                
<a href="javascript:;" class="btn btn-block form__submit " onClick="share_modal();"><i class="fa fa-share"></i> Share</a>                    
<?php
if($view_data->is_donation==1){
?>
<a href="javascript:;" class="btn btn-block form__submit " onClick="donate_modal();"><i class="fa fa-donate"></i> Donate</a>                    
<?php
}

?>
</div>
</div><!--card-->
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
<?php
if($view_data->is_donation==1){
?>
<script>
function donate_modal(){
	$("#donate-modal").modal();
}
</script>
<div class="modal fade ci-modal" id="donate-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Donation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="open_tab('team')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php
if(print_count('payment_setting',array('id'=>2,'enabled'=>1))>0){
?>
<a href="<?=site_url().'paypal_payment/form/'.$view_data->id?>" class="btn form__submit mt-2">Donate With Paypal</a>
<?php
}
if(print_count('payment_setting',array('id'=>1,'enabled'=>1))>0){
?>
<a href="<?=site_url().'stripe_payment/form/'.$view_data->id?>" class="btn form__submit mt-2">Donate With Debit/Credit card</a>
<?php
}
if(print_count('payment_setting',array('id'=>3,'enabled'=>1))>0){
?>
<a href="<?=site_url().'paystack_payment/form/'.$view_data->id?>" class="btn form__submit mt-2">Donate With Paystack</a>
<?php
}
if(print_count('payment_setting',array('id'=>4,'enabled'=>1))>0){
?>
<a href="<?=site_url($_cancel).'/bank_payment/'.$view_data->id?>" class="btn form__submit mt-2">Donate With Bank</a>
<?php
}
?>
                  
      </div>
      
    </div>
  </div>
</div>
<?php
}
?>
<script>
function share_modal(){
	$("#share-modal").modal();
}
</script>	
<div class="modal fade ci-modal" id="share-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Share</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="open_tab('team')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<ul class="list-unstyled m-share-list">
<li class="m-share-list-item">
<a class="cause-share-btn" href="http://www.facebook.com/sharer/sharer.php?u=<?=site_url(uri_string());?>"  title="Facebook" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i>Facebook</a></li>

<li class="m-share-list-item"><a class="cause-share-btn" href="http://twitter.com/share?url=<?=site_url(uri_string());?>&text=<?=$view_data->name?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
<i class="fa fa-twitter"></i>
Twitter</a></li>


<li class="m-share-list-item"><a class="cause-share-btn" href="mailto:?subject=Have you seen &quot;To Our Dear Friend Darell&quot;?&amp;amp;body=Hello I thought you might be interested in supporting this <?=$settings['site_name']?>,
<?=site_url(uri_string());?>. 
" >
<i class="fa fa-envelope"></i>
Email</a></li>


</ul>                  
      </div>
      
    </div>
  </div>
</div>

</body>
</html>
