<?
CLASS Member extends Dbconn 
{	
	private $DB;
	private $GP;	
	function __construct($DB = array()) {
		global $C_DB, $GP;
		$this -> DB = (!empty($DB))? $DB : $C_DB;
		$this -> GP = $GP;
	}

	// desc	 : 회원 정보 삭제
	// auth  : JH 2013-09-13
	// param
	function Mem_Info_Del_Real_Sel($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			delete from tblMember where mb_code in ($arr_idx)
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}

	// desc	 : 회원 정보 삭제
	// auth  : JH 2013-09-13
	// param
	function Mem_Info_Del_Real($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			delete from tblMember where mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}

	// desc : 휴먼메일발송 업데이트
	// auth  : 
	// param
	function HUMAIL_SEND_UPDATE($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			update
				tblMember
			set
				mb_dormant_type = 'Y'
				,mb_dormant_date = NOW()
			where
				mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;	
	}

	// desc	 : 
	// auth  : 
	// param
	function HuMail_info_Sel($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select * from tblMember where mb_code in ($arr_idx)
		";		
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;	
	}

	// desc	 : 
	// auth  : 
	// param
	function HuMail_info_All($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select * from tblMember where mb_del_flag='N' and mb_status='M' and mb_level='3' and mb_email != '' and mb_dormant_date='0000-00-00' and mb_lastlogin_date < '$ck_year' and mb_register_date < '$ck_year'
		";
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;	
	}

	// desc	 : 회원 리스트
	// auth  : JH 2013-09-16 월요일
	// param
	function Mem_Hu_End_List ($args = '') {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		
		$addQry = " 1=1 and mb_del_flag='N' and mb_status='M' and mb_level='3' and mb_email != '' and mb_dormant_date != '0000-00-00'  ";		

		if (($s_date && $e_date) && ($s_date < $e_date)) {
			if ($addQry)
			$addQry .= " AND ";
			$addQry .= " mb_register_date BETWEEN '$s_date 00:00:00' AND '$e_date 00:00:00'";
		}		
		
		if ($search_key && $search_content) {
			if (!empty($addQry)) {
				$addQry .= " AND ";
				$addQry .= " $search_key LIKE ('%$search_content%')";
			}
		}

		$args['show_row'] = $show_row;
		$args['show_page'] = 5;
		$args['q_idx'] = "mb_code";
		$args['q_col'] = "*";
		$args['q_table'] = " tblMember";
		$args['q_where'] = $addQry;
		$args['q_order'] = "mb_register_date desc";
		$args['q_group'] = "";

		$args['tail'] = "s_date=" . $s_date . "&e_date=" . $e_date ."&serach_key=" . $search_key . "&search_content=" . $search_cotent;
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}

	// desc	 : 회원 리스트
	// auth  : JH 2013-09-16 월요일
	// param
	function Mem_Hu_List ($args = '') {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		
		$addQry = " 1=1 and mb_del_flag='N' and mb_status='M' and mb_level='3' and mb_email != '' and mb_dormant_date='0000-00-00'  ";

		if (($s_date && $e_date) && ($s_date < $e_date)) {
			if ($addQry)
			$addQry .= " AND ";
			$addQry .= " mb_register_date BETWEEN '$s_date 00:00:00' AND '$e_date 00:00:00'";
		}
		
		if($ck_year != '') {
			if ($addQry)
			$addQry .= " AND ";
			$addQry .= " mb_lastlogin_date < '$ck_year' and mb_register_date < '$ck_year'  ";
		}
		
		
		if ($search_key && $search_content) {
			if (!empty($addQry)) {
				$addQry .= " AND ";
				$addQry .= " $search_key LIKE ('%$search_content%')";
			}
		}

		$args['show_row'] = $show_row;
		$args['show_page'] = 5;
		$args['q_idx'] = "mb_code";
		$args['q_col'] = "*";
		$args['q_table'] = " tblMember";
		$args['q_where'] = $addQry;
		$args['q_order'] = "mb_register_date desc";
		$args['q_group'] = "";

		$args['tail'] = "s_date=" . $s_date . "&e_date=" . $e_date ."&serach_key=" . $search_key . "&search_content=" . $search_cotent;
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}

	function Mem_Admin_Pwd_CK($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			update
				tblMember
			set
				mb_password = '$mb_password'
			where
				mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}

	// desc : 선택회원 리스트
	// auth  : 
	// param
	function Mem_Group_All($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$addQry = "";
		if($mb_level != 9) {
			$addQry = " and mb_level = '$mb_level' ";
		}

		$qry = "
			select mb_email,mb_name from tblMember where mb_status = 'M' $addQry
		";
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;	
	}


	// desc : 선택회원 리스트
	// auth  : 
	// param
	function Mem_info_All($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select * from tblMember where mb_code in ($arr_idx)
		";
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;	
	}
	
	// desc	 : 회원 비번 암호화
	// auth  : JH 2013-09-16 월요일
	// param
	function old_sql_password($value)
	{
		$qry = " select old_password('$value') as pass ";		
		$rst =  $this -> DB -> execSqlOneRow($qry);
		return $rst[pass];
	}
	
	function sql_password($value)
	{
		$qry = " select password('$value') as pass ";		
		$rst =  $this -> DB -> execSqlOneRow($qry);
		return $rst[pass];
	}
	
	// desc	 : 
	// auth  : 
	// param :
	function NICK_DobuleCheck($args = '') { 
	
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				count(*) as cnt
			FROM
				tblMember
			where
				mb_nick='$mb_nick'
				and mb_del_flag ='N'
		";


		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;	
	}
	
	// desc	 : 탈퇴회원 리스트
	// auth  : JH 2013-09-16 월요일
	// param
	function Mem_Out_List ($args = '') {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		
		$addQry = " 1=1 and mb_del_flag='N' and mb_status='W' ";

		if (($s_date && $e_date) && ($s_date < $e_date)) {
			if ($addQry)
			$addQry .= " AND ";

			$addQry .= " mb_withdrawal_date BETWEEN '$s_date 00:00:00' AND '$e_date 00:00:00'";
		}

		
		if ($search_key && $search_content) {
			if (!empty($addQry)) {
				$addQry .= " AND ";
				$addQry .= " $search_key LIKE ('%$search_content%')";
			}
		}

		$args['show_row'] = $show_row;
		$args['show_page'] = 5;
		$args['q_idx'] = "mb_code";
		$args['q_col'] = "*";
		$args['q_table'] = " tblMember";
		$args['q_where'] = $addQry;
		$args['q_order'] = "mb_withdrawal_date desc";
		$args['q_group'] = "";

		$args['tail'] = "s_date=" . $s_date . "&e_date=" . $e_date ."&serach_key=" . $search_key . "&search_content=" . $search_cotent;
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}
	
	
	
	// desc	 : 회원 탈퇴
	// auth  : JH 2013-09-13
	// param
	function Mem_Withdrawal($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			update
				tblMember
			set
				mb_withdrawal = '$mb_withdrawal',
				mb_withdrawal_reason = '$mb_withdrawal_reason',
				mb_status = 'W',
				mb_withdrawal_date = NOW()
			where
				mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	
	// desc	 : 회원 비밀번호 변경
	// auth  : JH 2013-09-13
	// param
	function Mem_Pass_Modify($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			update tblMember set mb_password = '$mb_password' where mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	
	// desc	 : 회원 패스워드 체크
	// auth  : JH 2013-09-13
	// param
	function Mem_Pass_Check($args = '') {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT count(*) as cnt FROM tblMember where mb_code='$mb_code' and mb_password = '$mb_password' and mb_del_flag ='N'
		";
		
		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;
	}
	
	
	// desc	 : 회원 정보 수정
	// auth  : JH 2013-09-13
	// param
	function Mem_Info_Modify($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$addQry = "";

		if($mb_level != '') {
			$addQry  = " mb_level = '$mb_level', ";
		}

		$qry = "
			update
				tblMember
			set
				mb_email = '$mb_email',
				mb_address2 = '$mb_address2',
				mb_address1 = '$mb_address1',
				mb_load_address1 = '$mb_load_address1',
				mb_load_address2 = '$mb_load_address2',	
				mb_zip_code = '$mb_zip_code',
				mb_phone = '$mb_phone',
				mb_mobile = '$mb_mobile',
				mb_email_flag = '$mb_email_flag',
				mb_sms = '$mb_sms',				
				$addQry
				mb_address1 = '$mb_address1'
			where
				mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	
	
	function Mem_Info_Modify2($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$addQry = "";

		if($mb_level != '') {
			$addQry  = " mb_level = '$mb_level', ";
		}

		$qry = "
			update
				tblMember
			set
				mb_name = '$mb_name',
				mb_email = '$mb_email',
				mb_mobile = '$mb_mobile',
				mb_email_flag = '$mb_email_flag',
				mb_sms = '$mb_sms',				
				$addQry
				mb_address1 = '$mb_address1'
			where
				mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	
	// desc	 : 회원 정보
	// auth  : JH 2013-09-13
	// param
	function Mem_Info($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select * from tblMember where mb_code = '$mb_code'
		";	
		$rst =  $this -> DB -> execSqlOneRow($qry);
		return $rst;

	}
	
	// desc	 : 회원 정보 삭제
	// auth  : JH 2013-09-13
	// param
	function Mem_Info_Del($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			update tblMember set mb_del_flag = 'Y' where mb_code = '$mb_code'
		";
		$rst =  $this -> DB -> execSqlUpdate($qry);
		return $rst;
	}
	
	
	
	// desc	 : 회원 리스트
	// auth  : JH 2013-09-16 월요일
	// param
	function Mem_List ($args = '') {
		global $C_Func;
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		global $C_ListClass;

		$tail = "";
		
		$addQry[] = " 1=1 and mb_del_flag='N' and mb_status='M' ";

		if (($s_date && $e_date) && ($s_date < $e_date)) {
			if ($addQry) $addQry[] = " mb_register_date BETWEEN '$s_date 00:00:00' AND '$e_date 23:59:59'";
		}

		if ($search_key && $search_content) {
				$addQry[] = " $search_key LIKE ('%$search_content%')";
		}
		
		if ($mb_name) $addQry[] = "mb_name LIKE ('%$mb_name%')";
		
		
		if($addQry) $addQry = implode(" AND ",$addQry);
		

		$args['show_row'] = $show_row;
		$args['show_page'] = 5;
		$args['q_idx'] = "mb_code";
		$args['q_col'] = "*";
		$args['q_table'] = " tblMember";
		$args['q_where'] = $addQry;
		$args['q_order'] = "mb_register_date desc";
		$args['q_group'] = "";

		$args['tail'] = "s_date=" . $s_date . "&e_date=" . $e_date ."&serach_key=" . $search_key . "&search_content=" . $search_cotent;
		$args['q_see'] = "";
		return $C_ListClass -> listInfo($args);
	}
	
	
	// desc	 : 회원 비밀번호 찾기 발송
	// auth  : JH 2012-10-10 수요일
	// param :
	function sendMail($args)
	{
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$sendRst = 0;

		if ($sender_email && $sender_name && $receive_email && $receive_name && $email_subject) {			
			
			include_once $this -> GP -> CLS . 'class.mail.php';
			$C_SendMail = new SendMail();
			
			$C_SendMail -> setUseSMTPServer(false);
			$C_SendMail -> setSMTPServer($this->GP -> SMTP_IP, $this->GP -> SMTP_PORT);
			$C_SendMail -> setSMTPUser($this->GP -> SMTP_USER);
			$C_SendMail -> setSMTPPasswd($this->GP -> SMTP_PASS);		
	
			$mailFormDir = @file_get_contents($this->GP -> HOME."member/pw_email.html");
			$contents = str_replace("@@imsi_pwTxt@@","임시 비밀번호 : $new_pw", $mailFormDir);
		
			$C_SendMail -> setSubject($email_subject);
			$C_SendMail -> setMailBody($contents, true);
			$C_SendMail -> setFrom($sender_email, $sender_name);
			$C_SendMail -> addTo($receive_email, $receive_name);

			$sendRst = $C_SendMail->send();
		//	echo $sendRst;
		//	exit;
			$C_SendMail = '';
		}
		return $sendRst;
	}


	// desc	 : 가맹점 로그인 횟수 저장하기
	// auth  : JH 2012-10-10 수요일
	// param :
	function membersFindInfo ($args) {
		include_once $GP -> CLS . 'class.password.php';
		$C_PWD   = new Password();
		
			
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		//탈퇴 회원은 제외
		$qry = "Select mb_code, mb_email, mb_name,mb_id From tblMember Where mb_name = '$mb_name' and replace(mb_email,'@','') = '$mb_email' And mb_del_flag = 'N' and mb_status='M' ";
		$rstMem = $this -> DB ->execSqlOneRow($qry);
		$rst = "";
		if($rstMem){
			$rst['mb_code'] = $rstMem['mb_code'];
			$rst['mb_name'] = $rstMem['mb_name'];
			$rst['mb_email'] = $rstMem['mb_email'];
			$mb_id = $rstMem['mb_id'];
			$rst['mb_id'] =$mb_id;
			$new_pw = substr(md5(uniqid()),0,8);
			$new_pw_md5 = $C_PWD->createHash($new_pw,'pbkdf2');
			$qry = "UPDATE tblMember SET mb_password = '$new_pw_md5' WHERE mb_id = '$mb_id' And mb_del_flag = 'N' and mb_status='M' ";
			$this -> DB ->execSqlUpdate($qry);
			$rst['new_pw'] = $new_pw;
		} else {
			$rst = "";
		}
		
		return $rst;
	}


	// desc	 : 회원 이메일 찾기
	// auth  : 
	// param :
	function Find_Email_Check($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				mb_id
			FROM
				tblMember
			where
				mb_name='$mb_name'
				and mb_email = '$mb_email'
		";

		$rst = $this -> DB -> execSqlList($qry);
		return $rst;	
		
	}
	
	
	// desc	 : 회원 이메일 찾기
	// auth  : 
	// param :
	function Find_ID_Check($args) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT
				mb_id
			FROM
				tblMember
			where
				mb_name='$mb_name'
				and replace(mb_email,'@','') = '$mb_email'
		";

		$rst = $this -> DB -> execSqlList($qry);
		return $rst;	
		
	}
	
	// desc	 : 
	// auth  : 
	// param :
	function emailDobuleCheck($args = '') { 
	
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT count(*) as cnt FROM tblMember where mb_email='$mb_email'				
		";				
		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;	
	}	
	
	function certlDobuleCheck($args = '') { 
	
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT count(*) as cnt FROM tblMember where mb_name='$mb_name' and replace(mb_mobile,'-','') = '$mb_mobile'
		";				
		$rst = $this -> DB -> execSqlOneRow($qry);
		//echo $qry;
		return $rst;	
	}	
	

	// desc	 : 
	// auth  : 
	// param :
	function ID_DobuleCheck($args = '') { 
	
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;

		$qry = "
			SELECT count(*) as cnt FROM tblMember where mb_id='$mb_id' and mb_del_flag ='N'
		";
		$rst = $this -> DB -> execSqlOneRow($qry);
		return $rst;	
	}	
	
	// desc	 : 회원가입
	// auth  : 
	// param :
	function Mem_Join($args = '') { 	
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			INSERT INTO
					tblMember
					(
					mb_code,
					mb_id,
					mb_name,
					mb_email,
					mb_phone,
					mb_mobile,
					mb_sms,
					mb_birthday,
					mb_zip_code,
					mb_address1,
					mb_address2,
					mb_load_address1,
					mb_load_address2,
					mb_sex,
					mb_password,
					mb_level,
					mb_status,
					mb_gubun,
					mb_del_flag,
					mb_email_flag,
					mb_cert_yn,
					mb_register_date
					)
					VALUES
					(
					''
					, '$mb_id'
					, '$mb_name'
					, '$mb_email'
					, '$mb_phone'
					, '$mb_mobile'
					, '$mb_sms'
					, '$mb_birthday'
					, '$mb_zip_code'
					, '$mb_address1'
					, '$mb_address2'
					, '$mb_load_address1'
					, '$mb_load_address2'
					, '$mb_sex'
					, '$mb_password'
					, '3'
					, 'M'
					, '$mb_gubun'
					, 'N'
					, '$mb_email_flag'	
					, '$mb_cert_yn'							
					, NOW()
		
					)";
		// echo $qry;
		$rst = $this -> DB -> execSqlInsert($qry);
		return $rst;
	}
	
	function Mem_Join_Cert($args = '') { 	
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			INSERT INTO
					tblMemberCert
					(
					mb_id,
					certNum,
					date,
					CI,
					phoneNo,
					phoneCorp,
					birthDay,
					gender,
					nation,
					name,
					result,
					certMet,
					ip,
					M_name,
					M_birthDay,
					M_Gender,
					M_nation,
					plusInfo,
					DI,
					tmc_regdate
					)
					VALUES
					(
					'$mb_id'
					,'$certNum'
					, '$date'
					, '$CI'
					, '$phoneNo'
					, '$phoneCorp'
					, '$birthDay'
					, '$gender'
					, '$nation'
					, '$name'
					, '$result'
					, '$certMet'
					, '$ip'
					, '$M_name'
					, '$M_birthDay'
					, '$M_Gender'
					, '$M_nation'
					, '$plusInfo'
					, '$DI'					
					, NOW()
		
					)";

		$rst = $this -> DB -> execSqlInsert($qry);
		return $rst;
	}	
	
	// desc : 14세 미만/이상 리스트
	// auth  : 
	// param
	function Mem_info_Age($mb_id) {
		if (is_array($args)) foreach ($args as $k => $v) ${$k} = $v;
		
		$qry = "
			select plusInfo,phoneNo,name from tblMemberCert where mb_id ='$mb_id'
		";
		$rst =  $this -> DB -> execSqlList($qry);
		return $rst;	
	}
}
?>