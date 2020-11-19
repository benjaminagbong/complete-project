<?php
$i = ($page_number-1)*20;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
		$Verified		= 'Get Verify';
		$Verified_icon	= '<i class="fa fa-square-o "></i>';
		if($set_data->is_verified==1){
			$Verified	= 'Get Unverify';
			$Verified_icon	= '<i class="fa fa-check-square-o"></i>';
		}
?>
<tr>
<td><?=$i?></td>
<td><?=$set_data->username?></td>
<td><?=$set_data->name?></td>
<td><?=h_dateFormat($set_data->on_date,'d-m-Y');?></td>
<td>
<select onchange="set_status(<?=$set_data->id;?>)" name="status">
<option value="0" <?=$set_data->status==0?'selected':''?> >Pending</option>
<option value="1" <?=$set_data->status==1?'selected':''?> >Approved</option>
</select>
</td>
<td>
<select onchange="set_value(<?=$set_data->id;?>,'is_comment')" name="status">
<option value="0" <?=$set_data->is_comment==0?'selected':''?> >Inactive</option>
<option value="1" <?=$set_data->is_comment==1?'selected':''?> >Active</option>
</select>
</td>
<td>
<select onchange="set_value(<?=$set_data->id;?>,'is_donation')"name="status">
<option value="0" <?=$set_data->is_donation==0?'selected':''?> >Inactive</option>
<option value="1" <?=$set_data->is_donation==1?'selected':''?> >Active</option>
</select>
</td>
<td>
<?php
if($this->data['admin_details']->default==1){
?>
<a class="btn btn-xs btn-success " href="<?=$_cancel.'/verified_campaign/'.$set_data->id;?>"  data-toggle="tooltip" data-placement="top"  title="<?=$Verified?>" ><?=$Verified_icon?></a>
<a class="btn btn-xs btn-success " href="<?=$_cancel.'/edit/'.$set_data->id;?>" title="" ><i class="fa fa-edit"></i></a>
<a class="btn btn-xs btn-primary " href="<?=$_cancel.'/view/'.$set_data->id;?>" title="" ><i class="fa fa-eye"></i></a>
<a class="btn btn-xs btn-danger" href="<?=$_cancel.'/delete/'.$set_data->id;?>" data-toggle="tooltip" data-placement="top"  title="Delete"  onclick="return confirm_box();"><i class="fa fa-trash-o"></i></a>
<?php
}
?>

                        </td>
                    </tr>

<?php             
}
}
?>                        
