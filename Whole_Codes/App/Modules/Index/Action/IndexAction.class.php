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
		$llb=$_POST["llb"];
		$dxb=$_POST["dxb"];
        $taocan=M('huafei');
		//移动套餐排序
        $data=$taocan->where("yys='移动'")->order('id desc')->select();
        foreach ($data as $key=>$value){
           $money=$data[$key]["money"];
           if($call>=$data[$key]["callpackage"])
           $money=$money+($call-$data[$key]["callpackage"])*$data[$key]["callmore"];
           if($ll>=($data[$key]["llpackage"]+$llb*10))
           $money=$money+($ll-$data[$key]["llpackage"]-$llb*10)*$data[$key]["llmore"];
           if($msg>=$data[$key]["msgpackage"]+$dxb*15)
           $money=$money+($msg-$data[$key]["msgpackage"]-$dxb*10)*$data[$key]["msgmore"];
           $data[$key]["money2"]=$money+$llb;//处理价格over
          }
        foreach ($data as $one){//多维数组排序
        $moneys[]=$one['money2'];
        }
        array_multisort($moneys,SORT_ASC,$data);
        $this->assign('class1',$data);
		//联通套餐排序
		$data2=$taocan->where("yys='联通'")->order('id desc')->select();
        foreach ($data2 as $key=>$value){
           $money5=$data2[$key]["money"];
           if($call>=$data2[$key]["callpackage"])
           $money5=$money5+($call-$data2[$key]["callpackage"])*$data2[$key]["callmore"];
           if($ll>=($data2[$key]["llpackage"]+$llb*10))
           $money5=$money5+($ll-$data2[$key]["llpackage"]-$llb*10)*$data2[$key]["llmore"];
           if($msg>=$data2[$key]["msgpackage"]+$dxb*15)
           $money5=$money5+($msg-$data2[$key]["msgpackage"]-$dxb*10)*$data2[$key]["msgmore"];
           $data2[$key]["money5"]=$money5+$llb;//处理价格over
          }
        foreach ($data2 as $one){//多维数组排序
        $moneys5[]=$one['money5'];
        }
        array_multisort($moneys5,SORT_ASC,$data2);
        $this->assign('class2',$data2);
		//电信套餐排序
		$data3=$taocan->where("yys='电信'")->order('id desc')->select();
        foreach ($data3 as $key=>$value){
           $money3=$data3[$key]["money"];
           if($call>=$data3[$key]["callpackage"])
           $money3=$money3+($call-$data3[$key]["callpackage"])*$data3[$key]["callmore"];
           if($ll>=($data3[$key]["llpackage"]+$llb*10))
           $money3=$money3+($ll-$data3[$key]["llpackage"]-$llb*10)*$data3[$key]["llmore"];
           if($msg>=$data3[$key]["msgpackage"]+$dxb*15)
           $money3=$money3+($msg-$data3[$key]["msgpackage"]-$dxb*10)*$data3[$key]["msgmore"];
           $data3[$key]["money4"]=$money3+$llb;//处理价格over
          }
        foreach ($data3 as $one){//多维数组排序
        $moneys4[]=$one['money4'];
        }
        array_multisort($moneys4,SORT_ASC,$data3);
        $this->assign('class3',$data3);
		
        $this->assign('call',$call);
        $this->assign('ll',$ll);
        $this->assign('msg',$msg);
		$this->assign('llb',$llb);
		$this->assign('dxb',$dxb);
		
		//完成与thinkphp相关的，文件上传类的调用     
            import('ORG.Util.ExcelToArrary');//导入excelToArray类
		
		$tmp_file = $_FILES ['file_stu'] ['tmp_name'];
		$file_types = explode ( ".", $_FILES ['file_stu'] ['name'] );
		$file_type = $file_types [count ( $file_types ) - 1];
	
		 /*判别是不是.xls文件，判别是不是excel文件,然后再决定要不要继续操作——这样可以保证不传账单也可以查套餐*/
		 if (strtolower ( $file_type ) != "xlsx" && strtolower ( $file_type ) == "xls")              
		 {
			 // $this->error ( '不是Excel文件，重新上传' );
			  /*设置上传路径*/
		 $savePath = C('UPLOAD_DIR');
	
		 /*以时间来命名上传的文件*/
		 $str = date ( 'Ymdhis' ); 
		 $file_name = $str . "." . $file_type;
		 
		 /*是否上传成功*/
		 if (! copy ( $tmp_file, $savePath . $file_name )) 
		  {
			  $this->error ( '上传失败' );
		  }
		$ExcelToArrary=new ExcelToArrary();//实例化
		$res=$ExcelToArrary->read(C('UPLOAD_DIR').$file_name,"UTF-8",$file_type);//传参,判断office2007还是office2003
        //dump($res);//显示结果 
		
		$this->assign('call_cost',$res[9][1]);
		$this->assign('msg_cost',$res[13][1]);
		 }else
		 {		$this->assign('call_cost',0);
		        $this->assign('msg_cost',0);}
				
		
		//显示模板	
		$this->display('less');
	}
	
	
	Public function chaxun2(){
	
        $call=$_POST["call"];
        $ll=$_POST["ll"];
        $msg=$_POST["msg"];
		$llb=$_POST["llb"];
		$dxb=$_POST["dxb"];
        $taocan=M('huafei');
        $data=$taocan->order('id desc')->select();
        foreach ($data as $key=>$value){
           $money=$data[$key]["money"];
           if($call>=$data[$key]["callpackage"])
           $money=$money+($call-$data[$key]["callpackage"])*$data[$key]["callmore"];
           if($ll>=($data[$key]["llpackage"]+$llb*10))
           $money=$money+($ll-$data[$key]["llpackage"]-$llb*10)*$data[$key]["llmore"];
           if($msg>=$data[$key]["msgpackage"]+$dxb*15)
           $money=$money+($msg-$data[$key]["msgpackage"]-$dxb*10)*$data[$key]["msgmore"];
           $data[$key]["money2"]=$money+$llb;//处理价格over
          }
        foreach ($data as $one){//多维数组排序
        $moneys[]=$one['money2'];
        }
        array_multisort($moneys,SORT_ASC,$data);
        $this->assign('class1',$data);
        $this->assign('call',$call);
        $this->assign('ll',$ll);
        $this->assign('msg',$msg);
		$this->assign('llb',$llb);
		$this->assign('dxb',$dxb);
		//完成与thinkphp相关的，文件上传类的调用     
            import('ORG.Util.ExcelToArrary');//导入excelToArray类
		
		$tmp_file = $_FILES ['file_stu'] ['tmp_name'];
		$file_types = explode ( ".", $_FILES ['file_stu'] ['name'] );
		$file_type = $file_types [count ( $file_types ) - 1];
	
		 /*判别是不是.xls文件，判别是不是excel文件,然后再决定要不要继续操作——这样可以保证不传账单也可以查套餐*/
		 if (strtolower ( $file_type ) != "xlsx" && strtolower ( $file_type ) == "xls")              
		 {
			 // $this->error ( '不是Excel文件，重新上传' );
			  /*设置上传路径*/ 
		 $savePath = C('UPLOAD_DIR');
	
		 /*以时间来命名上传的文件*/
		 $str = date ( 'Ymdhis' ); 
		 $file_name = $str . "." . $file_type;
		 
		 /*是否上传成功*/
		 if (! copy ( $tmp_file, $savePath . $file_name )) 
		  {
			  $this->error ( '上传失败' );
		  }
		$ExcelToArrary=new ExcelToArrary();//实例化
		$res=$ExcelToArrary->read(C('UPLOAD_DIR').$file_name,"UTF-8",$file_type);//传参,判断office2007还是office2003
        //dump($res);//显示结果 
		
		$this->assign('call_cost',$res[9][1]);
		$this->assign('msg_cost',$res[13][1]);
		 }
		 else
		 {		$this->assign('call_cost',9.32);
		        $this->assign('msg_cost',9.32); }

		//显示模板	
		$this->display('less2');
	}
	
}
