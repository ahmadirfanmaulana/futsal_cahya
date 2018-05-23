<?php
  class About extends CI_Controller{
    function index(){
      $data['active'] = 'about';

        $data["alamat"]="";
        $data['content']='about_view';
        $this->load->view("template",$data);
    }
    public function alamat($alamat_url = ""){
      $data['active'] = 'about';

      $data["alamat"] = $alamat_url;
      $data["content"] = "about_view";
      $this ->load->view("template",$data);
    }

  }

 ?>
