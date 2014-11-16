<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<base href="__ROOT__/" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<title>三网通最优套餐系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link href="/Css/style.css" rel="stylesheet" media="screen">
<script src="/Js/jquery.js"></script>
<script src="/Js/bootstrap.min.js"></script>
</head><body id="body" >
<header> 
  <!-- 导航开始 -->
 	<div class="nav">
<h1><a href="/">三网通最优套餐</a></h1>

<?php if($_SESSION[C('USER_AUTH_KEY_F')] == ''): ?><a href="/index.php/index/login/checkreg.html">管理员注册</a> <a href="/index.php/index/login">管理员登陆</a>
<?php else: ?>
<span class="navspan">hello,<?php echo $_SESSION[C('USER_AUTH_KEY_F')];?></span><span class="navspan"><a href="/index.php/member">管理已有套餐</a></span> <span class="navspan"><a href="/index.php/index/login/doLogout">退出登录</a></span><?php endif; ?>

</div>
<div class="logo">
<img src="/img/logo.jpg">
</div>
  <!-- 导航结束 --> 
</header>
<div class="container">


<h2>您总共通话<span style="color:#f40;"><?php echo ($call); ?></span>分钟，使用<span style="color:#f40;">
<?php echo ($ll); ?></span>M流量，发送了<span style="color:#f40;"><?php echo ($msg); ?></span>条短信<br>
根据账单， 语音通话费用为<span style="color:#f40;"><?php echo ($call_cost); ?></span>元，短信费用为
<span style="color:#f40;"><?php echo ($msg_cost); ?></span>元</h2>
<br>
<h2>套餐按价格排序如下：</h2>

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
				<?php if(is_array($class1)): $i = 0; $__LIST__ = $class1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr class="success">
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
							<span style="color:#f40;"><?php echo ($li["money2"]); ?></span>元
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
					
	                </div>
					
					
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