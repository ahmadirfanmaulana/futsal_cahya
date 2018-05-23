<?php
/**
 *
 */
class Login extends CI_Controller
{
  public function index()
  {
    $data['active'] = 'login';

    $data['content']='login_view';
    $this->load->view("template",$data);
  }

  public function cek()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $checkQuery = $this->db->get_where('tuser', ['username' => $username, 'password' => $password]);

    if ($checkQuery->num_rows() > 0) {

      // make session
      $this->session->set_userdata(array(
        'user_id' => $checkQuery->row()->id,
        'username' => $checkQuery->row()->username,
        'level' => $checkQuery->row()->level,
        'log' => true
      ));

      ?>
      <script type="text/javascript">
        alert('login berhasil');

        window.location = '<?php echo base_url('dashboard'); ?>';
      </script>
      <?php

    }
    else {
      ?>
      <script type="text/javascript">
        alert('login failed');

        window.location = '<?php echo base_url('login'); ?>';
      </script>
      <?php
    }

  }

  public function logout()
  {
    $this->session->sess_destroy();

    redirect('login');
  }
}

 ?>
