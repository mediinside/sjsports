<?
// HEADER
@header("Content-Type: text/html; charset=utf-8");
@header("Cache-Control: no-cache, must-revalidate");
@header("Pragma: no-cache");
@header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
@Header("Access-Control-Allow-Origin: *");
@Header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
@header("Access-Control-Allow-Headers: X-Requested-With, X-Prototype-Version");
@session_start();

@ini_set("session.cache_expire",3600*2);
@ini_set("session.gc_maxlifetime",3600*2);

@extract($_GET); 
@extract($_POST); 
@extract($_SERVER);

/*error_reporting(E_ALL^E_NOTICE);
@ini_set("display_errors", 1);*/


class object {};
$GP = new object;

////////////////////////////////////////////////////////////////
//# Path config
////////////////////////////////////////////////////////////////
// default include path
$GP -> DOCROOT	= $_DEF_PATH;
$GP -> WEBROOT 		= '/';
$GP -> ROOT 		= $GP -> DOCROOT . $GP -> WEBROOT;

$GP -> CLS		= $GP -> ROOT . '_CLASS/';
$GP -> INC		= $GP -> ROOT . '_INC/';
$GP -> COM		= $GP -> ROOT . '_COMMON/';
$GP -> HOME		= $GP -> ROOT . 'www/';

$GP -> IP								= $_SERVER['SERVER_ADDR'];
$GP -> DOMAIN						= $_SERVER['HTTP_HOST'];
$GP -> SERVICE_DOMAIN		= 'http://sjsportshospital.com/';
$GP -> HTTPS						= 'https://' . $GP -> DOMAIN;
$GP -> HTTP							= 'http://' . $GP -> DOMAIN;
$GP -> HTTPS_PORT				= 443;

$GP -> QUERY_STRING = $_SERVER['QUERY_STRING'];
$GP -> SELFPAGE 		= $_SERVER['PHP_SELF'];
$GP -> NOWPAGE 			= $GP -> SELFPAGE . '?' . $_SERVER['QUERY_STRING'];
$GP -> NOWPAGE_ENC 	= urlencode($GP -> NOWPAGE);

$GP -> INC_ADM = $GP -> HOME ."admin/";
$GP -> INC_ADM_PATH = $GP -> HOME ."admin/inc/";


$GP -> INC_WWW	= $GP -> HOME ."inc";
$GP -> INC_PATH = $GP -> HOME . "bbs";
$GP -> IMG_PATH = $GP -> HTTP . "/bbs";
$GP -> JS_SMART_PATH = $GP -> HTTP . "/bbs/smarteditor/js";
$GP -> JS_SMART_PATH2 = $GP -> HTTP . "/bbs/se2/js/service";
$GP -> JS_PATH = $GP -> HTTP . "/js";

## 스마트에디터 업로드 경로
$GP -> UP_IMG_SMARTEDITOR		= $GP -> HOME . 'bbs/files/';
$GP -> UP_IMG_SMARTEDITOR_URL	= $GP -> HTTP . '/bbs/files/';

## 온라인문의 관련 업로드 폴더
$GP -> UP_ONLINE			= $GP -> HOME . 'common/online_e/';
$GP -> UP_ONLINE_URL		= $GP -> HTTP . '/common/online_e/';

## 파트너사 링크
$GP -> UP_PARTNER			= $GP -> HOME . 'common/partner/';
$GP -> UP_PARTNER_URL		= $GP -> HTTP . '/common/partner/';


## 팝업 링크
$GP -> UP_POPUP			= $GP -> HOME . 'popup/upfile/';
$GP -> UP_POPUP_URL		= $GP -> HTTP . '/popup/upfile/';

$GP -> UP_BLOG			= $GP -> HOME . 'common/blog/';
$GP -> UP_BLOG_URL		= $GP -> HTTP . '/common/blog/';


## 병원 장비 링크
$GP -> UP_MACHINE			= $GP -> HOME . 'common/machine/';
$GP -> UP_MACHINE_URL		= $GP -> HTTP . '/common/machine/';

## 병원 둘러보기
$GP -> UP_MACHINE_HP		= $GP -> HOME . 'common/machine_hp/';
$GP -> UP_MACHINE_HP_URL	= $GP -> HTTP . '/common/machine_hp/';


## 의료진 관련
$GP -> UP_DOCTOR			= $GP -> HOME . 'common/doctor/';
$GP -> UP_DOCTOR_URL		= $GP -> HTTP . '/common/doctor/';


## 슬라이드 관련
$GP -> UP_SLIDE			= $GP -> HOME . 'common/slide/';
$GP -> UP_SLIDE_URL		= $GP -> HTTP . '/common/slide/';


## 치료법
$GP -> UP_TREAT = $GP -> HOME . 'common/treat/';
$GP -> UP_TREAT_URL = $GP -> HTTP . '/common/treat/';

$GP -> UP_SLIDE = $GP -> HOME . 'common/slide/';
$GP -> UP_SLIDE_URL = $GP -> HTTP . '/common/slide/';
////////////////////////////////////////////////////////////////
//# Load class
////////////////////////////////////////////////////////////////
// 기본 함수
include_once $GP -> CLS . 'class.func.php';
$C_Func 		= new Func;

////////////////////////////////////////////////////////////////
//# Database config
////////////////////////////////////////////////////////////////
include_once $GP -> INC . 'db.inc';


////////////////////////////////////////////////////////////////
//# Admin config
////////////////////////////////////////////////////////////////
$GP -> Admin_Email = "noreply@sjsportshospital.com";
$GP -> Admin_Phone = "1522-7525";
$GP -> Admin_Name = "관리자";
$GP -> Admin_HP_NAME = "세종스포츠정형외과";
$GP -> Admin_HP_NAME1 = "세종스포츠정형외과";
$GP -> Admin_BizNum = "";
$GP -> SMS_HP1 = "1522";
$GP -> SMS_HP2 = "7525";
$GP -> SMS_HP3 = "";

$GP -> HOME_MAIN_ADDRESS = "부산시 동구 범일로 85";


////////////////////////////////////////////////////////////////
//# sms config
////////////////////////////////////////////////////////////////
$GP -> SMS_ID = 'smbh2017';
$GP -> SMS_AUTH_KEY ='4450e1a499cff5f8bca5f323f2fe8094';

$GP->DB_TABLE = "sjsportshospital";


////////////////////////////////////////////////////////////////
//# SMTP config
////////////////////////////////////////////////////////////////
$GP -> SMTP_USE 		= true;
$GP -> SMTP_SERVER	= 'uws64-124.cafe24.com';
$GP -> SMTP_IP		= '183.111.161.106';
$GP -> SMTP_PORT		= '587';
$GP -> SMTP_USER		= 'sjsportshospital';
$GP -> SMTP_PASS		= 'sjsportshospital20!&_';

////////////////////////////////////////////////////////////////
//# Pass config
////////////////////////////////////////////////////////////////
$GP -> PASS = 'ka-100';


////////////////////////////////////////////////////////////////
//# NAVER config
////////////////////////////////////////////////////////////////
$GP -> NAVER_CLIENT_ID = 'NFiFgmDN4MOdccCNdZ5a';
$GP -> NAVER_CLIENT_SECRET = 'ERqiweo8Cc';
$GP -> NAVER_RETURN_URL = 'http://sjsportshospital.com/member/proc/login_proc.html?mode=naver';


////////////////////////////////////////////////////////////////
//# 권한 설정
////////////////////////////////////////////////////////////////
$GP -> AUTH_LEVEL	 = array(
						"9" => "최고관리자"
						, "8" => "중간관리자"
						, "7" => "예약"
						, "6" => "상담"
						, "5" => "고객관리"
						, "4" => "비급여"
					);

$GP -> BOARD_CONFIG_LEVEL	 = array(
						"0" => "일반"
						, "3" => "회원"
						, "4" => "비급여"
						, "5" => "고객관리"
						, "6" => "상담"
						, "7" => "예약"
						, "8" => "중간관리자"
						, "9" => "최고관리자"
					);

$GP -> BOARD_FAQ_TYPE	 = array(
						"A" => "소화기"
						, "B" => "종합검진"
						, "C" => "갑상선/당뇨센터"
						, "D" => "인공신장센터"
					);

$GP -> BOARD_THESIS_TYPE	 = array(
						 " " => "전체"
						,"S" => "국제학회"
						, "F" => "해외논문"
						, "L" => "국내논문"
					);

$GP -> MEM_SEX	 = array(
						"M" => "남"
						, "F" => "여"
					);


$GP -> QNA_RESULT	 = array(
						"N" => "예약신청"
						, "M" => "예약취소"
						, "Y" => "예약완료"
					);

$GP -> QNA_USER_TYPE	 = array(
						"M" => "회원"
						, "G" => "비회원"
					);

$GP -> RESERVE_RESULT	 = array(
						"N" => "예약신청"
						, "M" => "예약취소"
						, "Y" => "예약완료"
					);


$GP -> WITHDRAWAL_REASON	 = array(
						"1" => "사생활 기록 삭제 목적"
						, "2" => "새 아이디 생성 목적"
						, "3" => "이벤트 등의 목적으로 한시 사용함"
						, "4" => "서비스 기능 불편"
						, "5" => "제재조치로 이용제한됨"
						, "6" => "본 웹싸이트 정책 불만"
						, "7" => "개인정보 및 보안 우려"
						, "8" => "피부과 이용 안 함"
						, "9" => "기타"
					);


//요일 정보
$GP -> GL_WEEK_INFO = array (
    										"sun" => "일",
                        "mon" => "월",
                        "tue" => "화",
                        "wed" => "수",
                        "thu" => "목",
                        "fri" => "금",
                        "sat" => "토"
                    );

//전화번호 기본 입력(휴대폰만)
$GP -> MOBILE =
        				array(
        					"010" => "010"
        					, "011" => "011"
        					, "016" => "016"
        					, "017" => "017"
        					, "018" => "018"
        					, "019" => "019"
        				);
						

$GP -> Phone_GUBUN =
        				array(
        					"" => "선택안함"
        					, "1" => "척추센터"
        					, "2" => "관절센터"
        					, "3" => "내과"
        					, "4" => "외과"
        					, "5" => "소아청소년과"
        				);
						


/*$GP -> ONLINE_TYPE =
        				array(
        					"A" => "목"
        					, "B" => "허리"
        					, "C" => "어깨"
        					, "D" => "팔꿈치"
        					, "E" => "무릎"
        					, "F" => "고관절"
							, "G" => "수부(손)"
        					, "H" => "족부(발)"
        					, "I" => "내과"
							, "J" => "내시경"
        					, "K" => "신경"
        				);*/

$GP -> ONLINE_TYPE =
        				array(
        					"A" => "목"
        					, "B" => "허리"
        					, "C" => "어깨"
        					, "D" => "무릎"
        					, "E" => "족부"
							, "F" => "기타"
        				);        				

$GP -> GENDER_TYPE =
        				array(
        					"M" => "남자"
        					, "F" => "여자"
        				);  


//전화번호 기본 입력(휴대폰포함)
$GP -> TELEPHONE =
        				array(
        					"02" => "02"
        					, "031" => "031"
        					, "032" => "032"
        					, "033" => "033"
        					, "041" => "041"
        					, "042" => "042"
        					, "043" => "043"
        					, "051" => "051"
        					, "052" => "052"
        					, "053" => "053"
        					, "054" => "054"
        					, "055" => "055"
        					, "061" => "061"
        					, "062" => "062"
        					, "063" => "063"
        					, "064" => "064"
        					, "070" => "070"
        					, "080" => "080"
        					, "0505" => "0505"
        					, "1544" => "1544"
        					, "1566" => "1566"
        					, "1577" => "1577"
        					, "1588" => "1588"
        					, "1599" => "1599"
        					, "1577" => "1577"
        				);


/************************************************/
/*          이메일 정보                         */
/************************************************/
$GP -> EMAIL =
				array (
						'hanmail.net' => '다음(한메일)'
						, 'yahoo.com' => '야후'
						, 'naver.com' => '네이버'
						, 'paran.com' => '파란'
						, 'nate.com' => '네이트'
						, 'empal.com' => '엠팔'
						, 'hitel.net' => '하이텔'
						, 'hanmir.com' => '한미르'
						, 'chol.com' => '천리안'
						, 'korea.com' => '코리아닷컴'
						, 'netian.com' => '네띠앙'
						, 'dreamwiz.com' => '드림위즈'
						, 'lycos.co.kr' => '라이코스'
						, 'orgio.net' => '오르지오'
						, 'unitel.co.kr' => '유니텔'
						, 'kornet.net' => '코넷'
						, 'freechal.com' => '프리첼'
						, 'hanafos.com' => '하나포스'
						, 'hotmail.com' => '핫메일'
						, 'gmail.com' => '구글'
						, 'msn.com' => 'MSN'
				);

$GP -> CASE_SEX = array(
				'M' => '남성',
				'F' => '여성'
			);
$GP -> CASE_OLD = array(
				'10' => '10대',
				'20' => '20대',
				'30' => '30대',
				'40' => '40대',
				'50' => '50대',
				'60' => '60대',
				'70' => '70대',
				'80' => '80대',
				'90' => '90대',
				'OVER' => '90대 이상'
			);			


//진료과목
$GP -> CLINIC_TYPE = array(
				'A' => '목/허리',
				'B' => '어깨',
				'C' => '무릎',
				'D' => '족부',
			);


//진료과목
$GP -> FAQ_TYPE = array(
				'A' => '허리/목',
				'B' => '어깨/무릎',
				'C' => '손/발',
				'D' => '기타',
			);


//진료과목
$GP -> NOTICE_TYPE = array(
				'A' => '공지사항',
				'B' => '진료안내',
				'C' => '좋은소식',
			);
			
//진료과목
$GP -> CENTER_TYPE = array(
				'A' => '의료진',
				'B' => '스태프',
			);


//의료진 직책
$GP -> DOCTOR_POSITION = array(
				'A' => '병원장',
				'B' => '원장',
				'C' => '스태프',

			);





//생생상담 타입
$GP -> ADVICE_TYPE = array(
				'A' => '어깨',
				'B' => '무릎',
				'C' => '손목',
			);
			




//시간
$GP -> HOUR_TYPE = array(
				'9' => '9',
				'10' => '10',
				'11' => '11',
				'12' => '12',
				'13' => '13',
				'14' => '14',
				'15' => '15',
				'16' => '16',
				'17' => '17',
				'18' => '18',
				'19' => '19',
			);
$GP -> TIME_TYPE = array(
				'00' => '00',
				'15' => '15',
				'30' => '30',
				'45' => '45',

			);
			
//장비 타입
$GP -> MACHINE_TYPE = array(
				'A' => '진단장비',
				'B' => '수술/시술장비',
			);


//진료일정타입

$GP -> DOCTOR_SCH = array(
				'1' => '진료',
				'2' => '수술',
				'3' => '클리닉',
				'4' => '휴진',
				'5' => '진료/수술',
				'6' => '외래',
			);

//대분류
$GP -> CATE_TYPE1 = array(
				'' => '전체',
				'A' => '상급병실료',
				'B' => '식대',
				'C' => '치료소모품',
				'D' => '검사',
				'E' => '시술',
				'F' => 'MRI',
				'G' => '초음파',
				'H' => '이학요법',
				'I' => '주사',
				'J' => '수술재료대',
				'K' => '기타',
			);


//치료법
$GP->CATE_CURE = array(
				'A'=>'허리',
				'B'=>'목',
				'C'=>'어깨',
				'D'=>'팔꿈치',
				'E'=>'수부(손/손목)',
				'F'=>'고관절',
				'G'=>'무릎',
				'H'=>'족부(발/발목)',
			);




$GP->CON_TYPE = array(
				'1' => '일반',
				'2' => '좌우배치',
				'3' => '왼쪽 이미지',
				'4' => '오른쪽 이미지',
				'5' => '이미지',
				'6' => '리스트 형태',
				'7' => '탭 형태',
				'8' => '아코디언 형태',
				'9' => '동영상',
				'12' => '링크모음',
				'10' => '페이지 주요문구',
				'11' => '최종 버튼',

			);


$GP->CON_CNT = array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6' => '6',
				'7' => '7',
				'8' => '8',
				'9' => '9',
				'10' => '10',
			);


//대분류
$GP -> NONPAY_CATE_TYPE1 = array(	
				'1' => '행위료',
				'2' => '치료재료',
				'3' => '약제비',
				'4' => '제증명수수료',
			);

//중분류
$GP -> NONPAY_CATE_TYPE1_1 = array(
				'1' => '1-1장 상급병실료 차액',
				'2' => '제2장 검사료',
				'3' => '2-1장 초음파검사료',
				'4' => '    3-1장 자기공명영상진단료(MRI)',
				'5' => '    3-3장 양전자단층촬영료(PET) ',
				'6' => '제7장 이학요법료(물리치료료)',
				'7' => '제9장 처치 및 수술료 등',
				'98' => '17장 입원환자식대',
				'99' => '기타',
			);


$GP -> NONPAY_CATE_TYPE1_2 = array(
				'1' => '보조기',
				'2' => '처치재료',
				'3' => '치료재료대',
				'4' => '린넨',
			);

$GP -> NONPAY_CATE_TYPE1_3 = array(
				'1' => '약제비',
				'2' => '주사제',
			);
			

// 예약간격 구분
$GP -> RESERVE_INTERVAL_TYPE	 = array(
						"10" => "10분",
						"15" => "15분",
						"30" => "30분",
						"60" => "1시간"
					);

$GP->RESERVE_CL_TYPE = array(
					'1'=>'초진',
					'2'=>'재진',
					);



//페이지통계 잡을 곳
$GP->PAGE_TYPE = array(
				'/intro/intro01.html' => array(
										'0' => 'SW1',
										'1'=>'윌병원 다짐'
									),

			);

$GP -> DOCTOR_SCH_SHOW = array(
				'1' => '<span class="diag">진료</span>',
				'2' => '<span class="oper">수술</span>',
				'3' => '<span class="oper">클리닉</span>',
				'4' => '<span class="diag">휴진</span>',
				'5' => '<span class="oper">진료/수술</span>',
				'6' => '<span class="oper" style="color:#004ea2;">외래</span>',
			);

$GP -> DOCTOR_SCH_SHOW2 = array(
				'1' => '<span class="type01">진료</span>',
				'2' => '수술',
				'6'=> '비고 참조'
			);




$GP-> WEB_TITLE = "세종스포츠정형외과";
$GP-> ADM_TITLE = "세종스포츠정형외과 관리자 페이지";
?>
