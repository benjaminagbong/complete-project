<script type="text/javascript" src="<?=site_url()?>assets/plugins/ajax-pagination/pagination.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
<div class="row" style="margin-bottom:10px">
	<div class="col-md-12">
<form method="get" id="search-form" class="form-inline" >
</form>
    </div>
</div>        
             
    			<div class="table-responsive">
        <table id="data-table" class="table table-striped table-hover">
            <thead>
<tr>
<th>Type</th>
<th style="width:200px">Options</th>
</tr>
            </thead>
<tbody id="result-data"><tr><td colspan="8">Loading..</td></tr></tbody>
        </table>
              <ul class="ci-pagination" id="list-paginations"></ul>
        
    </div>
    
		    </div>
		</div>
    </div>
</div>

<script>
function submit_search(){
	list_per = $('.i-d-list').val();
    var data = $('#search-form').serialize();
	$.ajax({
		type: 'GET',
		url : "<?php echo $_cancel.'/ajax_get_list'?>",
		data:data,
		dataType:'json',
		success: function(response){
			$('#result-data').html(response.html);
			if(response.total>list_per){
				$('#list-paginations').pagination({
					total: response.total,
					current: 1,
					length: list_per,
					size: 2, 
					click: function(options,$target) {
						urls = response.url;
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
function select_data_list(){
	$('#search-form').submit();
}

</script>

