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
      $this->load->view('template/backmatakuliah');
		?>
		</div>
    <div class="container">
    <div class="row">
      <div class="col">
      <p class="h5 text-center mb-4">Create Matakuliah</p>
      <?php if($this->session->flashdata('flash_add') == 'success'){ ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $this->session->set_flashdata('flash_add','Data berhasil ditambahkan');
            echo $this->session->flashdata('flash_add'); ?>
          </div>
        <?php } else if ($this->session->flashdata('flash_add') == 'failed') { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $this->session->set_flashdata('flash_add','Data gagal ditambahkan');
            echo $this->session->flashdata('flash_add'); ?>
          </div>
      <?php } ?>
      
        <form class="form-control" action="" method="post" id="creatematakuliah">
          <label for="defaultFormRegisterEmailEx" class="grey-text">Nama MataKuliah</label>
          <input type="text" id="nama_matakuliah" name="nama_matakuliah" class="form-control"/>
          <br/>
          <label for="defaultFormRegisterNameEx" class="grey-text">ID MataKuliah</label>
          <input type="text" id="id_matakuliah" name="id_matakuliah"  class="form-control"/>
          <br/>
          <label for="defaultFormRegisterPasswordEx" class="grey-text">Nama Pengajar</label>
          <input type="text" id="nama_pengajar" name="nama_pengajar" class="form-control"/>
          <br/>
          <label for="defaultFormRegisterConfirmEx" class="grey-text">ID Pengajar</label>
          <input type="text" id="id_pengajar" name="id_pengajar" class="form-control"/>
          <br/>
          <div class="text-center mt-3">
            <button class="btn btn-unique" type="submit" name="tambah">Save</button>
          </div>
        </form>
      </div>
    </div>
    </div>    
</body>
</html>
