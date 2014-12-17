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

<style type="text/css">
</style>
<body class="templatemo-bg-image-2">
<EMBED style="top:0px; position:fixed;  "  src="/img/2_16sucai.com.swf" width=1366 height=695 type=application/x-shockwave-flash wmode="transparent" quality="high" ;;></EMBED>

	<div class="container">
		<div class="col-md-12">			
	<form class="form-horizontal templatemo-login-form-2" name="huafei" action="<?php echo U('member/person/addtc');?>" method="post" >
		<div class="row">
		<div class="col-md-12">
			<div class="col-md-12">
				<h1 style="font-family:'方正喵呜体';" align="center">管理套餐</h1>
						
						
				 <h4  class="mb20"style="font-family:'方正喵呜体';font-size:20px;"align="center" >添加新套餐</h4>
				
				<div style="font-family:'方正喵呜体';">
				运营商:
				<input type="radio" value="移动" checked="checked" name="yys" />移动
				<input type="radio" value="联通" name="yys"/>联通
				<input type="radio" value="电信" name="yys"/>电信  
				<a href="/index.php" class="pull-right" style="font-family:'方正喵呜体';" >点此返回主页</a>
				</div>
		 <br/>
		<div class="row">
					<div class="templatemo-one-signin col-md-6">
						<input type="text" class="form-control" name="package" placeholder="套餐名称"style="font-family:'方正喵呜体';"><br/>
						<input type="text" class="form-control" name="money" placeholder="套餐价格"style="font-family:'方正喵呜体';"><br/>
						<input type="text" class="form-control" name="callpackage" placeholder="所含时长/m"style="font-family:'方正喵呜体';"><br/>
						<input type="text" class="form-control" name="callmore" placeholder="通话超出价格"style="font-family:'方正喵呜体';"><br/>
					</div>
					<div class="templatemo-other-signin col-md-6">
						<input type="text" class="form-control" name="llpackage" placeholder="所含流量/m" style="font-family:'方正喵呜体';"><br/>
						<input type="text" class="form-control" name="llmore" placeholder="流量超出价格"style="font-family:'方正喵呜体';"><br/>
						<input type="text" class="form-control" name="msgpackage" placeholder="所含短信/条"style="font-family:'方正喵呜体';"><br/>
						<input type="text" class="form-control" name="msgmore" placeholder="短信超出价格"style="font-family:'方正喵呜体';"><br/>
					</div> 
				</div> 
          <div style="text-align:center;margin-top:20px;"><button class="btn myButton" type="submit" style="font-family:'方正喵呜体';">添加套餐（同时向所有邮箱用户发送新套餐信息）</button></div>
      </form>
	  
	<br><br>	<h4  class="mb20"style="font-family:'方正喵呜体';font-size:20px;"align="center">管理已有套餐</h4>
					</div>
			<div class="tabbable" id="tabs-462262">
			<div class="tabbable" id="tabs-462262">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-963344" data-toggle="tab" style="font-family:'方正喵呜体';" >所有套餐</a>
					</li>

				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-963344" style="padding: 5px;">

            <table class="table">
				<thead>
					<tr>
						<th>运营商</th>
						<th>套餐名称</th>
						<th>套餐价格</th>
						<th>流量价格</th>
						<th>通话价格</th>
						<th>短讯价格</th>
						<th>删除</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr >
						<td style="font-family:'方正喵呜体';">
							<?php echo ($li["yys"]); ?>
						</td>
						<td style="font-family:'方正喵呜体';">
							<?php echo ($li["package"]); ?>
						</td >
						<td style="font-family:'方正喵呜体';">
							<?php echo ($li["money"]); ?>元
						</td>
						<td style="font-family:'方正喵呜体';">
							<?php echo ($li["llpackage"]); ?>M&nbsp;|&nbsp;超出部分<?php echo ($li["llmore"]); ?>元/M
						</td>
						<td style="font-family:'方正喵呜体';">
							<?php echo ($li["callpackage"]); ?>分钟&nbsp;|&nbsp;超出部分<?php echo ($li["callmore"]); ?>元/分钟
						</td>
						<td style="font-family:'方正喵呜体';">
							<?php echo ($li["msgpackage"]); ?>条&nbsp;|&nbsp;超出部分<?php echo ($li["msgmore"]); ?>元/条
						</td>
						<td style="font-family:'方正喵呜体';">
							<a href="/index.php/member/person/deltc/id/<?php echo ($li["id"]); ?>">X</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
					
	                </div>
	
				</div>
			</div>
		</div>
				<br/>
				
				
	  
		
		</div>
	</div>


<!-- footer start -->
<!-- footer end -->
<!-- 去顶部 --> 
</body>
</html>