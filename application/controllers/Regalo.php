<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regalo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("regalo_model");
	}

	public function edit()
	{
		$id=$this->input->post('id');
		$ganador=$this->input->post('ganador');

		$Regalo=regalo_model::find($id);
		$Regalo->ganador=$ganador;
		$Regalo->save();

		echo json_encode(array('status'=>200,'id'=>$id));
	}

}

/* End of file Regalo.php */
/* Location: ./application/controllers/Regalo.php */