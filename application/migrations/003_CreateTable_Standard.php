<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/27
 * Time: 22:56
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Standard extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'            =>  array('type'=>'INT','constraint' => 5,'unsigned' => TRUE,'auto_increment' => TRUE),
            'charge_item'   =>  array('type'=>'VARCHAR' , 'constraint'=>'100'),                 # 收费项
            'amount'        =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),                  # 金额
            'start_time'    =>  array('type'=>'TIMESTAMP' ,  'null'=>TRUE),                     # 收费执行时间
            'end_time'      =>  array('type'=>'TIMESTAMP' ,  'null'=>TRUE),                     # 收费执行结束时间
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('standard');
    }

    public function down()
    {
        $this->dbforge->drop_table('standard');
    }
}