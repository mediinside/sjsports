<?php
	include_once  '../_init.php';
	include_once $GP -> CLS . 'class.login.php';
  	include_once $GP -> CLS . 'class.password.php';	
    $C_PWD   = new Password();
	$C_Login = new Login();

	$args['mb_id'] = $_POST['mb_id'];
	//$args['mb_password'] = $C_Member->sql_password(trim($_POST['mb_pwd']));
	$rst = $C_Login->userLogin_ID($args);

	$match = $C_PWD->checkPassword($_POST['mb_pwd'], $rst["mb_password"], "pbkdf2");

	if($match) 
	{
		echo "true";
		exit();
	}
	else
	{
		echo "false";
		exit();
	}

?>