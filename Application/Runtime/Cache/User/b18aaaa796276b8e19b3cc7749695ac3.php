<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit">
	<meta property="qc:admins" content="1051105554536547046375" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="keywords" content="会员结算系统">
	<meta name="description" content="会员结算系统">

	<title>移动结算平台</title>
	<link href="/Public/css/jquery.mobile.custom.structure.min.css"  rel="stylesheet" />
	<link href="/Public/bootstrap/css/bootstrap.min.css"  rel="stylesheet" />
	<link href="/Public/css/engine.css"  rel="stylesheet" />

	<script type="text/javascript" src="/Public/js/mtopt-3.0-min.js" ></script>
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js" ></script>
	<script type="text/javascript">
        $.browser = $.browser || {};
        $.browser.msie = false;
        $(document).on("mobileinit", function () {
            $.support.cors = true;
            $.mobile.allowCrossDomainPages = true;
            $.mobile.pushStateEnabled = false;
            $.mobile.defaultPageTransition = "slidefade";
            $.mobile.pageLoadErrorMessage = "页面加载出错";
            $.mobile.loader.prototype.options.theme = "c";
            $.mobile.buttonMarkup.hoverDelay = "false";
        });
	</script>
	<style type="text/css">
		body{background:#BDE3FA;}
		.container{padding-top:2em;}
		.form-title{font-size:2.7em;text-align:center;height:110px;margin-top:120px;}
		.form-title img{width:200px;}
		.form-control{margin-bottom:1.8em;height:2.8em;}
	</style>
	<script type="text/javascript" src="/Public/js/jquery.mobile.custom.js" ></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="/Public/js/engine.js" ></script>
</head>
<body>
<!--标题样式-->
<div class="mn-content ui-page ui-page-theme-a ui-page-active" data-role="page" data-url="/User/Product/place" data-external-page="true" tabindex="0" style="min-height: 635.2px;">
    <style type="text/css">
        .pg-form input,
        .pg-form select {
            margin-bottom: 12px;
            margin-top: 5px;
        }
    </style>

<div class="pg-form">
    <table class="table table-hover table-condensed">
        <tbody>
        <tr>
            <td>序号</td>
            <td>收货人</td>
            <td>地区</td>
            <td>手机</td>
            <td style="width:95px;">操作</td>
        </tr>
        <?php if(is_array($info)): $kk = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?><tr>
                <td><?php echo ($kk); ?></td>
                <td><?php echo ($vv["username"]); ?></td>
                <td><?php echo ($vv["address"]); ?></td>
                <td><?php echo ($vv["telphone"]); ?></td>
                <td>
                    <a class="btn btn-danger btn-xs" href="/User/Product/placeedit?id=<?php echo ($vv["address_id"]); ?>">修改</a>
                    <a class="btn btn-danger btn-xs" onclick="pck.del(this,<?php echo ($vv["address_id"]); ?>)">删除</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    
   </table>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <a href="/User/Product/placeadd" data-transition="pop" class="btn btn-default btn-danger">新增地址</a>
        </div>
        <div class="btn-group" role="group">
            <a href="/User/User/main" class="btn btn-default">返回</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    var pck = {
        title: "收货地址",
        setdefault: function (elm, id) {
            var ajax = m.ajax("/Product/api_place_setdefault", null, function (jso) {
                var jso = m.json.getObject(jso);
                switch (jso.Error) {
                    case 0:
                        engine.news("设为默认成功", 1800);
                        m.reload();
                        break;
                    case -10000:
                        engine.news("设为默认失败", 1800);
                        break;
                    default:
                        engine.news("服务器忙碌", 1800);
                        break;
                }
            });
            ajax.data.add("id", id);
            ajax.send();
        },
        //删除
        del: function (elm, id) {
            var ajax = m.ajax("/User/Product/api_place_delete", null, function (jso) {
                var jso = m.json.getObject(jso);
                switch (jso.Error) {
                    case '0':
                        engine.news("删除成功", 1800);
                        m.node(elm.parentNode.parentNode).remove(true);
                        break;
                    case -10000:
                        engine.news("删除失败", 1800);
                        break;
                    default:
                        engine.news(jso.Data, 2000);
                        break;
                }
            });
            ajax.data.add("id", id);
            ajax.send();
        }
    }
</script>
</div>
</body>
</html>