<?php
include_once("../../../_init.php");
include_once($GP->CLS."class.blog.php");
	$C_Blog 	= new Blog;

	
//	error_reporting(E_ALL);
//	@ini_set("display_errors", 1);



switch($_POST['mode']){	


	
	case 'BLOG_MODI':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;	
		
		include_once($GP->CLS."class.fileup.php");
			
		//메인페이지 이미지 업로드
		$file_orName			= "tb_img";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_BLOG;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 5000;// 500kb 이하
			$args_f['able_file'] 				= array();

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) 
				$insertFileCheck = true;
			$image_main = $updata['new_file_name'];	//변경된 파일명
		}else{
			$image_main = $before_image_main;
		}
		
		if($insertFileCheck) {
			$C_Func->put_msg_and_modalclose($updata['error']);
		}
		
		$args = "";
		$args['tb_idx'] 					= $tb_idx;
		$args['tb_img'] 					= $image_main;
		$args['tb_date'] 					= $tb_date;	
		$args['tb_title'] 					= addslashes($tb_title);
		$args['tb_link'] 					= $tb_link;
		$args['tb_content'] 				= $C_Func->enc_contents($tb_content);
		$args['tb_show'] 					= $tb_show;	

		$rst = $C_Blog -> Blog_Modi($args);

		$C_Func->put_msg_and_modalclose("수정 되었습니다");		
		exit();
	break;
	
	case "BLOG_IMGDEL":
			if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
			
			$args = "";
			$args['tb_idx'] = $tb_idx;
			$args['type'] = $type;
			$rst = $C_Blog -> Blog_ImgUpdate($args);
	
			@unlink($GP -> UP_BLOG . $file);
	
			echo "true";
			exit();
		break;


	case 'BLOG_DEL' :
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;		
		
		$args = "";
		$args['tb_idx'] 	= $tb_idx;
		$result = $C_Blog ->Blog_Del($args);
				
		echo "true";
		exit();
	
	break;

	
	case 'BLOG_REG':
		if (is_array($_POST)) foreach ($_POST as $k => $v) ${$k} = $v;
		
		include_once($GP->CLS."class.fileup.php");
			
		//메인페이지 이미지 업로드
		$file_orName			= "tb_img";
		$is_fileName			= $_FILES[$file_orName]['name'];
		$insertFileCheck	= false;
		if ($is_fileName) {
			$args_f = "";
			$args_f['forder'] 					= $GP -> UP_BLOG;
			$args_f['files'] 						= $_FILES[$file_orName];
			$args_f['max_file_size'] 		= 1024 * 5000;// 500kb 이하
			$args_f['able_file'] 				= array();

			$C_Fileup = new Fileup($args_f);
			$updata		= $C_Fileup -> fileUpload();

			if ($updata['error']) 
				$insertFileCheck = true;
			$image_main = $updata['new_file_name'];	//변경된 파일명
		}else{
			$image_main = $before_image_main;
		}
		
		if($insertFileCheck) {
			$C_Func->put_msg_and_modalclose($updata['error']);
		}

		$args = "";
		$args['tb_title'] 				= addslashes($tb_title);
		$args['tb_link'] 				= $tb_link;
		$args['tb_img'] 				= $image_main;
		$args['tb_date'] 				= $tb_date;		
		$args['tb_content'] 			= $C_Func->enc_contents($tb_content);
		$args['tb_show'] 				= $tb_show;		

		$rst = $C_Blog -> Blog_Reg($args);

		if($rst) {
			$C_Func->put_msg_and_modalclose("등록 되었습니다");
		}else{
			$C_Func->put_msg_and_modalclose("등록에 실패하였습니다");
		}
		exit();
	break;
	
}
?>