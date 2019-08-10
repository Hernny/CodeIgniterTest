<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Detalles extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'sell_id' => array(
                            'type' => 'INT'
                        ),
                        'product_id' => array(
                                'type' => 'INT'
                        ),
                        'precio' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '45',
                        ),
                        'cantidad' => array(
                            'type' => 'DECIMAL',
                            'constraint' => '11',
                        ),
                        'descripcion' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '45',
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('detalles');
        }

        public function down()
        {
                $this->dbforge->drop_table('detalles');
        }
}