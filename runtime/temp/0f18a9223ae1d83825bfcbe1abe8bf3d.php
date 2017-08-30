<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"E:\xmapp\htdocs\QandA\public/../application/problem_manage\view\user_problem\user_problem.html";i:1503495928;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta http-equiv="Cache-Control" content="no-siteapp"/>
		<meta name="renderer" content="webkit" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

		<title>开始答题</title>
        <link rel="icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" type="text/css" href="<?php echo \think\Config::get('web_res_root'); ?>/css/planeui.min.css" />
	</head>
	<body>
		<div class="pui-layout pui-bg-blue-500">
            <header class="pui-center pui-layout-fixed pui-layout-fixed-1200">
                <div class="pui-row">
				   	<div class="pui-grid-xs-3 pui-grid-xs-push-9 pui-grid-sm-3 pui-grid-sm-push-9 pui-grid-md-3 pui-grid-md-push-9 pui-grid-lg-3 pui-grid-lg-push-9 pui-grid-xl-3 pui-grid-xl-push-9 pui-grid-xxl-3 pui-grid-xxl-push-9 ">
					   	<ul class="pui-menu pui-menu-justify" style="margin-top:38px;margin-bottom: 0px;">
							<li> 
								<span>张小蓝</span>&emsp;<span>退出</span>
							</li>
	                	</ul>
				   	</div>
				   	<div class="pui-grid-xs-9 pui-grid-xs-pull-3 pui-grid-sm-9 pui-grid-sm-pull-3 pui-grid-md-9 pui-grid-md-pull-3 pui-grid-lg-9 pui-grid-lg-pull-3 pui-grid-xl-9 pui-grid-xl-pull-3 pui-grid-xxl-9 pui-grid-xxl-pull-3 ">
                		<h4><img src="img/logo.png">中国移动南方基地知识题库</h4>  
				   	</div>
			   	</div>
                          
                
            </header>
        </div>
        <div class="pui-layout" style="width:96%;margin-top:30px ">	        
			<div class="pui-row">

			   	<div class="pui-grid-xs-3 pui-grid-xs-push-9 pui-grid-sm-3 pui-grid-sm-push-9 pui-grid-md-3 pui-grid-md-push-9 pui-grid-lg-3 pui-grid-lg-push-9 pui-grid-xl-3 pui-grid-xl-push-9 pui-grid-xxl-3 pui-grid-xxl-push-9 ">
			    	<div class="pui-text-center">
			     		<h4 style="color: #008EE5">倒计时：32分钟</h4>
			    	</div>
			   	</div>
			   

				<div class="pui-grid-xs-9 pui-grid-xs-pull-3 pui-grid-sm-9 pui-grid-sm-pull-3 pui-grid-md-9 pui-grid-md-pull-3 pui-grid-lg-9 pui-grid-lg-pull-3 pui-grid-xl-9 pui-grid-xl-pull-3 pui-grid-xxl-9 pui-grid-xxl-pull-3 ">
					<div>
				 		<ul class="pui-menu  pui-menu-radius pui-menu-inline pui-menu-bordered pui-text-center" style="margin-bottom: 0px;"> 
				            <li style="width: 25%">
				                <a href="javascript:;" id="single" class="choose_btn" >单选</a>
				            </li>
				            <li style="width: 25%">
				                <a href="javascript:;" id="multi"  class="choose_btn">多选</a>
				            </li>
				            <li style="width: 25%">
				                <a href="javascript:;" id="jungle"  class="choose_btn">判断</a>
				            </li>
				            <li style="width: 25%">
				                <a href="javascript:;" id="fill"  class="choose_btn">填空</a>
				            </li> 
				        </ul>

				        <div class="pui-center pui-text-center f24" style="width:70%;">
							<h6 style="color: #aaa">今日题量：总共10道题，单选5道，多选2道，判断2道，填空1道</h6>
						</div>

						
						
							

							<?php foreach($data as $v=>$k): if(is_array($k)): ?>
									<div id="<?php echo $v; ?>_panel" class="tixing_panel pui-layout">
									<?php foreach($k as $v2=>$k2): ?>
											<div  class="pui-card pui-card-shadow pui-card-radius">
				                				<div class="pui-card-box">
				                    			<h5><?php echo $v2+1; ?>、<?php echo $k2['problem']; ?></h5>
											
												<?php if(array_key_exists('option',$k2)): foreach($k2['option'] as $v3=>$k3): ?>
														<input type="radio" id="<?php echo $k3['q_id']; ?>"><?php echo $v3; ?>、<?php echo $k3['content']; ?><br>

													<?php endforeach; else: endif; ?>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								<?php else: endif; endforeach; ?>
							
						
					
					
					<br>

					<script type="text/javascript" src="<?php echo \think\Config::get('web_res_root'); ?>/js/jquery-2.1.1.min.js"></script>
					
					<script type="text/javascript">
						$(function(){
							$('.choose_btn').bind('click',function(){
								var id=$(this).attr('id');
								var id_panel=id+'_panel';
								$('.choose_btn').removeClass('active');
								$(this).addClass('active');
								$('.tixing_panel').hide();
								$('#'+id_panel).show();

							});
						})
							
						
					</script>
					<div style="float: right;">
						<input type="button" class="pui-btn pui-btn-primary" value="提交">
					</div>
				</div>
			  </div>    		

	</body>
</html>