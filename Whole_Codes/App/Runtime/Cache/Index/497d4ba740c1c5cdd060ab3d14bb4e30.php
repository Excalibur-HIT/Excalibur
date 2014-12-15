<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php echo R('Siteinfo/info',array('title'),'Widget');?>登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="/Css/bootstrap.css" rel="stylesheet">
	<link href="/Css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/templatemo_style.css" rel="stylesheet" type="text/css">	
	<link href="/Css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/bootstrap-social.css" rel="stylesheet" type="text/css">	
    <!-- Custom styles for this template -->
	<script src="/Js/jquery.js"></script>
   <script>
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '__URL__/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '__URL__/verify/'+timenow);
	}
}

</script>

  </head>

  <body class="templatemo-bg-image-2">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('Login/checkLogin');?>" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1 style="font-family:'黑体';">管理员登陆</h1>
					</div>
				</div>
				<div class="form-group">
			          <div class="col-md-12">
			            <a href="/index.php" class="pull-left" style="font-family:'黑体';" >点此返回主页</a>
						<a href="/index.php/index/login/checkreg.html" class="pull-right" style="font-family:'黑体';" >注册</a>
			          </div>
			        </div>
				<div class="form-inner">		
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label" style="font-family:'黑体';" >用户名</label>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-user"></i>
				            <input type="text" class="form-control" name="username" placeholder="" required>
				        </div>
						           		            		            
			          </div>      
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <label for="password" class="control-label" style="font-family:'黑体';" >密码</label>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="password" placeholder="" required>
						</div>
			          </div>
			        </div>
					<br/>
					<div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="登陆" class="btn myButton" style="font-family:'黑体';" >
				          </div>
				    </div>
					
							
				</div>
			</form>
		</div>
	</div>
</body>
</html>