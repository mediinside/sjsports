<?
include_once  '../_init.php';
include_once($GP -> CLS."/class.reserve.php");	
$C_Reserve 	= new Reserve;


$now_day = date('Y-m-d');
$tfc_date = $_POST['tfc_date'];
$x=explode("-",$now_day); // 들어온 날짜를 년,월,일로 분할해 변수로 저장합니다.
$s_Y=$x[0]; // 지정된 년도
$s_m=$x[1]; // 지정된 월
$s_d=$x[2]; // 지정된 요일

  $args = '';
  $args['th_date'] = substr($now_day, 0, 7);
  $Holiday_data = $C_Reserve->HOliday_RS_LIST($args);
  

  $holi_arr = array();  
  if(is_array($Holiday_data) ) {
  	for($k=0; $k<count($Holiday_data); $k++) {
    	$holi_arr[$k] = $Holiday_data[$k]['th_date'];
    }
  }  
  
$date1 = date("Y-m-d",mktime(0,0,0,$s_m,$s_d+3,$s_Y));
$date2 =  date("Y-m-d",mktime(0,0,0,$s_m,$s_d+14,$s_Y));
$holiday = array('2018-05-05','2018-05-07','2018-05-22');
$new_date = date("Y-m-d", strtotime("-1 day", strtotime($date1)));
$yoil = array("일","월","화","수","목","금","토");

while(true) {
     $new_date = date("Y-m-d", strtotime("+1 day", strtotime($new_date)));
	 $holi = in_array($new_date, $holi_arr);
	 $day = $yoil[date('w', strtotime($new_date))];
	 if($day != "일" && $holi != 1){
		 if($_POST['tfc_date'] == $new_date){
	 		echo "<option value='".$new_date."' selected>".$new_date." (".$day.")</option>";
		 }else{
			 echo "<option value='".$new_date."'>".$new_date." (".$day.")</option>";
		 }
     	if($new_date == $date2) break;
	 
	 }
}

?>