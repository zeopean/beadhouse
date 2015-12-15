<?php $this->load->view('admin/commom/header.html'); ?>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">管理后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/index.php/display/admin">系统首页</a></li>
                <li><a href="/index.php/display/oldmanList">老人管理</a></li>
                <li class="active"><a href="/index.php/display/employeeList">员工管理</a></li>
                <li><a href="/index.php/display/roomList">房间管理</a></li>
                <li><a href="/index.php/display/costList">费用管理</a></li>
                <li><a href="/index.php/display/standardList">收费标准管理</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">用户中心</a></li>
                <li><a href="#">系统设置</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- /container start-->
<div class="container">
    <!--nav start-->
    <div class="col-md-12 main">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">出勤管理</a></li>
                <li class="active">编辑/添加</li>
            </ol>
        </div>
        <!--content start -->
        <div class="col-md-6 content">
            <form role="form">
                <div class="form-group col-md-8">
                    <label for="name">员工姓名</label>
                    <input name="name" class="form-control" placeholder="请输入收费项"/>
                </div>

                <div class="form-group col-md-8">
                    <label for="name">考勤类型</label><br/>
                    <input type="radio" name="optionsRadios"   value="option1" checked>&nbsp; 迟到
                    <input type="radio" name="optionsRadios"   value="option1" >&nbsp;早退
                    <input type="radio" name="optionsRadios"   value="option1" >&nbsp;旷工
                    <input type="radio" name="optionsRadios"   value="option1" >&nbsp;请假

                </div>

                <div class="form-group col-md-8">
                    <label for="name">时间</label>
                    <input name="name" class="form-control" placeholder="请输入房号"/>
                </div>

                <div class="form-group col-md-8">
                    <label for="name">执行人</label>
                    <input name="name" class="form-control" placeholder="请输入名字"/>
                </div>

                <div class="form-group col-lg-10">
                    <label for="name">备注描述</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </form>
        </div>
        <!--content end-->
    </div>

    <!--nav end-->
</div>
<!-- /container end-->
<footer>
    <div class="col-12 center">
        by liguojun
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/public/js/libs/jquery.js"></script>
<script src="/public/js/libs/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/public/js/libs/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
