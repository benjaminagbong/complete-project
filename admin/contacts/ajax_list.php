<?php

$i = ($page_number-1)*$list_data;

if($all_data){

	foreach($all_data as $set_data){

		$i++;

?>

<tr>

<td><?=$i?></td>

<td><?=$set_data->first_name.' '.$set_data->last_name?><br>

<?=$set_data->email;?></td>

<td><?=$set_data->phone;?></td>

<td><?=$set_data->message?></td>

<td><?=date('d-m-Y H:i',$set_data->created);?></td>

<td>

<?php

if($admin_details->default==1){

?>

<a class="btn btn-sm btn-danger" href="<?=$_cancel.'/delete/'.$set_data->id.'/'.$redirect_page;?>" onclick="return confirm_box();"><i class="fa fa-trash-o"></i></a>

<?php

}

?>

    </td>

</tr>

<?php             

	}

}

else{

?>

<tr>

<td colspan="7">There is no data.</td>

</tr>

<?php             

}

?>                        

