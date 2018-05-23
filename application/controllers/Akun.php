<?php
  /**
   *
   */
  class Akun extends CI_Controller
  {
    public function index()
    {
      $data['active'] = 'akun';

      $this->load->model('Akun_model');
      $data["query"] = $this->Akun_model->getAllData();
      $data['content']='akun_view';
      $this->load->view("template",$data);

    }
    function hapus($id){
        $this->db->delete('tuser',array('id' => $id));
        redirect('akun');
    }
  }

 ?>
