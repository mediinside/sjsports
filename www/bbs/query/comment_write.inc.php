<?php

include $GP -> INC_PATH . "/xssFilter/HTML/Safe.php"; // xss filter을 include


//등록관련 정보 확인
if(!$jb_code || !$jb_idx || !$jbc_name || !$jbc_content)
{
	$C_Func->put_msg_and_back("등록관련정보가 부족합니다. 등록정보를 확인해 주세요.");
	die;
}


//자동구문변수처리
$jbc_step=0;
$jbc_reg_date	= date('Y-m-d H:i:s');
$jbc_mod_date	= date('Y-m-d H:i:s');
$jbc_reg_ip	=	$_SERVER['REMOTE_ADDR'];
$jbc_mb_id = $check_id;


//마지막 jb_depth 입력값
$args = "";
$args['jb_code'] = $jb_code;
$args['jb_idx'] = $jb_idx;
$rst = $C_JHBoard->Board_Comment_Depth_Max($args);

/*
//Depth
if($rst['max_depth'] > 0)
	$jbc_depth=($rst['max_depth'] + 10); //답변 9개
else
	$jbc_depth=10;

//Group
$jbc_group=($jbc_depth / 10);
*/



if ($jb_code == '30') {

	$rst2 = $C_JHBoard->Board_Detail2($args);
	if ($rst2['jb_sms_flag'] == 'Y') {
		//SMS문자발송 
		include_once($GP -> CLS."/class.sms.php");
		include_once($GP -> CLS."/class.api.php");
		$C_Sms 	= new Sms;
		$C_Api = new Api;
		
		$msg = "[세종스포츠정형외과] 고객의 소리 게시판에 답변이 등록되었습니다. 마이페이지에서 확인하실 수 있습니다. http://www.sjsportshospital.com";
		
		$send_mobile = $rst2['jb_sms_phone'];
		$send_num = "1";
		
		$args = '';
		$args['message'] 	= $msg;
		$args['rphone'] 	= $send_mobile;
		$args['sphone1'] 	= $GP -> SMS_HP1;
		$args['sphone2'] 	= $GP -> SMS_HP2;
		$args['sphone3'] 	= $GP -> SMS_HP3;
		$args['rdate'] 		= '';
		$args['rtime'] 		= '';
		$args['returnurl'] = '';
		$args['testflag'] = 'N';
		$args['destination'] = '';
		$args['repeatFlag'] = '';
		$args['repeatNum'] = '1';
		$args['repeatTime'] = '15';
		$args['smsType'] = 'L';
		$args['send_num'] = $send_num;	
		
		$rst = $C_Api -> Api_Sms_Send($args);	
		
		
		//발송히스토리
		
		$args['result'] = $rst;				
		$args['ssa_idx'] = '9999';	
		
		$year = date("Y");		//년
		$table = "tblSmsSendList_". $year;	 //생성테이블명		
		$ck_table = $C_Func->TableExists($table, $GP->DB_TABLE);	//테이블 존재여부		
		
		if($ck_table)	{ //테이블이 존재하면 등록
			$args['table'] = $table;
			$rst = $C_Api -> SMS_Send_Insert($args);
		}else{		
			$args['table'] = $table;
			$rst = $C_Api -> Creat_Sms_Table($args);
			
			if($rst) {
				$rst = $C_Api -> SMS_Send_Insert($args);
			}
		}	
	}
}

//Group
if($rst['max_group'] > 0)
	$jbc_group=($rst['max_group'] + 1); 
else
	$jbc_group = 1;

//Group
$jbc_depth = '';
//$jbc_group = (($jbc_depth * -1) / 10);

$safe = new HTML_Safe; // xss filter 객체 생성
$input = base64_decode($jbc_content); 
$output = $safe->parse($input); // html 태그를 필터링 하여 $output에 대입
//$output = iconv("UTF-8", "EUC-KR", $output);
$output = addslashes($output);
$jbc_content = htmlspecialchars($output);

$jbc_del_flag = 'N';

//메일발송 체크
if(!$jbc_mail_ch) {
	$jbc_mail_ch = 'N';
}
//==============================================================================================
# 자동 DB Insert 구문 생성 Start
//==============================================================================================
$keys="";
$values="";
$rst_board = $C_JHBoard->DESC_BOARD_COMMENT();

for($i=0; $i<count($rst_board); $i++) {
	if($rst_board[$i][Extra]=="auto_increment") continue;
	
	$keys.=$rst_board[$i][Field] . ",";	//자동 Key 생성
	$values.="'" . $$rst_board[$i][Field] . "',"; //자동 Value 생성
}

//끝부분 "," 제거
$keys=rtrim($keys, ",");
$values=rtrim($values, ",");

//리스트테이블에 기본정보 입력
if($keys && $values)
{
	$args = "";
	$args['keys'] = $keys;
	$args['values'] = $values;
	
	
	if($jbc_mail_ch == "Y"){
		include_once($GP -> CLS . "class.mail.php");
		$C_SendMail = new SendMail();	
	
		$sender_email = $GP -> Admin_Email;
		$sender_name = $GP -> Admin_HP_NAME;
		$sender_email = $GP -> Admin_Email;
	//	$sender_name = $GP -> Admin_HP_NAME;
	
	
		$receive_email = $r_jb_email;
		$receive_name = $r_jb_name;
		$receive_email = "june2ne1@nate.com";
		
		$email_subject = $r_jb_title." 에 대한 답변입니다.";
		
		$C_SendMail -> setUseSMTPServer(false);
		$C_SendMail -> setSMTPServer($GP -> SMTP_SERVER, $GP -> SMTP_PORT);
		$C_SendMail -> setSMTPUser($GP -> SMTP_USER);
		$C_SendMail -> setSMTPPasswd($GP -> SMTP_PASS);	
		
		$mailFormDir = @file_get_contents($GP -> HOME."member/pw_email.html");
		$contents = str_replace("@@imsi_title@@","$r_jb_content", $mailFormDir);
		$contents = str_replace("@@imsi_reply@@","$jbc_content", $contents);
						
	
		$C_SendMail -> setSubject($email_subject);
		$C_SendMail -> setMailBody($contents, true);
		$C_SendMail -> setFrom($sender_email, $sender_name);
		$C_SendMail -> addTo($receive_email, $receive_name);
		$sendRst = $C_SendMail->send();
		
		$result_key = $C_JHBoard->BOARD_COMMENT_WRITE($args);	
			
	}else{
		$result_key = $C_JHBoard->BOARD_COMMENT_WRITE($args);	
	}
}


//==================================================================== 자동 DB Insert 구문 생성 End


//리스트 입력이 완료되면 해당 부모글의 코멘트 수 증가
if($result_key)
{
	$args = "";
	$args['jb_code'] = $jb_code;
	$args['jb_idx'] = $jb_idx;
	$result_key2 = $C_JHBoard->BOARD_LIST_COMM_UP($args);	
}


//페이지 이동 관련 변수 설정
$get_par = "${index_page}?jb_code=${jb_code}&jb_idx=${jb_idx}&${search_key}&search_keyword=${search_keyword}&page=${page}";

$C_Func->put_msg_and_go("등록되었습니다.", "${get_par}");
?>