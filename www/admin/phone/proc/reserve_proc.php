<?php
include_once("../../../_init.php");
include_once $GP -> CLS . 'class.reserve.php';
$C_Reserve = new Reserve();




switch($_POST['mode']){
	

	
	case 'HOLIDAY_DEL':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
	
		$args = '';
		$args['th_idx'] = $th_idx;	
		$rst = $C_Reserve -> HOLIDAY_Del($args);

		echo "true";
		exit();
	break;
	
	
	case 'HOLIDAY_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;		

		
		$args = '';		

		$args['th_date'] 		= $th_date;
		$args['th_con'] 		= $th_con;
		$args['th_idx'] 		= $th_idx;
		
		$rst = $C_Reserve -> HOLIDAY_MODI($args);


		$C_Func->put_msg_and_modalclose("수정 되었습니다");
		exit();
	break;
	
	case 'HOLIDAY_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;		

		
		$args = '';		

		$args['th_date'] 		= $th_date;
		$args['th_con'] 		= $th_con;
		
		$rst = $C_Reserve -> HOLIDAY_REG($args);

		if($rst) {
			$C_Func->put_msg_and_modalclose("등록 되었습니다");
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;
	
	
	
}
?>