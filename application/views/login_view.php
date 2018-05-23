<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-image : linear-gradient(to right, #49b3e8,lime)">
    <center><strong style="color:#fff">LOGIN</strong></center>
    <hr style="width:30%">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel panel-heading" style="background-color:skyblue;color:white;font-family:century gothic;font-size:15px;text-align:center">
          <strong>LOGIN</strong>
        </div>
        <div class="panel-body">
          <form class="" action="<?php echo base_url('login/cek'); ?>" method="post">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                <input type="text" class="form-control" name="username" value="" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-lock"></i>
                </div>
                <input type="password" class="form-control" name="password" value="" placeholder="Password">
              </div>
            </div>


            <button type="submit" class="btn btn-success" name="button"><i class="fa fa-lock"></i> <b>LOGIN</b></button><br><br>
            <span style="color:grey">Belum mempunyai akun? <a href="<?php echo base_url('register') ?>">Register.</a></span>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
