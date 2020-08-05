/*
 * eluo util
 * 	2018.05
 */

/*
 * jquery tmpl 사용 후
 */
function tmplAfter(selector) {
	$(selector).find( ".datepicker" ).datepicker({
		defaultDate: 0,
		showOtherMonths:true,
		autoSize: true,
		appendText: '<span class="help-block"><i class="icon-calendar"></i></span>',
		dateFormat: 'yy-mm-dd',
		changeMonth : true,
		changeYear : true
	});
}

// 비밀번호 정규식 / 영문,숫자,특수문자(!@$%^&* 만 허용)
var pwd_match = /([a-zA-Z0-9].*[!,@,#,$,%,^,&,*,?,_,~])|([!,@,#,$,%,^,&,*,?,_,~].*[a-zA-Z0-9])/;


/*
 * 영문 & 숫자만 입력 체크
 */
$(document).ready(function (){

	$(".engNumOnly").on("keyup", function (event){
		var regType = /^[A-Za-z0-9\s]*$/;
		if(!regType.test($(this).val())){
			$(this).val("");
			alert("영문과 숫자만 입력가능합니다..");
			return false;
		}
	});
});


/**
 * Number.prototype.format(n, x)
 *
 * @param integer n: length of decimal
 * @param integer x: length of sections
 * 	var n = 123123;
 *	n.format()  	// 123,123
 *	// 소수점 2자리 경우
 *	n.format(3,2)   // 123,123.00
 */
Number.prototype.format = function(n, x) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
};

/**
 * Number.prototype.show(max)
 * 	var n = 123;
 *	n.show(999)  // 123
 *	n.show(99)   // 99+
 *	n.show()   	// 99+
 */
Number.prototype.show = function(max) {
	if(max == undefined) max = 99;
    return (this < max ? this : max+"+");
};