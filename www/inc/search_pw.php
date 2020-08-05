<?php
	include_once  '../_init.php';
	include_once $GP -> CLS . 'class.member.php';
	$C_Member = new Member();
	
	
	$refer = $_SERVER['HTTP_REFERER'];
	$server = $_SERVER['HTTP_HOST'];	

	if(!ereg($server, $refer)){
		exit();
	}	
	
	$mb_name = $_POST['mb_name'];	
	$mb_email = str_replace("@","",$_POST['mb_email']);	
	
	$args = array();		
	$args['mb_name'] = $mb_name;
	$args['mb_email'] = $mb_email;
	$rst = $C_Member->membersFindInfo($args);

	if(!$rst['mb_code']){
		//	$C_Func->put_msg_and_go("존재하지 않는 아이디 입니다.", "/member/idpw.html");
		echo "존재하지 않는 아이디 입니다.";
	}else{
		echo $rst['mb_email'] ."로<br /> 임시비밀번호를 발급하였습니다. <br />이메일에 따라 일부는 스팸편지함으로 <br /> 수신되오니 참고 바랍니다.";
	}
	
	//sender_email, sender_name, receive_email, receive_name, email_subject , contents
	$args = '';
	$args['sender_email'] = $GP -> Admin_Email;
	$args['sender_name'] = $GP -> Admin_HP_NAME;
	$args['receive_email'] = $rst['mb_email'];
	$args['receive_name'] = $rst['mb_name'];
	$args['email_subject'] = '[세종스포츠정형외과] 홈페이지 임시 비밀번호 안내';
	$args['new_pw'] = $rst['new_pw'];

	$send_rst = $C_Member->sendMail($args);
	
	
	//echo $rst['new_pw'] ."<br>";
	//echo md5($rst['new_pw']) ."<br>";
//	echo $rst['mb_email'] ."로<br /> 임시 비밀번호를 발급하였습니다.<br /> 이메일에 따라 일부는 스팸편지함으로 <br /> 수신되오니 참고 바랍니다.";
	//$send_msg = $rst['mb_email'] ."로 임시비밀번호를 발급하였습니다";
	//$C_Func->put_msg_and_go($send_msg , "/member/login.html");
	
?>
