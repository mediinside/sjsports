function font_size(){
	var body_width = $('body').width();
	if(body_width <= 720){
		$('body').css({
			"font-size": Math.round(24*(body_width/720))+"px"
		});
	}
}

function search_box_on(){
	$('.search_box_1').show();
}
function search_box_off(){
	$('.search_box_1').hide();
}

$(document).ready(function(){
	font_size();
	$(window).resize(function(){
		 font_size();
	});
});
