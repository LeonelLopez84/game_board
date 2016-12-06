<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_regalo extends CI_Migration {

    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->table="regalo";
    }

    public function up() 
    {
        $this->dbforge->add_field(
            array(
                "id"        =>      array(
                    "type"              =>      "INT",
                    "constraint"        =>      11,
                    "unsigned"          =>      TRUE,
                    "auto_increment"    =>      TRUE,
 
                ),
                "regalo"  =>      array(
                    "type"              =>      "VARCHAR",
                    "constraint"        =>      255,
                ),
                "desc"  =>      array(
                    "type"              =>      "VARCHAR",
                    "constraint"        =>      255,
                ),
                "ganador"  =>      array(
                    "type"              =>      "VARCHAR",
                    "constraint"        =>     255,
                ),
            )
        );
 
        $this->dbforge->add_key('id', TRUE);//establecemos id como primary_key
        $this->dbforge->create_table($this->table);//creamos la tabla users


    }

    public function down() 
    {
        $this->dbforge->drop_table($this->table);
    }

}

/* End of file 001_create_regalo.php */
/* Location: ./application/migrations/001_create_regalo.php */