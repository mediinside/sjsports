<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';
$page_title = "아이디/비밀번호 찾기";
include_once $GP -> INC_WWW . "/head.php";
$locArr = Array(100,1);
?>
<script type="text/javascript" src="/js/jquery.validate.js"></script>
<script type="text/javascript" src="/js/jquery.alphanumeric.js"></script>
<script type="text/javascript" src="/js/admin/common.js"></script>
<script type="text/javascript" src="/js/mem/mem_find.js"></script>
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
			<div id="sign-forget">
				<div class="header">
					<i class="ip-icon-sign-logo"></i>
				</div>
				<form action="?" method="post" name="find-id-form" id="find-id-form"class="panel" novalidate autocomplete="off">
					<fieldset>
						<legend>아이디 찾기</legend>
						<ul class="entry">
							<li><label class="i-label">
								<span class="i-placeholder">가입하신 이름을 입력하세요.</span>
								<input type="text" class="i-text" id="mb_name" name="mb_name"  />
							</label></li>
							<li><label class="i-label">
								<span class="i-placeholder">가입하신 이메일을 입력하세요.</span>
								<input type="text" class="i-text" id="mb_email" name="mb_email"/>
							</label></li>
						</ul>
						<button type="submit" id="id_find" class="btn"><span>아이디 찾기</span></button>
					</fieldset>
				</form>
				<form action="?" method="post" name="find-pw-form" id="find-pw-form" class="panel" novalidate autocomplete="off">
					<fieldset>
						<legend>비밀번호 찾기</legend>
						<ul class="entry">
							<li><label class="i-label">
								<span class="i-placeholder">가입하신 이름을 입력하세요.</span>
								<input type="text" class="i-text" id="mb_name" name="mb_name"/>
							</label></li>
							<li><label class="i-label">
								<span class="i-placeholder">가입하신 이메일을 입력하세요.</span>
								<input type="text" class="i-text" id="mb_email" name="mb_email"/>
							</label></li>
						</ul>
						<button type="submit" id="pwd_find" class="btn"><span>비밀번호 찾기</span></button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once  $GP -> INC_WWW . "/footer_ver2.php"; ?>
</body>
</html>