<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>List Laporan - Pengaduan</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo site_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

  <link href="<?php echo site_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo site_url('assets/css/scrolling-nav.css')?>" rel="stylesheet">

  <script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
  </script>

  <style type="text/css">
    .alert{
      margin-top: 76px;
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


  
  <div class="container alert">
    
    <div id="pesan-sukses" class="alert alert-success" style="margin: 8px 20px;"></div>

      <div id="view" style="margin: 10px 20px;">
          <?php $this->load->view('user/view_laporan'); // Load file view.php dan kirim data siswanya ?>
      </div>
  </div>

  <div class="modal fade" id="form-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <span id="modal-title"></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="pesan-error" class="alert alert-danger"></div>
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Judul Laporan</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul...">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Tanggal Laporan</label>
                  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal...">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">NIK</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIK...">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Isi Laporan</label>
                  <textarea class="form-control" id="exampleFormControlInput1" placeholder="Tulis pengaduan..." rows="7"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">File</label>
                  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Tulis pengaduan..." rows="7"></textarea>
                </div>
                </form>
                
          </div>
      <div class="modal-footer">
        <div id="loading-simpan" class="pull-left">
          <b>Sedang menyimpan...</b>
        </div>
        <div id="loading-ubah" class="pull-left">
          <b>Sedang mengubah...</b>
        </div>
        <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
        <button type="submit" class="btn btn-primary" id="btn-ubah">Ubah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="delete-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <!-- Beri id "loading-hapus" untuk loading ketika klik tombol hapus -->
                    <div id="loading-hapus" class="pull-left">
                        <b>Sedang menghapus...</b>
                    </div>
                    <!-- Beri id "btn-hapus" untuk tombol hapus nya -->
                    <button type="button" class="btn btn-primary" id="btn-hapus">Ya</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
</div>



  <script src="<?= base_url("assets/vendor/jquery/jquery.min.js") ?>"></script>
  <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url("assets/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url("assets/js/sb-admin-2.min.js") ?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url("assets/vendor/chart.js/Chart.min.js") ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url("assets/js/demo/chart-area-demo.js") ?>"></script>
  <script src="<?= base_url("assets/js/demo/chart-pie-demo.js") ?>"></script>
  <script src="<?= base_url("assets/js/pengaduan.js") ?>"></script>


  </body>

</html>