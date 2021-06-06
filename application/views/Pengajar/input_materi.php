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
        $this->load->view('template/back');
    ?>
    <h3 style="text-align: center;"> Input Materi </h3>
    <div style="margin:0 auto; width:500px;">
		<form>
		  	<div class="form-group" >
			    <select class="form-select" aria-label="Default select example">
					<option selected>Select - Mata kuliah</option>
					<option value="1">DAP</option>
					<option value="2">Kalkulus</option>
					<option value="3">STD</option>
				</select>
		  	</div>
			 <div class="form-group" >
			    <!-- <label for="exampleInputPassword1">ID Materi</label> -->
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="ID Materi">
		  	</div>

		  	<div class="form-group" >
			    <!-- <label for="exampleInputPassword1">Nama Materi</label> -->
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama Materi">
		  	</div>

		  	<div class="form-group" >
			    <!-- <label for="exampleFormControlFile1"> Choose File </label> -->
		    	<input type="file" class="form-control-file" id="exampleFormControlFile1">
		  	</div>
			<button type="submit" class="btn btn-primary" style="left: 50%; position: absolute;">Save</button>
		</form>
	</div>
</body>
</html>