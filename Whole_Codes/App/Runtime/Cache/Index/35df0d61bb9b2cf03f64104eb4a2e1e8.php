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
<link href="/Css/style.css" rel="stylesheet" type="text/css">	
<script src="/Js/jquery.js"></script>
<script src="/Js/bootstrap.min.js"></script>


<style type="text/css">
</style>
</head><body class="templatemo-bg-image-2">
<style type="text/css">
</style>
</head><body style="background-color:#ffffff;" id="body" >
<header> 
  <!-- 导航开始 -->
 	<div class="nav">
<h1><a href="/">三网通最优套餐</a></h1>

<?php if($_SESSION[C('USER_AUTH_KEY_F')] == ''): ?><a href="/index.php/index/login/checkreg">管理员注册</a> <a href="/index.php/index/login">管理员登陆</a>
<?php else: ?>
<span class="navspan">hello,<?php echo $_SESSION[C('USER_AUTH_KEY_F')];?></span><span class="navspan"><a href="/index.php/member">管理已有套餐</a></span> <span class="navspan"><a href="/index.php/index/login/doLogout">退出登录</a></span><?php endif; ?>

</div>
<div class="logo">
<img src="/img/logo.jpg">
</div>
  <!-- 导航结束 --> 
</header>
<div class="container">


		<div class="span12">
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
				<?php if(is_array($class1)): $i = 0; $__LIST__ = $class1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr class="success">
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
				<?php if(is_array($class2)): $i = 0; $__LIST__ = $class2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr class="success">
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
				<?php if(is_array($class3)): $i = 0; $__LIST__ = $class3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr class="success">
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



<DIV id=demo  style="OVERFLOW: hidden; WIDTH: 1150px; HEIGHT: 200px; top:485px; left:252px;">
   <table border="0" cellspacing="0" cellpadding="0">
      <tr>
         <td valign="top"  id=demo1>

            <!-- 要循环滚动的图片 -->
            <table width="1150" border="0" align="center" cellpadding="0" cellspacing="0" >
               <tr>
                  <td width="300" align="center" style="height: 200px">
                      <a href="http://mrp.weibo.10086.cn/marketPlat/caiyunturntable/index.jsp?tl=1010&tid=90000" target="_blank">
                     <img src="/img/act1.jpg" width="194" height="147" border="0" /></a>
                  </td>
                  <td width="300" align="center" style="height: 200px">
                      <a href="http://shop.10086.cn/goods/451_451_1015157_1010501.html" target="_blank">
                     <img src="/img/act2.jpg" width="194" height="147" border="0" /></a>
                  </td>
                  <td align="center" style="height: 200px; width: 300px;">
                      <a href="http://www.hl.10086.cn/resources/xuanchuan/zhc/sjjhym.jsp" target="_blank">
                     <img src="/img/act3.jpg" width="194" height="147" border="0" /></a>
                  </td>
				   <td width="300" align="center" style="height: 200px">
                      <a href="http://www.hl.10086.cn/seckill/mall/pjyl/index.jsp" target="_blank">
                     <img src="/img/act4.jpg" width="194" height="147" border="0" /></a>
                  </td>
				   <td width="300" align="center" style="height: 200px">
                      <a href="http://www.hl.10086.cn/seckill/mall/zhc/index.html" target="_blank">
                     <img src="/img/act5.jpg" width="194" height="147" border="0" /></a>
                  </td>
				   <td width="300" align="center" style="height: 200px">
                      <a href="http://www.10086.cn/10085/meizu/" target="_blank">
                     <img src="/img/act6.jpg" width="194" height="147" border="0" /></a>
                  </td>
               </tr>
            </table>
=======

<DIV id=demo  style="OVERFLOW: hidden; WIDTH: 1150px; HEIGHT: 200px; top:485px; left:252px;">
   <table border="0" cellspacing="0" cellpadding="0">
      <tr>
         <td valign="top"  id=demo1>

            <!-- 要循环滚动的图片 -->
            <table width="1150" border="0" align="center" cellpadding="0" cellspacing="0" >
               <tr>
                  <td width="300" align="center" style="height: 200px">
                      <a href="http://mrp.weibo.10086.cn/marketPlat/caiyunturntable/index.jsp?tl=1010&tid=90000" target="_blank">
                     <img src="/img/act1.jpg" width="194" height="147" border="0" /></a>
                  </td>
                  <td width="300" align="center" style="height: 200px">
                      <a href="http://shop.10086.cn/goods/451_451_1015157_1010501.html" target="_blank">
                     <img src="/img/act2.jpg" width="194" height="147" border="0" /></a>
                  </td>
                  <td align="center" style="height: 200px; width: 300px;">
                      <a href="http://www.hl.10086.cn/resources/xuanchuan/zhc/sjjhym.jsp" target="_blank">
                     <img src="/img/act3.jpg" width="194" height="147" border="0" /></a>
                  </td>
				   <td width="300" align="center" style="height: 200px">
                      <a href="http://www.hl.10086.cn/seckill/mall/pjyl/index.jsp" target="_blank">
                     <img src="/img/act4.jpg" width="194" height="147" border="0" /></a>
                  </td>
				   <td width="300" align="center" style="height: 200px">
                      <a href="http://www.hl.10086.cn/seckill/mall/zhc/index.html" target="_blank">
                     <img src="/img/act5.jpg" width="194" height="147" border="0" /></a>
                  </td>
				   <td width="300" align="center" style="height: 200px">
                      <a href="http://www.10086.cn/10085/meizu/" target="_blank">
                     <img src="/img/act6.jpg" width="194" height="147" border="0" /></a>
                  </td>
               </tr>
            </table>

         </td>
         <TD id=demo2 width=1></TD>
      </tr>
   </table>
</DIV> 
<SCRIPT>
   var speed=30//速度数值越大速度越慢
   var demo2 = document.getElementById("demo2");
   var demo = document.getElementById("demo");
   var demo1 = document.getElementById("demo1");
   demo2.innerHTML=demo1.innerHTML
   function Marquee(){
      if(demo2.offsetWidth-demo.scrollLeft<=0)
         demo.scrollLeft-=demo1.offsetWidth
      else{
         demo.scrollLeft++
      }
   }
   var MyMar=setInterval(Marquee,speed)
   demo.onmouseover=function() {clearInterval(MyMar)}
   demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
</SCRIPT>


<table style="background-color:#ffff99; width=1200px; border=0;">
<tr >
<td style="width:300px;text-align:top;">
<form class="form-signin" name="huafei" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
</td>
<td style="width:500px;text-align:top;">
<form class="form-signin" name="huafei" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
        <p  class="mb20"style="font-family:'微软雅黑';font-size:20px;">通过输入话费信息查询</p>
          <div class="mb20">通话时长:&nbsp;&nbsp;<input type="text" class="form"  name="call"  ></div>
          <div class="mb20">流量使用:&nbsp;&nbsp;<input type="text" class="form" name="ll"></div>
          <div class="mb20">短信数量:&nbsp;&nbsp;<input type="text" class="form" name="msg"></div>
		 流量包:&nbsp;&nbsp;&nbsp;&nbsp;<select name="llb">
			<option value="0">不订购</option>
			<option value="10">10元包100M</option>
			<option value="20">20元包300M</option>
			<option value="30">30元包500M</option>
			<option value="50">50元包1G</option>
			<option value="100">100元包2.5G</option>
		</select><br><br>
		 短信包:&nbsp;&nbsp;&nbsp;&nbsp;<select name="dxb">
			<option value="0">不订购</option>
			<option value="5">5元包60条</option>
			<option value="10">10元包125条</option>
			<option value="20">20元包300条</option>
		</select><br><br>
		<button class="btn" type="submit">查询最优套餐</button>
</td>
<td style="height:400px;width:400px;text-align:top;">
<form class="form-signin" name="huafei" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
	<p  class="mb20"style="font-family:'微软雅黑';font-size:20px;">通过提交账单表格查询</p>
	<a href="http://www.10086.cn/" target="_blank">移动营业厅直通车</a><br>
	<a href="http://www.10010.com/" target="_blank">联通营业厅直通车</a><br>
	<a href="http://www.189.cn/" target="_blank">电信营业厅直通车</a><br><br>
	<div class="mb20" style="text-align:center;"><input  type="file" name="file_stu"  class="form"/></div>
	<button class="btn" type="submit">查询最优套餐</button>
</tr>

<tr>
</table>



>>>>>>> origin/N2

         </td>
         <TD id=demo2 width=1></TD>
      </tr>
   </table>
</DIV> 
<SCRIPT>
   var speed=30//速度数值越大速度越慢
   var demo2 = document.getElementById("demo2");
   var demo = document.getElementById("demo");
   var demo1 = document.getElementById("demo1");
   demo2.innerHTML=demo1.innerHTML
   function Marquee(){
      if(demo2.offsetWidth-demo.scrollLeft<=0)
         demo.scrollLeft-=demo1.offsetWidth
      else{
         demo.scrollLeft++
      }
   }
   var MyMar=setInterval(Marquee,speed)
   demo.onmouseover=function() {clearInterval(MyMar)}
   demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
</SCRIPT>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12">
						<h1>Search For The Best Service</h1>
					</div>
					<div class="form-group">
			          <div class="col-md-12">
			            <a href="/index.php/index/login" class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;管理员登陆</a>
						<a href="/index.php/index/login/checkreg.html" class="pull-right">管理员注册&nbsp;&nbsp;&nbsp;&nbsp;</a>
			          </div>
			        </div>
				</div>
				<br/>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
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
						流量包:&nbsp;&nbsp;&nbsp;&nbsp;<select name="llb">
							<option value="0">不订购</option>
							<option value="10">10元包100M</option>
							<option value="20">20元包300M</option>
							<option value="30">30元包500M</option>
							<option value="50">50元包1G</option>
							<option value="100">100元包2.5G</option>
						</select><br><br>
						短信包:&nbsp;&nbsp;&nbsp;&nbsp;<select name="dxb">
							<option value="0">不订购</option>
							<option value="5">5元包60条</option>
							<option value="10">10元包125条</option>
							<option value="20">20元包300条</option>
						</select><br><br>
					</div>
					
					
					<div class="templatemo-other-signin col-md-6">
						<p  class="mb20"style="font-family:'微软雅黑';font-size:20px;">通过提交账单表格查询</p>
						<a href="http://www.10086.cn/" target="_blank">移动营业厅直通车</a><br>
						<a href="http://www.10010.com/" target="_blank">联通营业厅直通车</a><br>
						<a href="http://www.189.cn/" target="_blank">电信营业厅直通车</a><br><br>
						<div class="mb20" style="text-align:center;"><input  type="file" name="file_stu"  class="btn btn-info"/></div>
					</div>   
				</div>	
				<br/>
				<button class="btn btn-info" type="submit">查询最优套餐</button>
		      </form>		      		      
		</div>
	</div>
<!-- footer start -->
<footer id="footer">
  <div class="col-lg-12 col-md-12">
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-footer"  style="text-align:center;"> <spanclass="text-muted">三网通最优套餐版权所有</span>
          <div class="clean"></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- footer end -->
<!-- 去顶部 --> 
</body>
</html>