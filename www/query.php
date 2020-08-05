<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/_init.php");



switch ($jb_code)
{		
	case "10" :
		$index_page = "page01.html";  	//공지사항
		break;
	
	case "20" :
		$index_page = "page05.html";  	//전문의상담
		break;	
	
	case "30" :
		$index_page = "page06.html";  	//고객의소리
		break;		


	default :
		$index_page = "page01.html";	// 
		break;
}

$query_page = "query.php";

include $GP -> INC_PATH . "/board_insert.php";
?>