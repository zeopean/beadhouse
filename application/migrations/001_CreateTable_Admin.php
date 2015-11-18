<?php
/**
 * Created by PhpStorm.
 * User: 李国军
 * Date: 2015/10/27
 * Time: 22:39
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Admin extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'                => array('type' => 'INT','constraint' => 5,'unsigned' => TRUE,'auto_increment' => TRUE),
            'name'              => array('type' => 'VARCHAR', 'constraint' => '10',),
            'password'          => array('type' => 'VARCHAR', 'constraint' => '60',),
            'is_power'          => array('type' => 'INT', 'constraint' => '5', 'default' => '0'),
            'login_ip'          => array('type' => 'VARCHAR', 'constraint' => '20', 'null' => TRUE,),
            'login_time'        => array('type' => 'TIMESTAMP', 'null' => TRUE,),
        ));
        $this->dbforge->create_table('admin');
        $this->dbforge->add_key('id', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('admin');
    }
}

