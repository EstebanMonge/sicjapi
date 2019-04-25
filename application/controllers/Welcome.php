<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function data_submitted() {
		$id=$this->input->post('dname');
		if ($this->input->post('type') == "fisica") {
			redirect("consulta/fisica/".$id);
		}
        	if ($this->input->post('type') == "juridica") {
                	redirect("consulta/juridica/".$id);
        	}
	}
}
