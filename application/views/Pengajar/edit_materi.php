<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Edit Materi - Pengajar</title>
</head>
<body>
	<?php 
        $this->load->view('template/navbar');
    ?>
    <h3 style="text-align: center;"> Edit Materi </h3>
    <div style="margin:0 auto; width:500px;">
		<form class="form-control" action="" method="post">
			<?php echo form_open_multipart('pengajar_controller/edit_materi');?>
			<?php if($this->session->flashdata('flash_add') == 'success'){ ?>
	            <div class="alert alert-success alert-dismissible fade show" role="alert">
	            	<?php echo $this->session->set_flashdata('flash_add','Data materi berhasil diubah');
	            	echo $this->session->flashdata('flash_add'); ?>
	            </div>
          	<?php } else if ($this->session->flashdata('flash_add') == 'failed') { ?>
          		<div class="alert alert-danger alert-dismissible fade show" role="alert">
	            	<?php echo $this->session->set_flashdata('flash_add','Data materi gagal diubah');
	            	echo $this->session->flashdata('flash_add'); ?>
	            </div>
	        <?php } ?>
            <label for="defaultFormRegisterNameEx" class="grey-text">ID Materi</label>
            <?php 
            foreach($matkul as $row)
            { 
              echo '<input type="text" id="id_materi" name="id_materi" readonly value="'.$row['kode_materi'].'" class="form-control"/>';
            }
            ?>
            <br/>
            <label for="defaultFormRegisterEmailEx" class="grey-text">ID Matakuliah</label>
            <input type="text" id="id_matakuliah" name="id_matakuliah" readonly value="<?= $matkul[0]['kode_matakuliah']?>"  class="form-control"/>
            <br/>
            <label for="defaultFormRegisterEmailEx" class="grey-text">Nama Materi</label>
            <input type="text" id="nama_materi" name="nama_materi" value="<?= $matkul[0]['nama_materi']?>" class="form-control"/>
            <br/>
		  	<div class="form-group">
		  		<input type="file" id="file_materi" name="file_materi">
		  	</div>

		  	<!-- <div class="form-group" >
			     <label for="exampleFormControlFile1"> Choose File </label>
		    	<input type="file" class="form-control-file" id="exampleFormControlFile1">
		  	</div> -->
		  	<div class="text-center mt-3">
				<button type="submit" class="btn btn-primary" name="tambah">Save</button>
			</div>
		</form>
	</div>
    <?php 
        $this->load->view('template/footer');
    ?> 
</body>
</html>