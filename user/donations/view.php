<?php
$user_image	= "assets/uploads/profile.jpg";
?>
<style>
.campaigns-img img{
	max-width:100px;
	height:auto;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
            <div class="col-md-12 profile-info">
        <h3><?=print_value('campaigns',array('id'=>$view_data->campaign_id),'name');?></h3>
    
    <div class="table-responsive">
    <table class="table table-profile">
    <tbody>
    
    <tr class="highlight">
        <td class="field">Donor Name</td>
        <td><?=$view_data->first_name?></td>
    </tr>
   
    
    <tr class="highlight">
        <td class="field">Donate Amount</td>
        <td><?=$view_data->currency?> <?=$view_data->user_amount?></td>
    </tr>
    
    <tr class="highlight">
        <td class="field">Payment Type</td>
        <td><?=$view_data->payment_type?></td>
    </tr>
    
    <tr class="">
        <td class="field">Zip Code</td>
        <td><?=$view_data->zip;?></td>
    </tr>
    
    <tr class="">
        <td class="field">Donor Country</td>
        <td><?=$view_data->country?></td>
    </tr>
    
    <tr class="">
        <td class="field">Donor Message</td>
        <td><?=$view_data->message?></td>
    </tr>
    
    </tbody>
    </table>                
    </div>                                                        
                                    
                                </div>
        </div>
        </div>
    </div>    
</div>                        


