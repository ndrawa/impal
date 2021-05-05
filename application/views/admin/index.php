<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- Menyatakan penggunaan html versi 5 -->
<html>
<!-- head html -->
<head>
  <!-- memanggil bootstrap dari internet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- menyisipkan folder style.css dari folder lokal -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>

	<title> Admin </title>
</head>
<body>
    <?php 
			$this->load->view('template/navbar');
		?>
    <div class="container">
    <div class="row">
      <div class="col">
      <p class="h5 text-center mb-4">Menu Admin</p>
        <form class="form-control" action="<?= site_url('login/auth') ?>" method="post" id="createmateri">
          <div class="text-center">
            <!-- <button class="btn btn-unique" onclick="window.location.href='<?= site_url('admin_controller/create_matakuliah/'); ?>'">Crate MataKuliah</button> -->
            <a href="<?= site_url('admin_controller/create_matakuliah/'); ?>">Create MataKuliah   </a>
            <a href="<?= site_url('admin_controller/view_matakuliah/'); ?>">View MataKuliah   </a>
            <a href="<?= site_url('admin_controller/edit_matakuliah/'); ?>">Edit MataKuliah   </a>
            <a href="<?= site_url('admin_controller/delete_matakuliah/'); ?>">Delete MataKuliah   </a>
            <button class="btn btn-unique" type="submit">Edit MataKuliah</button>
            <button class="btn btn-unique" type="submit">View MataKuliah</button>
            <button class="btn btn-unique" type="submit">Delete MataKuliah</button> -->
          </div>
        </form>
      </div>
    </div>
    </div>    
</body>
</html>
