<?php
  class Home extends CI_Controller{
    function _construct(){
      parent::_construct();
    }
    function index(){
        echo "Hello World!!!". "<br/>";

    }

    public function nama($nama=null)
    {
      echo "ini halaman nama ".$nama;
    }
  }

 ?>
