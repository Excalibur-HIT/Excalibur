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
</head><body class="templatemo-bg-image-2">


	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
				<div class="row">
		<div class="col-md-12">
			<div class="tabbable" id="tabs-462262">
			<div class="tabbable" id="tabs-462262">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-963344" data-toggle="tab">所有套餐</a>
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
							删除
						</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr >
						<td>
							<?php echo ($li["yys"]); ?>
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
				
				
		<form class="form-signin" name="huafei" action="<?php echo U('member/person/addtc');?>" method="post" style="max-width: 450px;">
        <h4  class="mb20"style="font-family:'微软雅黑';font-size:20px;">添加套餐</h4>
		  <div class="mb20">运&nbsp;&nbsp;营&nbsp;&nbsp;商:&nbsp;&nbsp;<select name="yys">
        		<option value="移动">移动</option>
				<option value="联通">联通</option>
				<option value="电信">电信</option>
		 </select>
		 </div>
		 <div class="mb20">套餐名称:&nbsp;&nbsp;<input type="text" class="form"  name="package"  ></div>
		 <div class="mb20">套餐价格:&nbsp;&nbsp;<input type="text" class="form"  name="money"  ></div>
          <div class="mb20">所含时长/m:&nbsp;&nbsp;<input type="text" class="form"  name="callpackage"  ></div>
		  <div class="mb20">通话超出价格:&nbsp;&nbsp;<input type="text" class="form"  name="callmore"  ></div>
          <div class="mb20">所含流量/m:&nbsp;&nbsp;<input type="text" class="form" name="llpackage"></div>
		  <div class="mb20">流量超出价格:&nbsp;&nbsp;<input type="text" class="form" name="llmore"></div>
          <div class="mb20">所含短信/条:&nbsp;&nbsp;<input type="text" class="form" name="msgpackage"></div>
		   <div class="mb20">短信超出价格:&nbsp;&nbsp;<input type="text" class="form" name="msgmore"></div>


          <div style="text-align:center;margin-top:20px;"><button class="btn" type="submit">添加套餐</button></div>
      </form>	      		      
		</div>
	</div>


<!-- footer start -->
<!-- footer end -->
<!-- 去顶部 --> 
</body>
</html>