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
<<<<<<< HEAD
<script>
function fclick(obj){
  with(obj){
    style.posTop=event.srcElement.offsetTop
    var x=event.x-offsetWidth/2
    if(x<event.srcElement.offsetLeft)x=event.srcElement.offsetLeft
    if(x>event.srcElement.offsetLeft+event.srcElement.offsetWidth-offsetWidth)x=event.srcElement.offsetLeft+event.srcElement.offsetWidth-offsetWidth
    style.posLeft=x
  }
}
</script>
=======

>>>>>>> master
<style type="text/css">
input{ solid #333333;color:#eeeeee;font:normal 12px Tahoma;height:30px}
</style>
</head><body class="templatemo-bg-image-2">
<<<<<<< HEAD

<br/><br/><br/>
	<div class="container">
		<div class="col-md-12">		
			<div class="form-horizontal templatemo-login-form-2">		
				<div class="row">
					<div class="col-md-12">
						<h1 style="font-family:'黑体';">三网通最优套餐系统</h1>
					</div>
					<div class="form-group">
			          <div class="col-md-12">
					  <?php if($_SESSION[C('USER_AUTH_KEY_F')] == ''): ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index.php/index/login" style="color:#ffffff;font-family:'黑体';">登陆</a>
					<?php else: ?>&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="navspan" style="font-family:'黑体';">Hello,<?php echo $_SESSION[C('USER_AUTH_KEY_F')];?></span><span class="navspan">&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/index.php/member" style="color:#ffffff;font-family:'黑体';" >管理套餐</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span> <span class="navspan"><a href="/index.php/index/login/doLogout" style="color:#ffffff;font-family:'黑体';" >退出</a></span><?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="/index.php/index/login/checkreg.html" style="color:#ffffff;font-family:'黑体';" class="pull-right">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
=======


	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12">
						<h1>Search For The Best Service</h1>
					</div>
					<div class="form-group">
			          <div class="col-md-12">
					  <?php if($_SESSION[C('USER_AUTH_KEY_F')] == ''): ?><a href="/index.php/index/login">管理员登陆</a>
					<?php else: ?>
					<span class="navspan">hello,<?php echo $_SESSION[C('USER_AUTH_KEY_F')];?></span><span class="navspan">&nbsp;
					<a href="/index.php/member">管理已有套餐</a>&nbsp;
					</span> <span class="navspan"><a href="/index.php/index/login/doLogout">退出登录</a></span><?php endif; ?>
			            
						<a href="/index.php/index/login/checkreg.html" class="pull-right">管理员注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
>>>>>>> master
			          </div>
			        </div>
				</div>
				<br/>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
<<<<<<< HEAD
					<form  role="form" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
						<p class="text-center" style="font-family:'黑体'; font-size:20px;">通过输入使用需求查询</p>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-phone"></i>
							<input type="text" class="form-control" name="call" placeholder="通话时长" style="font-family:'黑体';">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-globe"></i>
							<input type="text" class="form-control" name="ll" placeholder="使用流量" style="font-family:'黑体';">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-envelope"></i>
							<input type="text" class="form-control" name="msg" placeholder="短信数量" style="font-family:'黑体';">
						</div>
						
						<br/>
						<button class="btn myButton" type="submit" style="font-family:'黑体';">查询</button>
					</form>	
					</div>	
						
=======
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-phone"></i>
							<input type="text" class="form-control" name="call" placeholder="通话时长">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-envelope"></i>
							<input type="text" class="form-control" name="ll" placeholder="短信数量">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-globe"></i>
							<input type="text" class="form-control" name="msg" placeholder="使用流量">
						</div>
						<br/>
					</div>
					<button class="btn btn-info" type="submit">查询最优套餐</button>	
					</form>		
					
				<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('index/index/chaxun2');?>" method="post" enctype="multipart/form-data">
					<div class="templatemo-other-signin col-md-6">
						<p  class="mb20"style="font-family:'微软雅黑';font-size:20px;">通过提交账单表格查询</p>
						<a href="http://www.10086.cn/" target="_blank">移动营业厅直通车</a><br>
						<a href="http://www.10010.com/" target="_blank">联通营业厅直通车</a><br>
						<a href="http://www.189.cn/" target="_blank">电信营业厅直通车</a><br><br>
						<div class="mb20" style="text-align:center;"><input  type="file" name="file_stu"  class="btn btn-info"/></div>
					</div> 	<br/>
				<br><button class="btn btn-info" type="submit">查询最优套餐</button> 
		      </form>		
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
>>>>>>> master
					
				
					<div class="templatemo-other-signin col-md-6">
					<form role="form" action="<?php echo U('index/index/chaxun2');?>" method="post" enctype="multipart/form-data">
						<table class="table table-striped table-hover">
							<p class="text-center" style="font-family:'黑体'; font-size:20px;">通过上传账单信息查询</p>
							<tbody>
								<tr></tr>
								<tr>
								<td>1</td>
								<td class="text-center" style="color:#ffffff;font-family:'黑体';">移动官网</td>
								<td class="text-center"><a href="http://www.10086.cn/" target="blank" class="btn myButton" title="访问"><i class="fa fa-arrow-circle-right"></i></a></td>
								</tr>
								<tr></tr>
								<tr>
								<td>2</td>
								<td class="text-center" style="color:#ffffff;font-family:'黑体';">联通官网</td>
								<td class="text-center"><a href="http://www.10010.com/" target="blank" class="btn myButton" title="访问"><i class="fa fa-arrow-circle-right"></i></a></td>
								</tr>
								<tr></tr>
								<tr>
								<td>3</td>
								<td class="text-center" style="color:#ffffff;font-family:'黑体';">电信官网</td>
								<td class="text-center"><a href="http://www.189.cn/" target="blank" class="btn myButton" title="访问"><i class="fa fa-arrow-circle-right"></i></a>
								</td>
								</tr>
							</tbody>
						</table>
						<input  type="file" name="file_stu" style="color:#ffffff;font-family:'黑体';"/>
						<button class="btn myButton" type="submit" style="color:#ffffff;font-family:'黑体';">查询</button>
						
					</form>	
					</div> 	
				
		      	
				<!--<div class="col-md-12">
				<br/>
				<br/>
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
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
						
					</div>
				</div>
			</div>
			</div>
				</div>	
<<<<<<< HEAD
      		 </div>     
=======
      		      
>>>>>>> master
		</div>
	</div>


<<<<<<< HEAD
--> 
=======
<!-- footer start -->
<!-- footer end -->
<!-- 去顶部 --> 
>>>>>>> master
</body>
</html>