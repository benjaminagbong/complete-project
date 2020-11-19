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
    
    <div class="table-responsive">
    <table class="table table-profile">
    <tbody>

<tr class="highlight">
    <td class="field">Type</td>
    <td><?=$form_data->type?></td>
</tr>
<?php
if($form_data->type=='Paypal'){
?>
<tr class="highlight">
    <td class="field">Paypal Email ID</td>
    <td><?=$form_data->paypal_id?></td>
</tr>
<?php
}
else{
?>
<tr class="highlight">
    <td class="field">Name</td>
    <td><?=$form_data->first_name.' '.$form_data->last_name?></td>
</tr>

<tr class="highlight">
    <td class="field">Phone</td>
    <td><?=$form_data->phone?></td>
</tr>

<tr class="highlight">
    <td class="field">Bank Name</td>
    <td><?=$form_data->bank_name?></td>
</tr>

<tr class="highlight">
    <td class="field">Bank Country</td>
    <td><?=$form_data->bank_country?></td>
</tr>

<tr class="highlight">
    <td class="field">Account Number</td>
    <td><?=$form_data->account_number?></td>
</tr>

<tr class="highlight">
    <td class="field">Swift Code</td>
    <td><?=$form_data->swift_code?></td>
</tr>
<?php
}
?>    
    
    
    </tbody>
    </table>                
    </div>                                                        
                                    
                                </div>
        </div>
        </div>
    </div>    
</div>                        


