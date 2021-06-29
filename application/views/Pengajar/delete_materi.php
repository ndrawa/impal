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
      <div class="container">
        <div class="row">
	        <div class="form-control">
      	    <p class="h5 text-center mb-5 mt-4">Delete Materi</p>
            <?php if($this->session->flashdata('flash_add') == 'success'){ ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->set_flashdata('flash_add','Data materi berhasil dihapus');
                echo $this->session->flashdata('flash_add'); ?>
              </div>
              <?php } else if ($this->session->flashdata('flash_add') == 'failed') { ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $this->session->set_flashdata('flash_add','Data materi gagal dihapus');
                echo $this->session->flashdata('flash_add'); ?>
              </div>
            <?php } ?>
            <form class="form-control mb-5" action="" method="post" id="deletemateri">
              <label for="defaultFormRegisterEmailEx" class="grey-text">Id Materi</label>
              <input type="text" id="id_materi" name="id_materi" readonly value="<?= $materi[0]['kode_materi']?>"class="form-control"/>
              <br/>
              <label for="defaultFormRegisterEmailEx" class="grey-text">Nama Materi</label>
              <input type="text" id="nama_materi" name="nama_materi" readonly value="<?= $materi[0]['nama_materi']?>" class="form-control"/>
              <br/>
              <div class="text-center mt-3">
                <button class="btn btn-primary" type="submit" name="delete">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>    
      <?php 
          $this->load->view('template/footer');
      ?> 
  </body>
</html>