<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Pagos extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'client_id' => array(
                                'type' => 'INT'
                        ),
                        'monto' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '45',
                        ),
                        'create_at' => array(
                                'type' => 'TIMESTAMP',
                        ),

                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('pagos');
        }

        public function down()
        {
                $this->dbforge->drop_table('pagos');
        }
}