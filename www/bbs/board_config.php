<?php
	include_once($GP -> CLS."class.jhboard.php");
	$C_JHBoard = new JHBoard();
	

	
	$args = '';
	$args['jb_code'] = $jb_code;
	$db_config_data = $C_JHBoard -> Board_Config_Data($args);	

	if(!$db_config_data['jba_idx']) {
		die("게시판 설정 에러입니다. 설정부분을 확인해주세요.");
	}

	//Default User Level (Guest)
	if(!$_SESSION['suserlevel']) {
		$check_level=0;		
		$check_name = "";
		$check_gubun = '';
	}else{
		$check_level = $_SESSION['suserlevel'];
		$check_id = $_SESSION['suserid'];
		$check_name = $_SESSION['susername'];
		$check_gubun = $_SESSION['susergubun'];
	}
	/*if ($_SERVER['REMOTE_ADDR'] == '118.37.82.209') {
		if ($jb_code == '30') {
			$skin_dir = "skin/customer_new";
		}else{
			$skin_dir = "skin/" . $db_config_data['jba_skin_dir'];
		}
	}else{
		$skin_dir = "skin/" . $db_config_data['jba_skin_dir'];
	}*/
	$skin_dir = "skin/" . $db_config_data['jba_skin_dir'];
	
?>