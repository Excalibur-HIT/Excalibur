<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Create Account</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>EasyCMS内容管理系统</title>
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
						<h1>Create Manager</h1>
					</div>
				</div>
				<br/>
				<div class="form-inner">		
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">Username</label>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-user"></i>
				            <input type="text" class="form-control" name="username" placeholder="">
				        </div>
						           		            		            
			          </div>      
					  <div class="col-md-6">
							<label for="password" class="control-label">Identifying Code</label>
							<div class="templatemo-input-icon-container">
				            	<i class="fa fa-info-circle"></i>
								<input type="text" class="form-control" name="code" placeholder="" />
							</div>
						</div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">Password</label>
						<div class="templatemo-input-icon-container">
				            <i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="password" placeholder="">
						</div>
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">Confirm Password</label>
			            <div class="templatemo-input-icon-container">
				            <i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="repassword" placeholder="">
						</div>
			          </div>
			        </div>
					<!-- 验证码部分的保留
					<div class="form-group">
			          <div class="col-md-6">
						<label for="password" class="control-label">Identifying Code</label>
			            <input type="text" class="form-control" name="code" placeholder="" />
						<img id="verifyImg" SRC="<?php echo U('Login/verify');?>" onClick="fleshVerify(this)" border="0" alt="点击刷新验证码" style="cursor:pointer;width:80px;vertical-align:top;" align="absmiddle">
			          </div>
			        </div>
					-->
			    </div>
				<br/>
				<br/>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="Create account" class="btn btn-info">
			          </div>
			        </div>	
					<div class="form-group">
			          <div class="col-md-12">
			            <a href="href="<?php echo U('/index/login');?>"" class="pull-left">Home</a>
						<a href="/index.php/index/login" class="pull-right">Login</a>
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