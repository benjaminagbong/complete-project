<style>
.campaign-image{
	margin-bottom:20px;
}
.campaign-image img{
	max-width:100%;
}
.xs-event-schedule-widget {
    padding: 50px 40px;
    background-color: #f9f9f9;
}
.xs-event-schedule {
    margin-bottom: 10px;
}
.xs-event-schedule .media-body {
    padding: 8px 0;
}
.xs-list-group li {
    color: #041D57;
    font-size: 1.07143em;
    font-weight: 500;
    margin-bottom: 20px;
}
.justify-content-between .shadow-btn{
    border-radius: 50px;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    padding: 16px 39px;
    line-height: 1;
    border: 0;
    color: #FFFFFF;
    position: relative;
    overflow: hidden;
    z-index: 1;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
}
</style>
<?php
$category	= print_value('categories',array('id'=>$view_data->category),'name');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-3"><?=$view_data->name?></h3>
            	<div class="row">
                	<div class="col-md-8">
                        <div class="campaign-image"><img src="assets/uploads/campaigns/<?=$view_data->image?>" class="img-responsive" /></div>
						<div class="text-center">Dated Created: <?=date('m/d/Y',$view_data->created)?> | <i class="fas fa-tag"></i>: <?=$category?></div>                    </div>
                    <div class="col-lg-4">
                    <div class="xs-event-schedule-widget">
                        <div class="media xs-event-schedule">
                            <div class="media-body">
                                <h5> &#36;0 <small>raised of  &#36; 100 goal</small></h5>
                                <hr style="height:5px; background-color: #18bfc3">
                            </div>
                        </div>
                        <ul class="list-group xs-list-group">
                            <li class="d-flex justify-content-between">
                                Be the first to help.
                            </li>
                            <li class="d-flex justify-content-between">
                                Donors 
                                <span>0</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <a href="<?='campaigns/'.$view_data->id?>" class="btn btn-primary shadow-btn" style="width:100%">
                                    <span class="badge"></span> Donate Now
                                </a>
                            </li>
                            <li class="d-flex justify-content-between">
                                <a class="btn btn-default shadow-btn" style="width:100%; color:black" href="<?='campaigns/'.$view_data->id?>" data-toggle="modal" data-original-title="share">
                                    <span class="badge"></span> Share 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="xs-event-schedule-widget">
                        <h3 class="widget-title">Latest Sponsors</h3>
                        <table class="display nowrap table table-hover">
                        </table>
                    </div><!-- .xs-event-schedule-widget END -->						<!-- End horizontal tab -->
                    </div><!--col-md-4-->
				</div>
            </div>
        </div>
    </div>
</div>
