<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="/Public/admin/js/jquery-1.11.3.min.js"></script>
<script src="/Public/admin/js/bootstrap.min.js"></script>
<style>
.modal-dialog{margin-top:5px;}
</style>
<link rel="stylesheet" href="/Public/admin/css/base.css">


<header class="topnavbar-wrapper  navbar-fixed-top">
    <nav class="navbar topnavbar" style="height:3.6em;">
        <!-- 图标控制-->
        <div class="navbar-header">
            <a href="#/" class="navbar-brand">
                <div class="brand-logo">
                    <img src="/Public/Images/logo.png" alt="App Logo" class="img-responsive" />
                </div>
                <div class="brand-logo-collapsed">
                    <img src="/Public/Images/logo-single.png" alt="App Logo" class="img-responsive" />
                </div>
            </a>
        </div>
        <!-- 菜单按钮-->
        <div class="nav-wrapper">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                    </a>
                    <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>


    <header class="header top">
    <a href="<?php echo U('Index/main');?>" target="main-frame"><div class="top_head"></div></a>

    <!-- <a onclick="if (confirm('确定要退出吗？')) return true; else return false;"href="<?php echo U('out');?>" target=_top>
		<div class="top_close"><i class="glyphicon glyphicon-off"></i> 退出</div>
	</a> -->
	<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">
		<div class="top_close"><i class="glyphicon glyphicon-off"></i> 退出</div>
	</a>
	<!-- <a href="<?php echo U('person');?>" target="main-frame"><div class="top_person"><i class="icon-user"></i> 个人设置</div></a> -->
    </header>
<!-- Button trigger modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-footer">
		<span style="float:left;font-size:16px;">确定要退出登录吗？</span>
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success" onclick="out()">退出</button>
      </div>
    </div>
  </div>
</div>
<script>
$('#myModal').modal(options);
function out(){
	location.href="<?php echo U('out');?>";
}
</script>