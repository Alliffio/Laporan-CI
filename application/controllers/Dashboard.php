<?php

class Dashboard extends CI_Controller{
    public function __construct(){                                            
        parent::__construct();
        $this->load->model('model_system');
    }
    
    public function index(){
        if ($this->session->userdata('status') !='login') {
            redirect('dashboard/signup');
        }
        else if ($this->session->userdata('status') =='login') {
            redirect('dashboard/homeadmin');
        }
    }

    public function home(){
        $this->load->view('landing_page');
    }

    //untuk tampil halaman login
    public function login(){
        if ($this->session->userdata('status') =='login') {
            redirect('dashboard/loginn');
        }
        
        $this->load->view('user/loginn');
    }

    //tampil halaman daftar/regis
    public function signup(){
        $this->load->view('user/signup');
    }

    //tampulan home user
    public function userhome(){
        $this->load->view('user/index_home');
    }



    //tampilan home admin
    public function homeadmin(){
        $data['pengaduan'] = $this->model_system->view_laporan();
        $this->load->view('admin/admin_home', $data);
    }


    //tampilan list petugas
    public function listpetugas(){
        $data['admin'] = $this->model_system->view_petugas();
        $this->load->view('admin/admin_listpetugas', $data);
    }


    //crud ajax
    public function simpan_petugas(){
        if($this->model_system->validation("save")){ // Jika validasi sukses atau hasil validasi adalah true
          $this->model_system->save(); // Panggil fungsi save() yang ada di SiswaModel.php
          // Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
          $html = $this->load->view('admin/view_petugas', array('admin'=>$this->model_system->view_petugas()), true);
          $callback = array(
            'status'=>'sukses',
            'pesan'=>'Data berhasil disimpan',
            'html'=>$html
          );
        }else{
          $callback = array(
            'status'=>'gagal',
            'pesan'=>validation_errors()
          );
        }
        echo json_encode($callback);
    }

    public function ubah_petugas($id){
        if($this->model_system->validation("update")){ // Jika validasi sukses atau hasil validasi adalah true
          $this->model_system->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
          // Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
          $html = $this->load->view('admin/view_petugas', array('admin'=>$this->model_system->view_petugas()), true);
          $callback = array(
            'status'=>'sukses',
            'pesan'=>'Data berhasil diubah',
            'html'=>$html
          );
        }else{
          $callback = array(
            'status'=>'gagal',
            'pesan'=> validation_errors()
          );
        }
        echo json_encode($callback);
    }

    public function hapus_petugas($id){
        $this->model_system->delete($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        // Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
        $html = $this->load->view('admin/view_petugas', array('admin'=>$this->model_system->view_petugas()), true);
        $callback = array(
          'status'=>'sukses',
          'pesan'=>'Data berhasil dihapus',
          'html'=>$html
        );
        echo json_encode($callback);
    }


    //tampilan list user
    public function listuser(){
        $data['masyarakat'] = $this->model_system->view_masyarakat();
        $this->load->view('admin/admin_listuser', $data);
    }

   
    public function ubah_masyarakat($id){
        if($this->model_system->validation_masyarakat("update")){ // Jika validasi sukses atau hasil validasi adalah true
          $this->model_system->edit_masyarakat($id); // Panggil fungsi edit() yang ada di SiswaModel.php
          // Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
          $html = $this->load->view('admin/view_listuser', array('masyarakat'=>$this->model_system->view_masyarakat()), true);
          $callback = array(
            'status'=>'sukses',
            'pesan'=>'Data berhasil diubah',
            'html'=>$html
          );
        }else{
          $callback = array(
            'status'=>'gagal',
            'pesan'=>validation_errors()
          );
        }
        echo json_encode($callback);
    }

    public function hapus_masyarakat($id){
        $this->model_system->delete_masyarakat($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        // Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
        $html = $this->load->view('admin/view_listuser', array('masyarakat'=>$this->model_system->view_masyarakat()), true);
        $callback = array(
          'status'=>'sukses',
          'pesan'=>'Data berhasil dihapus',
          'html'=>$html
        );
        echo json_encode($callback);
    }



    // //agar masuk ke halaman home user
    // public function simpan_data(){
    //     $this->model_system->simpan_db();
    //     $this->load->view('user/loginn');
    // }

    //fungsi agar bisa login
    public function login_action()
    {
        $usernamess = $this->input->post('username');
        $passwordss = $this->input->post('password');
        $where = array(
            'username' => $usernamess,
            'password' => $passwordss
        );

        $cek = $this->model_system->cek_login("petugas", $where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'username' => $usernamess,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);
            if ($this->session->userdata('status') == 'login') {
                header("location:" . base_url() . 'Dashboard/homeadmin');
            } else {
                echo 'Login Gagal';
            }
        } else {
            echo 'Email dan Password Salah !';
        }
    }

    //fungsi keluar/signout
    public function signout()
    {
        $this->session->sess_destroy();
        redirect(base_url('dashboard/login'));
    }


    //cetak pdf tabel data petugas
    public function cetak()
    {
        $data['admin'] = $this->model_system->view_petugas();

        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename = 'laporan-petugas.pdf';
        $this->pdf->load_view('pdf_preview', $data);

    }

    //cetak pdf tabel data user
    public function cetak_user(){
        $data['masyarakat'] = $this->model_system->view_masyarakat();

        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename = 'laporan-user.pdf';
        $this->pdf->load_view('admin/pdf_user', $data);
    }

    //cetak excel tabel data user
    public function excel_user(){
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
        header('Content-Disposition: attachment;filename="Data user.xls"');
        header('Cache-Control: max-age=0');

        $data['masyarakat'] = $this->model_system->view_masyarakat(); 
        $this->load->view('admin/pdf_user', $data);

    }

    //cetak excel data petugas
    public function excel_petugas(){
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
        header('Content-Disposition: attachment;filename="Data petugas.xls"');
        header('Cache-Control: max-age=0');

        $data['admin'] = $this->model_system->view_petugas(); 
        $this->load->view('pdf_preview', $data);

    }

    //cetak pdf tabel data laporan / pengaduan
    public function cetak_laporan()
    {
        $data['pengaduan'] = $this->model_system->view_laporan();

        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename = 'laporan-pengaduan.pdf';
        $this->pdf->load_view('admin/pdf_pengaduan', $data);

    }

    //cetak excel data petugas
    public function excel_laporan(){
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
        header('Content-Disposition: attachment;filename="Data pengaduan.xls"');
        header('Cache-Control: max-age=0');

        $data['pengaduan'] = $this->model_system->view_laporan(); 
        $this->load->view('admin/pdf_pengaduan', $data);

    }






}
?>