<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Consulta extends CI_Controller {
public function fisica($id) {
    $this->load->model('consulta_model');
    $persona = $this->consulta_model->get_personafisica($id);
    $data['data'] = $persona;
    $this->load->view('consulta', $data);
}
public function juridica($id) {
    $this->load->model('consulta_model');
    $persona = $this->consulta_model->get_personajuridica($id);
    $data['data'] = $persona;
    $this->load->view('consulta', $data);
}
}
?>
