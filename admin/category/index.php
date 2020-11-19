<?php
$get_q = $this->input->get('q');
?>
<script type="text/javascript" src="assets/plugins/ajax-pagination/pagination.min.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
<div class="row" style="margin-bottom:10px">
	<div class="col-md-12">
		<form method="get" id="search-form" class="form-inline" >
        <div class="form-group">
                <input type="text" name="q" placeholder="Search" value="<?=$get_q;?>" class="form-control search-q" >
        </div>
        <button type="submit" class="btn btn-default"><?=show_static_text($lang_id,3);?></button>
       <a href="<?=$_cancel.'/create'?>" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-plus"></i> Add New</a>
    </form>
    </div>
</div>        
             
    			<div class="table-responsive">
        <table id="data-table" class="table table-striped table-hover">
            <thead>
            <tr>
                
                <th>ID</th>
                <th>Name</th>
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
	//alert(name+' '+id+' '+value);
    $.ajax({
       type: "GET",
       url: "<?=$_cancel?>/set_status", /* The country id will be sent to this file */
       data: {id:id},
       beforeSend: function () {
	      $("#show_class").html("Loading ...");
        },
       success: function(msg){
		 //alert(msg);
		//location.reload();
    	$("#show_class").html(msg);
       }
	});
} 

function get_active(type,id){
    $.ajax({
       type: "POST",
       url: "<?=$_cancel?>/ajax_set_data", /* The country id will be sent to this file */
       data: {id:id,type:type,<?=$this->security->get_csrf_token_name();?>:'<?=$this->security->get_csrf_hash();?>'},
       beforeSend: function () {
	      $("#show_class").html("Loading ...");
        },
       success: function(msg){
		 //alert(msg);
		//location.reload();
    	$("#show_class").html(msg);
       }
       });
}
</script>

<link href="assets/global/plugins/bootstrap-datepicker/css/datepicker.css"  rel='stylesheet' type='text/css' >
<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script>
$(document).ready(function(){
	$('#i-e-date').datepicker({ dateFormat: 'mm-dd-yy', altField: '#input-date_alt', altFormat: 'yy-mm-dd' }).on('changeDate', function(e){
    $(this).datepicker('hide');});

	$('#i-s-date').datepicker({ dateFormat: 'mm-dd-yy', altField: '#input-date_alt', altFormat: 'yy-mm-dd' }).on('changeDate', function(e){
    $(this).datepicker('hide');});

});

var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#i-s-date').datepicker({
    beforeShowDay: function(date) {
       // return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function(ev) {
    if (ev.date.valueOf() > checkout.viewDate.valueOf()){
        var newDate = new Date(ev.date)
        newDate.setDate(newDate.getDate() + 1);
        checkout.setDate(newDate);		
    }
    else {
        checkout.setDate(ev.date + 1);
    }
    
    checkin.hide();
    $('#i-e-date')[0].focus();
}).data('datepicker');

var checkout = $('#i-e-date').datepicker({
    beforeShowDay: function(date) {
        return date.valueOf() <= checkin.viewDate.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function(ev) {
    checkout.hide();
}).data('datepicker');

</script>

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
function export_data(){
    var data = $('#search-form').serialize();
	window.location = '<?=$_cancel.'/export_data?'?>'+data;
}
</script>