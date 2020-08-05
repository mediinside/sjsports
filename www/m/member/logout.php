<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';
$page_title = "로그아웃 &gt; 세종스포츠정형외과";
include_once $GP -> INC_WWW . "/head_mobile.php";
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
	include_once $GP -> INC_WWW . '/header_mobile.php';
	include_once $GP -> INC_WWW . '/header_mobile_after.php';
?>
<div id="container">
	<div class="deco-header">
		<p class="highlight"><strong>이용해 주셔서 감사합니다.</strong></p>
	</div>
	<div id="article">
		<div class="contain">
			<div id="sign-out">
				<div class="header">
					<i class="ip-icon-sign-logo"></i>
					<p>로그아웃이 정상적으로 완료되었습니다.</p>
				</div>
				<div class="panel">
					<a href="/m/member/login.php" class="btn btn-signin"><span>로그인</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once  $GP -> INC_WWW . "/footer_mobile.php"; ?>
</body>
</html>