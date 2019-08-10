<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Productos extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '45',
                        ),
                        'precio' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '45',
                        ),
                        
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('productos');
        }

        public function down()
        {
                $this->dbforge->drop_table('productos');
        }
}