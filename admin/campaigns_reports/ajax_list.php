<?php
$i = ($page_number-1)*20;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
?>
<tr>
<td><?=$i?></td>
<td><?=$set_data->name?></td>
<td><a class="" href="<?='campaigns/view/'.$set_data->campaign_id?>"><?=print_value('campaigns',array('id'=>$set_data->campaign_id),'name')?></a></td>
<td><?=$set_data->email?></td>
<td><?=date('d-m-Y',$set_data->created);?></td>
<td>
<?php
if($this->data['admin_details']->default==1){	
?>
<?php /*?><a class="btn btn-xs btn-success " href="<?=$_cancel.'/edit/'.$set_data->id;?>" title="" ><i class="fa fa-edit"></i></a><?php */?>
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
else{
	echo	'<tr><td colspan="8">There is no data</td></tr>';
}
?>                        
