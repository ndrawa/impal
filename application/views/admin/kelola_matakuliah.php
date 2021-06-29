<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Admin </title>
</head>
<body>
    <?php 
        $this->load->view('template/navbar');
        // $this->load->view('template/back'); 
    ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="h5 text-center mb-4">Menu Admin</p>
          <div class="text-center">
            <a href="<?= site_url('admin_controller/create_matakuliah/'); ?>" class="btn btn-primary">Create MataKuliah   </a>
            <a href="<?= site_url('admin_controller/view_matakuliah/'); ?>" class="btn btn-primary">View MataKuliah   </a>
            <!-- <a href="<?= site_url('admin_controller/edit_matakuliah/'); ?>" class="btn btn-primary">Edit MataKuliah   </a>
            <a href="<?= site_url('admin_controller/delete_matakuliah/'); ?>" class="btn btn-primary">Delete MataKuliah   </a> -->
          </div>
        </div>
      </div>
    </div>    
</body>
</html>
