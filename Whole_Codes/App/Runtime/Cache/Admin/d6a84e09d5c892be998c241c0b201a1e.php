<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($currentPage)?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--姣忛〉鏄剧ず澶氬皯鏉�-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>鎼滅储</b> &nbsp; 鍏抽敭瀛楋細<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [鏍囬]
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">妫�绱�</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="__URL__/add" target="dialog"  width="800" height="600"  rel="user_msg" title="閫夋嫨鏂囩珷鍒嗙被"><span>娣诲姞</span></a></li>
			<li><a  target="selectedTodo" target="dialog" rel="ids[]" href="__URL__/rubAll" class="delete" ><span>鎵归噺鏀惧叆鍥炴敹绔�</span></a></li>
			<li><a class="edit" href="__URL__/edit/article_id/{item_id}"   width="800" height="600" target="dialog"><span>淇敼</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="瀹炶瀵煎嚭杩欎簺璁板綍鍚�?"><span>瀵煎嚭EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl"></th>
				<th width="30">鏍囬</th>
				<th width="30">鍒嗙被</th>
				<th width="30">鏂囩珷绫诲瀷</th>
				<th width="40">鍏抽敭璇�</th>
				<th width="40">鍙戝竷鏃堕棿</th>
				<th width="50">鏄惁棣栭〉鎺ㄨ崘</th>
				<th width="50">鏄惁棣栭〉骞荤伅</th>
				<th width="50">鏄惁鍏佽璇勮</th>
				<th width="40">鎿嶄綔</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["article_id"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['article_id']); ?>" type="checkbox">:<?php echo ($vo["article_id"]); ?></td>
					<td><?php echo ($vo["title"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php if($vo["modelid"] == 0): ?>鏂囩珷绫诲瀷<?php else: ?>鍥剧墖绫诲瀷<?php endif; ?></td>
					<td><?php echo ($vo["keyword"]); ?></td>
					<td><?php echo (date("Y-m-d H:m:s",$vo["pubtime"])); ?></td>
					<td><?php echo (isok($vo["ispush"])); ?></td>
					<td><?php echo (isok($vo["isslides"])); ?></td>
					<td><?php echo (isok($vo["iscommend"])); ?></td>
					<td><?php echo (rubbish($vo["islock"],$vo['article_id'])); ?>
					</td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>鏄剧ず</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if($numPerPage == 10 ): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15 ): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20 ): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25 ): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30 ): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>鍏�<?php echo ($totalCount); ?>鏉�</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>