<?php
/**
* 前台首页
*/
Vendor('PHPMailer.class#phpmailer');
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
	
		Public function index1(){
		$this->display('index1');
	}
	
	
    Public function chaxun(){
	
        $call=$_POST["call"];
        $ll=$_POST["ll"];
        $msg=$_POST["msg"];
		$address=$_POST["address"];
        $taocan=M('huafei');
		
		$model = M('user');
        $model->create();
        $model->add();
		$content="运营商&nbsp;&nbsp;&nbsp;&nbsp;套餐名称&nbsp;&nbsp;&nbsp;&nbsp;套餐价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;流量价格  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通话价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;短讯价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;流量包&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;短信包&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话费<br>";
		$content=implode("",array("尊敬的用户，您好！感谢您使用三网通最优套餐系统！<br>本次查询中，您对套餐的需求为：",$call,"分钟通话&nbsp;&nbsp;&nbsp;&nbsp;",$ll,"M流量&nbsp;&nbsp;&nbsp;&nbsp;",$msg,"条短信。<br>各套餐按对应话费排序如下：<br><br>",$content));
		
		//移动套餐排序
        $data=$taocan->where("yys='移动'")->order('id desc')->select();
        foreach ($data as $key=>$value){
		   //处理流量包
		   if($ll-$data[$key]["llpackage"]<=0) { $llb="0"; $llbll="0";}
		   else if($ll-$data[$key]["llpackage"]<=100) { $llb="10"; $llbll="100";  }
		   else if($ll-$data[$key]["llpackage"]<=300) { $llb="20"; $llbll="300"; }
		   else if($ll-$data[$key]["llpackage"]<=500) { $llb="30"; $llbll="500"; }
		   else if($ll-$data[$key]["llpackage"]<=1000) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if(($msg-$data[$key]["msgpackage"])<=0) { $dxb="0"; $dxbdx="0";}
		   else if($msg-$data[$key]["msgpackage"]<=60) { $dxb="5"; $dxbdx="60"; }
		   else if($msg-$data[$key]["msgpackage"]<=125) { $dxb="10"; $dxbdx="125"; }
		   else { $dxb="20"; $dxbdx="300"; }
		   
           $money=$data[$key]["money"];
           if($call>=$data[$key]["callpackage"])
           $money=$money+($call-$data[$key]["callpackage"])*$data[$key]["callmore"];
           if($ll>=($data[$key]["llpackage"]+$llbll))
           $money=$money+($ll-$data[$key]["llpackage"]-$llbll)*$data[$key]["llmore"];
           if($msg>=$data[$key]["msgpackage"]+$dxbdx)
           $money=$money+($msg-$data[$key]["msgpackage"]-$dxbdx)*$data[$key]["msgmore"];
           $data[$key]["money2"]=$money+$llb+$dxb;//处理价格over
           
		   $data[$key]["llb"]=$llb;
		   $data[$key]["llbll"]=$llbll;
		   $data[$key]["dxb"]=$dxb;
		   $data[$key]["dxbdx"]=$dxbdx;
			
          }
        foreach ($data as $one){//多维数组排序
        $moneys[]=$one['money2'];
        }
        array_multisort($moneys,SORT_ASC,$data);
        $this->assign('class1',$data);

		/*定义邮箱中查询结果的格式*/
		$huan="<br>";
		$content=implode("",array($content,$huan));
		foreach ($data as $key=>$value){
		$content=implode("",array($content,$data[$key]["yys"],"&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["package"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["money"],"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["llpackage"],"M|超出部分",
		$data[$key]["llmore"],"元/M&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["callpackage"],"分钟|超出部分",$data[$key]["callmore"],"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["msgpackage"],"条|超出部分",$data[$key]["msgmore"],"元/条&nbsp;&nbsp;&nbsp;&nbsp;",
		$data[$key]["llb"],"元",$data[$key]["llbll"],"M&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["dxb"],"元",$data[$key]["dxbdx"],"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["money2"],"元",$huan));
		}
		$content=implode("",array($content,$huan));
		
	
		//联通套餐排序
		$data2=$taocan->where("yys='联通'")->order('id desc')->select();
        foreach ($data2 as $key=>$value){		   
		   	//处理流量包
		   if($ll-$data2[$key]["llpackage"]<=0) { $llb="0"; $llbll="0";}
		   else if($ll-$data2[$key]["llpackage"]<=100) { $llb="10"; $llbll="100";  }
		   else if($ll-$data2[$key]["llpackage"]<=300) { $llb="20"; $llbll="300"; }
		   else if($ll-$data2[$key]["llpackage"]<=500) { $llb="30"; $llbll="500"; }
		   else if($ll-$data2[$key]["llpackage"]<=1000) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if(($msg-$data2[$key]["msgpackage"])<=0) { $dxb="0"; $dxbdx="0";}
		   else if($msg-$data2[$key]["msgpackage"]<=60) { $dxb="5"; $dxbdx="60"; }
		   else if($msg-$data2[$key]["msgpackage"]<=125) { $dxb="10"; $dxbdx="125"; }
		   else { $dxb="20"; $dxbdx="300"; }
		   
           $money5=$data2[$key]["money"];
           if($call>=$data2[$key]["callpackage"])
           $money5=$money5+($call-$data2[$key]["callpackage"])*$data2[$key]["callmore"];
           if($ll>=($data2[$key]["llpackage"]+$llbll))
           $money5=$money5+($ll-$data2[$key]["llpackage"]-$llbll)*$data2[$key]["llmore"];
           if($msg>=$data2[$key]["msgpackage"]+$dxbdx)
           $money5=$money5+($msg-$data2[$key]["msgpackage"]-$dxbdx)*$data2[$key]["msgmore"];
           $data2[$key]["money5"]=$money5+$llb+$dxb;//处理价格over
           
		   $data2[$key]["llb"]=$llb;
		   $data2[$key]["llbll"]=$llbll;
		   $data2[$key]["dxb"]=$dxb;
		   $data2[$key]["dxbdx"]=$dxbdx;
          }
        foreach ($data2 as $one){//多维数组排序
        $moneys5[]=$one['money5'];
        }
        array_multisort($moneys5,SORT_ASC,$data2);
        $this->assign('class2',$data2);
		
		
		foreach ($data2 as $key=>$value){
		$content=implode("",array($content,$data2[$key]["yys"],"&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["package"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["money"],"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["llpackage"],"M|超出部分",
		$data2[$key]["llmore"],"元/M&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["callpackage"],"分钟|超出部分",$data2[$key]["callmore"],"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["msgpackage"],"条|超出部分",$data2[$key]["msgmore"],"元/条&nbsp;&nbsp;&nbsp;&nbsp;",
		$data2[$key]["llb"],"元",$data2[$key]["llbll"],"M&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["dxb"],"元",$data2[$key]["dxbdx"],"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["money5"],"元",$huan));
		}
		$content=implode("",array($content,$huan));
		
		//电信套餐排序
		$data3=$taocan->where("yys='电信'")->order('id desc')->select();
        foreach ($data3 as $key=>$value){
        
		   
		   	//处理流量包
		   if($ll-$data3[$key]["llpackage"]<=0) { $llb="0"; $llbll="0";}
		   else if($ll-$data3[$key]["llpackage"]<=90) { $llb="10"; $llbll="100";  }
		   else if($ll-$data3[$key]["llpackage"]<=250) { $llb="20"; $llbll="300"; }
		   else if($ll-$data3[$key]["llpackage"]<=450) { $llb="30"; $llbll="500"; }
		   else if($ll-$data3[$key]["llpackage"]<=900) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if(($msg-$data3[$key]["msgpackage"])<=50) { $dxb="0"; $dxbdx="0";}
		   else if($msg-$data3[$key]["msgpackage"]<=100) { $dxb="5"; $dxbdx="60"; }
		   else if($msg-$data3[$key]["msgpackage"]<=200) { $dxb="10"; $dxbdx="125"; }
		   else { $dxb="20"; $dxbdx="300"; }
		   
           $money3=$data3[$key]["money"];
           if($call>=$data3[$key]["callpackage"])
           $money3=$money3+($call-$data3[$key]["callpackage"])*$data3[$key]["callmore"];
           if($ll>=($data3[$key]["llpackage"]+$llbll))
           $money3=$money3+($ll-$data3[$key]["llpackage"]-$llbll)*$data3[$key]["llmore"];
           if($msg>=$data3[$key]["msgpackage"]+$dxbdx)
           $money3=$money3+($msg-$data3[$key]["msgpackage"]-$dxbdx)*$data3[$key]["msgmore"];
           $data3[$key]["money3"]=$money3+$llb+$dxb;//处理价格over
           
		   $data3[$key]["llb"]=$llb;
		   $data3[$key]["llbll"]=$llbll;
		   $data3[$key]["dxb"]=$dxb;
		   $data3[$key]["dxbdx"]=$dxbdx;
          }
        foreach ($data3 as $one){//多维数组排序
        $moneys3[]=$one['money3'];
        }
        array_multisort($moneys3,SORT_ASC,$data3);
        $this->assign('class3',$data3);
		
		foreach ($data3 as $key=>$value){
		$content=implode("",array($content,$data3[$key]["yys"],"&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["package"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["money"],"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["llpackage"],"M|超出部分",
		$data3[$key]["llmore"],"元/M&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["callpackage"],"分钟|超出部分",$data3[$key]["callmore"],"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["msgpackage"],"条|超出部分",$data3[$key]["msgmore"],"元/条&nbsp;&nbsp;&nbsp;&nbsp;",
		$data3[$key]["llb"],"元",$data3[$key]["llbll"],"M&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["dxb"],"元",$data3[$key]["dxbdx"],"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["money3"],"元",$huan));
		}
		$content=implode("",array($content,$huan));
		
		$title="三网通最优套餐查询结果";
		$mail = new PHPMailer(); //建立邮件发送类
        //$address = "349502161@qq.com";//接收邮件地址
        $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->Host = "smtp.163.com"; // 您的企业邮局域名
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Username = "blessing530@163.com"; // 发送方邮件地址(请填写完整的email地址)
        $mail->Password = "cesar530"; //发送放邮件密码
        $mail->Port=25;
        $mail->From = "blessing530@163.com"; //发送方邮件地址
        $mail->FromName = "HIT-Excalibur 小组";
        $mail->AddAddress("$address", "myname");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
        //$mail->AddReplyTo("", "");
 
        //$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
        //$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
        $mail->CharSet = "utf-8";
        $mail->Subject = "----$title----"; //邮件标题
        $mail->Body = $content; //邮件内容
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略
        
		if($address!="")
		{
			if(!$mail->Send())
			{
				//return $mail->ErrorInfo;
			}
        //return "ok";
		}
		
		
        $this->assign('call',$call);
        $this->assign('ll',$ll);
        $this->assign('msg',$msg);
		$this->assign('llb',$llb);
		$this->assign('dxb',$dxb);
		
		//完成与thinkphp相关的，文件上传类的调用     

				
		
		//显示模板	
		$this->display('less');
	}
	
	
	Public function chaxun2(){
	     
		 $address=$_POST["address"];
		 
		 $content="运营商&nbsp;&nbsp;&nbsp;&nbsp;套餐名称&nbsp;&nbsp;&nbsp;&nbsp;套餐价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;流量价格  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通话价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;短讯价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;流量包&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;短信包&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话费<br>";

		
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
		
		$call=$res[9][1];
        $ll=$res[13][1];
        $msg=$res[15][1];
		$this->assign('call',$call);
		$this->assign('ll',$ll);
		$this->assign('msg',round($msg*10,0));
		$this->assign('base_cost',round($res[6][1],0));
		$this->assign('call_cost',$res[10][1]);
		$this->assign('msg_cost',$res[15][1]);
		$this->assign('base_percent',round($res[6][1]/$res[18][1],3)*100);
		$this->assign('call_percent',round($res[10][1]/$res[18][1],3)*100);
		$this->assign('msg_percent',round($res[14][1]/$res[18][1],3)*100);
		$content=implode("",array("尊敬的用户，您好！感谢您使用三网通最优套餐系统！<br>本次查询中，您的账单情况为：",$call,"分钟通话&nbsp;&nbsp;&nbsp;&nbsp;",$ll,"M流量&nbsp;&nbsp;&nbsp;&nbsp;",$msg*10,"条短信，<br>各套餐按对应话费排序如下：<br><br>",$content));
		 }
		 elseif (strtolower ( $file_type ) == "doc") 
		 {		
		      	$call=235;
				$ll=342.3;
				$msg=103;
				$this->assign('call',235);
				$this->assign('ll',342.3);
				$this->assign('msg',10.3);
				$this->assign('call_cost',20.20);
		        $this->assign('base_cost',18);
				$this->assign('msg_cost',10.3);			
				$this->assign('base_percent',round(18/48.50,3)*100);
				$this->assign('call_percent',round(20.20/48.50,3)*100);
				$this->assign('msg_percent',round(10.3/48.50,3)*100);
				$content=implode("",array("您的账单情况为：",$call,"分钟通话&nbsp;&nbsp;&nbsp;&nbsp;",$ll,"M流量&nbsp;&nbsp;&nbsp;&nbsp;103条短信，<br>各套餐按对应话费排序如下：<br><br>",$content));
		}
		else {
			$this->error('请先上传账单',U('Index/index'));
		}
		
		$model = M('user');
        $model->create();
		$model->call=$call;
		$model->ll=$ll;
		$model->msg=$msg;
        $model->add();
		
		$llb=$_POST["llb"];
		$dxb=$_POST["dxb"];
        $taocan=M('huafei');
				
		//移动套餐排序
        $data=$taocan->where("yys='移动'")->order('id desc')->select();
        foreach ($data as $key=>$value){
		   //处理流量包
		   if($ll-$data[$key]["llpackage"]<=0) { $llb="0"; $llbll="0";}
		   else if($ll-$data[$key]["llpackage"]<=100) { $llb="10"; $llbll="100";  }
		   else if($ll-$data[$key]["llpackage"]<=300) { $llb="20"; $llbll="300"; }
		   else if($ll-$data[$key]["llpackage"]<=500) { $llb="30"; $llbll="500"; }
		   else if($ll-$data[$key]["llpackage"]<=1000) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if(($msg-$data[$key]["msgpackage"])<=0) { $dxb="0"; $dxbdx="0";}
		   else if($msg-$data[$key]["msgpackage"]<=60) { $dxb="5"; $dxbdx="60"; }
		   else if($msg-$data[$key]["msgpackage"]<=125) { $dxb="10"; $dxbdx="125"; }
		   else {$dxb="20"; $dxbdx="300"; }
		   
           $money=$data[$key]["money"];
           if($call>=$data[$key]["callpackage"])
           $money=$money+($call-$data[$key]["callpackage"])*$data[$key]["callmore"];
           if($ll>=($data[$key]["llpackage"]+$llbll))
           $money=$money+($ll-$data[$key]["llpackage"]-$llbll)*$data[$key]["llmore"];
           if($msg>=$data[$key]["msgpackage"]+$dxbdx)
           $money=$money+($msg-$data[$key]["msgpackage"]-$dxbdx)*$data[$key]["msgmore"];
           $data[$key]["money2"]=$money+$llb+$dxb;//处理价格over
           
		   $data[$key]["llb"]=$llb;
		   $data[$key]["llbll"]=$llbll;
		   $data[$key]["dxb"]=$dxb;
		   $data[$key]["dxbdx"]=$dxbdx;
          }
        foreach ($data as $one){//多维数组排序
        $moneys[]=$one['money2'];
        }
        array_multisort($moneys,SORT_ASC,$data);
        $this->assign('class1',$data);
		
		/*定义邮箱中查询结果的格式*/
		$huan="<br>";
		$content=implode("",array($content,$huan));
		foreach ($data as $key=>$value){
		$content=implode("",array($content,$data[$key]["yys"],"&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["package"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["money"],"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["llpackage"],"M|超出部分",
		$data[$key]["llmore"],"元/M&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["callpackage"],"分钟|超出部分",$data[$key]["callmore"],"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["msgpackage"],"条|超出部分",$data[$key]["msgmore"],"元/条&nbsp;&nbsp;&nbsp;&nbsp;",
		$data[$key]["llb"],"元",$data[$key]["llbll"],"M&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["dxb"],"元",$data[$key]["dxbdx"],"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["money2"],"元",$huan));
		}
		$content=implode("",array($content,$huan));
		
		
		//联通套餐排序
		$data2=$taocan->where("yys='联通'")->order('id desc')->select();
        foreach ($data2 as $key=>$value){		   
		   	//处理流量包
		   if($ll-$data2[$key]["llpackage"]<=0) { $llb="0"; $llbll="0";}
		   else if($ll-$data2[$key]["llpackage"]<=100) { $llb="10"; $llbll="100";  }
		   else if($ll-$data2[$key]["llpackage"]<=300) { $llb="20"; $llbll="300"; }
		   else if($ll-$data2[$key]["llpackage"]<=500) { $llb="30"; $llbll="500"; }
		   else if($ll-$data2[$key]["llpackage"]<=1000) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if(($msg-$data2[$key]["msgpackage"])<=0) { $dxb="0"; $dxbdx="0";}
		   else if($msg-$data2[$key]["msgpackage"]<=60) { $dxb="5"; $dxbdx="60"; }
		   else if($msg-$data2[$key]["msgpackage"]<=125) { $dxb="10"; $dxbdx="125"; }
		   else { $dxb="20"; $dxbdx="300"; }
		   
           $money5=$data2[$key]["money"];
           if($call>=$data2[$key]["callpackage"])
           $money5=$money5+($call-$data2[$key]["callpackage"])*$data2[$key]["callmore"];
           if($ll>=($data2[$key]["llpackage"]+$llbll))
           $money5=$money5+($ll-$data2[$key]["llpackage"]-$llbll)*$data2[$key]["llmore"];
           if($msg>=$data2[$key]["msgpackage"]+$dxbdx)
           $money5=$money5+($msg-$data2[$key]["msgpackage"]-$dxbdx)*$data2[$key]["msgmore"];
           $data2[$key]["money5"]=$money5+$llb+$dxb;//处理价格over
           
		   $data2[$key]["llb"]=$llb;
		   $data2[$key]["llbll"]=$llbll;
		   $data2[$key]["dxb"]=$dxb;
		   $data2[$key]["dxbdx"]=$dxbdx;
          }
        foreach ($data2 as $one){//多维数组排序
        $moneys5[]=$one['money5'];
        }
        array_multisort($moneys5,SORT_ASC,$data2);
        $this->assign('class2',$data2);
		
		foreach ($data2 as $key=>$value){
		$content=implode("",array($content,$data2[$key]["yys"],"&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["package"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["money"],"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["llpackage"],"M|超出部分",
		$data2[$key]["llmore"],"元/M&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["callpackage"],"分钟|超出部分",$data2[$key]["callmore"],"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["msgpackage"],"条|超出部分",$data2[$key]["msgmore"],"元/条&nbsp;&nbsp;&nbsp;&nbsp;",
		$data2[$key]["llb"],"元",$data2[$key]["llbll"],"M&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["dxb"],"元",$data2[$key]["dxbdx"],"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data2[$key]["money5"],"元",$huan));
		}
		$content=implode("",array($content,$huan));
		
		//电信套餐排序
		$data3=$taocan->where("yys='电信'")->order('id desc')->select();
        foreach ($data3 as $key=>$value){

		   
		   	//处理流量包
		   if($ll-$data3[$key]["llpackage"]<=0) { $llb="0"; $llbll="0";}
		   else if($ll-$data3[$key]["llpackage"]<=90) { $llb="10"; $llbll="100";  }
		   else if($ll-$data3[$key]["llpackage"]<=250) { $llb="20"; $llbll="300"; }
		   else if($ll-$data3[$key]["llpackage"]<=450) { $llb="30"; $llbll="500"; }
		   else if($ll-$data3[$key]["llpackage"]<=900) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if(($msg-$data3[$key]["msgpackage"])<=50) { $dxb="0"; $dxbdx="0";}
		   else if($msg-$data3[$key]["msgpackage"]<=100) { $dxb="5"; $dxbdx="60"; }
		   else if($msg-$data3[$key]["msgpackage"]<=200) { $dxb="10"; $dxbdx="125"; }
		   else { $dxb="20"; $dxbdx="300"; }
		   
           $money3=$data3[$key]["money"];
           if($call>=$data3[$key]["callpackage"])
           $money3=$money3+($call-$data3[$key]["callpackage"])*$data3[$key]["callmore"];
           if($ll>=($data3[$key]["llpackage"]+$llbll))
           $money3=$money3+($ll-$data3[$key]["llpackage"]-$llbll)*$data3[$key]["llmore"];
           if($msg>=$data3[$key]["msgpackage"]+$dxbdx)
           $money3=$money3+($msg-$data3[$key]["msgpackage"]-$dxbdx)*$data3[$key]["msgmore"];
           $data3[$key]["money3"]=$money3+$llb+$dxb;//处理价格over
           
		   $data3[$key]["llb"]=$llb;
		   $data3[$key]["llbll"]=$llbll;
		   $data3[$key]["dxb"]=$dxb;
		   $data3[$key]["dxbdx"]=$dxbdx;
          }
        foreach ($data3 as $one){//多维数组排序
        $moneys3[]=$one['money3'];
        }
        array_multisort($moneys3,SORT_ASC,$data3);
        $this->assign('class3',$data3);
		
		foreach ($data3 as $key=>$value){
		$content=implode("",array($content,$data3[$key]["yys"],"&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["package"],"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["money"],"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["llpackage"],"M|超出部分",
		$data3[$key]["llmore"],"元/M&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["callpackage"],"分钟|超出部分",$data3[$key]["callmore"],"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["msgpackage"],"条|超出部分",$data3[$key]["msgmore"],"元/条&nbsp;&nbsp;&nbsp;&nbsp;",
		$data3[$key]["llb"],"元",$data3[$key]["llbll"],"M&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["dxb"],"元",$data3[$key]["dxbdx"],"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$data3[$key]["money3"],"元",$huan));
		}
		$content=implode("",array($content,$huan));
		
		$title="三网通最优套餐查询结果";
		$mail = new PHPMailer(); //建立邮件发送类
        //$address = "349502161@qq.com";//接收邮件地址
        $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->Host = "smtp.163.com"; // 您的企业邮局域名
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Username = "blessing530@163.com"; // 发送方邮件地址(请填写完整的email地址)
        $mail->Password = "cesar530"; //发送放邮件密码
        $mail->Port=25;
        $mail->From = "blessing530@163.com"; //发送方邮件地址
        $mail->FromName = "HIT-Excalibur 小组";
        $mail->AddAddress("$address", "myname");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
        //$mail->AddReplyTo("", "");
 
        //$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
        //$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
        $mail->CharSet = "utf-8";
        $mail->Subject = "----$title----"; //邮件标题
        $mail->Body = $content; //邮件内容
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略
        
		if($address!="")
		{
			if(!$mail->Send())
			{
				//return $mail->ErrorInfo;
			}
        //return "ok";
		}
		
		$this->assign('llb',$llb);
		$this->assign('dxb',$dxb);		
				
				
		//显示模板	
		$this->display('less2');
	}
	
}
