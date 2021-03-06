<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<base href="__ROOT__/" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<title>三网通最优套餐系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
<link href="/Css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="/Css/templatemo_style.css" rel="stylesheet" type="text/css">	
<link href="/Css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="/Css/bootstrap-social.css" rel="stylesheet" type="text/css">	
<script src="/Js/jquery.js"></script>
<script src="/Js/bootstrap.min.js"></script>
</head>
<body class="templatemo-bg-image-2">
<div class="container">

	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12">
						<h1>您的话费分析如下</h1>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
						<div class="templatemo-input-icon-container">
				            您总共通话<span style="color:#f40;"><?php echo ($call); ?></span>分钟
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            使用<span style="color:#f40;"><?php echo ($ll); ?></span>M流量
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            发送了<span style="color:#f40;"><?php echo ($msg); ?></span>条短信
						</div>
						
					</div>
					
					
					<div class="templatemo-one-signin col-md-6">
						<div class="templatemo-input-icon-container">
				            您总共通话<span style="color:#f40;"><?php echo ($call); ?></span>分钟
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            使用<span style="color:#f40;"><?php echo ($ll); ?></span>M流量
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            发送了<span style="color:#f40;"><?php echo ($msg); ?></span>条短信
						</div>
						
					</div>   
				</div>	
		      </form>		      		      
		</div>
	</div>
<h2>您总共通话<span style="color:#f40;"><?php echo ($call); ?></span>分钟，使用<span style="color:#f40;">
<?php echo ($ll); ?></span>M流量，发送了<span style="color:#f40;"><?php echo ($msg); ?></span>条短信<br></h2>
<br>
<h2>套餐按价格排序如下：</h2>

                    <div class="col-md-12">
					<div class="tabbable" id="tabs-462262">
				    <ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-963344" data-toggle="tab">移动</a>
					</li> 
					<li>
						<a href="#panel-115174" data-toggle="tab">联通</a>
					</li>
					<li>
						<a href="#panel-115175" data-toggle="tab">电信</a>
					</li>
					
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-963344" style="padding: 5px;">

            <table class="table">
				<thead>
					<tr>
						<th>
							运营商
						</th>
						<th>
							套餐名称
						</th>
						<th>
							套餐价格
						</th>
						<th>
							流量价格
						</th>
						<th>
							通话价格
						</th>
						<th>
							短讯价格
						</th>
						<th>
							实际花费
						</th>						
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($class1)): $i = 0; $__LIST__ = $class1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr >
						<td>
							中国移动
						</td>
						<td>
							<?php echo ($li["package"]); ?>
						</td>
						<td>
							<?php echo ($li["money"]); ?>元
						</td>
						<td>
							<?php echo ($li["llpackage"]); ?>M&nbsp;|&nbsp;超出部分<?php echo ($li["llmore"]); ?>元/M
						</td>
						<td>
							<?php echo ($li["callpackage"]); ?>分钟&nbsp;|&nbsp;超出部分<?php echo ($li["callmore"]); ?>元/分钟
						</td>
						<td>
							<?php echo ($li["msgpackage"]); ?>条&nbsp;|&nbsp;超出部分<?php echo ($li["msgmore"]); ?>元/条
						</td>
						<td>
							<span style="color:#f40;"><?php echo ($li["money2"]); ?></span>元
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
					
	                </div>
					
					<div class="tab-pane" id="panel-115174" style="padding: 5px;">
					 <table class="table">
				<thead>
					<tr>
						<th>
							运营商
						</th>
						<th>
							套餐名称
						</th>
						<th>
							套餐价格
						</th>
						<th>
							流量价格
						</th>
						<th>
							通话价格
						</th>
						<th>
							短讯价格
						</th>
						<th>
							实际花费
						</th>	
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($class2)): $i = 0; $__LIST__ = $class2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr >
						<td>
							中国联通
						</td>
						<td>
							<?php echo ($li["package"]); ?>
						</td>
						<td>
							<?php echo ($li["money"]); ?>元
						</td>
						<td>
							<?php echo ($li["llpackage"]); ?>M&nbsp;|&nbsp;超出部分<?php echo ($li["llmore"]); ?>元/M
						</td>
						<td>
							<?php echo ($li["callpackage"]); ?>分钟&nbsp;|&nbsp;超出部分<?php echo ($li["callmore"]); ?>元/分钟
						</td>
						<td>
							<?php echo ($li["msgpackage"]); ?>条&nbsp;|&nbsp;超出部分<?php echo ($li["msgmore"]); ?>元/条
						</td>
						<td>
							<span style="color:#f40;"><?php echo ($li["money5"]); ?></span>元
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
						
					</div>
					<div class="tab-pane" id="panel-115175" style="padding: 5px;">
					 <table class="table">
				<thead>
					<tr>
						<th>
							运营商
						</th>
						<th>
							套餐名称
						</th>
						<th>
							套餐价格
						</th>
						<th>
							流量价格
						</th>
						<th>
							通话价格
						</th>
						<th>
							短讯价格
						</th>
						<th>
							实际花费
						</th>	
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($class3)): $i = 0; $__LIST__ = $class3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr >
						<td>
							中国电信
						</td>
						<td>
							<?php echo ($li["package"]); ?>
						</td>
						<td>
							<?php echo ($li["money"]); ?>元
						</td>
						<td>
							<?php echo ($li["llpackage"]); ?>M&nbsp;|&nbsp;超出部分<?php echo ($li["llmore"]); ?>元/M
						</td>
						<td>
							<?php echo ($li["callpackage"]); ?>分钟&nbsp;|&nbsp;超出部分<?php echo ($li["callmore"]); ?>元/分钟
						</td>
						<td>
							<?php echo ($li["msgpackage"]); ?>条&nbsp;|&nbsp;超出部分<?php echo ($li["msgmore"]); ?>元/条
						</td>
						<td>
							<span style="color:#f40;"><?php echo ($li["money4"]); ?></span>元
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
						
					</div>
				</div>
			</div>
			</div>
				</div>	
      		      
		</div>
	</div>

<!-- footer start -->
<!-- footer end -->
<!-- 去顶部 --> 
</body>
</html>