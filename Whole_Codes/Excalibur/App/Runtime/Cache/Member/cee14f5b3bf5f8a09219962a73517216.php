<?php if (!defined('THINK_PATH')) exit();?><script>
	$(function(){
	$('#avatar').click(function(){
		$.post("__APP__/Member/Person/avatar",{},function(data){
			$('#content').html(data);
			//alert(data);
		});
 		
	});
	$('#person2').click(function(){
		$.post("__APP__/Member/Person/person",{},function(data){
			$('#content').html(data);
			//alert(data);
		});
 		
	});
})
</script>

<div class="col-md-8" >
	<div class="pull-left visible-xs h_div">
	    <a class="h_button" data-toggle="offcanvas"></a>
	</div>
	<div class="uc_right">
		<div class="r_nav_top">
			<ul class="nav nav-tabs r_nav_title">
				<li><a href="javascript:void(0)" id="person2">基本资料</a></li>
				<li class="active"><a>头像修改</a></li>
				<li><a href="javascript:void(0)" id="avatar">安全信息</a></li>
							</ul>
						</div>
						<div class="r_form_e row" id="content">
							<div class="col-md-5">
								<div class="uc_headpic">
									<h4>当前头像</h4>
									<?php if($persons["photo"] == null): ?><img src="__AVATAR__/nophoto.gif"><?php else: ?><img src="__AVATAR__/avatar_<?php echo ($persons["photo"]); ?>"><?php endif; ?>
								</div>
							</div>
							<div class="col-md-4 uc_headup">
								<h4>上传头像</h4>
								<form action="<?php echo U('Upper/index');?>" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id" value="23">
									<input type="file" name="photo">
									<hr>
									<button type="submit" class="btn btn-lg btn-primary left">上传</button>	
								</form>
							</div>
						</div>
					</div>
				</div>