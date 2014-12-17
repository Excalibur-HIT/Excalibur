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
$(function(){
	$("input[type=file]").change(function(){$(this).parents(".uploader").find(".filename").val($(this).val());});
	$("input[type=file]").each(function(){
	if($(this).val()==""){$(this).parents(".uploader").find(".filename").val("No file selected...");}
	});
});
</script>
<style type="text/css">

</style>
</head><body class="templatemo-bg-image-2">
<EMBED style="top:0px; position:fixed;  "  src="/img/2_16sucai.com.swf" width=1366 height=695 type=application/x-shockwave-flash wmode="transparent" quality="high" ;;></EMBED>

<br/>
<div class="container">
		<div class="col-md-12">		
			<div class="form-horizontal templatemo-login-form-2">		
				<div class="row">
					<div class="col-md-12">
						<h1 style="font-family:'方正喵呜体';font-size:40px">三网通最优套餐系统</h1>
					</div>
					<div class="form-group">
			          <div class="col-md-12">
					  <?php if($_SESSION[C('USER_AUTH_KEY_F')] == ''): ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index.php/index/login" style="color:#ffffff;font-family:'方正喵呜体';">登陆</a>
					<?php else: ?>&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="navspan" style="font-family:'方正喵呜体';">Hello,<?php echo $_SESSION[C('USER_AUTH_KEY_F')];?></span><span class="navspan">&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/index.php/member" style="color:#ffffff;font-family:'方正喵呜体';" >管理套餐</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</span> <span class="navspan"><a href="/index.php/index/login/doLogout" style="color:#ffffff;font-family:'方正喵呜体';" >退出</a></span><?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="/index.php/index/login/checkreg.html" style="color:#ffffff;font-family:'方正喵呜体';" class="pull-right">管理员注册</a>&nbsp;&nbsp;&nbsp;&nbsp;
			          </div>
			        </div>
				</div>
				<br/>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
					<form  role="form" action="<?php echo U('index/index/chaxun');?>" method="post" enctype="multipart/form-data">
						<p class="text-center" style="font-family:'方正喵呜体'; font-size:20px;">通过输入使用需求查询</p>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-phone"></i>
							<input type="text" class="form-control" name="call" placeholder="通话时长（分钟）" style="font-family:'方正喵呜体';">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-globe"></i>
							<input type="text" class="form-control" name="ll" placeholder="使用流量（M）" style="font-family:'方正喵呜体';">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-envelope"></i>
							<input type="text" class="form-control" name="msg" placeholder="短信数量（条）" style="font-family:'方正喵呜体';">
						</div>
						<br/>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-envelope"></i>
							<input type="text" class="form-control" name="address" placeholder="邮箱(若不需要邮件推送服务，可不填)" style="font-family:'方正喵呜体';">
						</div>
						
						<br/>
						<button class="btn myButton" type="submit" style="font-family:'方正喵呜体';">查询</button>
					</form>	
					</div>	
						
				
					<div class="templatemo-other-signin col-md-6">
					<form role="form" action="<?php echo U('index/index/chaxun2');?>" method="post" enctype="multipart/form-data">
							<p class="text-center" style="font-family:'方正喵呜体'; font-size:20px;">上传从官网导出的账单</p>
								<div class="templatemo-other-signin col-md-6">
									<p class="text-center" style="color:#ffffff;font-family:'方正喵呜体';">
										移动官网
										<a href="http://www.10086.cn/" target="blank" class="btn myButton" title="访问">
											<i class="fa fa-arrow-circle-right"></i>
										</a>
									</p>
								</div>
								<div class="templatemo-other-signin col-md-6">
								<p class="text-center" style="color:#ffffff;font-family:'方正喵呜体';">联通官网
								<a href="http://www.10010.com/" target="blank" class="btn myButton" title="访问"><i class="fa fa-arrow-circle-right"></i></a></p>
								</div>
								<div class="templatemo-other-signin col-md-6">
								<p class="text-center" style="color:#ffffff;font-family:'方正喵呜体';">电信官网
								<a href="http://www.189.cn/" target="blank" class="btn myButton" title="访问"><i class="fa fa-arrow-circle-right"></i></a></p>
								</div>
								<div class="templatemo-other-signin col-md-6">
								<p class="text-center" style="color:#ffffff;font-family:'方正喵呜体';">Coming Soon...
								<a href="/index/index/index1" target="blank" class="btn myButton" title="访问"><i class="fa fa-arrow-circle-right"></i></a></p>
								</div>
							&nbsp;&nbsp;&nbsp;
						<div class="uploader white">
							<input type="text" class="filename" readonly/>
							<input type="button"  class="button" value="上传..." style="font-family:'方正喵呜体';"/>
							<input  type="file" name="file_stu" />
						</div>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-envelope"></i>
							<input type="text" class="form-control" name="address" placeholder="邮箱(若不需要邮件推送服务，可不填)" style="font-family:'方正喵呜体';">
						</div>
						<br/>
						<button class="btn myButton" type="submit" style="font-family:'方正喵呜体';">查询</button>
						
					</form>	
					</div> 	
			
</body>
</html>