<?php
$get_q = $this->input->get('q');
$get_s_date= $this->input->get('s_date');
$get_e_date= $this->input->get('e_date');
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
<div class="form-group">
    <input type="text" name="s_date" value="<?=$get_s_date?>" class="form-control" id="i-s-date" data-date-format="dd-mm-yyyy" autocomplete="off" placeholder="Form" />
</div>
<div class="form-group">
    <input type="text" name="e_date" value="<?=$get_e_date?>" class="form-control" id="i-e-date" data-date-format="dd-mm-yyyy" autocomplete="off" placeholder="To" />
</div>
  <button type="submit" class="btn btn-default">Search</button>
<button type="button" class="btn btn-primary" onclick="export_data()">Export</button>
</form>
    </div>
</div>        
             
    			<div class="table-responsive">
        <table id="data-table" class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody id="result-data"><tr><td colspan="5">Loading..</td></tr></tbody>
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
	$('#result-data').html('<tr><td colspan="8">Loading..</td></tr>');
    var data = $('#search-form').serialize();
	$.ajax({
		type: 'GET',
		url : "<?php echo $_cancel.'/ajax_get_list'?>",
		data:data,
		dataType:'json',
		success: function(response){
			$('#result-data').html(response.html);
			$('.search-total').html(response.total);
			if(list_per!=='all'){
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
		}
	});
}
submit_search();
function select_data_list(){
	$('#search-form').submit();
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
function export_data(){
    var data = $('#search-form').serialize();
	window.location = '<?=$_cancel.'/export_data?'?>'+data;
}
function confirm_box(){
    var answer = confirm ("<?=show_static_text(1,265);?>");
    if (!answer)
     return false;
}
</script>