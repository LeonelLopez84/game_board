<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Regalo_model extends Eloquent {

	protected $table = 'regalo';
	public $timestamps = false;


	public function __construct()
	{
		parent::__construct();
	}

}

/* End of file Regalos_model.php */
/* Location: ./application/models/Regalos_model.php */