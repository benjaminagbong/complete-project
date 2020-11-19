<?php
if($this->session->flashdata('success')) {
    $msg = $this->session->flashdata('success');
?>
<div class="alert alert-block alert-success ">
	<?php echo $msg;?>
</div>

<?php    
}
if($this->session->flashdata('error')) {
    $msg = $this->session->flashdata('error');
?>
<div class="alert alert-block alert-danger">
	<?php echo $msg;?>
</div>
<?php    
}
?>            

