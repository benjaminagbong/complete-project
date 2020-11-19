<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
<div class="row">
	    <div class="col-md-12">
<form method="get" id="search-form" class="form-inline" >
			    <a href="<?=$_cancel.'/edit';?>" class="btn btn-primary m-r-5 m-b-5"><?=show_static_text($lang_id,233);?> <i class="fa fa-plus"></i></a>
</form>
	    </div>
	    </div>
	
    <div class="table-responsive" style="margin-top:20px">
<table id="data-table" class="table table-striped table-hover">
                <thead>
                <tr>
	                <th><?=show_static_text($lang_id,244);?></th>
	                <th>Title</th>
	                <th>Description</th>
	                <th><?=show_static_text($lang_id,153);?></th>
	                <th><?=show_static_text($lang_id,158);?></th>
	                <th width="180"><?=show_static_text($lang_id,258);?></th>
                </tr>
                </thead>
            <tbody id="result-data"><tr><td colspan="6">Loading..</td></tr></tbody>
        </table>
<div class="pull-left">Total: <span class="search-total">0</span></div>
<ul class="pagination pull-right" id="list-paginations"></ul>
    </div>
                
            </div>

		</div><!-- end panel -->
    </div>
</div>

<script>
function confirm_box(){
    var answer = confirm ("Are you sure?");
    if (!answer)
     return false;
}

function get_data(){
    var data = jQuery('#search-form').serialize();
	jQuery.ajax({
		type: 'GET',
		url : "<?php echo $_cancel.'/ajax_list'?>",
		data:data,
		dataType:'json',
		success: function(response){
			jQuery('#result-data').html(response.html);
			jQuery('.search-total').html(response.total);
			if(response.total>20){
				jQuery('#list-paginations').pagination({
					total: response.total,
					current: 1,
					length: 20,
					size: 2, 
					click: function(options,$target) {
						//$('#input-pagi').val(options.current);
						urls = response.url;
						set_d = 'page='+options.current;
						jQuery.get(urls,set_d,
							function(result){          
								jQuery('#result-data').html(result.html);
							},
							'json'
						);
	
					}
				});
			}
		}
	});
}
get_data();
</script>