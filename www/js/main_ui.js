co.flaxEffect = function(scroll){
	var win = $(window),
		wrap = $('#wrap'),
		header = $('#header'),
		footer = $('#footer'),
		trigger,
		top;
	!scroll && (scroll = win.scrollTop());

	if (co.device == 'pc'){
		trigger = 256;
		top = '-100px';
	} else if (co.device == 'tb'){
		trigger = 200;
		top = '-114px';
	} else {
		trigger = 0;
		top = 0;
	}
	if (scroll > trigger){
		if (!wrap.hasClass('fixed')){
			wrap.addClass('fixed');
			trigger && header.css('top',top).animate({'top':0},250,function(){
				$(this).removeAttr('style');
			});
		}
	} else {
		wrap.removeClass('fixed');
		header.stop().removeAttr('style');
	}
};