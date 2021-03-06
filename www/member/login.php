<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';
$page_title = "로그인";
include_once $GP -> INC_WWW . "/head.php";
$locArr = Array(100,1);

include_once($GP->CLS."class.naver.php");

$naver = new Naver(array(
        "CLIENT_ID" => $GP->NAVER_CLIENT_ID,
        "CLIENT_SECRET" => $GP->NAVER_CLIENT_SECRET,
        "RETURN_URL" => $GP->NAVER_RETURN_URL,
        "AUTO_CLOSE" => true,
        "SHOW_LOGOUT" => false
    )
);
?>
<script type="text/javascript" src="/js/jquery.validate.js"></script>
<script type="text/javascript" src="/js/mem/mem_login2.js"></script>
<script type="text/javascript">
window.fbAsyncInit = function() {
	FB.init({
	  appId      : '1444431789051977',
	  xfbml      : true,
	  version    : 'v2.12'
	});
};

(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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
			<div id="sign-in">
				<div class="header">
					<i class="ip-icon-sign-logo"></i>
				</div>
				<form action="/member/proc/login_proc.html" method="post" id="loginForm" name="loginForm" class="panel" novalidate autocomplete="off" style="display: none;">
                	<input type="hidden" id="mode" name="mode" value="LOGIN">
					<input type="hidden" id="re_url" name="re_url" value="<?=$_GET['reurl']?>">
					<fieldset>
						<legend>로그인</legend>
						<ul class="entry">
							<li><label class="i-label">
							<!--	<span class="i-placeholder">아이디를 입력하세요.</span> -->
								<input type="text" class="i-text" placeholder="이메일을 입력하세요." id="m_id"  name="m_id" />
							</label></li>
							<li><label class="i-label">
								<span class="i-placeholder">비밀번호를 입력하세요.</span>
								<input type="password" class="i-text" id="m_pwd"  name="m_pwd"/>
							</label></li>
						</ul>
						<label class="ui-check">
							<input type="checkbox" name="idsave" value="saveOk" />
							<span class="visible bicon-check"></span>
							<span class="label">아이디 저장</span>
						</label>
						<button type="submit" onClick="sendit()"  class="btn-signin"><span>로그인</span></button>
					</fieldset>
				</form>
				<div class="panel">
					<ul class="other-process">
						<?=$naver->login();?>
						<li class="half"><a href="javascript:void(0)" id="kakao_login" class="btn sns-signin">
							<i class="bicon-kakao-ci"></i>
							<span>로그인</span>
						</a></li>
						<!-- <li><a href="javascript:FB.login();"  class="btn sns-signin">
							<i class="bicon-facebook-ci"></i>
							<span>로그인</span>
						</a></li> -->
						<!-- <li><a href="/member/join.html" id="mem_register" class="btn btn-go2signup"><span>회원가입</span></a></li> -->
						<!-- <li><a href="/member/idpw.php" class="btn btn-forget"><span>아이디 / 비밀번호 찾기</span></a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    window.onload = function() {
        if (getCookie("idcookie")) { // getCookie함수로 id라는 이름의 쿠키를 불러와서 있을경우
            document.loginForm.m_id.value = getCookie("idcookie"); //input 이름이 id인곳에 getCookie("id")값을 넣어줌
            document.loginForm.idsave.checked = true; // 체크는 체크됨으로
        }
    }

    function setCookie(name, value, expiredays) //쿠키 저장함수
    {
        var todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expiredays);
        document.cookie = name + "=" + escape(value) + "; path=/; expires="
                + todayDate.toGMTString() + ";"
    }

    function getCookie(Name) { // 쿠키 불러오는 함수
        var search = Name + "=";
        if (document.cookie.length > 0) { // if there are any cookies
            offset = document.cookie.indexOf(search);
            if (offset != -1) { // if cookie exists
                offset += search.length; // set index of beginning of value
                end = document.cookie.indexOf(";", offset); // set index of end of cookie value
                if (end == -1)
                    end = document.cookie.length;
                return unescape(document.cookie.substring(offset, end));
            }
        }
    }

    function sendit() {
        var frm = document.loginForm;
        if (!frm.m_id.value) { //아이디를 입력하지 않으면.
            alert("아이디를 입력 해주세요");
            frm.m_id.focus();
            return;
        }


        if (document.loginForm.idsave.checked == true) { // 아이디 저장을 체크 하였을때
            setCookie("idcookie", document.loginForm.m_id.value, 7); //쿠키이름을 id로 아이디입력필드값을 7일동안 저장
        } else { // 아이디 저장을 체크 하지 않았을때
            setCookie("idcookie", document.loginForm.m_id.value, 0); //날짜를 0으로 저장하여 쿠키삭제
        }

        document.loginForm.submit(); //유효성 검사가 통과되면 서버로 전송.

    }
</script>
<form name="r_form" id="r_form" method="post">
	<input type="hidden" name="re_url" id="mode" value="<?=$_GET["re_url"]?>">
	<input type="hidden" name="mode" id="mode" value="kakao">
	<input type="hidden" name="mb_id" id="r_id">
     <input type="hidden" name="u" value="M">
	<input type="hidden" name="mb_name" id="r_name">
    <input type="hidden" name="mb_email" id="r_email">
</form>
<script type="text/javascript">
function facebooklogin() {
	FB.login(function(response) {
            FB.api('/me', function(user) {
				location.href= "./proc/login_proc.html?mode=facebook&mb_id="+user.id+"&mb_name="+user.name+"&mb_email="+user.email;
            });
	}, {scope:'public_profile,email'});
}

function showObj(obj) {
	var str = "";
	for(key in obj) {
		str += key+"="+obj[key]+"\n";
	}

	alert(str);
	return;
}
</script>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script>
	$(document).ready(function(){
		Kakao.init("b8e8b307c6008c8f616a66cb5fd3311f");
		function getKakaotalkUserProfile(){
			Kakao.API.request({
				url: '/v1/user/me',
				success: function(res) {
				//	 alert(JSON.stringify(res));
				// var r_name = $("#r_name").val(res.properties.nickname);
					if(res.properties.nickname) {
						 $("#r_name").val(res.properties.nickname);
					}
					$("#r_id").val(res.id);
				//	$("#r_email").val(res.kaccount_email);
					$("#r_form").attr("action","/member/proc/login_proc.html");
					$("#r_form").submit();
				},
				fail: function(error) {
					console.log(error);
				}
			});
		}
		//function createKakaotalkLogin(){
			$("#kakao_login").click(function(){
				Kakao.Auth.login({
					persistAccessToken: true,
					persistRefreshToken: true,
					success: function(authObj) {
						getKakaotalkUserProfile();
					},
					fail: function(err) {
						alert(err);
						console.log(err);
					}
				});
			});
			//$("#kakao-logged-group").prepend(loginBtn)
		//}
		if(Kakao.Auth.getRefreshToken()!=undefined&&Kakao.Auth.getRefreshToken().replace(/ /gi,"")!=""){
			//getKakaotalkUserProfile();
		}else{
			//createKakaotalkLogin();
		}

	});
</script>
<?php include_once  $GP -> INC_WWW . "/footer_ver2.php"; ?>
</body>
</html>