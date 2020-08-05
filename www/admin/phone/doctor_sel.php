<?php
	include_once("../../_init.php");
	include_once($GP->CLS."class.doctor.php");

	$C_Doctor = new Doctor();

	$args = '';
	$rst = $C_Doctor -> Doctor_Center_List2($args);
	
	if($rst) {
		for	($i=0; $i<count($rst); $i++) {			
			$dr_idx = $rst[$i]['dr_idx'];
			$dr_name = $rst[$i]['dr_name'];
			$dr_clinic = $rst[$i]['dr_clinic'];
			$dr_center = $rst[$i]['dr_center'];
			
			if($dr_center == ''){
				$cls = $GP -> CENTER_TYPE[$dr_clinic];
			}else{
				$cls = $GP -> CLINIC_TYPE[$dr_center];
			}
			
			if($_POST['dr_idx'] == $dr_idx){
				
				echo "<option value='" . $dr_idx . "' selected>[" . $cls .  "] " . $dr_name . "</option>";			
			}else{			
				echo "<option value='" . $dr_idx . "'>[" . $cls.  "] " . $dr_name . "</option>";			
			}
		}
	}
?>