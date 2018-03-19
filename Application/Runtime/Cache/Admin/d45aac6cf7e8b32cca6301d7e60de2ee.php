<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/admin/css/base.css">
<link href="/Public/admin/css/jquery.minicolors.css" rel="stylesheet" type="text/css" />
<div class="container-fluid main">
	<div class="main-top"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>模版消息</div>
	<div class="main-content">
<style>
.table tr td{font-size:12px;vertical-align:middle;}
.form-control{font-size:8px;}
</style>
		<div>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">参数配置</a></li>		    
		  </ul>
		  
		  <!-- Tab panes -->
		  <!-- 模板编号	模板名	回复内容	头部颜色	文字颜色	状态	模板ID -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">
				<div class="alert alert-success" style="padding:5px 10px;margin:15px 0;line-height:30px;">
					申请模版消息功能后，选择 消费品-消费品，其它-其它行业，然后搜索模版名称，找到对应的编号模版，添加成功后将模版ID值填入
				</div>
				<div class="well">
				<form action="/Admin/Index/template.html" method="post">
				<table class="table table-bordered table-hover" style="font-size:14px;">
					<th>模板编号</th>
					<th>模板名</th>
					<th>回复内容</th>
					<th>头部颜色</th>
					<th>文字颜色</th>
					<th>模板ID</th>
					<tr>
						<td valign="middle">TM00598</td>
						<td>订单创建成功通知</td>
						<td>
<pre>{{first.DATA}}//头部提示文字信息
订单号：{{orderno.DATA}}
商品数量：{{refundno.DATA}}
商品金额：{{refundproduct.DATA}}
{{remark.DATA}}</pre></td>
						<td><input type="text" name="order_create_top"  id="wheel-demo" class="form-control demo" data-control="wheel" value="<?php echo ($template_info["order_create_top"]); ?>"></td>
						<td><input type="text" name="order_create_text"  id="wheel-demo" class="form-control demo" data-control="wheel" value="<?php echo ($template_info["order_create_text"]); ?>"></td>
						<td><input type="text" name="order_create_template_id" value="<?php echo ($template_info["order_create_template_id"]); ?>" id="" class="form-control"  placeholder="模版对应的ID"></td>
					</tr>
					<tr>
						<td valign="middle">TM00247</td>
						<td>购买成功通知</td>
						<td>
<pre>{{first.DATA}}//头部提示文字信息
商品名称：{{product.DATA}}
商品价格：{{price.DATA}}
购买时间：{{time.DATA}}
{{remark.DATA}}</pre></td>
						<td><input type="text" name="order_done_top"  id="wheel-demo" class="form-control demo" data-control="wheel" value="<?php echo ($template_info["order_done_top"]); ?>"></td>
						<td><input type="text" name="order_done_text"  id="wheel-demo" class="form-control demo" data-control="wheel" value="<?php echo ($template_info["order_done_text"]); ?>"></td>
						<td><input type="text" name="order_done_template_id" value="<?php echo ($template_info["order_done_template_id"]); ?>" id="" class="form-control"  placeholder="模版对应的ID"></td>
					</tr>
					<tr>
						<td valign="middle">OPENTM207499103</td>
						<td>信息平台消息提醒</td>
						<td>
<pre>{{first.DATA}}
模块：{{keyword1.DATA}}
事件：{{keyword2.DATA}}
时间：{{keyword3.DATA}}
{{remark.DATA}}</pre></td>
						<td><input type="text" name="fuwu_done_top"  id="wheel-demo" class="form-control demo" data-control="wheel" value="<?php echo ($template_info["fuwu_done_top"]); ?>"></td>
						<td><input type="text" name="fuwu_done_text"  id="wheel-demo" class="form-control demo" data-control="wheel" value="<?php echo ($template_info["fuwu_done_text"]); ?>"></td>
						<td><input type="text" name="fuwu_done_template_id" value="<?php echo ($template_info["fuwu_done_template_id"]); ?>" id="" class="form-control"  placeholder="模版对应的ID"></td>
					</tr>
				</table>
				
				<div><button type="submit" class="btn btn-success">确认保存</button></div>
				</form>
			</div>
				
				
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
	$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$(document).ready( function() {
	
	$('.demo').each( function() {
		$(this).minicolors({
			control: $(this).attr('data-control') || 'hue',
			defaultValue: $(this).attr('data-defaultValue') || '',
			inline: $(this).attr('data-inline') === 'true',
			letterCase: $(this).attr('data-letterCase') || 'lowercase',
			opacity: $(this).attr('data-opacity'),
			position: $(this).attr('data-position') || 'bottom left',
			change: function(hex, opacity) {
				if( !hex ) return;
				if( opacity ) hex += ', ' + opacity;
				try {
					console.log(hex);
				} catch(e) {}
			},
			theme: 'bootstrap'
		});
		
	});
	
});

</script>