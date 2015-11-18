<?php
/**
 * Created by PhpStorm.
 * User: Administrator 李国军
 * Date: 2015/11/15
 * Time: 23:11
 */

class Display extends CI_Controller
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


    public function tursingList()
    {
        //老人护理列表
        $this->load->view('admin/oldman/tursing');

    }



    public function standardList()
    {
        //收费标准列表
        $this->load->view('admin/housing/standard');

    }


    public function costList(){
        //花费列表
        $this->load->view('admin/housing/cost');
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





}