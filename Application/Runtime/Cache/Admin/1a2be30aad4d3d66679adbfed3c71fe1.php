<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/admin/css/base.css">
<link href="/Public/admin/css/jquery.minicolors.css" rel="stylesheet" type="text/css" />
<div class="container-fluid main">
	<div class="main-top"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>客户疑答</div>
	<div class="main-content">
<style>
.table tr td{font-size:12px;vertical-align:middle;}
.form-control{font-size:8px;}
</style>
		<div>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">问题列表</a></li>		    
		  </ul>
		  
		  <!-- Tab panes -->
		  <!-- 模板编号	模板名	回复内容	头部颜色	文字颜色	状态	模板ID -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">
				<div class="alert alert-success" style="padding:5px 10px;margin:15px 0;line-height:30px;">
					处理客户提问的问题，已处理的问题会在个人中心————常见问题展示
				</div>
				<div class="well">
				<div id="list"></div>
				</div>
		  </div>
		</div>
		
	</div>
</div>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/Public/admin/js/bootstrap.min.js"></script>
<script src="/Public/admin/layer/layer.js"></script>
<script src="/Public/admin/js/jquery.minicolors.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	getpage(1);
});
function getpage(p){
	$('#list').html('<div style="text-align:center;margin-top:30px;"><img src="/Public/admin/images/loading.gif" width="60px" ></div>');
	$("#list").load(
		"<?php echo U('question_ajax');?>?p="+p,
		function() {}
	);
}
</script>