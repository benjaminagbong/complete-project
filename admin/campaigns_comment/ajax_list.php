<?php
$i = ($page_number-1)*20;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
?>
<tr>
<td><?=$i?></td>
<td><?=$set_data->c_name?></td>
<td><?=$set_data->name?><br><?=$set_data->email?></td>
<td><?=$set_data->comment?></td>
<td><?=h_dateFormat($set_data->on_date,'d-m-Y');?></td>
<td>
<select onchange="set_status(<?=$set_data->id;?>)" name="status">
<option value="0" <?=$set_data->status==0?'selected':''?> >Pending</option>
<option value="1" <?=$set_data->status==1?'selected':''?> >Approved</option>
</select>
</td>
<td>
<a class="btn btn-xs btn-danger" href="<?=$_cancel.'/delete/'.$set_data->id;?>" onclick="return confirm_box();"><i class="fa fa-trash-o"></i></a>

</td>
</tr>

<?php             
}
}
?>                        
