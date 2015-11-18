<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/27
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Employee extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' => 5  ,'unsigned' => TRUE,'auto_increment' => TRUE),
            'name'      =>  array('type'=>'VARCHAR' , 'constraint'=>'20'),
            'age'       =>  array('type'=>'INT'     , 'constraint'=>'5'),
            'grade'     =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      # 性别
            'department'=>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      # 部门
            'job'       =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      # 职务
            'building'  =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      # 所属大楼
            'status'    =>  array('type'=>'INT' , 'constraint'=>'5'),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('employee');
        $this->db->simple_query('ALTER TABLE user ADD UNIQUE (name)');
    }

    public function down()
    {
        $this->dbforge->drop_table('employee');
    }
}