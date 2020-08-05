<?php
include_once("../../_init.php");

$cate1 = $_POST["cate1"];
$cate2 = $_POST["cate2"];

$test = "NONPAY_CATE_TYPE1_{$cate1}";
$rtl = '<option value="">선택하세요</option>';
foreach($GP -> $test as $key => $val) {
	$select_txt = ($key == $cate2) ? "selected" : "";
	$rtl.="<option value=".$key." ".$select_txt.">".$val."</option>";
}
echo $rtl;
?>