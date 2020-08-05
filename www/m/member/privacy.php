<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "개인정보처리방침 &gt; 세종스포츠정형외과";
	include_once $GP -> INC_WWW . '/head_mobile.php';
	$locArr = array(100,1);
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
	<!-- <div id="pagetop">
		<div class="background"></div>
		<div class="contain">
			<h2 class="title">개인정보처리방침</h2>
			<p class="text">가족의 마음으로 정성을 다하는 <br class="mb-show" />세종스포츠정형외과입니다.</p>
		</div>
	</div> -->
<div id="container">
	<div class="deco-header">
		<p class="highlight"><strong>개인정보처리방침</strong></p>
		<p class="decoration tup">privacy</p>
	</div>
	<div id="article" class="publish">
		<div class="contain">
			<?php include_once "../../member/publish-privacy.txt"; ?>
		</div>
	</div>
</div>
<?php include_once $GP -> INC_WWW . '/footer_mobile.php';?>