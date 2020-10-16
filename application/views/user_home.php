<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-2">USER</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-1">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-pen"></i>
          <span>Tulis Laporan</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('dashboard/listlaporan')?>">
          <i class="fas fa-list"></i>
          <span>List Laporan Anda</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-sign-out-alt"></i>
          <span>Log Out</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

    
      <!-- Sidebar Toggler (Sidebar) -->

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm justify-content-between mb-4">
            <center><h1 class="h4 mb-0 text-gray-800">TULIS LAPORAN</h1></center>
          </div>

        <?php echo form_open_multipart('dashboard/insert_laporan'); ?>
            
            <div class="form-group">
                <label for="exampleFormControlInput1">ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="idd">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tulis judul..." name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tanggal laporan</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Isi nama..." name="dates">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">NIK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ketikkan NIK" name="nikk">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tulis isi laporan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">File</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>

        <?php echo form_close(); ?>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
