<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	public $templates;

	public function __construct()
	{
		parent::__construct();
		// Create new Plates instance
		$this->templates = new League\Plates\Engine(APPPATH.'views/');
	}

	public function index()
	{
		
		echo $this->templates->render('game/rifa');
	}

}

/* End of file Game.php */
/* Location: ./application/controllers/Game.php */