<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/27
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Emp_detail extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'            =>  array('type'=>'INT','constraint' => 10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'emp_id'        =>  array('type'=>'INT' , 'constraint'=>10 , 'unsigned'=>TRUE),
            'start_time'    =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'end_time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'phone'         =>  array('type'=>'VARCHAR' , 'constraint'=>'11'),
            'education'     =>  array('type'=>'VARCHAR' , 'constraint'=>'20'),      # 教育水平
            'profession'    =>  array('type'=>'VARCHAR' , 'constraint'=>'20'),      # 专业
            'salary'        =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      # 工资水平
            'marriage'      =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      # 婚姻状态

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('emp_detail');
    }

    public function down()
    {
        $this->dbforge->drop_table('emp_detail');
    }
}