<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';
$page_title = "로그아웃";
include_once $GP -> INC_WWW . "/head.php";
$locArr = Array(100,10);

session_destroy();
$_SESSION['suserid'] = '';
?>
<script>
	$(document).ready(function(){
		$('.sub_head').css(
			{
				"background-image":"url('/public/images/common/img_01.jpg')",
			}
		);
	});
</script>
<?php
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>
<div id="container">
	<div id="article">
		<div class="box_style_1 text-center py60">
			<h3 class="mt30"><?=$page_title;?></h3>
		</div>
		<div class="contain">
			<div id="sign-out">
				<div class="header">
					<i class="ip-icon-sign-logo"></i>
					<p>로그아웃이 정상적으로 완료되었습니다.</p>
				</div>
				<div class="panel">
					<a href="/member/login.php" class="btn btn-signin"><span>로그인</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once  $GP -> INC_WWW . "/footer_ver2.php"; ?>
</body>
</html>