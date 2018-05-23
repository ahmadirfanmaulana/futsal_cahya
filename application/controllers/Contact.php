<?php
  class Contact extends CI_Controller{
    function index(){
      $data['active'] = 'contact';
        $this->load->helper("form");
        $data['content']='contact_view';
        $this->load->view("template",$data);
    }

  }

 ?>
