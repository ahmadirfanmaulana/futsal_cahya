<?php
  class Dashboard extends CI_Controller{
    function index(){
      $data['active'] = 'dashboard';
        $data['content']='home_view';
        $this->load->view("template",$data);
    }

  }

 ?>
