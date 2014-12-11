<?php 
/**
 * 个人信息类
 * @author  <[l@easycms.cc]>
 */
class PersonAction extends CommonAction{
	public function index(){
		if(!$_SESSION[C('USER_AUTH_KEY_F')]){
			$this->error("请先登陆");
		}
        $taocan=M('huafei');
	   $data=$taocan->order('id desc')->select();//移动
        $this->assign('class',$data);
        $this->display('index');
        
	}
	
    public function addtc(){
			$model = M('huafei');
            $model->create();
            $model->add();
			$this->success('套餐添加成功');
	}
 
    public function deltc(){//删除队伍
        $tcid=$_GET['id'];
		$tc = M("huafei");
        $tc->where("id=$tcid")->delete();
        $this->success('套餐删除成功');
	}
}