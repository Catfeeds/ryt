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
</style>

<script type="text/javascript" src="/Public/admin/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/mtopt-3.0-min.js"></script>
<script type="text/javascript" src="/Public/admin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/admin/js/engine.js"></script>
<section>
		<div class="content-wrapper">

			<h3>
				分类管理
			</h3>
			<!-- Nav tabs -->
			  <!--<ul class="nav nav-tabs" style="color:666;" role="tablist">-->
				<!--<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">商品分类</a></li>-->
			  <!--</ul>-->
			  
			  <br>
			<div style="text-align:left;">
			<a class="btn btn-primary mb-lg" href="<?php echo U('categreyadd');?>" target="main-frame">添加新分类</a>
		    </div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
			<table class="table " style="font-size:14px;	color:#fff;">
			<tr>
			<th>分类名称</th>
			<th>分类层级</th>
			<th>缩略图</th>
			<th>排序</th>
			<th>首页显示</th>
			<th>是否隐藏</th>
			<th>操作</th>
			</tr>
			<div style="clear:both"></div>
			<?php if(is_array($pid_info)): $kk = 0; $__LIST__ = $pid_info;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?><tr>
				<td><?php echo ($vv["cate_name"]); ?></td>
				<td style="font-size:14px;color:#fff;"><?php if($vv["pid"] == 0): ?>顶级分类<?php else: ?>二级分类<?php endif; ?></td>
				<td style="width:20%;"><img src="/<?php echo ($vv["pic_url"]); ?>" onclick="yulan(this)"></td>
				<td><?php echo ($vv["code"]); ?></td>
				<td>
				<?php if($vv['is_show'] == 1): ?><i class="icon-check icon-large" data_id="<?php echo ($vv["is_show"]); ?>" data="is_show" alt="<?php echo ($vv["cate_id"]); ?>"></i>
				<?php else: ?>
				<i class="icon-check-empty icon-large" data_id="<?php echo ($vv["is_show"]); ?>" data="is_show" alt="<?php echo ($vv["cate_id"]); ?>"></i><?php endif; ?>
				</td>
				<td>
				<?php if($vv['hidden'] == 1): ?><i class="icon-check icon-large" data_id="<?php echo ($vv["hidden"]); ?>" data="hidden" alt="<?php echo ($vv["cate_id"]); ?>"></i>
				<?php else: ?>
				<i class="icon-check-empty icon-large" data_id="<?php echo ($vv["hidden"]); ?>" data="hidden" alt="<?php echo ($vv["cate_id"]); ?>"></i><?php endif; ?>
				</td>
				<td>
				<a href="<?php echo U('categreyadd');?>?cate_id=<?php echo ($vv["cate_id"]); ?>"><button class="btn btn-default btn-sm">修改</button></a>
				<button class="btn btn-danger btn-sm" onclick="del(this,'<?php echo ($vv["cate_id"]); ?>')">删除</button>
				</td>
			  </tr>
			  <?php if(is_array($vv["children"])): $i = 0; $__LIST__ = $vv["children"];if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr style="color:#fff;;">
					<td style="font-size:14px;">╠═ <?php echo ($v["cate_name"]); ?></td>
					<td style="font-size:14px;"><?php if($v["pid"] == 0): ?>顶级分类<?php else: ?>二级分类<?php endif; ?></td>
					<td ><img src="/<?php echo ($v["pic_url"]); ?>" onclick="yulan(this)"></td>
					<td><?php echo ($v["code"]); ?></td>
					<td>
					<?php if($v['is_show'] == 1): ?><i class="icon-check icon-large" data_id="<?php echo ($v["is_show"]); ?>" data="is_show" alt="<?php echo ($v["cate_id"]); ?>"></i>
					<?php else: ?>
					<i class="icon-check-empty icon-large" data_id="<?php echo ($v["is_show"]); ?>" data="is_show" alt="<?php echo ($v["cate_id"]); ?>"></i><?php endif; ?>
					</td>
					<td>
					<?php if($v['hidden'] == 1): ?><i class="icon-check icon-large" data_id="<?php echo ($v["hidden"]); ?>" data="hidden" alt="<?php echo ($v["cate_id"]); ?>"></i>
					<?php else: ?>
					<i class="icon-check-empty icon-large" data_id="<?php echo ($v["hidden"]); ?>" data="hidden" alt="<?php echo ($v["cate_id"]); ?>"></i><?php endif; ?>
					</td>
					<td>
					<a href="<?php echo U('categreyadd');?>?cate_id=<?php echo ($v["cate_id"]); ?>"><button class="btn btn-default btn-sm">修改</button></a>
					<button class="btn btn-danger btn-sm" onclick="del(this,'<?php echo ($v["cate_id"]); ?>')">删除</button>
					</td>
				  </tr><?php endforeach; endif; else: echo "$empty" ;endif; endforeach; endif; else: echo "$empty" ;endif; ?>
			</table>
			  <div style="clear:both"></div>
					</div>
				</div>
			</div>
			<center>
				<!-- 
				<ul class="pagination" style="margin:0px;">
					<li><a href="/Member/recmlists?page=0" class="btn btn-sm btn-alt">1</a></li>
				</ul>
				 -->
			</center>

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
					url:"<?php echo U('change_categrey_type');?>",
					dataType:'json',
					data:{'id':id,"type":type,'data':data},
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
						url:"<?php echo U('del_shop_categrey');?>",
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