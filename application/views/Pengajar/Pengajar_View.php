<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Pengajar </title>
</head>
<body>
	<?php 
		$this->load->view('template/navbar');
	?>
	
	<h3 style="margin:10px;">Selamat datang, Pak <?= $this->session->userdata('session_nama');?> </h3>
	<div align="center" style="margin: 50px auto;">
		<a href="<?= site_url('pengajar_controller/input_materi/'); ?>" class="btn btn-primary">Input Materi </a>
		<a href="<?= site_url('pengajar_controller/view_materi/'); ?>" class="btn btn-primary">View Materi </a>
		<a href="<?= site_url('pengajar_controller/delete_materi/'); ?>" class="btn btn-primary">Delete Materi </a>
		<a href="<?= site_url('pengajar_controller/edit_materi/'); ?>" class="btn btn-primary">Edit Materi </a>
	</div>
	
</body>
</html>
