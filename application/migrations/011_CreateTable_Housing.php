<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Housing extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'        =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'om_id'     =>  array('type'=>'INT' , 'unsigned'=>TRUE),                    #被访问的老人标识
            'bed_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),                    #床位标识
            'time'      =>  array('type'=>'TIMESTAMP' , 'null'=>TRUE),                  #入住时间
            'pay_status'=>  array('type'=>'INT' , 'unsigned'=>TRUE),                    #支付状态
            'house_status'  =>  array('type'=>'INT' , 'unsigned'=>TRUE),                #入住状态
            'emp_id'    =>  array('type'=>'INT' , 'unsigned'=>TRUE),                    #负责职工标识

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('housing');
    }

    public function down()
    {
        $this->dbforge->drop_table('housing');
    }
}