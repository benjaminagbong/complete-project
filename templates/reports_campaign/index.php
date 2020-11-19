<?php
$report_message = '';
$page_content	= $this->comman_model->get_by('contents',array('id'=>1),false,false,true);
if($page_content){
	$report_message = $page_content->description;
}
$report_message = str_replace('{report_link}',site_url().'reports_campaign/report_fundraiser/'.$campaigns->id, $report_message);
?>
<?php $this->load->view('templates/includes/header'); ?>  
<!-- page wrapper -->
<body class="boxed_wrapper">
<div class="page-wrapper">
<?php $this->load->view('templates/includes/menu'); ?> 
<style>
@media print, screen and (min-width: 60em){
.content-section, .content-section-multi-container {
    padding: 4rem 1rem;
}
.heading-3 {
    font-size: 1.5rem;
    line-height: 2rem;
}
}
.content-section, .content-section-multi-container {
	position:relative;
}
.content-section-main .breadcrumb-list {
    background-color: #fbf8f6;
    border-radius: 4px;
    display: inline-block;
    margin: 0;
    padding: .5rem 1rem;
}
.caregory-content-box{
	background-color:#fbf8f6;
}
.caregory-content-box .card-header{
	background-color:#fff;
}
.caregory-content-box .card{
    -webkit-box-shadow: 0 8px 32px 0 rgba(0,0,0,.1);
    box-shadow: 0 8px 32px 0 rgba(0,0,0,.1);
}
.heading-5{
	font-weight:900;
}
.caregory-content-box i{
	position:absolute;
	font-size:30px;
}
.caregory-content-box .bottom-icon-text{
	padding-left:40px;
}
.category-name-line{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
	font-size:20px;
}
</style>
<section class="section">
<div class="container">
    <div class="row">
		<div class="col-md-12">
            <div class="content-section content-section-main ">
                <div class="grid-container p-0">
                    <div class="row justify-content-md-center">
                        <!-- text-column -->
						<div class="col-md-12">
                            <div style="margin-bottom:10px"><?=$report_message?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--container-->

<?php $this->load->view('templates/comman/category_content'); ?>
</section>
<?php $this->load->view('templates/includes/footer'); ?> 
</div>
</body><!-- End of .page_wrapper -->
</html>

