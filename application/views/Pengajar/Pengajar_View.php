<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Pengajar </title>
</head>
<body id="pengajarpage">
	<?php 
		$this->load->view('template/navbar');
	?>
	<div style="background-color: #e8e8e8;">
		<h4 style="margin-left: 50px;">Selamat datang, Pak <?= $this->session->userdata('session_nama');?> </h3>
		<p style="margin-left: 50px;"> Silahkan pilih tombol untuk memulai action. </p>
	</div>
	<div align="center" style="margin: 50px auto;">
		<a href="<?= site_url('pengajar_controller/input_materi/'); ?>" class="btn btn-primary">Input Materi </a>
		<a href="<?= site_url('pengajar_controller/view_materi/'); ?>" class="btn btn-primary">View Materi </a>
	</div>
    <?php 
        $this->load->view('template/footer');
    ?> 
</body>
</html>
