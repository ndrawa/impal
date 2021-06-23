<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Delete Materi </title>
</head>
<body>
    <?php 
      $this->load->view('template/navbar');
    ?>
		</div>
    <div class="container">
    <div class="row">
      <div class="col">
      <p class="h5 text-center mb-4">Delete Materi</p>
        <form class="form-control" action="" method="post" id="deletemateri">
          <?php if($this->session->flashdata('flash_add')){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= $this->session->flashdata('flash_add')?>
            </div>
          <?php }?>
          <input type="text" id="id_materi" name="id_materi" placeholder="ID Materi" class="form-control"/>
          <br/>
          <input type="text" id="nama_materi" name="nama_materi" placeholder="Nama Materi" class="form-control"/>
          <br/>
          <div class="text-center mt-3">
            <button class="btn btn-unique" type="submit" name="delete">Delete</button>
          </div>
        </form>
      </div>
    </div>
    </div>    
</body>
</html>