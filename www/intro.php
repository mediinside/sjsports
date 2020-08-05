<?PHP
include_once $_SERVER['DOCUMENT_ROOT'] . '/_init.php';
include_once $GP -> INC_WWW . '/count_inc.php';
$page_title = "세종스포츠정형외과";
include_once $GP -> INC_WWW . '/head.php';
include_once $GP -> HOME."main_lib/main_proc.php";

$Main_Notice = Main_Notice('10');
/*$Main_Review = Main_Review();*/

/*$Main_Slide_Visual  = Main_Slide_New('2','pc');
$Main_Slide_Banner  = Main_Slide_New('3','pc');*/
// echo $_SESSION['susermobile'];

?>
	<script>
		$(document).ready(function(){
			$('#intro_mov').modal('show');
		});

		var setCookieIntro = function(name, value, expiredays) {
			var todayDate = new Date();
			todayDate.setDate( todayDate.getDate() + expiredays );
			document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
		}

		function closeBtn(){
			if ( document.intro.chkbox.checked )
					setCookieIntro( 'intro', 'done' , 1);
			else
					setCookieIntro( 'intro', 'again', 1);
			location.href ='http://sjsportshospital.com/';
		}
	</script>
	<div class="modal fade intro" id="intro_mov" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="intro_movTitle" ><strong class="text-hide">세종스포츠정형외과</strong></h3>

					<button type="button" class="close" onclick="closeBtn(); return false;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<video id="video" controls autoplay>
						<source id="movie_src" src="/public/images/intro.mp4" type="video/mp4">
					</video>
				</div>
				<div class="modal-footer">
					<div class="">
						<form name="intro">
							<label class="inputChk m-0"><input name="chkbox" type="checkbox"> <span style="">이 창을 하루동안 열지 않습니다.</span></label>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div style="width: 100%; height: 100%; background-color: #000; position: absolute; top: 0; left: 0; z-index: 1900;"></div>
	</div>
</body>
</html>