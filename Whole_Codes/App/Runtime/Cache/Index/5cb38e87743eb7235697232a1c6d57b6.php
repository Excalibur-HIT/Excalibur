<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Create Account</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>CreateAccount</title>
	<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
	<link href="/Css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/templatemo_style.css" rel="stylesheet" type="text/css">	
	<link href="/Css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="/Css/bootstrap-social.css" rel="stylesheet" type="text/css">	
	<script src="/Js/jquery-1.7.2.js"></script>
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
			<form class="form-horizontal templatemo-login-form-2" role="form" action="<?php echo U('Login/checkregs');?>" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1 style="font-family:'黑体';">创建管理员账户</h1>
					</div>
				</div>
				<div class="form-group">
			          <div class="col-md-12">
			            <a href="href="<?php echo U('/index/login');?>"" class="pull-left">返回主页</a>
						<a href="/index.php/index/login" class="pull-right">登陆</a>
			          </div>
			        </div>
				<div class="form-inner">		
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">用户名</label>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-user"></i>
				            <input type="text" class="form-control" name="username" placeholder="">
				        </div>
						           		            		            
			          </div>      
					  <div class="col-md-6">
							<label for="password" class="control-label">管理员许可码</label>
							<div class="templatemo-input-icon-container">
				            	<i class="fa fa-info-circle"></i>
								<input type="text" class="form-control" name="code" placeholder="" />
							</div>
						</div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">密码</label>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="password" placeholder="">
						</div>
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">确认密码</label>
			            <div class="templatemo-input-icon-container">
				            <i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="repassword" placeholder="">
						</div>
			          </div>
			        </div>
			    </div>
				<br/>
				<br/>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="创建账户" class="btn myButton">
			          </div>
			        </div>	
					
					
				</div>				    	
		      </form>		      
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>