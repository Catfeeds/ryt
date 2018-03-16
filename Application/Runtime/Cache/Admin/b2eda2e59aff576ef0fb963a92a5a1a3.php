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
<style type="text/css">
	.tree {
		min-height: 25px;
		background: 0 0;
		border: 0 none;
		box-shadow: none;
		padding: 0;
		margin: 0;
	}

	.tree li {
		list-style-type: none;
		margin: 0;
		padding: 10px 6px 0 5px;
		position: relative;
	}

	.tree li::after, .tree li::before {
		content: '';
		left: -20px;
		position: absolute;
		right: auto;
	}

	.tree li::before {
		border-left: 1px solid #999;
		bottom: 50px;
		height: 100%;
		top: 0;
		width: 1px;
	}

	.tree li::after {
		border-top: 1px solid #999;
		height: 20px;
		top: 25px;
		width: 25px;
	}

	.tree li span {
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border: 1px solid #999;
		border-radius: 5px;
		display: inline-block;
		padding: 3px 8px;
		text-decoration: none;
	}

	.tree li.parent_li > span {
		cursor: pointer;
	}

	.tree > ul > li::after, .tree > ul > li::before {
		border: 0;
	}

	.tree li:last-child::before {
		height: 30px;
	}

	.tree li.parent_li > span:hover, .tree li.parent_li > span:hover + ul li span {
		background: #eee;
		border: 1px solid #94a0b4;
		color: #000;
	}
</style>
<script type="text/javascript" src="/Public/admin/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/mtopt-3.0-min.js"></script>
<script type="text/javascript" src="/Public/admin/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/admin/js/engine.js"></script>
<section>
	<div class="content-wrapper">

		<h3>
			会员网络
		</h3>
		<div class="panel panel-default">
			<div class="input-group">
				<input type="text" class="form-control" style="height:35px;" id="search_id" value="<?php echo ($user_name); ?>" placeholder="请输入会员编号">
				<span class="input-group-btn">
            <button class="btn btn-default" onclick="pck.search()" style="margin-left: 2px;z-index: 2;border-radius:4px;height: 35px;" type="button">查询数据</button>
        </span>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<div class="tree well" style="overflow:hidden">
						<ul style="margin:0px;padding:0px;">
							<li>
								<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_user['user_name']?$info_user['user_name']:'0'));?>" target="main-frame"><?php echo ($info_user['user_name']); ?>[级别：<?php echo ($info_user['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_user['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_user['area1']+$info_user['area2']); ?></a></span>
								<ul>
									<?php if($info_luser['user_id'] != ''): ?><li>
										<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_luser['user_name']));?>"  target="main-frame"><?php echo ($info_luser['user_name']); ?>[级别：<?php echo ($info_luser['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_luser['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_luser['area1']+$info_luser['area2']); ?></a></span>
										<ul>
											<?php if($info_lluser['user_id'] != ''): ?><li>
												<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_lluser['user_name']));?>"  target="main-frame"><?php echo ($info_lluser['user_name']); ?>[级别：<?php echo ($info_lluser['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_lluser['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_lluser['area1']+$info_lluser['area2']); ?></a></span>
											</li><?php endif; ?>
											<?php if($info_lruser['user_id'] != ''): ?><li>
												<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_lruser['user_name']));?>"  target="main-frame"><?php echo ($info_lruser['user_name']); ?>[级别：<?php echo ($info_lruser['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_lruser['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_lruser['area1']+$info_lruser['area2']); ?></a></span>
											</li><?php endif; ?>
										</ul>
									</li><?php endif; ?>
									<?php if($info_ruser['user_id'] != ''): ?><li>
										<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_ruser['user_name']));?>"  target="main-frame"><?php echo ($info_ruser['user_name']); ?>[级别：<?php echo ($info_ruser['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_ruser['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_ruser['area1']+$info_ruser['area2']); ?></a></span>
										<ul>
											<?php if($info_rluser['user_id'] != ''): ?><li>
												<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_rluser['user_name']));?>"  target="main-frame"><?php echo ($info_rluser['user_name']); ?>[级别：<?php echo ($info_rluser['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_rluser['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_rluser['area1']+$info_rluser['area2']); ?></a></span>
											</li><?php endif; ?>
											<?php if($info_rruser['user_id'] != ''): ?><li>
												<span><i class="icon-user"></i><a href="<?php echo U('User/netchart',array('rootid'=>$info_rruser['user_name']));?>"  target="main-frame"><?php echo ($info_rruser['user_name']); ?>[级别：<?php echo ($info_rruser['name']); ?>]&nbsp;&nbsp; 层数：<?php echo ($info_rruser['plevel']); ?>&nbsp;&nbsp;业绩：<?php echo ($info_rruser['area1']+$info_rruser['area2']); ?></a></span>
											</li><?php endif; ?>
										</ul>
									</li><?php endif; ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
            var pck = {
                search: function () {
                    var rootid = m.node("#search_id").value();
                    m.redirect("../User/netchart?rootid=" + rootid);
                },
                init: function () {
                    m.node("#btn_enter").click(pck.search);
                }
            }
            pck.init();
            $(function () {
                $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
                $('.tree li.parent_li > span').on('click', function (e) {
                    var children = $(this).parent('li.parent_li').find(' > ul > li');
                    if (children.is(":visible")) {
                        children.hide('fast');
                        $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
                    } else {
                        children.show('fast');
                        $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
                    }
                    e.stopPropagation();
                });
            });
		</script>

	</div>
</section>