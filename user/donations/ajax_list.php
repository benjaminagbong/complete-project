<?php
$i	=0;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
?>
<tr>
<td><?=$i?></td>
<td><?=print_value('campaigns',array('id'=>$set_data->campaign_id),'name')?></td>
<td><?=$set_data->first_name?></td>
<td><?=$set_data->payment_type?></td>
<td><?=date('d-m-Y H:i',$set_data->created)?></td>
<td class="status-td"><?=$set_data->payment_status==1?'<h5><span class="badge badge-large badge-success">Approved</span></h5>':'<h5><span class="badge badge-large badge-warning">Pending</span></h5>'?></td>
<td><?=$set_data->currency?> <?=$set_data->user_amount?></td>
<td><a href="<?=$_cancel.'/view/'.$set_data->id?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
</tr>
<?php		
	}
}
else{
?>
<tr>
<td colspan="9">There is no data</td>
</tr>
<?php
}
?>
