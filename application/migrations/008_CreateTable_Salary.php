<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/27
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Salary extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'            =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'emp_id'        =>  array('type'=>'INT'     , 'constraint'=>10 , 'unsigned'=>TRUE),
            'salary'        =>  array('type'=>'VARCHAR' ,'constraint'=>10),
            'time'          =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),
            'status'        =>  array('type'=>'INT' , 'constraint'=>3),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('salary');
    }

    public function down()
    {
        $this->dbforge->drop_table('salary');
    }
}