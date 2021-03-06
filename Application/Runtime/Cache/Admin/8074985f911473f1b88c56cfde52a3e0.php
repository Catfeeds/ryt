<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/admin/css/bootstrap.css" rel="stylesheet" />
<link href="/Public/admin/css/iosOverlay.css" rel="stylesheet" />
<link href="/Public/admin/css/simple-line-icons.css" rel="stylesheet" />
<link href="/Public/admin/css/animate.min.css" rel="stylesheet" />
<link href="/Public/admin/css/font-awesome.min.css" rel="stylesheet" />
<link href="/Public/admin/css/engine.css" rel="stylesheet" />
<style>
	body{
		background-image:url('/Public/images/max.jpg');
		background-repeat:no-repeat;background-attachment:fixed;
		background-size:cover;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/Public/images/max.jpg',sizingMethod='scale');}
</style>

<script type="text/javascript" src="/Public/admin/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/mtopt-3.0-min.js"></script>
<script type="text/javascript" src="/Public/admin/js/spin.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/iosOverlay.js"></script>
<script type="text/javascript" src="/Public/admin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/admin/js/engine.js"></script>
<section>
	<div class="content-wrapper">
		<h3>
			注册会员
		</h3>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-horizontal">
					<fieldset>
						<legend>基本信息</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>会员编号</label>
							<div class="col-sm-10">

								<input type="text" class="form-control" id="id" value="<?php echo ($user_code); ?>" placeholder="请输入会员编号"    style="width:250px;" disabled>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>推荐人</label>
							<div class="col-sm-10">

								<input type="text" class="form-control" id="recmid" value="<?php echo ($recmid); ?>" placeholder="请输入推荐人编号"    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>安置人</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo ($parentid); ?>" id="parentid" placeholder="请输入安置人编号"   style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>代理中心</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="centerid"  value="<?php echo ($centerid); ?>"  placeholder="请输入代理中心编号"   style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>安置位置</label>
							<div class="col-sm-10">
								<select id="area" class="form-control"   style="width:250px;"></select>
							</div>
						</div>
					</fieldset>
					<!--<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>单类型</label>
							<div class="col-sm-10">
								<select id="single" class="form-control"></select>
							</div>
						</div>
					</fieldset>-->
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>会员等级</label>
							<div class="col-sm-10" >
								<select id="level" class="form-control"   style="width:250px;"></select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>登录密码</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password"    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>确认登录密码</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="cpassword"    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>安全密码</label>
							<div class="col-sm-10">
								<input type="password" class="form-control"  id="safeword"    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>确认安全密码</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="csafeword"  style="width:250px;"  >
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>详细信息</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>身份证</label>
							<div class="col-sm-10"><!--加一个禁止输入特殊符号的限制-->
								<input type="text" class="form-control"  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" id="idcard"  value="" placeholder="请输入会员身份证号码"  style="width:250px;" >
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>真实姓名</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="" id="username" placeholder="请输入真实姓名"    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>开户银行</label>
							<div class="col-sm-10">
								<select id="bankid" class="form-control"   style="width:250px;"></select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>开户卡号</label>

							<div class="col-sm-10">	<!--加一个禁止输入特殊符号的限制-->				
								<input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" class="form-control" value="" id="bankno" placeholder="请输入开户卡号"  style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered" >*</label>开户地址</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value=""  id="bankname" placeholder="请输入开户地址"    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>开户姓名</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="" id="bankuser" placeholder="请输入开户姓名 "    style="width:250px;">
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">


							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>手机号</label >
							<div class="col-sm-10"><!--加一个禁止输入特殊符号的限制-->
								<input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" class="form-control" value="" id="moblie" style="width:250px;" placeholder="请输入11位有效电话号码 ">

							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label">邮箱</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="email"   style="width:250px;" >
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label">邮编</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="zipcode"   style="width:250px;" />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label">地址</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="address"   style="width:250px;" />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>地区/省</label>
							<div class="col-sm-10">
								<select id="country" class="form-control"   style="width:250px;"></select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>地区/市</label>
							<div class="col-sm-10">
								<select id="province" class="form-control"   style="width:250px;"></select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<label class="col-sm-2 control-label"><label style="color:orangered">*</label>地区/县</label>
							<div class="col-sm-10">
								<select id="county" class="form-control"   style="width:250px;"></select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-2">
								<button id="btn_enter" type="button" class="btn btn-primary">确认注册</button>
							</div>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
		<script type="text/javascript">
            var pck = {
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
                    var id = m.node("#id").value();
                    var parentid = m.node("#parentid").value();
                    var recmid = m.node("#recmid").value();
                    var centerid = m.node("#centerid").value();
                    var area = m.node("#area").value();
                  //  var single = m.node("#single").value();
                    var level = m.node("#level").value();
                    var password = m.node("#password").value();
                    var cpassword = m.node("#cpassword").value();
                    var safeword = m.node("#safeword").value();
                    var csafeword = m.node("#csafeword").value();
                    var username = m.node("#username").value();
                    var idcard = m.node("#idcard").value();
                    var bankid = m.node("#bankid").value();
                    var bankno = m.node("#bankno").value();
                    var bankuser = m.node("#bankuser").value();
                    var bankname = m.node("#bankname").value();
                    var moblie = m.node("#moblie").value();
                    var email = m.node("#email").value();
                    var zipcode = m.node("#zipcode").value();
                    var address = m.node("#address").value();
                    var place = m.node("#county").value();
                    //非空判断
                    if (id.length <= 0) {
                        engine.news("请输入编号", 3000);
                        return;
                    }
                    if (recmid.length <= 0) {
                        engine.news("请输入推荐人", 2000);
                        return;
                    }
                    if (parentid.length <= 0) {
                        engine.news("请输入安置人", 3000);
                        return;
                    }

                    if (centerid.length <= 0) {
                        engine.news("请输入代理中心", 3000);
                        return;
                    }
                    if (area == null || area.length <= 0) {
                        engine.news("请选择安置位置", 3000);
                        return;
                    }
            //        if (single == null || single.length <= 0) {
            //            engine.news("请选择单类型", 3000);
             //           return;
             //       }
                    if (level == null || level.length <= 0) {
                        engine.news("请选择会员等级", 3000);
                        return;
                    }
                    if(/^[\u4e00-\u9fa5]+$/i.test(password)){
                        engine.news("密码中存在中文,请重新输入", 3000);
                        return;
                    }
                    if (password.length <= 0) {
                        engine.news("请输入登录密码", 3000);
                        return;
                    }
                    if (password != cpassword) {
                        engine.news("登录密码输入不一致", 3000);
                        return;
                    }
                    if(/^[\u4e00-\u9fa5]+$/i.test(safeword)){
                        engine.news("安全密码中存在中文,请重新输入", 3000);
                        return;
                    }
                    if (safeword.length <= 0) {
                        engine.news("请输入安全密码", 3000);
                        return;
                    }
                    if (safeword != csafeword) {
                        engine.news("安全密码输入不一致", 3000);
                        return;
                    }
                    if (username.length <= 0) {
                        engine.news("请输入真实姓名", 3000);
                        return;

                    }//修改-身份证只能输入18位
                    if (idcard.length <= 17||idcard.length >= 19) {
                        engine.news("请输入18位的身份证", 3000);

                        return;
                    }
                    if (bankid == null || bankid.length <= 0) {
                        engine.news("请选择开户银行", 3000);
                        return;
                    }
                    if (bankno.length <= 0) {
                        engine.news("请输入开户卡号", 3000);
                        return;
                    }
                    if (bankuser.length <= 0) {
                        engine.news("请输入开户姓名", 3000);
                        return;
                    }
                    if (bankname.length <= 0) {
                        engine.news("请输入开户地址", 3000);
                        return;

                    }//修改-手机号只能输入11位
                    if (moblie.length <= 10 || moblie.length >= 12) {
                        engine.news("请输入11位的手机号", 3000);
                        return;

                    }
                    if (place == null || place.length <= 0) {
                   //     engine.news("请选择地区", 3000);
                   //     return;
                    }
                    var place = (place == -1) ? m.node("#province").value() : place;
                    engine.news("正在提交...", 999999);
                    //发送请求
                    var ajax = m.ajax("<?php echo U('User/User/api_register_submit');?>", null, function (jso) {
                        var jso = m.json.getObject(jso);
                        switch (jso.Error) {
                            case '0':
                                engine.news("新增会员成功", 1500, true);
                                setTimeout(function () {
                                    m.redirect('/Admin/User/memberlists?user_name=' + recmid);
                                }, 1500);
                                break;
                            case -10002:
                                engine.news("新增会员失败", 3000);
                                break;
                            case -10001:
                                engine.news("验证码错误", 3000);
                                break;
                            default:
                                engine.news(jso.Data, 3000);
                                break;
                        }
                    });
                    ajax.data.add("id", ResChinese(id));
                    ajax.data.add("parentid", ResChinese(parentid));
                    ajax.data.add("recmid", ResChinese(recmid));
                    ajax.data.add("centerid", ResChinese(centerid));
                    ajax.data.add("area", area);
                    //ajax.data.add("single", single);
                    ajax.data.add("level", level);
                    ajax.data.add("password",ResChinese( password));
                    ajax.data.add("safeword", ResChinese(safeword));
                    ajax.data.add("username", ResChinese(username));
                    ajax.data.add("idcard", ResChinese(idcard));
                    ajax.data.add("bankid", bankid);
                    ajax.data.add("bankno", ResChinese(bankno));
                    ajax.data.add("bankuser", ResChinese(bankuser));
                    ajax.data.add("bankname", ResChinese(bankname));
                    ajax.data.add("moblie", ResChinese(moblie));
                    ajax.data.add("email", ResChinese(email));
                    ajax.data.add("zipcode", ResChinese(zipcode));
                    ajax.data.add("address", ResChinese(address));
                    ajax.data.add("place", place);
                    ajax.send();
                },
                init: function () { }
            }
            pck.init();
            //载入时
            m.event("ready").add(function () {
                //获取单类型
                
                    //获取等级
                    engine.ajax.memberlevel(0, function (json) {
                        var selt = m.node("#level");
                        selt.html("");
                        for (var i in json) {
                            selt.append("<option value='" + json[i].id + "'>" + json[i].name + " [价格:" + json[i].money + "]" + "</option>");
                        }
							//获取位置
							engine.ajax.memberarea(0, function (json) {
								var selt = m.node("#area");
								selt.html("");
								for (var i in json) {
									selt.append("<option value='" + json[i].id + "'>" + json[i].name + "</option>");
								}
								//获取银行
								engine.ajax.bank(0, function (json) {
									var selt = m.node("#bankid");
									selt.html("");
									for (var i in json) {
										selt.append("<option value='" + json[i].id + "'>" + json[i].name + "</option>");
									}
									//获取地区
									engine.ajax.place('1', function (json) {
										var lt = m.node("#country");
										lt.on("change", function () {
											pck.setplace(m.node("#province"), m.node("#country").value());
										});
										var ltpv = m.node("#province");
										ltpv.on("change", function () {
											pck.setplace(m.node("#county"), m.node("#province").value());
										});
										//填充初始数据
										lt.append("<option value=''>请选择</option>");
										for (var i in json) {
											lt.append("<option value='" + json[i].id + "'>" + json[i].name + "</option>");
										}
                                       

                                    });
								});
							
                    });
                });

                m.node("#btn_enter").click(pck.submit);
            });
            function ResChinese(obj)
            {
                return encodeURI(obj);
            }
		</script>
	</div>
</section>