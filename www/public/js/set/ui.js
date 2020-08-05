var slider = [],
	co = [],
	fn = [];
co.originFontSize = [];
co.resizeFontSize = [];
// document size type
!co.viewContsCount && (co.viewContsCount = 0);
co.getdoc = (function(body,viewport,size,winWidth,contents,count){
	body =$('body');
	switch (body.css('z-index')){
		case '1' : if (co.device != 'pc'){co.device = 'pc';co.respond = true;co.respondView = true;}break;
		case '2' : if (co.device != 'tb'){co.device = 'tb';co.respond = true;co.respondView = true;}break;
		case '3' : if (co.device != 'mb'){co.device = 'mb';co.respond = true;co.respondView = true;}break;
	}
	viewport = document.getElementById('viewport');
	size = parseInt(body.css('min-width'));
	winWidth = window.screen.width;
//	if (winWidth <= size){
//		viewport.setAttribute('content','user-scalable=no, width=' + size + 'px');
//	} else {
//		viewport.setAttribute('content','width=device-width, initials-cale=1, user-scalable=no');
//	}
	contents = $('.board-view > .contents').find('*');
	count = contents.length;
	contents.each(function(eq,el,size,resize,unit,origin){
		if (co.viewContsCount < count){
			co.viewContsCount++;
			if (el.style.fontSize){
				size = parseInt(el.style.fontSize);
				resize = size * 1.375;
				unit = el.style.fontSize.replace(size,'');
				co.originFontSize[eq] = size + unit;
				co.resizeFontSize[eq] = resize + unit;
			}
		}
		if (el.style.fontSize){
			if (co.device == 'mb'){
				el.style.fontSize = co.resizeFontSize[eq];
			} else {
				el.style.fontSize = co.originFontSize[eq];
			}
		}
	});
	co.respondView = false;
	$('#wrap').removeClass('hidden');
});

// navigation bar
co.nav = function(){
	var speed		= 350,
		body		= $('body'),
		nav			= $('#nav'),
		trigger		= nav.find('.trigger > a'),
		listDp1		= nav.find('.list .dp1'),
		dpMenu1		= listDp1.children('a'),
		dpSect1		= listDp1.children('.dp-section'),
		dp1			= nav.find('.dp1'),
		dp2			= nav.find('.dp2'),
		dpMenu2		= dp2.children('a'),
		dpSect2		= dp2.children('.dp-section');
	nav.find('.quick > .all > a').on('click',function(me){
		me = $(this);
		if (!me.hasClass('on')){
			$('#header').addClass('break');
			me.addClass('on');
			nav.children('.sitemap').show();
		} else {
			$('#header').removeClass('break');
			me.removeClass('on');
			nav.children('.sitemap').hide();
		}
	});
	nav.find('.overlay').on('click',function(){
		body.removeClass('nav-show');
		dp1.removeClass('on');
		dp2.removeClass('on');
		dpSect1.hide();
		dpSect2.hide();
	});
	nav.find('.group').find('.btn-close').on('click',function(){
		body.removeClass('nav-show');
		dp1.removeClass('on');
		dp2.removeClass('on');
		dpSect1.hide();
		dpSect2.hide();
	});
	trigger.on('click',function(){
		body.addClass('nav-show');
		if (dp1.hasClass('on')) dp1.removeClass('on');
		nav.find('.group > .panel').fadeIn(500);
	});
	dpMenu1.on({
		'focusin mouseenter' : function(me,parent,siblings){
			me		= $(this);
			parent	= me.parent();
			siblings = parent.siblings('.on');
			if (co.device == 'pc') {
				dp2.removeClass('on');
				if (nav.find('.quick > .all > a').hasClass('on')){
					nav.find('.quick > .all > a').trigger('click');
				}
				body.addClass('nav-show');
				if (!parent.hasClass('on')){
					siblings.children('.dp-section').stop().slideUp(speed);
					siblings.removeClass('on');
					parent.addClass('on');
					parent.children('.dp-section').stop().slideDown(speed);
				}
			}
			return false;
		},
		'focusout blur' :function(){
			setTimeout(function(){
				if(co.device == 'pc' && $(':focus').parents('#nav .list').length == 0){
					body.removeClass('nav-show');
					setTimeout(function(){
						dp1.removeClass('on');
						dp1.children('.dp-section').stop().slideUp(speed);
					},200);
				}
			});
		},
		'click' : function(me, parent){
			me = $(this),
			parent = me.parent();
			if (co.device != 'pc'){
				if (parent.hasClass('on')){
					parent.removeClass('on').find('.dp-section').stop().slideUp('fase');
				} else {
					parent.siblings('.on').find('.dp-section').stop().slideUp('fase');
					parent.siblings('.on').removeClass('on');
					parent.addClass('on');
					parent.children('.dp-section').removeAttr('style').stop().slideDown('fase');
				}
				if (parent.children('.dp-section').length > 0) return false;
			}
		}
	});
	dp1.on({
		'mouseleave' : function(me){
			me = $(this);
			if (co.device == 'pc'){
				me.parents('.list').length > 0 && me.children('.dp-section').stop().slideUp(speed);
				body.removeClass('nav-show');
				dp1.removeClass('on');
				dp2.removeClass('on');
				dpSect2.stop().fadeOut(speed);
			}
		}
	});
	dpMenu2.on({
		'focusin mouseenter' : function(me,parent,siblings){
			me = $(this);
			parent	= me.parent();
			siblings = parent.siblings('.on');
			if (co.device == 'pc') {
				if (!parent.hasClass('on')){
					siblings.children('.dp-section').stop().fadeOut(speed);
					siblings.removeClass('on');
					parent.addClass('on');
					parent.children('.dp-section').stop().fadeIn(speed);
				}
			}
			return false;
		},
		'focusout blur' :function(){
			setTimeout(function(){
				if(co.device == 'pc' && $(':focus').parents('#nav').length == 0){
					body.removeClass('nav-show');
					setTimeout(function(){
						dp2.removeClass('on');
						dp2.children('.dp-section').stop().slideUp(speed);
					},200);
				}
			});
		},
		'click' : function(me, parent){
			me = $(this),
			parent = me.parent();
			if (co.device != 'pc'){
				if (parent.hasClass('on')){
					parent.removeClass('on').find('.dp-section').stop().slideUp('fase');
				} else {
					parent.siblings('.on').find('.dp-section').stop().slideUp('fase');
					parent.siblings('.on').removeClass('on');
					parent.addClass('on');
					parent.children('.dp-section').removeAttr('style').stop().slideDown('fase');
				}
				if (parent.children('.dp-section').length > 0) return false;
			}
		}
	});
	$(window).on(co.reszieEvent,function(){
		if (co.respond){
			co.respond = false;
			body.removeClass('nav-show');
			dp1.removeClass('on');
			dp2.removeClass('on');
			dpSect1.hide();
			dpSect2.hide();
		}
	});
	var locat = $('#location');
	if (locat.length > 0){
		var locDp = locat.find('.depth'),
			locDp1 = locDp.eq(0),
			locDp2 = locDp.eq(1),
			locDp3 = locDp.eq(2);

		locDp1.children('a').children('span').html(nav.find('.dp1.current').children('a').text());
		locDp1.children('.dp-section').children('li').eq(nav.find('.dp1.current').index()).addClass('current');
		locDp2.children('a').children('span').html(nav.find('.dp2.current').children('a').text());
		locDp2.children('.dp-section').html(nav.find('.dp1.current').children('.dp-section').children('ul').html());
		locDp2.find('.dp2').children('.dp-section').remove();
		locDp.find('.dp2.sub').removeClass('sub').children('.dp-section').remove();
		if (nav.find('.dp3.current').length == 0){
			locDp3.remove();
		} else {
			locDp3.children('a').children('span').html(nav.find('.dp3.current').children('a').text());
			locDp3.children('.dp-section').html(nav.find('.dp2.current').children('.dp-section').html());
		}
		locDp.children('a').on('click',function(){
			var parent = $(this).parents('.depth');
			if (!parent.hasClass('on')){
				locDp.removeClass('on').children('.dp-section').stop().slideUp(200);
				parent.addClass('on').children('.dp-section').css('height','auto').slideDown(200);
			} else {
				parent.removeClass('on').children('.dp-section').stop().slideUp(200);
			}
		});
		locDp.on('mouseleave',function(){
			locat.find(':focus').trigger('blur');
			locDp.removeClass('on').children('.dp-section').stop().slideUp(200);
		});
		var lnb = $('#lnb');
		if (lnb.length > 0){
			lnb.children('.header').html(nav.find('.dp1.current').children('a').html());
			lnb.children('.contain').html(nav.find('.dp1.current').children('.dp-section').html());
			lnb.children('.contain').find('a').on('click',function(){
				var parent = $(this).parent();
				if (parent.children('.dp-section').length > 0){
					if (!parent.hasClass('on')){
						lnb.children('.dp-section').stop().slideUp(200);
						parent.addClass('on').children('.dp-section').css('height','auto').slideDown(200);
					} else {
						parent.removeClass('on').children('.dp-section').stop().slideUp(200);
					}
					return false;
				}
			});
			if (lnb.find('.dp2.current').children('.dp-section').length > 0){
				lnb.find('.dp2.current').children('a').trigger('click');
			}
		}
	}
};

// tab contents
co.tab = function(){
	$('.tab').each(function(){
		var wrap		= $(this),
			title		= wrap.children('.trigger'),
			list		= wrap.children('.list'),
			item		= list.children('li'),
			listInit	= list.data('init');
		var current = function(trigger, callback){
			var parent = trigger.parent(),
				isCurrent = parent.hasClass('on'),
				eq = parent.index(),
				text = trigger.html(),
				triggerInit = eval(trigger.data('init'));
				listInit = eval(callback);
				title.children('span').text(text);
			if (!isCurrent){
				if (!wrap.hasClass('link')){
					list.children('.on').removeClass('on');
					item.eq(eq).addClass('on');
				}
				if (wrap.next().hasClass('tab-contents')){
					var tab_contents = wrap.next();
					tab_contents.children('.on').removeClass('on');
					tab_contents.children('.panel').eq(eq).addClass('on');
				}
				if (title.hasClass(co.device) && list.hasClass('on')){
					list.removeClass('on');
					title.removeClass('on');
				}
				if (typeof listInit == 'function') listInit(trigger);
				if (typeof triggerInit == 'function') triggerInit(trigger);
			} else if (wrap.hasClass('passivity')) {
				list.children('.on').removeClass('on');
				wrap.next().children('.on').removeClass('on');
			}
			if (wrap.hasClass(co.device)){
				list.removeClass('on');
				title.removeClass('on');
			}
			co.sideFixed();
		};
		title.on({
			'click':function(){
				if ((title.hasClass(co.device) || wrap.hasClass(co.device)) && !list.hasClass('on')){
					list.addClass('on');
					title.addClass('on');
				} else {
					list.removeClass('on');
					title.removeClass('on');
				}
			}
		});
		item.children('a').on({
			'click':function(){
				var me = $(this);
				current(me, listInit);
			}
		});
		wrap.on('mouseleave',function(){
			list.removeClass('on');
			title.removeClass('on');
		});
		if (!wrap.hasClass('passivity')){
			setTimeout(function(){
				if (!wrap.hasClass('link')){
					current(item.eq(0).children('a'), listInit);
				}else {
					current(list.find('.on').children('a'), listInit);
				}
			});
		}
	});
};
// accordian 
co.accordian = function() {
	$('.accordion').each(function(){
		var wrap			= $(this),
			panel			= wrap.children(),
			contsElement	= ".acco-contents",
			speed			= 500;
		panel.on('click','.acco-trigger',function(){
			var me = $(this),
				parent = me.parent(),
				contents = parent.find(contsElement),
				isCurrent = parent.hasClass('on');
			if (!isCurrent){
				var siblings = parent.siblings('.on').removeClass('on');
				siblings.find(contsElement).stop().slideUp(speed);
				parent.addClass('on');
				contents.stop().slideDown(speed);
			} else {
				parent.removeClass('on');
				contents.stop().slideUp(speed);
			}
			return false;
		});
	});
};
slider.item = [];
fn.sliderOption = function(el,custom,option){
	el = el.parent();
	var id = el.attr('id');
	!custom.speed && (custom.speed = 500);
	!custom.pause && (custom.pause = 6000);
	!custom.controlPrefix && (custom.controlPrefix = 'mswiper');
	option = {
		responsive: true,
		touchEnabled: true,
		oneToOneTouch :false,
		pager : false,
		controls : false,
		autoControls :false,
		nextText: '<i class="ip-icon-' + custom.controlPrefix + '-next"></i><span class="text-ir">next</span>',
		prevText: '<i class="ip-icon-' + custom.controlPrefix + '-prev"></i><span class="text-ir">prev</span>',
		startText: '<i class="ip-icon-' + custom.controlPrefix + '-play"></i><span class="tup">play</span>',
		stopText: '<i class="ip-icon-' + custom.controlPrefix + '-pause"></i><span class="tup">pause</span>',
	};
	$.extend(option,custom);
	if (custom.buildPager)option.buildPager = function(sliderIndex){
		return eval(custom.buildPager)(el, sliderIndex);
	}
	option.onSlideBefore = function($slideElement, oldIndex, newIndex){
		custom.onSlideBefore && eval(custom.onSlideBefore)(el, $slideElement, oldIndex, newIndex)
		$slideElement.siblings('.active').removeClass('active');
		el.find('.bx-controls').addClass('disabled');
		if (option.auto){
			slider.item[id].stopAuto();
			slider.item[id].startAuto();
		} 
	}
	option.onSlideAfter = function($slideElement, oldIndex, newIndex){
		custom.onSlideAfter && eval(custom.onSlideAfter)(el, $slideElement, oldIndex, newIndex)
		el.find('.bx-controls').removeClass('disabled');
		$slideElement.addClass('active');
	}
	option.onSliderLoad = function(currentIndex){
		custom.onSliderLoad && eval(custom.onSliderLoad)(el, currentIndex);
		setTimeout(function(){
			el.find('.swiper').children().not('.bx-clone').eq(0).addClass('active');
		});
	};
	return option;
};
co.flaxEffect = function(scroll,win,wrap,header,footer){
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
co.sideFixed = function(){
	var scroll = $(window).scrollTop(),
		strip = $('.side-strip'),
		visible = $('.side-visible'),
		stripHeight = strip.outerHeight(),
		visibleHeight = visible.outerHeight(),
		winHeight = $(window).outerHeight(),
		flag = visibleHeight + 50;
	if (co.side){
		co.side.destroy();
		visible.removeAttr('style').unwrap();
		co.side = null;
	} 
	if (winHeight - 20 > visibleHeight){
		flag = winHeight - 10;
	}
	if (co.device == 'pc'){
		var controller = new ScrollMagic.Controller();
		co.side = new ScrollMagic.Scene({
			triggerHook : 'onEnter',
			triggerElement: "#side-trigger",
			offset : flag,
			duration: stripHeight - visibleHeight
		})
		.setPin(".side-visible")
		.addTo(controller);
	} else {
		var controller = new ScrollMagic.Controller();
		co.side = new ScrollMagic.Scene({
			triggerHook : 'onEnter',
			triggerElement: "#side-trigger",
			offset : co.device == 'tb' ? 175 : 185,
			duration : stripHeight - 115,
		})
		.setPin(".side-visible")
		.addTo(controller);
	}
	$('html,body').scrollTop(scroll);
};
co.init = function(body, version){
	body =  $('body');
	co.getdoc();
	co.nav();
	co.tab();
	co.accordian();
	co.sideFixed();
	co.flaxEffect();
	co.respond = false;
	$('.coming').on('click',function(){
		alert('페이지 준비중입니다.');
		return false;
	});
	$('.fileBtn input').bind('change',function(){
		var val = $(this).val();
		$(this).parent().prev('.i_text').val(val);
	});
	$('.layerBtn').click(function(){
		$(this).next().show();
		return false;
	});
	$('.popClose').click(function(){
		$('.layerPopup').hide();
		return false;
	});
	$('.layerPopup .back').click(function(){
		$('.layerPopup').hide();
		return false;
	});
	$('.i-label > .i-placeholder').on('click',function(){
		$(this).next().trigger('focus');
	});
	$('.i-label > .i-text').on({
		'focus focusin' : function(){
			$(this).parent().children('.i-placeholder').hide();
		},
		'blur focusout' : function(input, placeholder){
			input = $(this),
			placeholder = $(this).parent().children('.i-placeholder');
			if (input.val().length > 0){
				placeholder.hide();
			} else {
				placeholder.show();
			}
		},
	});
	$(document).on('change','select',function(){
		var select = $(this),
			id = select.attr('id'),
			label = select.prev('label[for="'+id+'"]');
		if (label.length){
			if (select.val() != ''){
				label.addClass('on');
			} else {
				label.removeClass('on');
			}
			label.html(select.find('option:checked').html());
		}
	});
	
	$('.tit-box .drop-down').on('click',function(){
		var _this = $(this),
			content = $('.tit-box').children('.tit-panel'),
			speed = 300,
			h = 157;
			h += content.children('p').height();
		if (!content.hasClass('on')) {
			content.animate({'height':h+'px'},speed,function(){
				$(this).removeAttr('style').addClass('on');
			});
		} else {
			content.animate({'height':'360px'},speed,function(){
				$(this).removeAttr('style').removeClass('on');
			});
		}
	});

	$('#top-banner .btn-toggle').on('click',function(wrap){
		wrap = $('#top-banner');
		if (wrap.hasClass('active')){
			wrap.removeClass('active');
			wrap.find('.header').slideDown();
			wrap.find('.contain').slideUp();
		} else {
			wrap.addClass('active');
			wrap.find('.header').slideUp();
			wrap.find('.contain').slideDown();
		}
		return false;
	});

	$('.go2top').on('click', function(){
		$('html, body').scrollTop(0);
		return false;
	});

	$('.faq-list').each(function(faq,question,answer,speed){
		faq = $(this),
		question = faq.find('.question'),
		answer = faq.find('.answer'),
		speed = 500;
		question.on('click',function(me,isCurrent){
			me = $(this),
			isCurrent = me.hasClass('on');
			if (isCurrent){
				me.removeClass('on');
				answer.stop().slideUp(speed,function(){
					$(this).removeAttr('style').hide();
				});
			} else {
				question.removeClass('on');
				answer.stop().slideUp(speed,function(){
					$(this).removeAttr('style').hide();
				});
				me.addClass('on');
				me.next().stop().slideDown(speed,function(){
					$(this).removeAttr('style').show();
				});
			}
		});
		question.eq(0).trigger('click');
	});

	if ($('#wrap.desktop').length){
		$('#wrap.desktop').find('a[href^="tel:"]').on('click',function(){
			console.log('not support call');
			return false;
		});
	}
	$('.swiper').each(function(eq, el){
		el = $(el);
		var id = el.parent().attr('id');
		slider.item[id] = el.bxSlider(fn.sliderOption(el,el.data()));
	});
	$('.ui-select').each(function(eq,ui){
		ui = $(ui);
		ui
		.on('click','.trigger',function(){
			$(this).parent('.ui-select').toggleClass('on');
		})
		.on('click','.option > li > a',function(option,parent,select,value,callback){
			option = $(this);
			if (option.attr('href').indexOf('javascript:void') == 0){
				parent = option.parent();
				select = option.parents('.ui-select');
				parent.siblings('.current').removeClass('current');
				parent.addClass('current');
				value = option.data('value');
				select.find('.trigger > span').text(option.text());
				select.data('value', value);
				callback = select.data('callback');
				if (callback){
					callback = eval(callback);
					if (typeof callback == 'function') callback(value);
				}
				select.removeClass('on');
			}
		})
		.on('mouseleave', function(){
			$(this).removeClass('on');
		});
		if (ui.find('.option > li.on').length){
			ui.find('.trigger > span').text(ui.find('.option > li.on').text());
		}
	});
	$('.ui-accordion').each(function(accordion,panel,contsElement,speed,tab){
		accordion		= $(this),
		panel			= accordion.children(),
		contsElement	= ".acco-contents",
		speed			= 250;
		tab = panel.filter('.tab-header');
		tab.find('a').on('click',function(parent,eq){
			parent = $(this).parent();
			parent.siblings('.on').removeClass('on');
			parent.addClass('on');
			eq = parent.index();
			panel.eq(++eq).children('.acco-trigger').trigger('click');
		});
		panel.on('click','.acco-trigger',function(e,element,parent,contents,isCurrent,siblings){
			element = $(this),
			parent = element.parent(),
			contents = parent.find(contsElement),
			isCurrent = parent.hasClass('on');
			if (!isCurrent){
				tab.length && tab.children().removeClass('on').removeClass('active').eq(parent.index()-1).addClass('on').addClass('active');
				if (panel.data('accent') != 'false'){
					siblings = parent.siblings('.on').removeClass('on').removeClass('active');
					if (tab.length && co.device == 'pc' || accordion.hasClass('fix')){
						siblings.find(contsElement).removeAttr('style').hide();
					} else {
						siblings.find(contsElement).stop().slideUp(speed,function(){
							siblings.find(contsElement).removeAttr('style').hide();
						});
					}
				}
				parent.addClass('on').addClass('active');
				if (tab.length && co.device == 'pc' || accordion.hasClass('fix')){
					contents.removeAttr('style').show();
				} else {
					contents.stop().slideDown(speed,function(win,offset,scroll){
						contents.removeAttr('style').show();
						/*!co.accoCount && (co.accoCount = 0);
						co.accoCount++; 
						if (co.accoCount > $('.ui-accordion').length){
							win = $(window);
							offset = contents.prev().offset().top - $('#header').height();
							scroll = win.scrollTop();
							offset < scroll && $('html,body').animate({'scrollTop':offset});
						}*/
					});
				}
			}  else if((!tab.length || tab.hasClass('toggle')) && co.device != 'pc') {
				parent.removeClass('on');
				contents.stop().slideUp(speed,function(){
					contents.removeAttr('style');
				});
			} else if((!tab.length || tab.hasClass('step'))) {
				parent.removeClass('on');
				contents.stop().slideUp(speed,function(){
					contents.removeAttr('style');
				});
			}  
		});
		$(window).on(co.reszieEvent,function(){
			if (co.device == 'pc'){
				var active = panel.filter('.active');
				if (!active.hasClass('on')){
					active.addClass('on');
					active.find(contsElement).show();
				}
			}
		});
		accordion.children('.on').removeClass('on').find('.acco-trigger').trigger('click');
	});
	if ($.browser.msie && $.browser.versionNumber < 9){
		version = $('<div id="version"><p>고객님께서는 현재 Explorer 구형버전으로 접속 중이십니다. 이 사이트는 Explorer 최신버전에 최적화 되어 있습니다. <a href="http://windows.microsoft.com/ko-kr/internet-explorer/download-ie" target="_blank">Explorer 업그레이드 하기</a></p> <button type="button" class="version-close">X</button></div>')
		body.prepend(version);
		version.on('click','.version-close',function(){
			version.remove();
		});
	}
};
co.reszieEvent = 'orientationchange' in window ? 'orientationchange' : 'resize';
co.resize = function(screen){
	co.getdoc();
	co.sideFixed();
	if (co.respond) co.flaxEffect();
	if (fn.resize) fn.resize();
};
co.scroll = function(){
	co.flaxEffect();
	if (fn.scroll) fn.scroll();
};
($(function(){
	$(document).on('ready',function(){
		co.init();
		if (fn.init) fn.init();
	});
	$(window).on(co.reszieEvent, function() {
		co.resize();
	})
	.on('scroll',function(){
		co.scroll();
	});
}(jQuery)));
Date.prototype.format = function(f) {
	if (!this.valueOf()) return ' ';
	var weekName = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
	var d = this;
	var h;
	return f.replace(/(yyyy|yy|MM|dd|E|hh|mm|ss|a\/p)/gi, function($1) {
		switch ($1) {
			case 'yyyy': return d.getFullYear();
			case 'yy': return (d.getFullYear() % 1000).zf(2);
			case 'MM': return (d.getMonth() + 1).zf(2);
			case 'dd': return d.getDate().zf(2);
			case 'E': return weekName[d.getDay()];
			case 'HH': return d.getHours().zf(2);
			case 'hh': return ((h = d.getHours() % 12) ? h : 12).zf(2);
			case 'mm': return d.getMinutes().zf(2);
			case 'ss': return d.getSeconds().zf(2);
			case 'a/p': return d.getHours() < 12 ? 'AM' : 'PM';
			default: return $1;
		}
	});
};
String.prototype.string = function(len){var s = '', i = 0; while (i++ < len) { s += this; } return s;};
String.prototype.zf = function(len){return '0'.string(len - this.length) + this;};
Number.prototype.zf = function(len){return this.toString().zf(len);};
Array.prototype.remove=function(){for(var t,r,e=arguments,i=e.length;i&&this.length;)for(t=e[--i];-1!==(r=this.indexOf(t));)this.splice(r,1);return this};


