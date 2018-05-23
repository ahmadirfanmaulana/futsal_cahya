<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Futsal</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" media="screen" title="no title" charset="utf-8">
    <style media="screen">
      .navbar-default .navbar-nav>li>a{
        color: white;
        margin-right: 20px;
      }
      .logo{
        font-family:century gothic;
        font-size:20px;
        margin-left:25px
      }
      .logo:hover{
        color: #eeee0f;
      }
    </style>
  </head>
  <body>
      <nav class="navbar navbar-default" style="border-bottom:0px;">
        <div class="navbar-header">
          <a href=" <?php echo base_url('dashboard'); ?>" class="navbar-brand" style="color:white"><span style=""class="logo">Futsal<b>KUY!</b></span></a>
        </div>
        <div class="collapse navbar-collapse " style="background-image : linear-gradient(to right, #49b3e8,lime);">
          <ul class="nav navbar-nav navbar-right"  >

            <li class="<?php if($active == "dashboard"){echo "active";} ?>">
            <?php echo anchor('dashboard','<b>HOME</b>'); ?> </li>
            <!-- <li class="<?php if($active == "about"){echo "active";} ?>"> -->
            <!-- <?php echo anchor('about','<b>ABOUT</b>'); ?></li> -->
            <li class="<?php if($active == "contact"){echo "active";} ?>">
            <?php echo anchor('contact','<b>CONTACT</b>'); ?></li>

            <?php
            if ($this->session->userdata('log') == true) {
              ?>

              <li class="<?php if($active == "jadwal"){echo "active";} ?>">
                <?php echo anchor('jadwal','<b>JADWAL</b>'); ?></li>
                <?php
                if ($this->session) {
                  # code...
                }
                ?>

                <li class="<?php if($active == "akun"){echo "active";} ?>">
                  <?php echo anchor('akun','<b>ACCOUNT</b>'); ?></li>
                <li class="<?php if($active == "login"){echo "active";} ?>">
                <?php echo anchor('login/logout','<b>LOGOUT</b>'); ?></li>
              <?php
            }
             ?>
             <?php
             if ($this->session->userdata('log') == false){
               ?><li class="<?php if($active == "login"){echo "active";} ?>">
               <?php echo anchor('login','<b>LOGIN</b>'); ?></li><?php
             }
              ?>


          </ul>
        </div>
      </nav>
      <!--<h1>Welcome to my website</h1>-->
      <div class="container">
          <?php
          $data['data'] = isset($data) ? $data : [];
          $this->load->view($content, $data); ?>
      </div>

      <script src="<?php echo base_url('assets/js/jquery.min.js')?>"> </script>
      <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>">

      </script>

  </body>
</html>
