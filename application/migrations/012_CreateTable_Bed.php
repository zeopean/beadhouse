<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Bed extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'building'  =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),
            'room'      =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),
            'bed'       =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),
            'desc'      =>  array('type'=>'VARCHAR' , 'constraint'=>'100'),
            'status'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('bed');
    }

    public function down()
    {
        $this->dbforge->drop_table('bed');
    }
}