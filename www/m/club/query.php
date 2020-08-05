<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/_init.php");



switch ($jb_code)
{		
	case "10" :
		$index_page = "page01.php"; 
		break;
	case "20" :
		$index_page = "page02.php"; 
		break;
	case "30" :
		$index_page = "page03.php"; 
		break;
	case "40" :
		$index_page = "page04.php"; 
		break;
	case "50" :
		$index_page = "page05.php"; 
		break;
	case "60" :
		$index_page = "page06.php"; 
		break;

	default :
		$index_page = "page01.php";	// 
		break;
}

$query_page = "query.php";

include $GP -> INC_PATH . "/board_insert.php";
?>