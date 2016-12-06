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
							"desc"=>"",
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>2,
							"desc"=>"",
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>3,
							"desc"=>"",
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>4,
							"desc"=>"",
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>5,
							"desc"=>"",
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>6,
							"desc"=>"",
							"regalo"=>"TV 88\""
						);
		$rows[]=array(
							"id"=>7,
							"desc"=>"",
							"regalo"=>"Plancha"
						);

		$rows[]=array(
							"id"=>8,
							"desc"=>"",
							"regalo"=>"$ 10,00.00",
						);

		$rows[]=array(
							"id"=>9,
							"desc"=>"",
							"regalo"=>"Suerte para la Próxima",
						);

		$rows[]=array(
							"id"=>10,
							"desc"=>"",
							"regalo"=>"Suerte Para la Próxima",
						);

			$rows[]=array(
							"id"=>11,
							"desc"=>"",
							"regalo"=>"Suerte Para la Próxima",
						);
				$rows[]=array(
							"id"=>12,
							"desc"=>"",
							"regalo"=>"Suerte Para la Próxima",
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