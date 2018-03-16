<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/admin/css/bootstrap.css" rel="stylesheet" />
<link href="/Public/admin/css/iosOverlay.css" rel="stylesheet" />
<link href="/Public/admin/css/simple-line-icons.css" rel="stylesheet" />
<link href="/Public/admin/css/animate.min.css" rel="stylesheet" />
<link href="/Public/admin/css/font-awesome.min.css" rel="stylesheet" />
<link href="/Public/admin/css/engine.css" rel="stylesheet" />
<link href="/Public/js/treeTable/treeTable.css" rel="stylesheet" />

<style>
	body{
		background-image:url('/Public/images/max.jpg');
		background-repeat:no-repeat;background-attachment:fixed;
		background-size:cover;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/Public/images/max.jpg',sizingMethod='scale');}
	.td-title{
		text-align: right;
	}
	.addradio {
		margin-top: 0px;
		margin-left: 25px;
	}
	.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
		background-color: #05336f;
		color: #fff;
	}
	.nav-tabs > li > a:hover {
		border: 1px solid rgb(221, 230, 233) !important;
	}
	.expander{margin-left: -20px;}
</style>
<script type="text/javascript">
	//全局变量
	var GV = {
		ROOT: "/",
		WEB_ROOT: "/",
		JS_ROOT: "public/js/",
		APP:'<?php echo (MODULE_NAME); ?>'/*当前应用名*/
	};

</script>
<script src="/Public/js/treeTable/html5shiv.js"></script>
<script src="/Public/js/treeTable/jquery.js"></script>
<script src="/Public/js/treeTable/wind.js"></script>
<script src="/Public/js/treeTable/bootstrap.min.js"></script>
<section>
	<div class="content-wrapper">

		<h3>
			角色管理
		</h3>
		<ul class="nav nav-tabs" role="tablist" >
			<li  role="presentation" class="active"><a style="background-color:transparent;border-radius:3px;">权限设置</a></li>
		</ul>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<form class="js-ajax-form" action="<?php echo U('rbac/authorize_post');?>" method="post">
						<div class="table_full">
							<table class="table table-bordered" id="authrule-tree">
								<tbody>
								<?php echo ($categorys); ?>
								</tbody>
							</table>
						</div>
						<div class="form-actions">
							<input type="hidden" name="roleid" value="<?php echo ($roleid); ?>" />
							<button class="btn btn-primary js-ajax-submit" type="submit">保存</button>
							<a class="btn" href="javascript:history.back(-1);" style="background-color:#DDDDDD;">返回</a>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">

        $(function(){
            $("[data-toggle='tooltip']").tooltip();
        });

	var ajaxForm_list = $('form.js-ajax-form');
	if (ajaxForm_list.length) {
	    Wind.use('ajaxForm', 'artDialog', function () {
	        if ($.browser && $.browser.msie) {
	            //ie8及以下，表单中只有一个可见的input:text时，会整个页面会跳转提交
	            ajaxForm_list.on('submit', function (e) {
	                //表单中只有一个可见的input:text时，enter提交无效
	                e.preventDefault();
	            });
	        }
	
	        $('button.js-ajax-submit').bind('click', function (e) {
	            e.preventDefault();
	            /*var btn = $(this).find('button.js-ajax-submit'),
						form = $(this);*/
	            var btn = $(this),
	                form = btn.parents('form.js-ajax-form');
	
	            //批量操作 判断选项
	            if (btn.data('subcheck')) {
	                btn.parent().find('span').remove();
	                if (form.find('input.js-check:checked').length) {
	                    var msg = btn.data('msg');
	                    if (msg) {
	                        art.dialog({
	                            id: 'warning',
	                            icon: 'warning',
	                            content: btn.data('msg'),
	                            cancelVal: "<?php echo L('CLOSE');?>",
	                            cancel: function () {
	                                btn.data('subcheck', false);
	                                btn.click();
	                            }
	                        });
	                    } else {
	                        btn.data('subcheck', false);
	                        btn.click();
	                    }
	
	                } else {
	                    $('<span class="tips_error">请至少选择一项</span>').appendTo(btn.parent()).fadeIn('fast');
	                }
	                return false;
	            }
	
	            //ie处理placeholder提交问题
	            if ($.browser && $.browser.msie) {
	                form.find('[placeholder]').each(function () {
	                    var input = $(this);
	                    if (input.val() == input.attr('placeholder')) {
	                        input.val('');
	                    }
	                });
	            }
	
	            form.ajaxSubmit({
	                url: btn.data('action') ? btn.data('action') : form.attr('action'),
	                //按钮上是否自定义提交地址(多按钮情况)
	                dataType: 'json',
	                beforeSubmit: function (arr, $form, options) {
	                    var text = btn.text();
	
	                    //按钮文案、状态修改
	                    btn.text(text + '中...').attr('disabled', true).addClass('disabled');
	                },
	                success: function (data, statusText, xhr, $form) {
                        var text = btn.text();

	                    //按钮文案、状态修改
	                    btn.removeClass('disabled').text(text.replace('中...', '')).parent().find('span').remove();
//	                    if (data.state == 1) {
//	                        console.log(data.state);
	                        $('<span class="tips_success">' + data + '</span>').appendTo(btn.parent()).fadeIn('slow').delay(1000).fadeOut(function () {
//	                            if (data.referer) {
//	                                //返回带跳转地址
//	                                if (window.parent.art) {
//	                                    //iframe弹出页
//	                                    window.parent.location.href = data.referer;
//	                                } else {
	                                    window.location.href = '/Admin/Rbac/index';
//	                                }
//	                            } else {
//	                                if (window.parent.art) {
//	                                    reloadPage(window.parent);
//	                                } else {
//	                                    //刷新当前页
//	                                    reloadPage(window);
//	                                }
//	                            }
	                        });
//	                    }
//	                    else if (data.state == 0) {
//                            console.log(data.state);
//	                        $('<span class="tips_error">' + data.info + '</span>').appendTo(btn.parent()).fadeIn('fast');
//	                        btn.removeProp('disabled').removeClass('disabled');
//	                    }
	                }
	            });
	        });
	
	    });
	}
	$(document).ready(function () {
		Wind.css('treeTable');
	    Wind.use('treeTable', function () {
	        $("#authrule-tree").treeTable({
	            indent: 20
	        });
	    });
	});
	
	function checknode(obj) {
	    var chk = $("input[type='checkbox']");
	    var count = chk.length;
	    var num = chk.index(obj);
	    var level_top = level_bottom = chk.eq(num).attr('level');
	    for (var i = num; i >= 0; i--) {
	        var le = chk.eq(i).attr('level');
	        if (le <level_top) {
	            chk.eq(i).prop("checked", true);
	            var level_top = level_top - 1;
	        }
	    }
	    for (var j = num + 1; j < count; j++) {
	        var le = chk.eq(j).attr('level');
	        if (chk.eq(num).prop("checked")) {
	            if (le > level_bottom){
	            	chk.eq(j).prop("checked", true);
	            }
	            else if (le == level_bottom){
	            	break;
	            }
	        } else {
	            if (le >level_bottom){
	            	chk.eq(j).prop("checked", false);
	            }else if(le == level_bottom){
	            	break;
	            }
	        }
	    }
	}
	</script>
</section>