<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-image : linear-gradient(to right, #49b3e8,lime)">
    <?php echo form_open("jadwal/tambah_proses"); ?>
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color:skyblue;">
            <h3 class="panel-title" style="color:#fff"><strong>Booking</strong></h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="">TIM </label>
              <input type="text" class="form-control" id="" placeholder="Masukan nama Tim" name="tim">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">LAPANG </label><br>
              <select class="form-control" name="lapang">
                <option value="1">1</option>
                <option value="2">2</option>

              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">MULAI JAM </label>
              <input type="time" class="form-control" id="" placeholder="" name="jam">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label>SAMPAI</label>
              <input type="time" class="form-control" id="" placeholder="" name="sampai">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">TANGGAL </label><br>
              <input type="date" name="tanggal" value="" class="form-control">
              <p class="help-block"></p>
            </div>

          </div>
          <div class="panel-footer">
            <button type="submit" name="button" value="button" class="btn btn-success"><i class="fa fa-plus"></i> <b>Tambahkan</b></button>
            <a href=" <?php echo base_url('jadwal') ?>   " class="btn btn-warning"><i class="fa fa-times"></i> Kembali</a>
          </div>
        </div>
    <?php echo form_close(); ?>

  </body>
</html>
