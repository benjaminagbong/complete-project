<?php
$get_q = $this->input->get('q');
?>
<script type="text/javascript" src="assets/plugins/ajax-pagination/pagination.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
            <div class="portlet-body">
<div class="row" style="margin-bottom:10px">
    <div class="col-md-12">
        <form method="get" id="search-form" class="form-inline" >
        <div class="form-group">
            <input type="text" name="q" placeholder="<?=show_static_text(1,3);?>" value="<?=$get_q;?>" class="form-control search-q" >
        </div>
        <button type="submit" class="btn btn-warning"><?=show_static_text(1,3);?></button>
       <a href="<?=$_cancel.'/create'?>" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-plus"></i> Add New</a>
    </form>
    </div>    
</div>            

<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th><?=show_static_text($adminLangSession['lang_id'],244);?></th>
			<th>Name</th>
            <th><?=show_static_text($adminLangSession['lang_id'],242);?></th>
            <th><?=show_static_text($adminLangSession['lang_id'],18);?></th>
            <th><?=show_static_text($adminLangSession['lang_id'],1800);?>Created date</th>
            <th><?=show_static_text($adminLangSession['lang_id'],258);?></th>
		</tr>
	</thead>
<tbody id="result-data"><tr><td colspan="8">Loading..</td></tr></tbody>
</table>
<ul class="pagination" id="list-paginations"></ul>
    </div>
</div>
        </div>
    </div>
</div>
</div>
<script>
function submit_search(){
    var data = $('#search-form').serialize();
	$.ajax({
		type: 'GET',
		url : "<?php echo $_cancel.'/ajax_get_list'?>",
		data:data,
		dataType:'json',
		success: function(response){
			$('#result-data').html(response.html);
			if(response.total>20){
				$('#list-paginations').pagination('destroy');
				$('#list-paginations').pagination({
					total: response.total,
					current: 1,
					length: 20,
					size: 2, 
					click: function(options,$target) {
						//$('#input-pagi').val(options.current);
						urls = response.url;
						console.log(urls);
						set_d = 'page='+options.current;
						$.get(urls,set_d,
							function(result){          
								$('#result-data').html(result.html);
							},
							'json'
						);
	
					}
					
				});
			}
			
		}
	});
}
submit_search();
//get_data();
</script>

<script>
function confirm_box(){
    var answer = confirm ("Are you sure?");
    if (!answer)
     return false;
}
</script>
