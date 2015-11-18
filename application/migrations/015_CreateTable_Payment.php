<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_PayMent extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'om_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #老人标识
            'emp_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #员工标识
            'time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'sta_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #收费标准标识
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('payment');
    }

    public function down()
    {
        $this->dbforge->drop_table('payment');
    }
}