<?php
/**
* 前台首页
*/
class IndexAction extends CommonAction
{ 
	Public function index(){
        $taocan=M('huafei');
        $class1=$taocan->where("yys='移动'")->order('id desc')->select();//移动
        $class2=$taocan->where("yys='联通'")->order('id desc')->select();//联通
        $class3=$taocan->where("yys='电信'")->order('id desc')->select();//电信
        $this->assign('class1',$class1);
        $this->assign('class2',$class2);
        $this->assign('class3',$class3);
		//显示模板	
		$this->display('index');
	}
    Public function chaxun(){
        $call=$_POST["call"];
        $ll=$_POST["ll"];
        $msg=$_POST["msg"];
        $taocan=M('huafei');
        $data=$taocan->order('id desc')->select();
        foreach ($data as $key=>$value){
           $money=$data[$key]["money"];
           if($call>=$data[$key]["callpackage"])
           $money=$money+($call-$data[$key]["callpackage"])*$data[$key]["callmore"];
           if($ll>=$data[$key]["llpackage"])
           $money=$money+($ll-$data[$key]["llpackage"])*$data[$key]["llmore"];
           if($msg>=$data[$key]["msgpackage"])
           $money=$money+($msg-$data[$key]["msgpackage"])*$data[$key]["msgmore"];
           $data[$key]["money2"]=$money;//处理价格over
          }
        foreach ($data as $one){//多维数组排序
        $moneys[]=$one['money2'];
        }
        array_multisort($moneys,SORT_ASC,$data);
        $this->assign('class1',$data);
        $this->assign('call',$call);
        $this->assign('ll',$ll);
        $this->assign('msg',$msg);
		//显示模板	
		$this->display('less');
	}
}
