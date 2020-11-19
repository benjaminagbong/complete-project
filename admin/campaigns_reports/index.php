<?php
$get_q = $this->input->get('q');
?>
<script type="text/javascript" src="<?=site_url()?>assets/plugins/ajax-pagination/pagination.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
<div class="row" style="margin-bottom:10px">
	<div class="col-md-12">
		<form method="get" id="search-form" class="form-inline" >
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
        <div class="form-group">
                <input type="text" name="q" placeholder="Search" value="<?=$get_q;?>" class="form-control search-q" >
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    </div>
</div>        
             
    			<div class="table-responsive">
        <table id="data-table" class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th>ID</th>
                <th>Name</th>
                <th>Campaign Title</th>
                <th>Email</th>
                <th>Creation Date</th>
                <th>Options</th>
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

function confirm_box(){
    var answer = confirm ("Are you sure?");
    if (!answer)
     return false;
}

function set_status(id){
    $.ajax({
       type: "GET",
       url: "<?=$_cancel?>/set_status", /* The country id will be sent to this file */
       data: {id:id},
       beforeSend: function () {
	      $("#show_class").html("Loading ...");
        },
       success: function(msg){}
	});
} 

function set_value(id,type){
	$.ajax({
		type: "GET",
		url: "<?=$_cancel?>/ajax_set_data", /* The country id will be sent to this file */
		data: {id:id,type:type},
		success: function(msg){
		}
	});
}
</script>

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
<script>
function export_data(){
    var data = $('#search-form').serialize();
	window.location = '<?=$_cancel.'/export_data?'?>'+data;
}
</script>