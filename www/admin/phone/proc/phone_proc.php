<?php
	/*error_reporting(E_ALL^E_NOTICE);
	@ini_set("display_errors", 1);*/

	include_once("../../../_init.php");
	include_once $GP -> CLS . 'class.online.php';
	include_once($GP -> CLS . "class.sms.php");
	include_once($GP -> CLS . "class.api.php");
	$C_Sms 	= new Sms;
	$C_Api = new Api;
	$C_Online = new Online();

	//발송히스토리 기억
	function SMS_send_history($args) {
		global $C_Api, $GP, $C_Func;		
	
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


	switch($_POST['mode']){		
		
		//전화 상담 삭제
		case "Phone_DEL":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;				
			
			$args = "";
			$args['tfc_idx'] = $tfc_idx;
			$rst = $C_Online -> Phone_Consel_Del($args);
			
			echo "true";
			exit();
		break;
		
		
			case "PHONE_SMS" :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;		
		
			$args = "";
			$args['tfc_idx'] 	= $_POST['tfc_idx'];
			$rst = $C_Online ->Phone_Detail_Adm($args);
			
			if($rst) {
				extract($rst);			
				
				
				
				
			}
		echo "true";
		exit();
	break;
	
		
		//전화 상담 처리
		case "Phone_MODI":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;				
			
			include $GP -> INC_PATH . "/xssFilter/HTML/Safe.php"; // xss filter을 include
			
			$arg = "";
			$args['tfc_idx'] 				= $tfc_idx;
			$args['tfc_result'] 			= $tfc_result;
			$args['tfc_rt_date'] 			= $tfc_rt_date;	
			$args['tfc_mobile'] 			= $tfc_mobile;	
			$args['tfc_hour'] 				= $tfc_hour;	
			$args['tfc_time'] 				= $tfc_time;		
			$args['dr_idx'] 				= $dr_idx;
			$safe = new HTML_Safe; // xss filter 객체 생성
			$input = base64_decode($tfc_result_con); 
			$output = $safe->parse($input); // html 태그를 필터링 하여 $output에 대입			
			$tfc_result_con = $C_Func->enc_contents($output);			
			$args['tfc_result_con'] = $tfc_result_con;
			
		//	echo $tfc_name;
		//	echo $tfc_rt_date;
		//	exit;
			$rst = $C_Online -> Phone_Consel_Result($args);	
			
			
			$C_Func->put_msg_and_modalclose("처리 되었습니다");		
			exit();
		break;
		
		case "PS_REG":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;	
      
			include $GP -> INC_PATH . "/xssFilter/HTML/Safe.php"; // xss filter을 include
			

			$now_date = date('Y-m-d H:i:s');
            $tfc_mobile =  $mb_mobile;

			$args = '';
			$args['tfc_con']		= $mb_name."님의 간편예약  문의입니다.";
			$args['tfc_name']		= $mb_name;
			$args['tfc_type']		= $tfc_type;
			$args['mb_code']		= $mb_code;
			$args['tfc_gubun']		= $tfc_gubun;
			$args['tfc_date']		= $tfc_date;
			$args['tfc_mobile']		= $mb_mobile;
			$rst1 = $C_Online -> Phone_Chk_List($args);

			if($rst1) {
				$check_date = $rst1['tfc_regdate'];
				$time_go =  $C_Func->datetimediff($check_date, null, "M");

				if($time_go < 30) {
				  $C_Func->put_msg_and_back("상담 요청을 하신지 30분이 지나지 않았습니다. 기다려주시거나 30분후에 재문의 해주세요");
				  exit();
				}
			}
		
			$rst = $C_Online -> Phone_Counsel_Reg($args); 
			$_SESSION['suseridx'] = $rst;
			
			
			if($rst){
				include_once($GP -> CLS."/class.sms.php");
				include_once($GP -> CLS."/class.api.php");
				$C_Sms 	= new Sms;
				$C_Api = new Api;
				
				if(date('H:i:s') > "09:00:00" && date('H:i:s') < "18:00:00"){
					$msg = $mb_name."님의 간편예약이 등록되었습니다.";
					// //조희진
					// $send_mobile = "010-3372-2627";
					// $send_num = "1";
					
					// $args = '';
					// $args['message'] 	= $msg;
					// $args['rphone'] 	= $send_mobile;
					// $args['sphone1'] 	= $GP -> SMS_HP1;
					// $args['sphone2'] 	= $GP -> SMS_HP2;
					// $args['sphone3'] 	= $GP -> SMS_HP3;
					// $args['rdate'] 		= '';
					// $args['rtime'] 		= '';
					// $args['returnurl'] = '';
					// $args['testflag'] = 'N';
					// $args['destination'] = '';
					// $args['repeatFlag'] = '';
					// $args['repeatNum'] = '1';
					// $args['repeatTime'] = '15';
					// $args['send_num'] = $send_num;	
					
					// $rst = $C_Api -> Api_Sms_Send($args);	

					//발송히스토리
					
					$args['result'] = $rst;				
					$args['ssa_idx'] = '9999';	
					
					$year = date("Y");		//년
					$table = "tblSmsSendList_". $year;	 //생성테이블명		
					// $ck_table = $C_Func->TableExists($table, $GP->DB_TABLE);	//테이블 존재여부		
					
					if($ck_table)	{ //테이블이 존재하면 등록
						$args['table'] = $table;
						// $rst = $C_Api -> SMS_Send_Insert($args);
					}else{		
						$args['table'] = $table;
						// $rst = $C_Api -> Creat_Sms_Table($args);
						
						if($rst) {
							// $rst = $C_Api -> SMS_Send_Insert($args);
						}
					}
				}
				
				$msg = "세종스포츠정형외과 예약이 접수 되었습니다. 빠른시간 내에 연락드릴 수 있도록 하겠습니다.";
			 
				$send_mobile = $mb_mobile1 ."-".$mb_mobile2 ."-".$mb_mobile3;
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
				$args['send_num'] = $send_num;	
				
				// $rst = $C_Api -> Api_Sms_Send($args);	

				//발송히스토리
				
				$args['result'] = $rst;				
				$args['ssa_idx'] = '9999';	
				
				$year = date("Y");		//년
				$table = "tblSmsSendList_". $year;	 //생성테이블명		
				// $ck_table = $C_Func->TableExists($table, $GP->DB_TABLE);	//테이블 존재여부		
				
				if($ck_table)	{ //테이블이 존재하면 등록
					$args['table'] = $table;
					// $rst = $C_Api -> SMS_Send_Insert($args);
				}else{		
					$args['table'] = $table;
					// $rst = $C_Api -> Creat_Sms_Table($args);
					
					if($rst) {
						// $rst = $C_Api -> SMS_Send_Insert($args);
					}
				}
			}
			if ($device == 'pc') {
			$C_Func->put_msg_and_go("고객님 간편상담예약이 접수되었으며,담당 직원의 전화를 받으신 후 예약이 완료됩니다.", "/guide/page04-result.php");				
			
			}else{
			$C_Func->put_msg_and_go("고객님 간편상담예약이 접수되었으며,담당 직원의 전화를 받으신 후 예약이 완료됩니다.", "/m/");				

			}
			exit();
			
    break;
	}
?>