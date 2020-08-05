<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/_init.php");



switch ($jb_code)
{		
	case "20" :
		$index_page = "consult.html";  	//전문의상담
		break;
	
	case "30" :
		$index_page = "customer.html";  	//고객의소리
		break;	
		
	default :
		$index_page = "consult.html";	// 
		break;
}

$query_page = "query.php";

include $GP -> INC_PATH . "/board_insert.php";
?>