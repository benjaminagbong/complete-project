<?php
$this->data['menu_uri_2'] = $this->uri->segment(2);
$this->data['menu_uri_3']= $this->uri->segment(3);
?>

<?php $this->load->view('user/includes/header'); ?>  
<style>
.status-td .badge,
.status-td .h5{
	font-size:14px;
	font-weight:normal;
	
}
.btn-group-xs > .btn, .btn-xs {
  padding: .25rem .4rem;
  font-size: .875rem;
  line-height: .5;
  border-radius: .2rem;
}

.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}

.am-pagebody{
	min-height:480px;
}
/*editor*/
.note-image-popover,
.note-link-popover{
	display:none;
}
.note-editor .note-toolbar {
    border-bottom: 1px solid #c2cad8;
}

.note-editor .btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}

</style>
<body>
<?php $this->load->view('user/includes/header_menu'); ?>  
<?php $this->load->view('user/includes/left_menu'); ?>  
<div class="am-mainpanel">
      <div class="am-pagetitle">
        <h5 class="am-title"><?=$name?></h5>
      </div><!-- am-pagetitle -->
      <div class="am-pagebody">
<?php $this->load->view('user/includes/message'); ?>
<?php $this->load->view($subview); ?>
      </div><!-- am-pagebody -->
      <div class="am-footer">
        <span>Copyright &copy;. All Rights Reserved.</span>
      </div><!-- am-footer -->
    </div>
    
    <script src="<?=site_url()?>assets/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/jquery-toggles/toggles.min.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/d3/d3.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/rickshaw/rickshaw.min.js"></script>
<?php
if($this->data['menu_uri_2']=='account'&&$this->data['menu_uri_3']==''){
?>
    <script src="<?='http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8'?>"></script>
    <script src="<?=site_url()?>assets/admin/lib/gmaps/gmaps.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/Flot/jquery.flot.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/Flot/jquery.flot.pie.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/Flot/jquery.flot.resize.js"></script>
    <script src="<?=site_url()?>assets/admin/lib/flot-spline/jquery.flot.spline.js"></script>
<?php
}
?>

    <script src="<?=site_url()?>assets/admin/js/amanda.js"></script>
    <script src="<?=site_url()?>assets/admin/js/ResizeSensor.js"></script>
<?php
if($this->data['menu_uri_2']=='account'&&$this->data['menu_uri_3']==''){
?>
    <script src="<?=site_url()?>assets/admin/js/dashboard.js"></script>
<?php
}
?>

<style>
.c-red{
	color:#F00;
}
label.error{
	font-size:13px;
	color:#F00;
}
</style>

  </body>
</html>
