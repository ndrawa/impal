<!-- Halaman ini menyatakan bagian depan dari halaman admin.
Saat admin melakukan login, halaman inilah yang akan ditampilkan kepada admin untuk pertama kali.
Rujukan DPPL source code ini adalah DPPL yang bisa diakses di https://github.com/ndrawa/impal/blob/master/DPPL.pdf pada halaman 31.-->

<!-- Pada halaman ini hanya menghubungkan antar halaman dari menu utama admin ke masing-masing menu admin.
Halaman yang terhubung adalah halaman create matakuliah, view matakuliah, edit matakuliah, delete matakuliah, view materi, dan view pengajar.
Karena kami menggunakan framework Codeigniter, jadi pada halaman view tidak terdapat method-method yang berfungsi untuk melakukan pengolahan data.
Semua pengolahan data dilakukan pada model dan controller. -->

<!-- On-going progress. -->

<!DOCTYPE html>
<!-- Menyatakan penggunaan html versi 5 -->
<html>
<!-- head html -->
<head>
  <!-- Memanggil bootstrap dari internet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Menyisipkan folder style.css dari folder lokal -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Memberikan title untuk nama halaman. Menyatakan ini halaman milik siapa -->
	<title> Admin </title>
</head>
<body>
    <?php 
      // Memanggil navbar untuk keperluan bagian atas halaman
			$this->load->view('template/navbar');
		?>
    <!-- Membuat container untuk hyperlink/tombol yang ada -->
    <div class="container" >
      <div class="row">
        <div class="col">
          <!-- Menyatakan bahwa ini menu admin -->
          <p class="h5 text-center mb-4" style="color:white">Menu Admin</p>
          <!-- div untuk bagian link -->
          <div class="text-center">
            <!-- Tombol akan membuka ke link halaman yang dituju -->
            <a href="<?= site_url('admin_controller/kelola_matakuliah/'); ?>" class="btn btn-primary">Kelola MataKuliah </a>
            <a href="<?= site_url('pengajar_controller/view_pengajar/'); ?>" class="btn btn-primary">View Pengajar </a>
	          <a href="<?= site_url('admin_controller/view_materi/'); ?>" class="btn btn-primary">View Materi </a>
          </div>
        </div>
      </div>
    </div>    
    <?php 
        $this->load->view('template/footer');
    ?> 
<!-- Menutup body -->
</body>
<!-- Menutup file html -->
</html>
