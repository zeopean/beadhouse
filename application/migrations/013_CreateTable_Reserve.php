<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Reserve extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'reserver'  =>  array('type'=>'VARCHAR' , 'constraint'=>'20'),
            'time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'bed_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),
            'ac_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('reserve');
    }

    public function down()
    {
        $this->dbforge->drop_table('reserve');
    }
}