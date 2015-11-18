<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Reception extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'status'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),
            'visitor'   =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),              #来访者
            'relation'  =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),              #关系
            'om_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),                    #被访问的老人标识
            'mode'      =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),              #访问形式
            'time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),                  #来访时间
            'ac_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),                    #接待员工标识
            'phone'     =>  array('type'=>'VARCHAR' , 'constraint'=>'11'),              #联系电话


        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('reception');
    }

    public function down()
    {
        $this->dbforge->drop_table('reception');
    }
}