<?php
$i	=0;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
		$html = strip_tags($set_data->description);
		$html = html_entity_decode($html, ENT_QUOTES, 'UTF-8');    
		$html = word_limiter($html,25);
?>
<tr>
<td><?=$i?></td>
<td><?=$set_data->name?></td>
<td><?=date('d-m-Y H:i',$set_data->created)?></td>
<td class="status-td"><?=$set_data->status==1?'<h5><span class="badge badge-large badge-success">Approved</span></h5>':'<h5><span class="badge badge-large badge-warning">Pending</span></h5>'?></td>
<td>
<a href="<?=$_cancel.'/edit/'.$set_data->id?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
<?php
if($set_data->status==1){
?>
<a href="<?='campaigns/view/'.$set_data->id?>" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a></td>
<?php
}
?>
</tr>
<?php		
	}
}
else{
?>
<tr>
<td colspan="3">There is no data</td>
</tr>
<?php
}
?>
