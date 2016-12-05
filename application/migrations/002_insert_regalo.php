<?php
defined("BASEPATH") OR exit("No puedes acceder aquí directamente");
 
class Migration_Insert_Regalo extends CI_Migration
{

	protected $table;

	public function __construct()
	{
		$this->table="regalo";
		//Do your magic here
	}
 
	public function up()
	{
		//creamos un array con los datos del usuario
		$rows[]=array(
							"id"=>1,
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>2,
							"regalo"=>"Plancha"
						);

		$rows[]=array(
							"id"=>3,
							"regalo"=>"$ 10,00.00",
						);

		$rows[]=array(
							"id"=>4,
							"regalo"=>"Suerte para la Proxima",
						);

		$rows[]=array(
							"id"=>5,
							"regalo"=>"Suerte Para la Proxima",
						);

			$rows[]=array(
							"id"=>6,
							"regalo"=>"Suerte Para la Proxima",
						);
		
		
		foreach ($rows as $row) {

			$this->db->insert($this->table, $row);	
		}
		
 
	}
 
	public function down()
	{
		//hacemos lo opuesto al método up, eliminamos el usuario admin
	
		$this->db->delete($this->table);
 
	}
 
}