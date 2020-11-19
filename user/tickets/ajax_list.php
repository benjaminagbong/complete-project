<?php
$i = ($page_number-1)*20;
if($all_data){
	foreach($all_data as $set_data){
		$i++;

		$statusName ='-';
		$statusClass ='';
		if(!empty($set_data->status)){
			if($set_data->status=='Completed'){
				$statusClass = 'label label-sm label-success';
			}
			else{
				$statusClass = 'label label-sm label-danger';
			}
			$statusName = $set_data->status;
		}
?>
    <tr>
        <td><?=$i; ?></td>
        <td><?=$set_data->name;?></td>
        <td>
		<?php //echo $set_data->name; ?>
<?php
$html = strip_tags($set_data->description);
$html = html_entity_decode($html, ENT_QUOTES, 'UTF-8');    
echo $new_html = word_limiter($html, 20);

?>
        </td>
       <td><?=date('d-m-Y',$set_data->created);?></td>
       <td><span class="<?=$statusClass?>"><?=$statusName;?></span></td>

        <td>
<a class="btn btn-icon-only btn-success" href="<?=$_view?>/<?php echo $set_data->id;?>" >
        <i class="fa fa-eye"></i></a>

                 </td>							
    </tr>
<?php             
   }
}
else{
	'<tr><td>There is no data.</td></tr>';
}
?>                        
