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
		if ($_SESSION['session_login'] == 'admin') {
			$this->load->view('template/backmatakuliah');
		}
    ?>

    <div class="container">
    <div class="row">
	<div class="form-control">
      	<p class="h5 text-center mb-5 mt-4">View Matakuliah</p>
		<table class="table mt-5 table-bordered table-hover" >
			<thead class="thead-dark">
	  			<tr>
	  				<th scope="col" width="5%"> No </th>
	  				<th scope="col" align="center"> Matakuliah </th>
	  				<th scope="col" align="center" width="15%"> ID Matkul </th>
					<th scope="col" align="center"> Pengajar </th>
					<th scope="col" align="center" width="13%"> ID Pengajar </th>
	  				<?php if ($this->session->userdata('session_login') == 'admin') { ?>
						<th scope="col" align="center"> Action </th>
					<?php } ?>
	  			</tr>
	  		</thead>

			<tbody>
				
			    <?php $i=1;  foreach($matakuliah as $matkul): ?>
			    <tr>
			    	<th scope="row"> <?= $i++ ;?></th>
			        <td> <?= $matkul->nama_matakuliah;?></td>
			        <td> <?= $matkul->kode_matakuliah;?></td>
			    	<td> <?= $matkul->nama;?></td>		
			        <td> <?= $matkul->kode_pengajar;?></td>
					<?php if ($this->session->userdata('session_login') == 'admin') { ?>
						<td align="center"> 
							<a href="<?php echo site_url('admin_controller/edit/'); echo $matkul->kode_matakuliah; ?>" type="button" class="btn btn-warning">
								<img src="<?= base_url()."assets/icon/edit.svg"; ?>"> 
							</a> 
							<a href="<?php echo site_url('admin_controller/delete/'); echo $matkul->kode_matakuliah; ?>" type="button" class="btn btn-danger">
								<img src="<?= base_url()."assets/icon/trash.svg"; ?>"> 
							</a> 
						</td>
					<?php } ?>
			    </tr>
			    <tr>
			    	
			    </tr>
			    <?php endforeach; ?>
		   </tbody>
		</table> 
      </div>
    </div>
    </div> 
    <?php 
        $this->load->view('template/footer');
    ?>    
</body>
</html>
