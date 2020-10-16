<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class model_system extends CI_Model{
    // proses registrasi masuk db
    public function simpan_db(){
        $data = array(
            'nik' => $this->input->post('niik'),
            'nama' => $this->input->post('name'),
            'username' => $this->input->post('usernam'),
            'password' => $this->input->post('passwod'),
            'telp' => $this->input->post('telepon'),

        );
        $this->db->insert('masyarakat', $data);
    }



    //untuk cek login
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }


    // ajax

    // Fungsi untuk menampilkan semua data petugas
    public function view_petugas(){
        return $this->db->get('petugas')->result();
    }

    // function untuk validasi
    public function validation($mode){
    $this->load->library('form_validation');

    if($mode == "save")
      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('name', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('usernam', 'Username', 'required|max_length[50]');
    $this->form_validation->set_rules('pw', 'Password', 'required|max_length[50]');
    $this->form_validation->set_rules('telpon', 'Telepon', 'required|max_length[20]');
    $this->form_validation->set_rules('address', 'Alamat', 'required');
    $this->form_validation->set_rules('level', 'Level', 'required');
    if($this->form_validation->run())
      return true;
    else
      return false;
  }

    //crud data petugas
    public function save(){
        $data = array(
          'nik' => $this->input->post('nikk'),
          'nama' => $this->input->post('name'),
          'username' => $this->input->post('usernam'),
          'password' => $this->input->post('pw'),
          'telepon' => $this->input->post('telpon'),
          'alamat' => $this->input->post('address'),
          'role' => $this->input->post('level')

        );
        $this->db->insert('petugas', $data);
    }

     public function edit($id){
        $data = array(
          'nik' => $this->input->post('nikk'),
          'nama' => $this->input->post('name'),
          'username' => $this->input->post('usernam'),
          'password' => $this->input->post('pw'),
          'telepon' => $this->input->post('telpon'),
          'alamat' => $this->input->post('address'),
          'role' => $this->input->post('level')

        );
        $this->db->where('id', $id);
        $this->db->update('petugas', $data);
    }

    public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('petugas'); // Untuk mengeksekusi perintah delete data
  }


//masyarakat
  public function view_masyarakat(){
        return $this->db->get('masyarakat')->result();
    }

    public function validation_masyarakat($mode){
    $this->load->library('form_validation');

    if($mode == "edit_masyarakat")
      $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('name', 'Nama', 'required|max_length[36]');
    $this->form_validation->set_rules('usernam', 'Username', 'required|max_length[26]');
    $this->form_validation->set_rules('pw', 'Password', 'required|max_length[32]');
    $this->form_validation->set_rules('telpon', 'Telepon', 'required|max_length[13]');
    if($this->form_validation->run())
      return true;
    else
      return false;
  }


     public function edit_masyarakat($id){
        $data = array(
          'nik' => $this->input->post('nikk'),
          'nama' => $this->input->post('name'),
          'username' => $this->input->post('usernam'),
          'password' => $this->input->post('pw'),
          'telp' => $this->input->post('telpon')

        );
        $this->db->where('id', $id);
        $this->db->update('masyarakat', $data);
    }

    public function delete_masyarakat($id){
    $this->db->where('id', $id);
    $this->db->delete('masyarakat'); // Untuk mengeksekusi perintah delete data
  }

  // Fungsi untuk menampilkan semua data siswa
    public function view_laporan(){
        return $this->db->get('pengaduan')->result();
    }


    //laporan

  //   public function validation_laporan($mode){
  //   $this->load->library('form_validation');

  //   if($mode == "save_laporan")
  //     $this->form_validation->set_rules('judul', 'Judul Laporan', 'required|max_length[50]');
  //   $this->form_validation->set_rules('tanggal', 'Tanggal Pengaduan', 'required');
  //   $this->form_validation->set_rules('nikk', 'NIK', 'required|numeric|max_length[16]');
  //   $this->form_validation->set_rules('isi', 'Isi Laporan', 'required');
  //   $this->form_validation->set_rules('file', 'File', 'required|max_length[226]');
  //   if($this->form_validation->run())
  //     return true;
  //   else
  //     return false;
  // }

  // public function upload_image(){
  //     $config['upload_path'] = './assets/foto';
  //     $config['allowed_types'] = 'jpg|png|gif|jpeg';
  //     $config['encypt_name'] = TRUE;

  //     $this->load->library('upload',$config);
  //     if ($this->upload->do_upload('file')) {
  //       $data = array('upload_data' => $this->upload->data());
  //       $image = $data['upload_data']['file_name'];
  //       $result = $this->model_system->save_laporan($image);
  //       echo json_decode($result);
  //     }
  //   }


  //   public function save_laporan(){
  //       $data = array(
  //         'judul_laporan' => $this->input->post('judul'),
  //         'tgl_pengaduan' => $this->input->post('tanggal'),
  //         'nik' => $this->input->post('nikk'),
  //         'isi_laporan' => $this->input->post('isi'),
  //         'foto' => $this->upload_image()
          

  //       );
  //       $this->db->insert('pengaduan', $data);
  //   }

   


    
}
