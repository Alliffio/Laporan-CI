<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Pengaduan</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/css/scrolling-nav.css')?>" rel="stylesheet">
  
  <script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
  </script>

  <style type="text/css">
    body{
      justify-content: center;
      align-items: center;
    }

    .cont{
      overflow: hidden;
      position: relative;
      width: 780px;
      height: 860px;
      background: #ededed;
      border-radius: 10px;
      margin-left: 280px;
      padding-bottom: 20px
    }

    form{
      padding: 45px;
    }

    h2{
      margin: auto;
      padding: 46px;
      text-align: center;
      text-transform: uppercase;
      font-weight: bold;
    }

    .navbar-brand{
      font-weight: bold;
    }


  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">LAPORAN PENGADUAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">List Laporan Anda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>ajukan sekarang</h1>
      <p class="lead">lorem ipsum bla bla</p>
    </div>
  </header>

  <br>

  <div id="pesan-sukses" class="alert alert-success" style="margin: 8px 20px;"></div>

   <div class="cont">
    <h2>Tulis Pengaduan</h2>
        <div id="pesan-error" class="alert alert-danger"></div>
        <form class="register-form">
          <div class="form-group">
            <label for="exampleFormControlInput1">Judul Laporan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul..." name="judul">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Laporan</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal..." name="tanggal">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">NIK</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIK..." name="nikk">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Isi Laporan</label>
            <textarea class="form-control" id="exampleFormControlInput1" placeholder="Tulis pengaduan..." rows="7" name="isi"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">File</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="file"></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-outline-primary" id="btn-simpan" style="float: right;">KIRIM LAPORAN</button>

        </form>
      </div>
  </div>

  <br>

  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?= base_url('assets/js/scrolling-nav.js')?>"></script>
  <script src="<?= base_url('assets/js/pengaduan.js')?>"></script>

</body>

</html>
