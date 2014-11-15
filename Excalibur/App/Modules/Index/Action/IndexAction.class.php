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
	
	  function upload(){  
        //完成与thinkphp相关的，文件上传类的调用     
        import('@.Org.UploadFile');//将上传类UploadFile.class.php拷到Lib/Org文件夹下  
        $upload=new UploadFile();  
        $upload->maxSize='1000000';//默认为-1，不限制上传大小  
        $upload->savePath='./Uploads/';//保存路径建议与主文件平级目录或者平级目录的子目录来保存     
        $upload->saveRule=uniqid;//上传文件的文件名保存规则  
        $upload->uploadReplace=true;//如果存在同名文件是否进行覆盖  
        $upload->allowExts=array('jpg','jpeg','png','gif','xls','doc','txt');//准许上传的文件类型  
       // $upload->allowTypes=array('image/png','image/jpg','image/jpeg','image/gif');//检测mime类型  
       // $upload->thumb=true;//是否开启图片文件缩略图  
       // $upload->thumbMaxWidth='300,500';  
       // $upload->thumbMaxHeight='200,400';  
       // $upload->thumbPrefix='s_,m_';//缩略图文件前缀  b 
      //  $upload->thumbRemoveOrigin=1;//如果生成缩略图，是否删除原图  
         
        if($upload->upload()){  
            //$info=$upload->getUploadFileInfo();  
            //return $info;  
			$this->success('上传成功'); 
        }else{  
            $this->error($upload->getErrorMsg());//专门用来获取上传的错误信息的     
        }     
    }  
	
}
