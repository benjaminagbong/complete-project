<?php
$payment_error = 'There Is Some Problem';
if($this->session->flashdata('error')) {
	$payment_error = $this->session->flashdata('error');
}

$this->load->view('templates/includes/header')?>
<?php $this->load->view('templates/includes/header')?>
<body class="campaign-view-page"> 
<div class="page-wrapper">
    <!-- header start-->
<?php $this->load->view('templates/includes/menu')?>
    <!-- header end-->
<main class="main">
    <!-- donation start-->
    <section class="section donation">
        <div class="container">
            <div class="card shadow p-3 mb-5 bg-white rounded">
    <div class="card-body">
<h2 class="text-center">Payment Error</h2>
<p class="text-center "><?=$payment_error?></p>
        
    </div>
	</div>
        </div>
    </section>
    <!-- donation end-->
</main>
<!-- footer start-->
<?php $this->load->view('templates/includes/footer')?>
<!-- footer end-->
</div>
<!-- libs-->
<?php $this->load->view('templates/includes/script')?>
</body>
</html>
