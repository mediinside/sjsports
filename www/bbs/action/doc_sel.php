<?php
	
	include_once("../../_init.php");
	include_once($GP->CLS."class.doctor.php");

	$C_Doctor = new Doctor();

	$args = '';
	$args['jb_doctor'] 	= $_POST['jb_doctor'];
 //   $args['tbs_branch'] = $_POST['tbs_branch'];
	$rst = $C_Doctor -> DR_All_List($args);

	if($rst) {
		for	($i=0; $i<count($rst); $i++) {			
			$dr_idx 	= $rst[$i]['dr_idx'];
			$dr_name	= $rst[$i]['dr_name'];
			$jb_doctor  = $rst[$i]['jb_doctor'];
			
           if($_POST['jb_doctor'] == $dr_idx){
				echo "<option value='" . $dr_idx . "' selected> " . $dr_name . "</option>";			
			}else{			
				echo "<option value='" . $dr_idx . "'>" . $dr_name . "</option>";			
			}
		}
	}
?>
