<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/10/28
 * Time: 23:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateTable_Oldman extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id'            =>  array('type'=>'INT'     ,'constraint' =>10,'unsigned' => TRUE,'auto_increment' => TRUE),
            'name'          =>  array('type'=>'VARCHAR' , 'constraint'=>20),
            'grade'         =>  array('type'=>'VARCHAR' , 'constraint'=>'4'),       #性别
            'age'           =>  array('type'=>'INT' ),
            'nation'        =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      #民族
            'birthday'      =>  array('type'=>'VARCHAR' , 'constraint'=>'20'),      #生日
            'health_status' =>  array('type'=>'VARCHAR' , 'constraint'=>'10'),      #健康状态
            'faith'         =>  array('type'=>'VARCHAR' , 'constraint'=>10),        #宗教信仰
            'card_id'       =>  array('type'=>'VARCHAR' , 'constraint'=>18),        #身份证号码
            'address'       =>  array('type'=>'VARCHAR' , 'constraint'=>20),        #居住地
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('oldman');
    }

    public function down()
    {
        $this->dbforge->drop_table('oldman');
    }
}