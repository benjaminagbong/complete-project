<?php
if(count($all_data)){
	foreach($all_data as $set_data){
?>
<tr>
    <td><?=$set_data->id;?></td>
    <td><?=$set_data->name;?></td>
    <td><?=$set_data->username;?></td>
    <td><?=$set_data->email;?></td>
    <td><?=date('d-m-Y',$set_data->created);?></td>
    <td>
<a class="btn btn-xs btn-success " href="<?=$_edit?>/<?=$set_data->id;?>" ><i class="fa fa-edit"></i></a>
<a class="btn btn-xs btn-danger" href="<?=$_delete?>/<?=$set_data->id;?>"  onclick="return confirm_box();" title=""><i class="fa fa-trash-o"></i></a>
    </td>
</tr>

<?php             
	}
}
?>                        
