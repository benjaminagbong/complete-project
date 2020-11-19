<?php
if($all_data){
	foreach($all_data as $set_data):
	$html = strip_tags($set_data->description);
	$html = html_entity_decode($html, ENT_QUOTES, 'UTF-8');    
	$new_html = word_limiter($html, 20);	

	$string = "select sum(amount) as t_amount from campaigns_payment where campaign_id=".$set_data->id;
	$campaign_payment_data = $this->comman_model->get_query($string,true);
	$campaign_payment = 0;
	$payment_per = 0;
	if($campaign_payment_data&&!empty($campaign_payment_data->t_amount)){
		$campaign_payment = round($campaign_payment_data->t_amount,2);
		if($campaign_payment>$set_data->campaign_funds){
			$payment_per = 100;
		}
		else{
			$payment_per = round($campaign_payment/$set_data->campaign_funds*100);
		}
	}
?>
    <div class="col-md-4 mb-3">
        <div class="card">
            <a href="<?='campaigns/view/'.$set_data->id?>">
	            <img src="<?=!empty($set_data->image)?site_url().'ajax_image/path?src='.$set_data->image:'assets/uploads/no-image.gif'?>" alt="image" class="category-campaigns-image">
            </a>
          <div class="card-body">
            <a href="<?='campaigns/view/'.$set_data->id?>">
                <h5 class="card-title truncate-single-line"><?=$set_data->name?></h5>
			</a>
            <p class="card-text two-line-description"><?=$new_html?></p>
            <div class="progress" style="height: 2px;">
              <div class="progress-bar" role="progressbar" style="width: <?=$payment_per?>%;background-color: #00b964;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span><strong>Raised: <?=currency_symbol($set_data->currency)?><?=$campaign_payment?></strong> <span>of: <?=currency_symbol($set_data->currency)?><?=$set_data->campaign_funds?></span></span>
            
            <div class="text-right">
                
            </div>
          </div>
        </div>
    </div>
<?php	
	endforeach;
}
?>
