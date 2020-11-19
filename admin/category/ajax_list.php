<?php
$i = ($page_number-1)*20;
if($all_data){
	foreach($all_data as $set_data){
		$i++;
?>
<tr>
<td><?=$i?></td>
<td><?=$set_data->name?></td>
<td>
<?php
if($this->data['admin_details']->default==1){
?>
<a class="btn btn-xs btn-success " href="<?=$_cancel.'/edit/'.$set_data->id;?>" title="" ><i class="fa fa-edit"></i></a>
<a class="btn btn-xs btn-danger" href="<?=$_delete?>/<?=$set_data->id;?>" data-toggle="tooltip" data-placement="top"  title="Delete"  onclick="return confirm_box();"><i class="fa fa-trash-o"></i></a>
<?php
}
?>

                        </td>
                    </tr>

<?php             
}
}
else{
echo	'<tr><td>There is no data</td></tr>';
}
?>                        
