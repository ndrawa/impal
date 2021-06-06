<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> View Materi </title>
</head>
<body>
	<?php 
        $this->load->view('template/navbar');
        $this->load->view('template/back');
    ?>

    <h1> View Materi </h1>

    <form class="form-control" action="<?= site_url('pengajar_controller/view_materi/');?>" method="post">
	    <div class="form-group">
	    	<p> Pilih mata kuliah yang ingin dilihat materinya 
		    <select class="form-select" aria-label="Default select example" name="id_matakuliah" onchange="tampil_materi();">
				<option selected> Select - Mata kuliah</option>
				<?php
					$idx = 0;
					foreach ($data_matkul as $matkul) { ?>
						<option value = <?= $matkul['kode_matakuliah']; ?>> <?= $matkul['nama_matakuliah']; ?> </option>
				<?php } ?>
			</select>
			<button type="submit" class="btn btn-primary"> Tampilkan materi </button> </p>
			</p>
	  	</div>
	</form>

	<div style="width:1000px; margin: auto;">
	<?php if ($data_materi) {
		$idx = 0; ?>
		<strong> Mata kuliah terpilih: <?= $data_materi[0]['nama_matakuliah']; ?></strong>
		<table class="table mt-5 table-bordered table-hover" >
	  		<thead class="thead-dark">
	  			<tr>
	  				<th scope="col"> No </th>
	  				<th scope="col"> Kode Materi </th>
	  				<th scope="col"> Nama Materi </th>
	  			</tr>
	  		</thead>

	  		<tbody>
				<?php foreach ($data_materi as $materi) {
					$idx = $idx + 1;
					echo "<tr>";
					echo "<th scope=\"row\">".$idx."</th>";
					echo "<td>".$materi['kode_materi']."</td>";
					echo "<td>".$materi['nama_materi']."</td>";
					echo "</tr>";
				} ?>
			</tbody>
		</table>
	<?php } ?>
	</div>
  	<p id="space_materi"> </p>
</body>

<script>
	function tampil_materi() {
		var nama_matkul = document.getElementById("id_matakuliah").value;
		document.getElementById("space_materi").innerHTML = "hai";
	}
	// function showHint(str) {
	//   if (str.length == 0) {
	//     document.getElementById("txtHint").innerHTML = "";
	//     return;
	//   } else {
	//     var xmlhttp = new XMLHttpRequest();
	//     xmlhttp.onreadystatechange = function() {
	//       if (this.readyState == 4 && this.status == 200) {
	//         document.getElementById("txtHint").innerHTML = this.responseText;
	//       }
	//     }
	//     xmlhttp.open("GET", "gethint.php?q="+str, true);
	//     xmlhttp.send();
	//   }
	// }
</script>
</html>