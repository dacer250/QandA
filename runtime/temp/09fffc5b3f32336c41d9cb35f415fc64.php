<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"G:\xampp\htdocs\QandA\public/../application/event\view\question\problem_manage.html";i:1504064753;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<meta name="renderer" content="webkit" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="description" content="Plane UI" />
        <meta name="keywords" content="Plane UI" />
		<meta name="author" content="Pandao, pandao@vip.qq.com"/>
		<meta name="robots" content="index,follow" />

		<!-- 禁止百度转码 -->
        <meta http-equiv="Cache-Control" content="no-siteapp"/>

		<!-- 添加到主屏后的标题 iOS6+ -->
		<meta name="apple-mobile-web-app-title" content="Plane UI" />

		<!-- 是否启用 WebApp 全屏模式 -->
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<!-- 设置状态栏的背景颜色，只有在 `"apple-mobile-web-app-capable" content="yes"` 时生效 -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<!-- for iOS icons -->
		<link rel="apple-touch-icon-precomposed" href="app/icons/icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="app/icons/icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="app/icons/icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="app/icons/icon-120x120.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="app/icons/icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="app/icons/icon-180x180.png">

		<!-- for Android 5 -->
		<meta name="theme-color" content="#0098DF" />

		<!-- Windows 8 metro color -->
		<meta name="msapplication-TileColor" content="#0098DF" />

		<!-- Windows 8 metro icon -->
		<meta name="msapplication-TileImage" content="favicon.png" />

		<!-- closed google auto translate -->
		<meta name="google" value="notranslate" />

		<!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
		<meta name="HandheldFriendly" content="true" />

		<!-- 微软的老式浏览器 -->
		<meta name="MobileOptimized" content="320" />

		<!-- uc 强制竖屏 -->
		<meta name="screen-orientation" content="portrait" />

		<!-- QQ 强制竖屏 -->
		<meta name="x5-orientation" content="portrait" />

		<!-- UC 强制全屏 -->
		<meta name="full-screen" content="yes" />

		<!-- QQ 强制全屏 -->
		<meta name="x5-fullscreen" content="true" />

		<!-- UC 应用模式 -->
		<meta name="browsermode" content="application" />

		<!-- QQ 应用模式 -->
		<meta name="x5-page-mode" content="app" />

		<!-- windows phone 点击无高光 -->
		<meta name="msapplication-tap-highlight" content="no" />

		<title>配置题目</title>
		<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_res_root'); ?>/css/planeui.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_res_root'); ?>/css/user_manage/user_manager.css" />
	</head>
	<script src="<?php echo \think\Config::get('web_res_root'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript">
	function ac(d){
		var classname="."+d;
		$(classname).each(function(){
			$(this).attr("checked",'true');
		});
	}
	function dc(d){
		var classname="."+d;
		$(classname).each(function(){
			$(this).removeAttr("checked");
		});
	}
	//伸缩问题
	function ct(d){
		var c_id="#"+d;
		$(c_id).slideToggle("fast");
	}
	</script>
	<body>
		<!-- 代码写在这下面 -->
        <div class="pui-grid">
					<!-- header -->
					<div class="pui-row" style="padding-bottom: 0">
						<div class="pui-grid-xs-12">
							<div class="page-header">
									<div class="pui-layout pui-layout-fixed pui-layout-fixed-1200">
											<div class="pui-menubar pui-menubar-square pui-menubar-header-style pui-bg-none pui-unbordered">
												<div class="pui-menubar-aside">
													<h2 class="pui-margin-none pui-text-normal page-title" title="中国移动南方基地">
														<img src="<?php echo \think\Config::get('web_res_root'); ?>/image/CM.png" class="icon-CM" />
																																							中国移动南方基地知识题库
													</h2>
										</div>
										<div class="pui-menubar-offside">
												<ul class="pui-menu pui-menu-inline pui-menu-simple pui-right">
														<li>
																<a href="#top">管理员</a>
														</li>
														<li>
																<a href="<?php echo url('index/login/change_pwd'); ?>" id="pwchange">密码修改</a>
														</li>
														<li>
																<a href="<?php echo url('index/Login/logout'); ?>">退出</a>
														</li>
												</ul>
										</div>
									</div>
								</div>
						</div>
				</div>
						</div>
        		<div class="pui-row">
        			<h3 class="pui-text-center">——&nbsp;配置题目&nbsp;——</h3>
        		</div>
        		<div class="pui-row">
        			<div class="pui-grid-xs-9 pui-grid-center" >
        				<hr>
        				<h5>单选题<span onclick="ct('t_1')"><i class="fa fa-fw fa-angle-down pui-text-lg"></i>(可伸缩)</span></h5>
        				<hr>
								<?php if($data == ''): ?>
								<p>无单选题。</p>
        				<?php else: ?>
        						<input type="button" class=" pui-btn pui-btn-default" onclick="ac('cbox_1');" value="全选">
        						<input type="button" class=" pui-btn pui-btn-default" onclick="dc('cbox_1');" value="取消全选">
								<span style=display:none><?php echo $count=0; ?></span>
								<table id="t_1" class="pui-table pui-table-bordered">
								<?php foreach($data as $k=>$v): if(($v['problem_type'] == 1)): ?>
								<tr><td><input type="checkbox" class="cbox_1" name="cbox" value=<?php echo $v['problem_id']; ?>><?php echo ++$count; ?>.<?php echo $v['problem']; ?></td>
									<?php foreach($v['option'] as $z=>$x): ?>
									<td><?php echo $z; ?>.<?php echo $x; ?></td>
									<?php endforeach; ?>
								</tr>
								<?php endif; endforeach; ?>
        						</table>
								<?php endif; ?>
								<hr>
        				<h5>多选题<span onclick="ct('t_2')"><i class="fa fa-fw fa-angle-down pui-text-lg"></i></span></h5>
        				<hr>
								<?php if($data == ''): ?>
								<p>无多选题。</p>
								<?php else: ?>
								<input type="button" class="pui-btn pui-btn-default" onclick="ac('cbox_2');" value="全选">
								<input type="button" class="pui-btn pui-btn-default" onclick="dc('cbox_2');" value="取消全选">
								<span style=display:none><?php echo $count=0; ?></span>
								<table id="t_2" class="pui-table pui-table-bordered">
								<?php foreach($data as $k=>$v): if(($v['problem_type'] == 2)): ?>
								<tr><td><input type="checkbox" class="cbox_2"  name="cbox" value=<?php echo $v['problem_id']; ?>><?php echo ++$count; ?>.<?php echo $v['problem']; ?></td>
									<?php foreach($v['option'] as $z=>$x): ?>
									<td><?php echo $z; ?>.<?php echo $x; ?></td>
									<?php endforeach; ?>
								</tr>
								<?php endif; endforeach; ?>
								</table>
								<?php endif; ?>
        				<hr>
        				<h5>填空题<span onclick="ct('t_0')"><i class="fa fa-fw fa-angle-down pui-text-lg"></i></span></h5>
        				<hr>
								<?php if($data == ''): ?>
								<p>无填空题。</p>
								<?php else: ?>
								<span style=display:none><?php echo $count=0; ?></span>
								<input type="button" class="pui-btn pui-btn-default"  onclick="ac('cbox_0');" value="全选">
								<input type="button" class="pui-btn pui-btn-default" onclick="dc('cbox_0');" value="取消全选">
								<table id="t_0" class="pui-table pui-table-bordered">
								<?php foreach($data as $k=>$v): if(($v['problem_type'] == 0)): ?>
								<tr><td><input type="checkbox" class="cbox_0"  name="cbox" value=<?php echo $v['problem_id']; ?>><?php echo ++$count; ?>.<?php echo $v['problem']; ?></td>
									<?php foreach($v['option'] as $z=>$x): ?>
									<td><?php echo $z; ?>.<?php echo $x; ?></td>
									<?php endforeach; ?>
								</tr>
								<?php endif; endforeach; ?>
								</table>
								<?php endif; ?>
        				<h5>判断题<span onclick="ct('t_3')"><i class="fa fa-fw fa-angle-down pui-text-lg"></i></span></h5>
        				<hr>
								<?php if($data == ''): ?>
								<p>无判断题。</p>
        				<?php else: ?>
								<span style=display:none><?php echo $count=0; ?></span>
								<input type="button" class="all_3 pui-btn pui-btn-default" onclick="ac('cbox_3');" value="全选">
								<input type="button" class="cancelall_3 pui-btn pui-btn-default" onclick="dc('cbox_3');"  value="取消全选">
 								<table id="t_3" class="pui-table pui-table-bordered">
								<?php foreach($data as $k=>$v): if(($v['problem_type'] == 3)): ?>
								<tr><td><input type="checkbox" class="cbox_3"  name="cbox" value=<?php echo $v['problem_id']; ?>><?php echo ++$count; ?>.<?php echo $v['problem']; ?></td>
									<?php foreach($v['option'] as $z=>$x): ?>
									<td><?php echo $z; ?>.<?php echo $x; ?></td>
									<?php endforeach; ?>
								</tr>
								<?php endif; endforeach; ?>
								</table>
								<?php endif; ?>
								<hr>

						<a href="<?php echo \think\Config::get('web_res_root'); ?>index.php/event/participant/participant_manage" class="pui-btn pui-btn-primary ">下一步</a>
						<a href="<?php echo \think\Config::get('web_res_root'); ?>index.php/showevent" class="pui-btn pui-btn-secondary " style="margin-left: 20px">取消</a>	
        			</div>		
        		</div>
        </div>
        <!-- 代码写在这上面 -->


	</body>

	<!-- jQuery -->
	
	
	<script src="<?php echo \think\Config::get('web_res_root'); ?>/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo \think\Config::get('web_res_root'); ?>/event/dist/js/planeui.js"></script>
	<script src="<?php echo \think\Config::get('web_res_root'); ?>/js/bootstrap.min.js"></script>

	<script type="text/javascript">

	var problemId;
	//获取勾选题目
	function mutil_check()
	{
		var arr = [];
		var obj = document.getElementsByName("cbox");
		var obj_legth = obj.length;
		for(var i=0;i<obj_legth;i++)
		{
			if(obj[i].checked)
			{
				 arr.push(obj[i].value);
			 }
		}
		if(arr.length == 0)
		{
			return null;
		}
		return arr;
	}


	$(document).ready(function()
	{

		$("#submit_message").click(function(){
			var problemId;
			problemId = mutil_check();
			var post_data = {problemId:problemId};


			$.ajax({
					url:"<?php echo \think\Config::get('web_res_root'); ?>index.php/event/question/event_problem_relevance",
					dataType: "json",
					type: 'POST',
					data: post_data,
					async: false,
					success: function(data){
							// alert("跳转成功!");
							json_data=eval('('+data+')');
							if(json_data['result']=="录入成功!"){
									alert(json_data['result']);
									//登录成功操作......
							}else{
									alert(json_data['result']);
									//登录失败操作......
							}
					},
					error: function(data, status, error){
							alert("跳转失败");
							alert(error);

					}
			});
		});
	});
</script>
</html>
