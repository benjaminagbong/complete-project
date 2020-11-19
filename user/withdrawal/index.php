<script type="text/javascript" src="<?=site_url()?>assets/plugins/ajax-pagination/pagination.min.js"></script>

<div class="row">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-body">
            	<a href="<?=$_cancel.'/create'?>" class="btn btn-primary">Create Request</a>
                <div class="table-responsive">
        <table id="data-table" class="table table-striped table-hover">
            <thead>
            <tr>
                
<th>S. No</th>
<th>Campaign Title</th>
<th>Requested Amount</th>
<th>Withdraw Amount</th>
<th>Balance</th>
<th>Date</th>
<th>Status</th>
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



<script>
function submit_search(){
    var data = $('#search-form').serialize();
	$.ajax({
		type: 'GET',
		url : "<?php echo $_cancel.'/ajax_list'?>",
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