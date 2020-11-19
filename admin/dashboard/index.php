<?php
$today_donation_count = print_count('campaigns_payment',array('payment_status'=>1,'date(on_date)'=>date('Y-m-d')));
$today_donation_amount =0;
$string  = "select sum(amount) as t_amount from campaigns_payment where payment_status= 1 and date(on_date)='".date('Y-m-d')."'";
$today_donation_data = $this->comman_model->get_query($string,true);
if($today_donation_data&&!empty($today_donation_data->t_amount)){
	$today_donation_amount = $today_donation_data->t_amount;
}
?>
<div class="row row-sm">
<div class="col-lg-4">
<div class="card">
<div id="rs1" class="wd-100p ht-200"></div>
<div class="overlay-body pd-x-20 pd-t-20">
<div class="d-flex justify-content-between">
<div>
<h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Today's Earnings</h6>
</div>
<a href="<?=$admin_link.'/payment_history'?>" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>

</div><!-- d-flex -->
<h2 class="mg-b-5 tx-inverse tx-lato"><?=round($today_donation_amount,2)?></h2>
</div>
</div><!-- card -->
</div><!-- col-4 -->
<div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
<div class="card">
<div id="rs2" class="wd-100p ht-200"></div>
<div class="overlay-body pd-x-20 pd-t-20">
<div class="d-flex justify-content-between">
<div>
<h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Today's Donation</h6>
</div>
<a href="<?=$admin_link.'/payment_history'?>" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
</div><!-- d-flex -->
<h2 class="mg-b-5 tx-inverse tx-lato"><?=$today_donation_count?></h2>
</div>
</div><!-- card -->
</div><!-- col-4 -->
<?php /*?><div class="col-lg-4 mg-t-15 mg-sm-t-20 mg-lg-t-0">
<div class="card">
<div id="rs3" class="wd-100p ht-200"></div>
<div class="overlay-body pd-x-20 pd-t-20">
<div class="d-flex justify-content-between">
<div>
<h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">This Month's Earnings</h6>
<p class="tx-12">November 1 - 30, 2017</p>
</div>
<a href="javascript:;" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
</div><!-- d-flex -->
<h2 class="mg-b-5 tx-inverse tx-lato">$72,118</h2>
<p class="tx-12 mg-b-0">Earnings before taxes.</p>
</div>
</div><!-- card -->
</div><?php */?><!-- col-4 -->
</div><!-- row -->

