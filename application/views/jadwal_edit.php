<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-image : linear-gradient(to right, #49b3e8,lime)">
    <?php echo form_open("jadwal/proses_edit/".$jadwal->id); ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Booking</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="">TIM </label>
              <input type="text" class="form-control" value="<?php echo $jadwal->Tim; ?>" id="" placeholder="Masukan nama Tim" name="tim">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">LAPANG </label><br>
              <select class="form-control"  name="lapang">
                <option value="<?php echo $jadwal->Lapang; ?>"><?php echo $jadwal->Lapang; ?></option>
                <?php
                $option = array('1', '2');
                for ($i=0; $i < count($option); $i++) {
                  if ($option[$i] == $jadwal->Lapang) {


                  }
                  else{
                    ?>
                    <option value="<?php echo $option[$i]; ?>"><?php echo $option[$i]; ?></option>
                    <?php
                  }
                }
                 ?>

              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">MULAI JAM </label>
              <input type="time" class="form-control" id="" placeholder="" value="<?php echo $jadwal->Jam; ?>" name="jam">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label>SAMPAI</label>
              <input type="time" class="form-control" id="" placeholder="" value="<?php echo $jadwal->Sampai; ?>" name="sampai">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">TANGGAL </label><br>
              <input type="date" name="tanggal" value="<?php echo $jadwal->Tanggal; ?>" class="form-control">
              <p class="help-block"></p>
            </div>

          </div>
          <div class="panel-footer">
            <button type="submit" name="button" value="button" class="btn btn-primary">update</button>
          </div>
        </div>
    <?php echo form_close(); ?>

  </body>
</html>
