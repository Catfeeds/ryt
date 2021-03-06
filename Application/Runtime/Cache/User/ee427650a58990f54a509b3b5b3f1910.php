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
	<script type="text/javascript" src="/Public/js/jquery-2.1.3.min.js" ></script>
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
<div class="mn-content ui-page ui-page-theme-a ui-page-active" data-role="page" data-url="/User/Product/placeadd" data-external-page="true" tabindex="0" style="min-height: 635.2px;">
    <style type="text/css">
        .pg-form input,
        .pg-form select{margin-bottom:1em;margin-top:1em;}
    </style>

<div class="pg-form">
    <label class="control-label">收货人</label>
    <input id="name_" type="text" class="form-control" placeholder="收货人">
    <label class="control-label">邮箱</label>
    <input id="email_" type="text" class="form-control" placeholder="邮箱">
    <label class="control-label">手机</label>
    <input id="moblie_" type="text" class="form-control" placeholder="手机">
    <label class="control-label">地址</label>
    <input id="address_" type="text" class="form-control" placeholder="地址">
   <label class="control-label">是否默认</label>
			    <select id="state_" class="form-control">
			         <option value="0">否</option>
			        <option value="1">是</option>
			    </select>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <a id="btn_enter_" data-transition="pop" class="btn btn-default btn-primary" style="background:red;">添加</a>
        </div>
        <div class="btn-group" role="group">
            <a href="/User/Product/place" class="btn btn-default">返回</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    var pck = {
        title: "新增地址",
        //设置地址
        setplace: function (selt, root, callback) {
            if (root < 0) { return; }
            engine.ajax.place(root, function (json) {
                selt.html("");
                selt.append("<option value=''>请选择</option>");
                for (var i in json) {
                    selt.append("<option value='" + json[i].id + "'>" + json[i].name + "</option>");
                }
                //是否调用回调
                if (callback) { callback(); }
            });
        },
        submit: function () {
            var name = m.node("#name_").value();
            var moblie = m.node("#moblie_").value();
            var email = m.node("#email_").value();
            var address = m.node("#address_").value();
            var state = m.node("#state_").value();
            
            //非空判断
            if (name.length <= 0) {
                engine.news("请输入姓名", 1800);
                return;
            }
            if (moblie.length <= 0) {
                engine.news("请输入手机", 1800);
                return;
            }
            if (email.length <= 0) {
                engine.news("请输入邮箱", 1800);
                return;
            }
            if (address.length <= 0) {
                engine.news("请输入地址", 1800);
                return;
            }
            if (state == null || state.length <= 0) {
                engine.news("请选择是否默认", 1800);
                return;
            }
            engine.news("正在提交...", 999999);
            //发送请求
            var ajax = m.ajax("/User/Product/api_place_add", null, function (jso) {
                var jso = m.json.getObject(jso);
                switch (jso.Error) {
                    case '0':
                        engine.news("新增地址成功正在跳转...", 99999);
                        setTimeout(function () {
                            $.mobile.changePage("/User/Product/place", { transition: "slidefade" });
                        });
                        break;
                    case -10000:
                        engine.news("新增地址失败", 1800);
                        break;
                    default:
                        engine.news(jso.Data, 2000);
                        break;
                }
            });
            ajax.data.add("name", ResChinese(name));
            ajax.data.add("moblie", ResChinese(moblie));
            ajax.data.add("email", ResChinese(email));
            ajax.data.add("address", ResChinese(address));
            ajax.data.add("state", ResChinese(state));
            ajax.send();
        },
        init: function () {
        }
    }
    pck.init();
    $(function () {
        m.node("#btn_enter_").click(pck.submit);
    });
    function ResChinese(obj)
    {
       return encodeURI(obj);
    }
</script>
</div>
</body>
</html>