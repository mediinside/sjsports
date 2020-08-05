<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/_init.php");



switch ($jb_code)
{		
	case "30" :
		$index_page = "page06.html";  	//고객의 소리
		break;
		
	default :
		$index_page = "page01.html";	// 
		break;
}

$query_page = "query.php";

include $GP -> INC_PATH . "/board_insert.php";
?>