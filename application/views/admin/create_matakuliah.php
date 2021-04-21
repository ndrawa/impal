<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Admin </title>
</head>
<body>
	<nav class="navbar navbar-light bg-light justify-content-between mb-5">
	  	<a class="navbar-brand">Navbar</a>
	  	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
	</nav>
    <div class="container">
    <div class="row">
      <div class="col">
      <p class="h5 text-center mb-4">Create Matakuliah</p>
        <form class="form-control" action="<?= site_url('login/auth') ?>" method="post" id="createmateri">
          <label for="defaultFormRegisterNameEx" class="grey-text">Kode MataKuliah</label>
          <input type="text" id="id_matakuliah" class="form-control"/>
          <br/>
          <label for="defaultFormRegisterEmailEx" class="grey-text">Nama MataKuliah</label>
          <input type="email" id="nama_matakuliah" class="form-control"/>
          <br/>
          <label for="defaultFormRegisterConfirmEx" class="grey-text">Kode Pengajar</label>
          <input type="email" id="id_pengajar" class="form-control"/>
          <br/>
          <label for="defaultFormRegisterPasswordEx" class="grey-text">Nama Pengajar</label>
          <input type="password" id="nama_pengajar" class="form-control"/>
          <br/>
          <div class="text-center mt-3">
            <button class="btn btn-unique" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
    </div>    
</body>
</html>
