<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta_model extends CI_Model {

public function get_personafisica($id) {
  if($id != FALSE) {
    $query=$this->db->query("select CEDULA,NOMBRE,APELLIDOS from SIC0001F where CEDULA like '%$id%'");
    return $query->row_array();
  }
  else {
    return FALSE;
  }
}
public function get_personajuridica($id) {
  if($id != FALSE) {
    $query=$this->db->query("select CEDULA,NOMBRE from SIC0001J where CEDULA like '%$id%'");
    return $query->row_array();
  }
  else {
    return FALSE;
  }
}
}
