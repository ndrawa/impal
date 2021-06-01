<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> View Pengajar </title>
</head>
<body>
	<?php 
		$this->load->view('template/navbar');
        $this->load->view('template/back');
	?>
	<p class="h5 text-center mb-4">Tabel Pengajar</p>
		<table class="table table-dark">
		  <tbody>	  	
			    <tr class="table-active">
			      <td>No</td>
			      <td>Pengajar</td>
			      <td>ID Pengajar</td>
			      <td>Matkul</td>
			      <td>ID Matakuliah</td>
			    </tr>
			    <tr>
			    	<td>1</td>
			    	<?php foreach($pengajar as $pgr) :?>
			    	<td> <?= $pgr['nama'] ;?></td>		
			        <td> <?= $pgr['kode_pengajar'] ;?></td>
			        <?php endforeach; ?>
			    </tr>
			    <tr>
			     
			    </tr>
		   </tbody>
		</table>    
</body>
</html>
