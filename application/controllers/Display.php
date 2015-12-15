<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/11/15
 * Time: 23:11
 */

class display extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/index');
    }

    public function admin()
    {
        //后台admin首页
        $this->load->view('admin/admin');
    }

    public function login()
    {
        //后台登录页面
        $this->load->view('admin/login');
    }

    /**
     * 显示列表页面 start   ********************************************************************
     */

    public function oldmanList()
    {
        //显示老人列表
        $this->load->view('admin/oldman/oldman');
    }

    public function accidentList()
    {
        //老人事故列表
        $this->load->view('admin/oldman/accident');
    }

    public function receptionList()
    {
        //来访管理
        $this->load->view('admin/reception/reception');
    }

    public function nursingList()
    {
        //老人护理列表
        $this->load->view('admin/oldman/nursing');

    }




    public function standardList()
    {
        //收费标准列表
        $this->load->view('admin/standard/standard');

    }


    public function costList(){
        //花费列表
        $this->load->view('admin/cost/cost');
    }

    public function roomList()
    {
        //房间列表
        $this->load->view('admin/housing/room');

    }

    public function employeeList()
    {
        //显示员工列表
        $this->load->view('admin/emp/employee');
    }

    public function performanceList()
    {
        //员工绩效列表
        $this->load->view('admin/emp/performance');
    }

    public function attendanceList()
    {
        //员工出勤列表
        $this->load->view('admin/emp/attendance');

    }


    public function reception()
    {
        //接待列表
        $this->load->view('admin/reception/reception');
    }

    /**
     * 显示列表页面 end   ********************************************************************
     */

    /**
     * 显示编辑页面 start   ********************************************************************
     */

    public function editOldman()
    {
        #编辑老人信息
        $this->load->view('admin/oldman/editOldman');
    }

    public function editAccident()
    {
        #编辑老人事故信息
        $this->load->view('admin/oldman/editAccident');
    }

    public function editNursing()
    {
        #编辑老人护理信息
        $this->load->view('admin/oldman/editNursing');
    }

    public function editReception()
    {
        #编辑来访信息
        $this->load->view('admin/reception/editReception');
    }

    public function editCost()
    {
        #编辑花费信息
        $this->load->view('admin/cost/editCost');
    }

    public function editRoom()
    {
        #编辑房屋信息
        $this->load->view('admin/housing/editRoom');
    }

    public function editStandard()
    {
        #编辑收费标准信息
        $this->load->view('admin/standard/editStandard');
    }

    public function editAttendance()
    {
        #编辑员工出勤信息
        $this->load->view('admin/emp/editAttendance');
    }

    public function editEmployee()
    {
        #编辑员工信息
        $this->load->view('admin/emp/editEmployee');
    }

    public function editPerformance()
    {
        #编辑员工绩效
        $this->load->view('admin/emp/editPerformance');
    }


    /**
     * 显示编辑页面 end  ********************************************************************
     */

}