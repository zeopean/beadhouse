<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Nursing extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'om_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #老人标识
            'emp_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #员工标识
            'time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'status'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),
            'tur_desc'  =>  array('type'=>'VARCHAR' , 'constraint'=>100),   #护理描述
            'tur_reason'=>  array('type'=>'VARCHAR' , 'constraint'=>100),   #护理病因
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('nursing');
    }

    public function down()
    {
        $this->dbforge->drop_table('nursing');
    }
}