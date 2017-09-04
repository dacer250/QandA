<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"D:\xampp\htdocs\QandA\public/../application/problem_manage\view\user_problem\user_problem.html";i:1504237617;}*/ ?>
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
	<body  onload="leftTimer()">
	<div id="load" style="position: fixed;height: 100%;width:100%;background: #eee;filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5;display: none   ">
		<div class="pui-loading pui-loading-ring-large" style="margin: 0 auto;margin-top:20%"></div>
    </div>
    <div  class="pui-layout">
        <header>
            <div style="position: relative;">
                <img src="<?php echo \think\Config::get('web_res_root'); ?>/img/header2.jpg" style="width: 100%;height: auto">
                <div class="form-group pui-btn-gradient pui-btn-shadow" style="position: absolute;bottom: 10px;right: 20px">
                    <input type="button" class="pui-btn pui-btn-small pui-btn-default " value="<?php echo $name; ?>">
                    <a type="button" class="pui-btn pui-btn-small pui-btn-primary " href="<?php echo url('index/Login/logout'); ?>" >退出</a>
                </div>
            </div>
        </header>
        <a type="button" class=" pui-btn pui-btn-default" style="float:left;margin-left: 2%;margin-top:10px " href="<?php echo url('index/userindex/user_index'); ?>">返回</a>
    </div> 

    <div id="content" class="pui-layout" style="width:96%;margin-top:10px ">
		<div class="pui-row">
		   	<div class="pui-grid-xs-3 pui-grid-xs-push-9 pui-grid-sm-3 pui-grid-sm-push-9 pui-grid-md-3 pui-grid-md-push-9 pui-grid-lg-3 pui-grid-lg-push-9 pui-grid-xl-3 pui-grid-xl-push-9 pui-grid-xxl-3 pui-grid-xxl-push-9 ">
		    	<div class="pui-text-center">
		     		<h4 class="bef" style="color: #008EE5"  id="timer">剩余<span id="left_min"></span>分<span id="left_sec"></span>秒</h4>
		     		<input type="hidden" id="time" value="<?php echo $time; ?>">
		    		<div style="text-align:center;">
						<input type="button" class="bef pui-btn pui-btn-primary" id="submit" value="交卷">
						<div id="credit_result" style="display: none">
							<h5>&emsp;您今日得分：<span id="per_score"></span>；累计得分：<span id="per_credit"></span>；团队总得分：<span id="all_score"></span></h5>
						</div>
						<div id="submit_result" style="display:none;width: 90%;margin: 0 auto;margin-top: 10px">
						<div class="pui-timeline" >
				            <div class="pui-timeline-list" id="team_mates"> 
				                <div class="pui-timeline-divider pui-timeline-divider-line">您所在的队伍</div>
				                <!-- <div class="pui-timeline-item pui-timeline-badge-date">
				                     <label class="pui-badge pui-badge-info">2017-12-05</label>
				                     <div class="pui-timeline-item-context">
				                         小明 获得了80分
				                     </div>
				                 </div>  -->

				            </div>
						</div>
					</div>
					</div>
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
			                <a href="javascript:;" id="judge"  class="choose_btn">判断</a>
			            </li>
			            <li style="width: 25%">
			                <a href="javascript:;" id="fill"  class="choose_btn">填空</a>
			            </li>
			        </ul>

			        <div class="pui-center pui-text-center f24" style="width:70%;">
						<h6 style="color: #aaa">今日题量：总共<span id="all_pr"></span>道题，单选<span id="single_pr"></span>道，多选<span id="multi_pr"></span>道，判断<span id="judge_pr"></span>道，填空<span id="fill_pr"></span>道</h6>
					</div>
						<?php foreach($data as $v=>$k): if(is_array($k)): ?>
								<div id="<?php echo $v; ?>_panel" class="tixing_panel pui-layout">
									<?php foreach($k as $v2=>$k2): ?>
										<div class="timu_item pui-card pui-card-shadow pui-card-radius" id="<?php echo $k2['problem_id']; ?>">
			                				<div class="pui-card-box">
			                    			<h5><?php echo $v2+1; ?>、<?php echo $k2['problem']; ?>&emsp;<span style="color: red"></span></h5>

											<?php if(array_key_exists('option',$k2)): if($v == 'single'): foreach($k2['option'] as $v3=>$k3): ?>
														<input type="radio" name="<?php echo $v; ?>_<?php echo $k2['problem_id']; ?>" id="<?php echo $k3['q_id']; ?>"><?php echo $v3; ?>、<?php echo $k3['content']; ?> <br>
													<?php endforeach; else: foreach($k2['option'] as $v3=>$k3): ?>
														<input type="checkbox" name="<?php echo $v; ?>_<?php echo $k2['problem_id']; ?>" id="<?php echo $k3['q_id']; ?>"><?php echo $v3; ?>、<?php echo $k3['content']; ?> <br>
													<?php endforeach; endif; else: if($v == 'judge'): ?>
													<input type="radio" name="<?php echo $v; ?>_<?php echo $k2['problem_id']; ?>" value="1">是<br>
													<input type="radio" name="<?php echo $v; ?>_<?php echo $k2['problem_id']; ?>" value="0">否
												<?php endif; if($v == 'fill'): ?>
													<input type="text" name="<?php echo $v; ?>_<?php echo $k2['problem_id']; ?>" ><br>
													<?php endif; endif; ?>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php else: endif; endforeach; ?>
				<br>
				</div>

			</div>
		</div>
	</div>
	
<script type="text/javascript" src="<?php echo \think\Config::get('web_res_root'); ?>/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript"> 
	function leftTimer(year,month,day,hour,minute,second){ 
	    // 准备 
    var countdownMinute = $("#time").val()*60;;//10分钟倒计时 
    //alert(countdownMinute);
    var startTimes = new Date();//开始时间 new Date('2016-11-16 15:21'); 
    var endTimes = new Date(startTimes.setMinutes(startTimes.getMinutes()+countdownMinute));//结束时间 
    var curTimes = new Date();//当前时间 
    var surplusTimes = endTimes.getTime()/1000 - curTimes.getTime()/1000;//结束毫秒-开始毫秒=剩余倒计时间 
      
    // 进入倒计时 
    countdowns = window.setInterval(function(){ 
      surplusTimes--; 
      var minu = Math.floor(surplusTimes/60); 
      var secd = Math.round(surplusTimes%60); 
      $("#left_min").text(minu);
      $("#left_sec").text(secd);
      //console.log(minu+':'+secd); 
      if(surplusTimes<=0){ 
      	var display =$('#submit').css('display');
		if(display == 'none'){
		   return;
		}
        console.log('时间到！'); 
        clearInterval(countdowns);
        alert("时间到，将自动提交答卷");
        $('#submit').click();

      } 
    },1000); 
} 
  
</script> 
<script type="text/javascript">

	$(function(){
		var single_length=$("#single_panel .timu_item").length;
		$("#single_pr").text(single_length);
		var multi_length=$("#multi_panel .timu_item").length;
		$("#multi_pr").text(multi_length);
		var judge_length=$("#judge_panel .timu_item").length;
		$("#judge_pr").text(judge_length);
		var fill_length=$("#fill_panel .timu_item").length;
		$("#fill_pr").text(fill_length);
		$("#all_pr").text(single_length+multi_length+judge_length+fill_length);


		$('.choose_btn').bind('click',function(){
			var id=$(this).attr('id');
			var id_panel=id+'_panel';
			$('.choose_btn').removeClass('active');
			$(this).addClass('active');
			$('.tixing_panel').hide();
			$('#'+id_panel).show();

		});
		$('#single').click();

		$('#submit').bind("click",function(){
			var user_answer ={} ;
			var answer_single={};


			//获取单选题id以及答案
			var single_items=new Array();
			//var single_length=$("#single_panel .timu_item").length;
			for(var i=0;i<single_length;i++){
				//s:单选题id;s_answer:单选题答案id
				var s=$("#single_panel .timu_item").eq(i).attr('id');
				var s_answer=$("#single_panel .timu_item input[type='radio']:checked").eq(i).attr("id");

				var answer_single={};
	        	answer_single['problem_id']=s;
	        	answer_single['q_id']=s_answer;

				single_items[i]=answer_single;

			}

			var multi_items=new Array();
			//获取多选题id以及答案
			//var multi_length=$("#multi_panel .timu_item").length;
			for(var i=0;i<multi_length;i++){
				var m=$("#multi_panel .timu_item").eq(i).attr('id');
				var m_id='input[name=multi_'+m+']:checked';
				var m_answers=$("#multi_panel .timu_item").eq(i);
				var m_answers_lengths=m_answers.length;

				//m:多选题id;id_array：多选题答案数组
				var id_array=new Array();
				$(m_id).each(function(){
				    id_array.push($(this).attr('id'));//向数组中添加元素
				});
				// var idstr=id_array.join(',');//将数组元素连接起来以构建一个字符串
				var answer_multi={};

	        	answer_multi['problem_id']=m;
	        	answer_multi['q_id']=id_array;

	        	multi_items[i]=answer_multi;
			}

			//获取判断题id以及答案
			var judge_items=new Array();
			//var judge_length=$("#judge_panel .timu_item").length;
			for(var i=0;i<judge_length;i++){
				var j=$("#judge_panel .timu_item").eq(i).attr("id");
				var j_answer=$("#judge_panel .timu_item input[type='radio']:checked").eq(i).val();
				//alert(j_answer);
				var answer_judge={};
	        	answer_judge['problem_id']=j;
	        	answer_judge['answer']=j_answer;
				
				judge_items[i]=answer_judge;

			}

			//获取填空题id以及答案
			var fill_items=new Array();
			//var fill_length=$("#fill_panel .timu_item").length;
			for(var i=0;i<fill_length;i++){
				var f=$("#fill_panel .timu_item").eq(i).attr("id");
				var f_answer=$("#fill_panel .timu_item input[type='text']").eq(i).val();
				var answer_fill={};
				
	        	answer_fill['problem_id']=f;
	        	answer_fill['answer']=f_answer;
				
				fill_items[i]=answer_fill;

			}

			user_answer['single']=	single_items;
			user_answer['multi']=	multi_items;
			user_answer['judge']=	judge_items;
			user_answer['fill']=	fill_items;
			user_answer['participant']=<?php echo $participant; ?>;
			$.ajax({  
                type: "POST",  
                url: "<?php echo url('/answer/SubmitAnswer'); ?>",  
                async: true, //同步  
                dataType: "json",  
                data:user_answer,  
                //后台执行完成后，返回页面处理函数  
                beforeSend:function(){
                	$("#load").show();
                },
                success: function(results){
                	$("#load").hide();
                	var parsedJson = jQuery.parseJSON(results); 
                	//alert(parsedJson.user_credit);
                 	$("#per_score").text(parsedJson.user_score);
                 	//$("#per_score").text(JSON.stringify(results));
                 	$("#per_credit").text(parsedJson.user_credit);
                 	$("#all_score").text(parsedJson.team_credit);

                 	if(parsedJson.user_all_right){
                 		$("#credit_result").append("<h5 style='color:red'>真厉害，您今天答对了所有题，额外加"+parsedJson.user_all_right+"分！！</h5>");
                 	}
                 	if(parsedJson.team_all_right){
                 		$("#credit_result").append("<h5 style='color:red'>真厉害，您所在的队伍今天答对了所有题，额外加"+parsedJson.team_all_right+"分！！</h5>");
                 	}
                 	
                 	
                 	var team_mates=parsedJson.team_mates;
					//$("#all_score").text(JSON.stringify(team_mates));
                 	for(var i=0;i<team_mates.length;i++){
					 	var credit=team_mates[i].credit;
					 	var name=team_mates[i].name;
					 	var participant=team_mates[i].participant;
					 	var template="<div class='pui-timeline-item pui-timeline-badge-date'><label class='pui-badge pui-badge-info'>"+name+"</label><div class='pui-timeline-item-context'>累计得分<strong>"+credit+"</strong>分</div></div> ";
						$("#team_mates").append(template);
                 	}
                 	
                 	var right_answer=parsedJson.right_answer;
                 	for(var prop in right_answer){
                 		if(prop=="single"){
                 			for(var prop2 in right_answer.single){
                 				var id="#single_panel #"+prop2+" h5 span";
                 				$(id).text(right_answer.single[prop2]);
                 			}
                 		}
                 		if(prop=="multi"){
                 			for(var prop2 in right_answer.multi){
                 				var id="#multi_panel #"+prop2+" h5 span";
                 				$(id).text(right_answer.multi[prop2]);
                 			}
                 		}
                 		if(prop=="fill"){
                 			for(var prop2 in right_answer.fill){
                 				var id="#fill_panel #"+prop2+" h5 span";
                 				$(id).text(right_answer.fill[prop2]);
                 			}
                 		}
                 		if(prop=="judge"){
                 			for(var prop2 in right_answer.judge){
                 				var id="#judge_panel #"+prop2+" h5 span";
                 				$(id).text(right_answer.judge[prop2]);
                 			}
                 		}
                 	}
                 	//alert(JSON.stringify(parsedJson.right_answer));
                 	$(".bef").hide();
                 	$("#credit_result").show();
                	$("#submit_result").show();
                }
            });
		});

	})
</script>

</body>
</html>