<?php
/**
 * Created by PhpStorm.
 * User: 李国军
 * Date: 2015/10/27
 * Time: 22:46
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Cost extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type' => 'INT','constraint' => 5,'unsigned' => TRUE,'auto_increment' => TRUE),
            'des'      =>  array('type'=>'VARCHAR' , 'constraint'=>'100' ),        # 收费项描述
            'amount'    =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),          # 金额
            'is_into'   =>  array('type'=>'INT' , 'constraint'=>'3'),               /** 此处待商榷 */
            'is_put'    =>  array('type'=>'INT' , 'constraint'=>'3'),
            'emp_id'    =>  array('type'=>'INT' , 'constraint'=>'9'),               /** 收费的员工标识 */
            'status'    =>  array('type'=>'INT' , 'constraint'=>'3'),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('cost');
    }

    public function down()
    {
        $this->dbforge->drop_table('cost');
    }
}