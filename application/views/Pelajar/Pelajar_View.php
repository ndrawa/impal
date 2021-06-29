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
  <div style="background-color: #e8e8e8;">
    <h4 style="margin-left: 50px;"> Welcome, Pelajar <?= $this->session->userdata('session_nama');?> </h4>
    <p style="margin-left: 50px;"> Silahkan pilih tombol untuk memulai action. </p>
  </div>
	<div class="container">
    <div class="row">
      <div class="col">
        <div class="text-center">
          <a href="<?= site_url('pelajar_controller/view_matakuliah/'); ?>" class="btn btn-primary">View MataKuliah   </a>
          <a href="<?= site_url('pelajar_controller/view_materi/'); ?>" class="btn btn-primary">View Materi   </a>
          <a href="<?= site_url('pelajar_controller/view_pengajar/'); ?>" class="btn btn-primary">View Pengajar  </a>
        </div>
      </div>
    </div>
  </div>
  <?php 
      $this->load->view('template/footer');
  ?> 
</body>
</html>
