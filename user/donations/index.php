<script type="text/javascript" src="<?=site_url()?>assets/plugins/ajax-pagination/pagination.min.js"></script>

<div class="row">
<div class="col-md-12">
		<div class="card">
		    <div class="card-body">
               <div class="row" style="margin-bottom:10px">
	<div class="col-md-12">
        <form method="get" id="search-form" class="form-inline" style="display:inline-block" >
        <div class="form-group">
        <select name="data_list" class="form-control i-d-list" style="padding:0" onchange="select_data_list();">
        <?php
        foreach($data_list as $set_list){
        ?>
        <option value="<?=$set_list?>" <?=$set_list==$this->input->get('data_list')?'selected="selected"':''?> 	><?=$set_list?></option>
        <?php
        }
        ?>
        </select>
        </div>
        </form>
    
    </div>
</div>
                <div class="table-responsive">
        <table id="data-table" class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th>ID</th>
                <th>Campaign Title</th>
                <th>Donor Name</th>
                <th>Payment Type</th>
                <th>Date</th>
                <th>Payment Status</th>
                <th>Donor Amount</th>
				<th><?=show_static_text($lang_id,258);?></th>
            </tr>
            </thead>
<tbody id="result-data"><tr><td colspan="9">Loading..</td></tr></tbody>
<tfoot><tr><td colspan="6" style="text-align:right">Total</td><td class="total-amount" colspan="2"></td></tr></tfoot>
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
		url : "<?php echo $_cancel.'/ajax_list'?>",
		data:data,
		dataType:'json',
		success: function(response){
			$('#result-data').html(response.html);
			$('.total-amount').html(response.total_amount);
			if(response.total>list_per){
				$('#list-paginations').pagination('destroy');
				$('#list-paginations').pagination({
					total: response.total,
					current: 1,
					length: list_per,
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
function select_data_list(){
$('#search-form').submit();
}
//get_data();
</script>