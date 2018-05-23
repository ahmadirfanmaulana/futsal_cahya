<?php
/**
 *
 */
class Jadwal extends CI_Controller
{
  function __construct(){
    parent:: __construct();
    $this->load->model("Jadwal_model");
  }
  public function index()
  {
    $data['active'] = 'jadwal';

    $data["query"] = $this->Jadwal_model->getAllData();
    $data['content']='jadwal_view';
    $this->load->view("template",$data);
  }
  public function tambah()
  {
    $data['active'] = 'jadwal';
    $data['content'] = 'jadwal_tambah';
    $this->load->view('template',$data);
  }
  function tambah_proses()
  {
    $tim = $this->input->post("tim");
    $lapang = $this->input->post("lapang");
    $jam = $this->input->post("jam");
    $sampai = $this->input->post("sampai");
    $tanggal = $this->input->post("tanggal");

    $data = array(
      "Tim" => $tim,
      "Lapang" => $lapang,
      "Jam" => $jam,
      "Sampai" => $sampai,
      "Tanggal" => $tanggal
    );

    $insert = $this->db->insert("tbooking",$data);
    if ($insert) {
      echo "
      <script>
        alert('Data berhasil disimpan');
        window.location ='".base_url('jadwal')."';
      </script>
      ";
    }else{
      echo "
        <script>
        alert('Data gagal disimpan!');
        window.location = '".base_url('jadwal/tambah')."';
        </script>
      ";
    }
}
  function hapus($id){
      $this->db->delete('tbooking',array('id' => $id));
      redirect('jadwal');
  }

  public function edit($id)
  {
    // jadwal
    $this->db->where('id', $id);
    $jadwal = $this->db->get('tbooking');

    // data
    $data['data'] = array(
      'jadwal' => $jadwal->row(),
      'num' => $jadwal->num_rows(),
    );

    $data['active'] = 'edit';
    $data['content'] = 'jadwal_edit';
    $this->load->view('template',$data);
  }

  public function proses_edit($id)
  {
    $tim = $this->input->post("tim");
    $lapang = $this->input->post("lapang");
    $jam = $this->input->post("jam");
    $sampai = $this->input->post("sampai");
    $tanggal = $this->input->post("tanggal");

    $data = array(
      "Tim" => $tim,
      "Lapang" => $lapang,
      "Jam" => $jam,
      "Sampai" => $sampai,
      "Tanggal" => $tanggal
    );

    $this->db->where('id', $id);
    $insert = $this->db->update("tbooking",$data);
    if ($insert) {
      echo "
      <script>
        alert('Data berhasil diupdate');
        window.location ='".base_url('jadwal')."';
      </script>
      ";
    }else{
      echo "
        <script>
        alert('Data gagal diupdate!');
        window.location = '".base_url('jadwal/edit')."';
        </script>
      ";
    }
  }
}
 ?>
