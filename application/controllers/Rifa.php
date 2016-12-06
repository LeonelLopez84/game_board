<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rifa extends CI_Controller {

	public $templates;
	public $body;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("regalo_model");
		$this->templates = new League\Plates\Engine(APPPATH.'views/');
	}

	public function index()
	{

		$this->body['regalos']=regalo_model::inRandomOrder()->get();
		echo $this->templates->render('game/rifa', $this->body);
	}

}

/* End of file Game.php */
/* Location: ./application/controllers/Game.php */