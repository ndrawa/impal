<!DOCTYPE html>
<!--
	Pendahuluan: halaman ini merupakan tampilan awal ketika pelajar login 
	sebagai pelajar
	rujukan DPPL ada pada halaman 29
-->
<!-- on going progress-->
<html><!--menyatakan penggunaan html versi 5-->
<head><!-- head html-->
	<!-- pemanggilan bootstrap dari internet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--menyisipkan folder style.css dari folder lokal-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Pelajar </title><!--title html untuk nama halaman-->
</head><!--penutupan head html-->
<body><!--body html-->
	<?php //menyatakan penggunaan php
		$this->load->view('template/navbar');//memanggil navbar dari folder view untuk bagian atas halaman
	?>

	<h1>Halaman Pelajar</h1><!--heading no.1 html -->

</body><!--penutupan body html-->
</html><!--penutupan penggunaan html versi 5-->
