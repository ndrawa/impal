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
        // $this->load->view('template/backmatakuliah');
		if ($_SESSION['session_login'] == 'admin') {
			$this->load->view('template/backmatakuliah');
		}
    ?>

    <div class="container">
    <div class="row">
      <div class="col">
      <p class="h5 text-center mb-4">View Matakuliah</p>
		<table class="table mt-5" border="1">
		  <tbody>

			    <tr class="table-active">
			      <td>No</td>
			      <td>Matakuliah</td>
			      <td>ID Matkul</td>
			      <td>Pengajar</td>
			      <td>ID Pengajar</td>
			    </tr>
				<!-- <tr>
			    	<td>1</td>
			        <td> Rezim Sisca Kohl</td>
			    	<td> RSK</td>		
			    	<td> Priyoga Sugeng Aditya</td>		
			        <td> PSA</td>
			    </tr> -->
				
			    <?php $i=1;  foreach($matakuliah as $matkul): ?>
			    <tr>
			    	<td> <?= $i++ ;?></td>
			        <td> <?= $matkul->nama_matakuliah;?></td>
			        <td> <?= $matkul->kode_matakuliah;?></td>
			    	<td> <?= $matkul->nama;?></td>		
			        <td> <?= $matkul->kode_pengajar;?></td>
			    </tr>
			    <tr>
			    	
			    </tr>
			    <?php endforeach; ?>
		   </tbody>
		</table> 
      </div>
    </div>
    </div>    
</body>
</html>
