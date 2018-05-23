<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      th {
        text-align: center;
      }
    </style>
  </head>
  <body style="background-image : linear-gradient(to right, #49b3e8,lime)">
    <center><strong style="color:#fff">JADWAL</strong></center>
    <hr style="width:30%">
    <div class="panel panel-default" style="border-radius:0px;">
      <div class="panel-heading" style="background-color:skyblue;">
        <h4 style="padding:0px; margin:0px;color:white;"><strong>Data Booking Lapang</strong></h4>
      </div>
      <div class="panel-body">
        <a href="<?php echo base_url('jadwal/tambah');?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>


        <table class="table table-bordered table-striped" style="margin-top:10px;">
          <thead style="background-color:skyblue;color:#fff;">
            <tr>
              <th>NO</th>
              <th>TIM</th>
              <th>LAPANG</th>
              <th>MULAI</th>
              <th>SAMPAI</th>
              <th>TANGGAL</th>
              <?php
              if ($this->session->userdata('level')=='admin') {
                echo '<th>AKSI</th>';
              }
               ?>

            </tr>
          </thead>
          <tbody>
            <?php if ($query->num_rows() > 0){
              $no = 1;
              foreach ($query->result() as $row) {
                echo '
                  <tr>
                   <td class="text-center">'.$no.'</td>
                   <td>'.$row->Tim.'</td>
                   <td class="text-center">'.$row->Lapang.'</td>
                   <td class="text-center">'.$row->Jam.'</td>
                   <td class="text-center">'.$row->Sampai.'</td>
                   <td class="text-center">'.$row->Tanggal.'</td>


                ';

                if ($this->session->userdata('level')=='admin') {
                  echo '<td class="text-center">
                  <a href="'.base_url('jadwal/edit/'.$row->id).'" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                  <button onclick="hapus(' . $row->id . ')" class="btn btn-danger "><i class="fa fa-trash"></i> Hapus</button>
                  </td>';

                }
                echo "</tr>";

                $no++;
              }
            }
            else{ echo'
              <tr>
                <td colspan="6" class="text-center">Data Masih Kosong</td>
              </tr>
              ';
            } ?>
          </tbody>
        </table>
      </div>
    </div>

    <script type="text/javascript">
      function hapus(id) {

        var quest = window.confirm("Apakah data ini akan dihapus?");

        if (quest) {
          window.location = "<?php echo base_url('jadwal/hapus/') ?>" + id;
        }
      }
    </script>
  </body>
</html>
