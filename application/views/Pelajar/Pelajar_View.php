<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Pelajar </title>
</head>
<body>
	<?php 
		$this->load->view('template/navbar');
	?>

	<h1>Halaman Pelajar</h1>
	<a href="<?= site_url('pelajar_controller/view_matakuliah/'); ?>">View MataKuliah </a>
	<a href="<?= site_url('pelajar_controller/view_materi/'); ?>">View Materi </a>
</body>
</html>
