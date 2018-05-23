<?php
  /**
   *
   */
  class Register extends CI_Controller
  {
    function __construct(){
      parent:: __construct();
      $this->load->model("Akun_model");
    }
    public function index()
    {
      $data['active'] = 'login';

      $data["query"] = $this->Akun_model->getAllData();
      $data['content']='register_view';
      $this->load->view("template",$data);
    }
    function tambah_proses()
    {
      $username = $this->input->post("username");
      $password = $this->input->post("password");


      $data = array(
        "username" => $username,
        "password" => md5($password),
        "level" => 'user'
      );

      $insert = $this->db->insert("tuser",$data);
      if ($insert) {
        echo "
        <script>
          alert('Data berhasil disimpan');
          window.location ='".base_url('login')."';
        </script>
        ";
      }else{
        echo "
          <script>
          alert('Data gagal disimpan!');
          window.location = '".base_url('register')."';
          </script>
        ";
      }
  }
  }

 ?>
