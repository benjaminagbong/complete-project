<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/includes/head'); ?>  
<style>
#mu-page-breadcrumb{
  background:url('<?=!empty($page->image)?'assets/uploads/pages/'.$page->image:'assets/frontend/img/bg-1.jpg'?>');
}
</style>
<body class="home-02">
	<div class="wrapp-content">
		<!-- Header -->
	<header class="wrapp-header">
<?php $this->load->view('templates/includes/menu'); ?>  
<?php $this->load->view('templates/includes/head_img'); ?>  
		</header>
		<!-- Content -->
		<main class="content-row">
			<div class="content-box-01 padding-top-20 padding-bottom-100 padding-sm-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">

<?=$html_data?>                        

<!--<style>
 
#wrapper
{
	width:100%;
	background:#f7f7f8;
	background-image:url("assets/html/line.jpg");
	background-repeat:repeat-y;
	background-size:50px auto;
	padding-left:70px;
	padding-top:40px;
	padding-right:120px;
	text-align:left;

}
 
#wrapper .page
{
	height:297mm;
	width:210mm;
	page-break-after:always;
}

#wrapper table
{
	 
	border-spacing:0;
	border-collapse: collapse; 
	 
}
 
#wrapper table td 
{
	padding: 2mm;
}
 
#wrapper table.heading
{
	height:50mm;
}
 
#wrapper h3{
	font-size:25px;
}
#wrapper h4{
	font-size:22px;
}
         
</style>
<div id="wrapper" style="">
    <table class="heading" style="width:100%;">
        <tr>
            <td style="width:50%;"><img src="{logo}" style="width:195px;height:137px"></td>
            <td style="width:50%;text-align:right"><img src="{logo2}" style="width:137px;height:137px"></td>
        </tr>
        <tr>
            <td colspan="2" >
            <div style="width:60%;">
<h3 style="font-size:25px;">{user_name}</h3>
<h4 style="font-size:22px;">{exam_title} - {course_title}</h4>
<div>    This is description. This is description. This is description. This is description. This is description. This is description. 
</div>
</div>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"><img src="{sign}" style="width:220px;height:90px"></td>
            <td style="width:50%;">
            
<div class="" style="text-align:right">
    	<span class="" style="border:solid 3px #3C0;display:block;padding:10px;width:90px;float:right">CERTIFIED</span>
        <div style="clear:both"></div>
    	<div class="" >
	        Certified code: {certified_code}
        </div>
    	<div class="" >
	        Certified duration: {certified_duration} (5 years)
        </div>
    	<div class="" >
	        Certified link: {certified_link}
        </div>
    </div>            
            </td>
        </tr>

    </table>
         
         
    
     
    <br />
     
    </div>
-->

						</div>

					</div>

					

				</div>

			</div>

			

			

		</main>

<?php $this->load->view('templates/includes/footer'); ?>  

		

	</div>



	<!-- Main script -->

	<script src="assets/frontends/js/main.js"></script>

<link rel="stylesheet" href="assets/plugins/prettyPhoto/css/prettyPhoto.css" type="text/css" />
<script src="assets/plugins/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script>
jQuery(document).ready(function($) {
	//$(".gallery a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
	$(".gallery a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',});
});
</script>
</body>
</html>




