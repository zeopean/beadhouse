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
                <li><a href="/index.php/display/employeeList">员工管理</a></li>
                <li class="active"><a href="/index.php/display/roomList">房间管理</a></li>
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
                <li><a href="#">房间管理</a></li>
                <li class="active">编辑/添加</li>
            </ol>
        </div>
        <!--content start -->
        <div class="col-md-12 content">
            <form action="" name="" role="form">
                <div class="form-group col-md-4">
                    <label for="name">大厦名</label>
                    <input name="name" class="form-control" placeholder="请输入大厦名"/>
                </div>


                <div class="form-group col-md-4">
                    <label for="name">楼层</label><br/>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="name">房号</label>
                    <input name="name" class="form-control" placeholder="请输入房号"/>
                </div>


                <div class="form-group col-md-4">
                    <label for="name">床位</label><br/>
                    <input type="radio" name="optionsRadios"   value="option1" checked>&nbsp; 床位一
                    <input type="radio" name="optionsRadios"   value="option1" >&nbsp;床位二
                    <input type="radio" name="optionsRadios"   value="option1" >&nbsp;床位三
                    <input type="radio" name="optionsRadios"   value="option1" >&nbsp;床位四
                </div>

                <div class="form-group col-md-4">
                    <label for="name">入职时间</label>
                    <input name="name" class="form-control" placeholder="请输入名字"/>
                </div>

                <div class="form-group col-md-4">
                    <label for="name">离职时间</label>
                    <input name="name" class="form-control" placeholder="请输入名字"/>
                </div>


                <div class="form-group col-lg-8">
                    <label for="name">员工简介</label>
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
