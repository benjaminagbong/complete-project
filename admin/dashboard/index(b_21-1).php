

<?php
$nowTime= time();
?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="7800"><?=print_count('campaigns',array('status'=>'Approved'))?></span>
                    </h3>
                    <small>Active Campaigns</small>
                </div>
                <div class="icon">
                    <i class="icon-folder text-info"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only">76%</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title">Users </div>
                    <div class="status-number"> 76% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="7800"><?=print_count('campaigns',array('status'=>'Panding'))?></span>
                    </h3>
                    <small>Pending Campaigns</small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only">76%</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title">Users </div>
                    <div class="status-number"> 76% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="7800"><?=print_count('users',array('account_type'=>'U'))?></span>
                    </h3>
                    <small>Users</small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only">76%</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title">Users </div>
                    <div class="status-number"> 76% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="7800"><?=print_count('users',array('account_type'=>'U'))?></span>
                    </h3>
                    <small>Total Donations</small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only">76%</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title">Users </div>
                    <div class="status-number"> 76% </div>
                </div>
            </div>
        </div>
    </div>
</div>
			


<!-- BEGIN DASHBOARD STATS -->

<div class="row ">
<div class="col-lg-12 col-xs-12 col-sm-12">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bar-chart font-dark hide"></i>
                <span class="caption-subject font-dark bold uppercase">Graph</span>
            </div>
            <!--<div class="actions">
                <div class="btn-group btn-group-devided" data-toggle="buttons">
                    <a href="javascript:void(0);" onclick="get_chart('day');" class="btn red btn-outline btn-circle btn-sm">Day</a>
                    <a href="javascript:void(0);" onclick="get_chart('month');" class="btn red btn-outline btn-circle btn-sm">Month</a>
                    <a href="javascript:void(0);" onclick="get_chart('year');" class="btn red btn-outline btn-circle btn-sm">Year</a>
                </div>
            </div>-->
        </div>
        <div class="portlet-body">
        
<div class="row" style="margin-bottom:10px">
<form action="" method="get" id="search-form" onsubmit="submit_search();return false;">
<input type="hidden" name="type" value="month" />
    </form>    
    </div>
            
            <div id="chart1" class="example-chart"  style="height:300px;width:100%;float:left"></div>
<div style="clear:both"></div>
        </div>
    </div>
</div>

</div>

            
<link class="include" rel="stylesheet" type="text/css" href="<?=site_url()?>/assets/plugins/charts/jquery.jqplot.min.css" />
<script class="include" type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.pointLabels.min.js"></script>
<script language="javascript" type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.categoryAxisRenderer.min.js"></script>
<script language="javascript" type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.barRenderer.min.js"></script>

<script type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.logAxisRenderer.min.js"></script>
<script type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.canvasAxisLabelRenderer.min.js"></script>
<script type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="<?=site_url()?>/assets/plugins/charts/jqplot.dateAxisRenderer.min.js"></script>

<script type="text/javascript" class="code">
$(document).ready(function(){
	$(window).load(function(){
		get_chart()	;
	});
});
	
function get_chart(){
	$('#chart1').html('');
	$(document).ready(function(){
	    var line1 = view_ajax_chart();
        $.jqplot.config.enablePlugins = true;
         
        plot1 = $.jqplot('chart1', [line1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
				rendererOptions: {
                // Set the varyBarColor option to true to use different colors for each bar.
                // The default series colors are used.
                varyBarColor: true
	            },
                pointLabels: { show: true }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
					/*tickOptions: {
						  formatString: "%d"
					}*/
                    //ticks: ticks
                },
				yaxis: {
					min: 0,  
					tickOptions: { 
						formatString: '%d' 
					} 
				}
				
            },
            highlighter: { show: false }
        });
     
        $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
            }
        );
    });
}
function view_ajax_chart(type){
	user_id = 1;
    var data = $('#search-form').serialize();
	//alert(user_id);
	var ret = [];
	$.ajax({
	  async: false,
	  url: "<?=$admin_link?>/ajax_admin/ajax_chart",
	  type:'GET',
	  data:data,
	  dataType:"json",
	  success: function(data) {
		   $.each( data, function( key, val ) {
				ret.push([key, val]);
			});
	  }
	});
	return ret;
}

function select_type(val){
	if(val=='day'){
		$('.hide-date').show();
		$('.hide-date .form-control').attr('required',true);
	}
	else{
		$('.hide-date').hide();
		$('.hide-date .form-control').removeAttr('required');
	}
}

function submit_search(){
	get_chart();
}
</script>
<link href="<?=site_url()?>/assets/global/plugins/bootstrap-datepicker/css/datepicker.css"  rel='stylesheet' type='text/css' >
<script type="text/javascript" src="<?=site_url()?>/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

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


<style>
.admin-dashboard a:hover{
	text-decoration:none;
}
</style>

