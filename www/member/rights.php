<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
	include_once $GP -> INC_WWW . '/count_inc.php';
	$page_title = "환자권리장전";
	include_once $GP -> INC_WWW . '/head.php';
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
	include_once $GP -> INC_WWW . '/header_ver2.php';
	include_once $GP -> INC_WWW . '/header_after.php';
?>
<div id="container">
	<div id="article" class="publish">
		<div class="box_style_1 text-center py60">
			<h3 class="mt30"><?=$page_title;?></h3>
		</div>
		<div class="contain">
			<?php include_once "publish-rights.txt"; ?>
		</div>
	</div>
</div>
<?php include_once  $GP -> INC_WWW . "/footer_ver2.php"; ?>
</body>
</html>