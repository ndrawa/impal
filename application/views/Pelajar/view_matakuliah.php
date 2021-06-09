<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Daftar Mata Kuliah - Pelajar</title>
</head>
<body>

	<?php 
		$this->load->view('template/navbar');
  		$this->load->view('template/back');
	?>

	<h1> Lihat Mata Kuliah </h1>

	<form class="form-control" method="post" action=""> </form>
		<div style="width:1000px; margin: auto;">
			<table class="table mt-5 table-bordered table-hover" >
		  		<thead class="thead-dark">
		  			<tr>
		  				<th scope="col"> No </th>
		  				<th scope="col"> Kode Mata Kuliah </th>
		  				<th scope="col"> Nama Mata Kuliah </th>
		  				<th scope="col"> Action </th>
		  			</tr>
		  		</thead>

		  		<tbody>
					<tr>
						<th scope="row"> 1 </th>
						<td id ="id_matakuliah"> 12344 </td>
						<td id ="nama_matakuliah"> Siber </td>
						<td> <button  name="tampil" type="button" class="btn btn-primary"> Lihat Materi </button> </td>
					</tr>
				</tbody>
			</table>
		</div>
	
</body>
</html>