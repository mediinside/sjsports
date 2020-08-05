<?php	
	include_once("../../_init.php");
	include_once($GP -> CLS."/class.doctor.php");	
	$C_Doctor 	= new Doctor;

	$args = '';
	$args['dr_name'] 	= $_POST['jb_type'];
	$rst = $C_Doctor -> DOR_List($args);


	if($rst) {
		for	($i=0; $i<count($rst); $i++) {			
			$dr_name = $rst[$i]['dr_name'];
			
           if($_POST['jb_type'] == $dr_name){
				echo "<option value='" . $dr_name . "' selected> " . $dr_name . "</option>";			
			}else{			
				echo "<option value='" . $dr_name . "'>" . $dr_name . "</option>";			
			}
		}
	}
?>
