<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/_init.php";

 	$sFileInfo = '';
	$headers = array();
	 
	foreach($_SERVER as $k => $v) {
		if(substr($k, 0, 9) == "HTTP_FILE") {
			$k = substr(strtolower($k), 5);
			$headers[$k] = $v;
		} 
	}

	//���������Լ�
	function rand_make()
	{
		srand((double)microtime()*1000000);
		$f_rand=rand();

		srand((double)microtime()*1000000);
		$s_rand=rand();

		$rand_key = $f_rand + $s_rand;
		$rand_key = substr($rand_key,0,5);

		return $rand_key;
	}
	
	
	$file = new stdClass;
	$file->name = rawurldecode($headers['file_name']);
	$file->size = $headers['file_size'];
	$file->content = file_get_contents("php://input");
	
	$filename_ext = strtolower(array_pop(explode('.',$file->name)));
	$allow_file = array("jpg", "png", "bmp", "gif"); 
	
	if(!in_array($filename_ext, $allow_file)) {
		echo "NOTALLOW_".$file->name;
	} else {
		//����������
		$foldername = $_SERVER['HTTP_FLODERID'];

		$uploadDir = $GP -> UP_IMG_SMARTEDITOR . $foldername . "/";
		$uploadURL = $GP -> UP_IMG_SMARTEDITOR_URL . $foldername . "/";

		if(!is_dir($uploadDir)){
			mkdir($uploadDir, 0777);
		}

		$name = $file->name;

		//Ȯ���� ����
		$file_ext = substr(strrchr($name, "."),1); 
		$file_ext = strtolower($file_ext);	//Ȯ���ڸ� �ҹ��ڷ�...
		
		//���ϸ� ���� ����
		$file_name_md5=md5($name);	
		$rand_key=rand_make();
		$file_name_md5=substr($file_name_md5, 5, 10);
		$file_name_md5=$file_name_md5 . $rand_key;
		$new_file_name=$file_name_md5 . "." . $filename_ext;
		
		$newPath = $uploadDir.iconv("utf-8", "cp949", $new_file_name);
		
		if(file_put_contents($newPath, $file->content)) {
			$sFileInfo .= "&bNewLine=true";
			$sFileInfo .= "&sFileName=".$new_file_name;
			$sFileInfo .= "&sFileURL=" . $uploadURL .$new_file_name;
		}
		echo $sFileInfo;
	}
?>