<?php
$i	=0;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
		$campaigns = $this->comman_model->get_by('campaigns',array('id'=>$set_data->campaign_id),false,false,true);
		$left_amount = h_campaign_left_balane($set_data->campaign_id,$set_data->user_id);
		$status = '<span class="badge badge-warning">Pending</span>';
		if($set_data->status==1){
			$status = '<span class="badge badge-primary">Approved</span>';
		}
?>
<tr>
<td><?=$i?></td>
<td><?=$campaigns?$campaigns->name:'NA'?></td>
<td><?=$campaigns?$campaigns->campaign_funds:'NA'?></td>
<td><?=$set_data->amount?></td>
<td><?=$left_amount ?></td>
<td><?=date('d-m-Y H:i',$set_data->created)?></td>
<td><?=$status?></td>
</tr>
<?php		
	}
}
else{
?>
<tr>
<td colspan="7">There is no data</td>
</tr>
<?php
}
?>
