<?php $this->load->view('templates/includes/header'); ?>
<body> 
<div class="page-wrapper">
<?php $this->load->view('templates/includes/menu'); ?>


<section class="section">
<div class="container">
    <div class="row">
		<div class="col-md-12">
            <div class="content-section content-section-main ">
                <div class="grid-container p-0">
                    <div class="row justify-content-md-center">
                        <!-- text-column -->
                        <div class="col-sm-12 col-lg-12 pt-0 pb-0 ">
                            <!-- breadcrumb list -->
                            <!--<ul class="breadcrumb-list mb list-unstyled">
                                <li property="itemListElement" typeof="ListItem">
                                    <i class="fa fa-angle-left"></i>
                                    <a href="<?='category'?>" class=""><span property="name">Browse fundraisers</span>
                                    </a>
                                    <meta property="position" content="1">
                                </li>
                            </ul>-->
                            <!-- content -->
                            <h1 class="heading-1" role="heading" aria-level="1">Discover medical fundraisers on <?=$settings['site_name']?></h1>
                            <div class="heading-3" role="heading" aria-level="2">Help others by donating to their fundraiser, or start one for someone you care about.</div>
							<!--<div class="mt-3 mb-2"><a href="javascript:;" class="btn btn-primary btn-lg">Donate Now</a></div>-->
                            <p>A friend raised $35k to help Cindy's children with their medical care.</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--container-->

<div class="campaign-content-box pt-4 pb-4">
	<div class="container">
        <div class="row mt-3" id="result-data"></div>
<div class="clearfix mt-1 text-center">
<div class="small-2 medium-1" id="animated-loady" style="display: none;">

        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
            <g class="nc-icon-wrapper" fill="#00B961">
                <g class="nc-loop_dots-07-64" fill="#00B961">
                    <circle transform="translate(5.358105599927903 5.358105599927903) scale(0.832559200002253)" cx="32" cy="32" r="6" opacity=".80146" data-color="color-2" style="opacity:0.832559200002253;"></circle>
                    <circle transform="translate(3.460473600018025 13.8418944000721) scale(0.5674407999977469)" cx="8" cy="32" r="6" opacity=".59854" style="opacity:0.5674407999977469;"></circle>
                    <circle transform="translate(33.6 19.2) scale(0.4)" cx="56" cy="32" r="6" opacity=".4" style="opacity:0.4;"></circle>
                </g>
<script>!function(){function t(t){this.element=t,this.dots=[this.element.getElementsByTagName("circle")[1],this.element.getElementsByTagName("circle")[0],this.element.getElementsByTagName("circle")[2]],this.animationId,this.start=null,this.init()}if(!window.requestAnimationFrame){var e=null;window.requestAnimationFrame=function(t,i){var n=(new Date).getTime();e||(e=n);var a=Math.max(0,16-(n-e)),s=window.setTimeout(function(){t(n+a)},a);return e=n+a,s}}t.prototype.init=function(){var t=this;this.animationId=window.requestAnimationFrame(t.triggerAnimation.bind(t))},t.prototype.reset=function(){var t=this;window.cancelAnimationFrame(t.animationId)},t.prototype.triggerAnimation=function(t){var e=this;this.start||(this.start=t);var i=t-this.start,n=Math.min(i/250,4),a=(n=4==n?0:n)%1,s=Math.ceil(n);1e3&gt;i||(this.start=this.start+1e3);var r=[],o=[8,32,56],m=[32,32,32];switch(r[0]=r[1]=r[2]=.4,s){case 1:r[0]=1-3*a/5,r[1]=.4+3*a/5;break;case 2:r[1]=1-3*a/5,r[2]=.4+3*a/5;break;case 3:r[1]=.4+3*a/5,r[2]=1-3*a/5;break;case 4:r[0]=.4+3*a/5,r[1]=1-3*a/5;break;default:r[0]=1}for(var c=0;3&gt;c;c++)this.dots[c].setAttribute("style","opacity:"+r[c]+";"),this.dots[c].setAttribute("transform","translate("+(1-r[c])*o[c]+" "+(1-r[c])*m[c]+") scale("+r[c]+")");if(document.documentElement.contains(this.element))window.requestAnimationFrame(e.triggerAnimation.bind(e))};var i=document.getElementsByClassName("nc-loop_dots-07-64"),n=[];if(i)for(var a=0;i.length&gt;a;a++)!function(e){n.push(new t(i[e]))}(a);document.addEventListener("visibilitychange",function(){"hidden"==document.visibilityState?n.forEach(function(t){t.reset()}):n.forEach(function(t){t.init()})})}();</script>
            </g>
        </svg>
        
    </div>
<button type="button" class="btn btn-primary btn-nextpage" style="display:none" onClick="next_page()">Show more</button>
</div>
    </div>
</div>

<?php $this->load->view('templates/comman/category_content'); ?>
</section>
<?php $this->load->view('templates/includes/footer'); ?>
</div>
<?php $this->load->view('templates/includes/script'); ?>
<script>
var page =1;
function submit_search(){
	$('#animated-loady').show();
	$('.btn-nextpage').hide();
    var data = $('#search-form').serialize();
	$.ajax({
		type: 'GET',
		url : "<?php echo $_cancel.'/ajax_get_list'?>",
		data:{category_id:'<?=$view_data->id?>',page:page},
		dataType:'json',
		success: function(response){
			$('#result-data').append(response.html);
			$('#animated-loady').hide();
			if(response.next_page==true){
				$('.btn-nextpage').show();
			}
			
			
		}
	});
}
submit_search();
function next_page(){
	page++;
	submit_search();
}
</script>
  </body>
</html>