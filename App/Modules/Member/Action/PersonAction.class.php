<?php 
/**
 * 个人信息类
 * @author  <[l@easycms.cc]>
 */
 Vendor('PHPMailer.class#phpmailer');
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
	        $yys=$_POST["yys"];
			$package=$_POST["package"];
			$money=$_POST["money"];
			$callpackage=$_POST["callpackage"];
			$callmore=$_POST["callmore"];
			$llpackage=$_POST["llpackage"];
			$llmore=$_POST["llmore"];
			$msgpackage=$_POST["msgpackage"];
			$msgmore=$_POST["msgmore"];
			
			$model = M('huafei');
            $model->create();
            $model->add();
			
			//发送邮件
			$user=M('user');
			$data=$user->order('user_id desc')->select();
			
	foreach ($data as $key=>$value){
	
	    	//处理流量包
		   if($data[$key]["ll"]-$llpackage<=0) { $llb="0"; $llbll="0";}
		   else if($data[$key]["ll"]-$llpackage<=100) { $llb="10"; $llbll="100";  }
		   else if($data[$key]["ll"]-$llpackage<=300) { $llb="20"; $llbll="300"; }
		   else if($data[$key]["ll"]-$llpackage<=500) { $llb="30"; $llbll="500"; }
		   else if($data[$key]["ll"]-$llpackage<=1000) { $llb="50"; $llbll="1000"; }
		   else { $llb="100"; $llbll="2500"; }
		   	//处理短信包
		   if($data[$key]["msg"]-$msgpackage<=0) { $dxb="0"; $dxbdx="0";}
		   else if($data[$key]["msg"]-$msgpackage<=60) { $dxb="5"; $dxbdx="60"; }
		   else if($data[$key]["msg"]-$msgpackage<=125) { $dxb="10"; $dxbdx="125"; }
		   else { $dxb="20"; $dxbdx="300"; }
		   //计算话费
           $money2=$money;
           if($data[$key]["call"]>=$callpackage)
           $money2=$money2+($data[$key]["call"]-$callpackage)*$callmore;
           if($data[$key]["ll"]>=($llpackage+$llbll))
           $money2=$money2+($data[$key]["ll"]-$llpackage-$llbll)*$llmore;
           if($data[$key]["msg"]>=$msgpackage+$dxbdx)
           $money2=$money2+($data[$key]["msg"]-$msgpackage-$dxbdx)*$msgmore;
           $money2=$money2+$llb+$dxb;//处理价格over 
		
		$address=$data[$key]["address"];
		$content="尊敬的用户，您好！三网通最优套餐系统在此温馨提示，现有新的套餐上市，以下是该套餐的基本信息：<br><br>运营商&nbsp;&nbsp;&nbsp;&nbsp;套餐名称&nbsp;&nbsp;&nbsp;&nbsp;套餐价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;流量价格  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通话价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;短讯价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
		$content=implode("",array($content,$yys,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$package,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$money,"元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$llpackage,"M|超出部分",
		$llmore,"元/M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$callpackage,"分钟|超出部分",$callmore,"元/分钟&nbsp;&nbsp;&nbsp;&nbsp;",$msgpackage,"条|超出部分",$msgmore,"元/条&nbsp;&nbsp;&nbsp;&nbsp;<br><br>您对套餐的需求为：",$data[$key]["call"],"分钟通话&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["ll"],"M流量&nbsp;&nbsp;&nbsp;&nbsp;",$data[$key]["msg"],"条短信&nbsp;&nbsp;&nbsp;&nbsp;<br>建议您订购",$llb,"元",$llbll,"M流量包,&nbsp;",$dxb,"元",$dxbdx,"条短信包,&nbsp;对应本套餐的最省话费为",$money2,"元。<br>"));
		/*	$llb,"元",$llbll,"M&nbsp;&nbsp;&nbsp;&nbsp;",$dxb,"元",$dxbdx,"条&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$money,"元",
		*/
		$title="新套餐上市温馨提示";
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
        $mail->AddAddress("$address", "Dear User");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
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
		
	}
	$this->success('套餐添加成功');
	}
 
    public function deltc(){//删除队伍
        $tcid=$_GET['id'];
		$tc = M("huafei");
        $tc->where("id=$tcid")->delete();
        $this->success('套餐删除成功');
	}
}