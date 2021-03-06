<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/admin/css/bootstrap.css" rel="stylesheet" />
<link href="/Public/admin/css/iosOverlay.css" rel="stylesheet" />
<link href="/Public/admin/css/simple-line-icons.css" rel="stylesheet" />
<link href="/Public/admin/css/animate.min.css" rel="stylesheet" />
<link href="/Public/admin/css/font-awesome.min.css" rel="stylesheet" />
<link href="/Public/admin/css/engine.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/admin/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/css/weui.min.css">
<link rel="stylesheet" href="/Public/admin/css/base.css">
<link href="/Public/admin/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<style>
	body{
		background-image:url('/Public/images/max.jpg');
		background-repeat:no-repeat;background-attachment:fixed;
		background-size:cover;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/Public/images/max.jpg',sizingMethod='scale');}
	.table-bordered{
		border-width:0;
	}
</style>

<script type="text/javascript" src="/Public/admin/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/mtopt-3.0-min.js"></script>
<script type="text/javascript" src="/Public/admin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/admin/js/engine.js"></script>


	<section>
		<div class="content-wrapper">

			<h3>
				商品管理
			</h3>
			<div style="text-align:left;">
			<a class="btn btn-primary mb-lg" href="<?php echo U('goodadd');?>" target="main-frame">添加新商品</a>
		    </div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table"  style="color:#fff;">
							<thead>
							<tr>
								<td style="width:50px;">ID</td>
								<td>名称</td>
								<td>所属分类</td>
								<td>商品积分</td>
								<td>热销</td>
								<td>新品</td>
								<td>上架</td>
								<td>库存</td>
								<td style="width:130px;">操作</td>
							</tr>
							</thead>
							<tbody>
							  <?php if(is_array($good_list)): $kk = 0; $__LIST__ = $good_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?><tr>
								<td style="width:50px;"><?php echo ($kk); ?></td>
								<td><?php echo ($vv["good_name"]); ?></td>
								<td><?php echo ($vv["cate_name"]); ?></td>
								<td><?php echo ($vv["good_price"]); ?></td>
								<td><?php echo ($vv["hot"]); ?></td>
								<td><?php if(($vv["new"] == 0) ): ?>新品<?php else: ?>不是<?php endif; ?></td>
								<td>
								 <?php if($vv['is_true'] == 1): ?><i class="icon-check icon-large" data_id="<?php echo ($vv["is_true"]); ?>" data="is_true" alt="<?php echo ($vv["good_id"]); ?>"></i>
								<?php else: ?>
								<i class="icon-check-empty icon-large" data_id="<?php echo ($vv["is_true"]); ?>" data="is_true" alt="<?php echo ($vv["good_id"]); ?>"></i><?php endif; ?>
								</td>
								<td><?php echo ($vv["number"]); ?></td>
								<td  style="width:130px;">
								  <a href="<?php echo U('goodedit');?>?good_id=<?php echo ($vv["good_id"]); ?>"><button class="btn btn-default btn-sm">修改</button></a>
					               <button class="btn btn-danger btn-sm" onclick="del(this,'<?php echo ($vv["good_id"]); ?>')">删除</button>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<center>
				<ul class="pagination" style="margin:0px;">
					<?php echo ($page); ?>
				</ul>
			</center>

			<!--隐藏域开始-->
			<input type="hidden" class="HD_PAGE" value="0" />
			<input type="hidden" class="HD_SIZE" value="20" />
			<input type="hidden" class="HD_COUNT" value="5" />
			<!--隐藏域结束-->
			<script src="/Public/admin/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
			    <!-- 编辑器源码文件 -->
			<script type="text/javascript" src="/Public/ueditor/ueditor.all.js"></script>
			<script src="/Public/admin/js/fileinput.js" type="text/javascript"></script>
			<script src="/Public/admin/js/fileinput_locale_zh.js" type="text/javascript"></script>
			<script src="/Public/admin/layer/layer.js"></script>
			<script src="/Public/admin/js/ajaxfileupload.js"></script>
			<script>
			$(document).ready(function(){
				/*
				layer.open({
				    type: 1,
				    skin: 'layui-layer-demo', //样式类名
				    closeBtn: 0, //不显示关闭按钮
				    shift: 2,
				    shadeClose: true, //开启遮罩关闭
				    content: '内容'
				});*/
				$('.icon-large').click(function(){
					var id = $(this).attr('alt');
					var type = $(this).attr('data');
					var obj = $(this);
					var data = $(this).attr('data_id');//alert(data);
					$.ajax({
						type:'post',
						url:"<?php echo U('changetype');?>",
						dataType:'json',
						data:{'good_id':id,"type":type,'type_id':data},
						success:function(json){
							if(json.state == 1){
								$(obj).removeClass("icon-check-empty");$(obj).addClass("icon-check");
							}else{
								$(obj).removeClass("icon-check");$(obj).addClass("icon-check-empty");
							}
							$(obj).attr('data_id',json.state);
							layer.msg('更改状态成功', {icon: 1});
						},
						error:function(){
							layer.msg('通信通道发生错误！刷新页面重试！');
						}
					});
					
				});
				});
				function edit(id,link){
					$('#ad-notice').css("display","block");
					$('#ad-link').val(link);
					$('#ad-edit').val(id);
				}
				$(function () {
				  $('[data-toggle="tooltip"]').tooltip()
				})
				function changeCode(obj){
					$(obj).css("display","none");
					$(obj).next().next().css("display","block");
				}
				 var ue = UE.getEditor('editor');
				  imagePathFormat: "/images/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}";
				  /*
				  ["good_name"] => string(12) "的淡淡的"
				  ["cate_pid"] => string(1) "1"
				  ["code"] => string(1) "3"
				  ["id"] => string(0) ""
				  ["good_desc"]
				  */
				function del(obj,id){
					layer.confirm('确定要删除这条数据吗？', {
					  btn: ['确定','取消'] //按钮
					}, function(){
					  $.ajax({
							type:'post',
							url:"<?php echo U('delgood');?>",
							dataType:'json',
							data:{'id':id},
							success:function(){
								layer.msg('删除成功', {icon: 1});
								$(obj).parent().parent().remove();
							},
							error:function(){
								layer.msg('通信通道发生错误！刷新页面重试！');
							}
						});
					}, function(){
					  
					});
					
				}
				function check(){
					if($('#good_name').val()==""){layer.msg("商品名称不能为空");return false;}
					if($('#cate_pid').val()==""){layer.msg("商品必须选择分类");return false;}
					if($('#good_price').val()==""){layer.msg("商品价格不能为空");return false;}
					if($('#market_price').val()==""){layer.msg("市场价格不能为空");return false;}
					if($('#number').val()==""){layer.msg("库存不能为空");return false;}
				}
					
					$("#file-3").fileinput({
							showUpload: false,
							showCaption: false,
							browseClass: "btn btn-default",
							fileType: "any",
					        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
						});
					$("#file-4").fileinput({
							showUpload: false,
							showCaption: false,
							browseClass: "btn btn-default",
							fileType: "any",
					        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
						});
				
			</script>
		</div>
	</section>