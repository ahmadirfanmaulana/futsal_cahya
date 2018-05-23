<?php
/**
 *
 */
class Akun_model extends CI_Model
{

  function getAllData()
  {
    $this->db->order_by('id','desc');
    $query = $this->db->get("tuser");
    return $query;
  }
}

 ?>
