<script src="<?=site_url('assets')?>/plugins/jquery.validate.js"></script>   

<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-body">
<?php //echo validation_errors();?>
<?=form_open(NULL, array('class' => 'form-horizontal edit-form', 'role'=>'form','enctype'=>"multipart/form-data"))?>
<div class="form-body">                    
	<div class="form-group row" >
	<label class="col-md-2 control-label">Campaigns</label>
    <div class="col-md-6">
<select name="campaign_id" class="form-control " id="input-campaign" onchange="select_campaign()" required>
<option value="">Select</option>
<?php
if($campaign_list){
	foreach($campaign_list as $set_value){
?>
	<option value="<?=$set_value->id?>"><?=$set_value->name?></option>
<?php		
	}
}
?>
</select>
    </div>
</div>

<div class="row form-group show-amount-ci" >
	<label class="col-md-2 control-label pt-0">Funds available For withdraw</label>
        <div class="col-md-6 show-amount">0</div>
	</div>
	
<div class="amount-data" style="display:none">
<div class="row form-group" >
	<label class="col-md-2 control-label">Withdrawal Amount</label>
        <div class="col-md-6">
        <input type="number" name="amount" id="input-amount" min="0" class="form-control " required>
        </div>
	</div>
</div>

    

</div>

         <div class="form-actions">
                <div class="row">
                    <div class="col-md-8">
						<div class="ajax-error"></div>
<button type="submit" class="btn btn-primary submitBtn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Saving">Submit</button>
                    </div>
                </div>
            </div>
     <?=form_close()?>
            </div>
        </div>
</div>


</div>

<script type="text/javascript">
var max_amount = 0;
$(".edit-form" ).validate({
    submitHandler: function (form) {
		val = $('#input-amount').val();
		if(max_amount>0){
			if(max_amount<val){
				$('.ajax-error').html('<div class="alert alert-block alert-danger">Enough amount</div>');
			}
			else{
				$('.submitBtn').prop('disabled', true)
				var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Saving..';
				$('.submitBtn').html(loadingText);
				return true;
			}
		}
		else{
			$('.ajax-error').html('<div class="alert alert-block alert-danger">You do not have enough funds to request for withdrawal </div>');
		}
		return false;
	}
});
function select_campaign(){
	val = $('#input-campaign').val();
	$('.show-amount').html('loading..');
	max_amount=0;
	if(val){
		$('.ajax-error').html('');
		$.ajax({
			type: 'GET',
			url : "<?php echo $_cancel.'/ajax_check_amount'?>",
			data:{campaign_id:val},
			dataType:'json',
			success: function(response){
				$('.show-amount').html('');
				if(response.status=='ok'){
					$('.amount-data').show();
					max_amount = response.amount;
					$('.show-amount').html(response.amount);
					$('#input-amount').attr('max',response.amount);
				}
				else{
					$('.amount-data').hide();
					$('.ajax-error').html('<div class="alert alert-block alert-danger">'+response.message+'</div>');
				}
			}
		});
	}
}
</script>
