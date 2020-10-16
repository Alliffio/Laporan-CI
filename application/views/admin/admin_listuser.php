<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>List User | Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
  </script>

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
        <div class="sidebar-brand-text mx-2">ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-1">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard/homeadmin')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Data Laporan</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard/listuser')?>">
          <i class="fas fa-user"></i>
          <span>Tabel User</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard/listpetugas')?>">
          <i class="fas fa-table"></i>
          <span>Tabel Petugas</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('dashboard/signout')?>">
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

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm justify-content-between mb-4">
            <center><h1 class="h4 mb-0 text-gray-800">DATA USER</h1></center>
            <br>
            
            <!-- buat export pdf dan excel -->
            <a href="<?= base_url('dashboard/cetak_user') ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Generate PDF</a>
            <a href="<?= base_url('dashboard/excel_user') ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-file fa-sm text-white-50"></i> Generate Excel</a>
          </div>
          
          <div id="pesan-sukses" class="alert alert-success" style="margin: 10px 20px;"></div>
          <div id="view" style="margin: 10px 20px;">
              <?php $this->load->view('admin/view_listuser', array('masyarakat'=>$masyarakat)); // Load file view.php dan kirim data siswanya ?>
          </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!-- Modal Hapus Data-->

  <!-- <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo site_url('Dashboard/hapus_masyarakat') ?>" method="post">
      <div class="modal-body">
        <p>Apakah anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div> -->

<!-- Modal Edit Data-->
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
                <label for="exampleFormControlInput1">NIK</label>
                <input type="text" class="form-control" id="nik" name="nikk" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" class="form-control" id="nama" name="name" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Username</label>
                <input type="text" class="form-control" id="username" name="usernam">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" id="password" name="pw">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Telepon</label>
                <input type="text" class="form-control" id="telp" name="telpon">
            </div>
      </form>
                
          </div>
      <div class="modal-footer">
        <div id="loading-ubah" class="pull-left">
          <b>Sedang mengubah...</b>
        </div>
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


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url("assets/vendor/jquery/jquery.min.js")?>"></script>
  <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url("assets/vendor/jquery-easing/jquery.easing.min.js")?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url("assets/js/sb-admin-2.min.js")?>"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url("assets/vendor/chart.js/Chart.min.js")?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url("assets/js/demo/chart-area-demo.js")?>"></script>
  <script src="<?= base_url("assets/js/demo/chart-pie-demo.js")?>"></script>
  <script src="<?= base_url("assets/js/user.js")?>"></script>


</body>

</html>
