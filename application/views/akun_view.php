<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      th{
        text-align: center;
      }
    </style>
  </head>
  <body style="background-image : linear-gradient(to right, #49b3e8,lime)">
    <center><strong style="color:#fff">ACCOUNT</strong></center>
    <hr style="width:30%">
      <div class=" panel panel-default">
        <div class=" panel panel-heading" style="background-color:skyblue;color:#fff">
          <strong>AKUN</strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped" style="margin-top:10px;">
            <thead style="background-color:skyblue;color:#fff;">
              <tr>
                <th>NO</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($query->num_rows() > 0){
                $no = 1;
                foreach ($query->result() as $row) {
                  echo '
                    <tr>
                     <td>'.$no.'</td>
                     <td>'.$row->username.'</td>
                     <td>'.$row->password.'</td>
                     <td class="text-center">
                     <button onclick="hapus(' . $row->id . ')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                     </td>
                    </tr>
                  ';
                  $no++;
                }
              }
              else{ echo'
                <tr>
                  <td colspan="6" class="text-center"><b>Data Masih Kosong</b></td>
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
        //
        if (quest) {
          window.location = "<?php echo base_url('akun/hapus/'); ?>" + id;

        }
      }
    </script>
  </body>
</html>
