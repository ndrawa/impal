<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Input Materi - Pengajar</title>
</head>
<body>
	<?php 
        $this->load->view('template/navbar');
    ?>
	<div class="container">
	<div class="row">
		<div class="form-control">
			<p class="h5 text-center mb-5 mt-4"> Input Materi </h3>
				<div style="margin:0 auto; width:800px;">
				<form class="form-control mb-5" action="" method="post" action="pengajar_controller/input_materi" enctype="multipart/form-data">
					<?php if($this->session->flashdata('flash_add') == 'success'){ ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?php echo $this->session->set_flashdata('flash_add','Data materi berhasil ditambahkan');
							echo $this->session->flashdata('flash_add'); ?>
						</div>
					<?php } else if ($this->session->flashdata('flash_add') == 'failed') { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?php echo $this->session->set_flashdata('flash_add','Data materi gagal ditambahkan');
							echo $this->session->flashdata('flash_add'); ?>
						</div>
					<?php } ?>

					<div class="form-group">
						<select class="form-select" aria-label="Default select example" name="id_matakuliah">
							<option selected> Select - Mata kuliah</option>
							<?php
								$idx = 0;
								foreach ($data_matkul as $dm) { ?>
									<option value = <?= $dm['kode_matakuliah']; ?>> <?= $dm['nama_matakuliah']; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group" >
						<input type="text" class="form-control" id="id_materi" name="id_materi" placeholder="ID Materi">
					</div>

					<div class="form-group" >
						<input type="text" class="form-control" id="nama_materi" name="nama_materi" placeholder="Nama Materi">
					</div>

					<div class="form-group">
						<input type="file" id="file_materi" name="file_materi">
					</div>
					<div class="text-center mb-5">
						<button type="submit" class="btn btn-primary" name="tambah">Save</button>
					</div>
				</form>
				</div>
          	</div>
        </div>
    </div>   
    <?php 
        $this->load->view('template/footer');
    ?> 
</body>
</html>