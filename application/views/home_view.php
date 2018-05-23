<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .home{
        height: 700px;
        width: 1100px;
        border-radius: 10px;
      }
      .text{
        color: #fff;
        font-family: forte;
        text-align: center;
        font-size: 60px;
        margin-top: 120px;
      }
      .sub-text{
        font-size: 90px;
        font-family: century gothic;
        color: #eeee0f;
      }
      .btn-success{
        width: 200px;
        color: #fff;
        font-size: 20px;
        padding: 10px 10px;
        margin-left: 450px;

      }
    </style>
  </head>
  <body style="background-image : linear-gradient(to right, #49b3e8,lime)">
  <!--  <center><strong style="color:#fff">HOME</strong></center>
    <hr style="width:30%">
  <div class="panel panel-default">
    <div class="panel panel-heading" style="background-color:skyblue">
      <span style="font-family:century gothic; font-size:20px;color:white;">Futsal<b>YUK!</b></span>
    </div>
    <div class="panel-body"  >
      <img src="<?php echo base_url('assets/img/cahya.jpg') ?> " alt="" class="home" />
    </div>
    <div class="panel-footer">
      Futsal adalah sebuah olahraga
    </div>
  </div>-->
  <p class="text">
    Welcome to <span class="sub-text">Futsal<b>KUY!</b></span>
  </p>
  <?php
  if ($this->session->userdata('log') == false){
    ?><a href=" <?php echo base_url('login') ?>" class="btn btn-success"><span class="sub-btn-success">Get Started</span></a>

  <?php
  }
   ?>

   <?php
   if ($this->session->userdata('log') == true){
     ?><a href=" <?php echo base_url('about') ?>" class="btn btn-success"><span class="sub-btn-success">Next</span></a>

   <?php
   }
    ?>



    <footer class="main-footer" style="position:absolute;bottom:0px;padding:10px 10px;width:1200px;">
      <strong>Copyright &copy; 2018.</strong> All rights
    </footer>
  </body>
</html>
