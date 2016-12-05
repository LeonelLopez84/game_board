<?php
defined("BASEPATH") OR exit("No direct script access allowed");
 
class Home extends CI_Controller
{
 
	public function __construct()
	{
		parent::__construct();
	}
 
	public function index($version=0)
	{
		$this->load->library('migration');

		if(!$this->migration->version($version)){
        	show_error($this->migration->error_string());
      	}  
 
		//this->migration->version(2)ejecutará el método up de
		//las migraciones 001 y 002 y el método down de las superiores
 
	}
}