<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Accident extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'om_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #老人标识
            'emp_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #员工标识
            'time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'ac_type'   =>  array('type'=>'VARCHAR' , 'constraint'=>10),    #事故类型
            'ac_desc'   =>  array('type'=>'VARCHAR' , 'constraint'=>100),   #事故描述
            'ac_handle' =>  array('type'=>'VARCHAR' , 'constraint'=>100),   #事故处理方案
            'status'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),        #事故处理状态
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('accident');
    }

    public function down()
    {
        $this->dbforge->drop_table('accident');
    }
}