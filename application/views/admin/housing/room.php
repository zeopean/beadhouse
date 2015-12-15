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

        <!--main start-->
        <div class="col-12 main">
            <!--search start-->
            <div class="col-12 search-nav">
                <i class="icon-search"></i>
                    <form class="well form-search">
                        <input type="text" class="input-medium search-query">
                        <button type="submit" class="btn"><i class="icon-search"></i> 搜索</button>
                    </form>
                </div>
            </div>

            <!--search end-->

            <table class="table table-striped table-bordered table-condensed">
                <thead>
                <tr>
                    <th><input type="checkbox" name="" /></th>
                    <th>大厦</th>
                    <th>楼层</th>
                    <th>房号</th>
                    <th>描述</th>
                    <th>床位一</th>
                    <th>床位二</th>
                    <th>床位三</th>
                    <th>床位四</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tr>
                    <td><input type="checkbox" name=""/> </td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                    <td>hello</td>
                </tr>


            </table>
        </div>
        <!--main end-->
        <div class="col-md-12 center">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
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
