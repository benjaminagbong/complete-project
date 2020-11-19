<?php
if($all_data){
	foreach($all_data as $set_data){
?>
<tr>
<td><?=$set_data->type?></td>
<td>
<a class="btn btn-xs btn-success " href="<?=$_cancel.'/edit/'.$set_data->id;?>" title="" ><i class="fa fa-edit"></i></a>
</td>
</tr>
<?php             
	}
}
?>                        
