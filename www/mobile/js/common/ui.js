
/*
 * ui
 * create Rule

	ui.name|String| = function(){

	}
 */

(function($, core, ui, undefined){
	'use strict';

	ui.PIE_CHART = function(){
		var $$ = core.Selector(arguments[0], {
			svg : 'svg',
			sector : '.sector',
			per : '.per em',
			circle : 'circle',
			slice: '.slice',
			valueItem: '.value li:not(".calc")'
		});
		var methods = {
			GetRadiusPI: function(r, slice){
				var pi = 2 * Math.PI * r,
					_pi = pi - (pi * slice/360);
				return _pi;
			},
			GetDashOffset: function( n, rPI ){
				return opts.dasharray - rPI*n/100;
			}
		}
		var opts = {
			play: $$._dataSet.play || false,
			rad: parseInt($$.circle.attr('r')),
			slice: $$._dataSet.slice || 0,
			num: $$.sector.toArray().map(function(el){
				return el.textContent;
			}),
			value: $$._dataSet.value || false,
			point: $$._dataSet.point || false,
			position: $$._dataSet.position || 0,
		};
		opts.dasharray = 2 * Math.PI * opts.rad;
		opts.pi = methods.GetRadiusPI(opts.rad, opts.slice);
		opts.deg = (opts.position - 3) * 30 + (opts.slice / 2);
		opts.rotateDeg = opts.pi / opts.dasharray * 3.6;
		opts.pointDeg = [0];
		opts.duration = opts.num.map(function(v, i){
			opts.pointDeg.push(opts.pointDeg[i] + opts.num[i] * opts.rotateDeg);
			return v * 20;
		});
		opts.delay = opts.duration.reduce(function(pV, cV, i, arr){
			var d = (i !== 0) ? pV[i-1] + arr[i-1] : 0;
			pV.push(d);
			return pV;
		}, []);



		this.events = {
			_init: function(){
				if(opts.point) this._createPoint();
				this._set();
				if(opts.play) this.animation._all();

				$$.container.on('PLAY', $.proxy(this.animation._all, this.animation));
			},
			_createValue: function(){
				var $el = $('<div class="value"></div>');

				$$.sector.each(function( i ){
					$el.append('<div><strong>'+ opts.value[i].label +'</strong></div>');
				});

				$$.container.append($el);
			},
			_createPoint: function(){
				var $el = $("<div class='point'></div>");
				$el.css('transform', 'rotate(' + opts.deg + 'deg)');
				$$.sector.each(function( i ){
					$el.append('<span style="transform:rotate(' +opts.pointDeg[i]+ 'deg)">');
				});
				$$.point = $el.find('span');
				$$.container.append($el);
			},
			_set: function(){
				if(core.browser.isIE) $$.container.addClass('ie');
				$$.svg.css('transform', 'rotate(' + opts.deg + 'deg)');
				$$.circle.css('stroke-dasharray', opts.dasharray+'%');
				$$.sector.css('stroke-dashoffset', opts.dasharray+'%');
				$$.slice.css({
					'stroke-dasharray': opts.dasharray+'%',
					'stroke-dashoffset' : -opts.pi+'%'
				});

				$$.sector.each(function(i){
					this.setAttributeNS(null, 'transform', 'rotate('+opts.pointDeg[i]+' 50 50)');
				});
			},
			animation: {
				_all: function(){
					this._sector();
					if(opts.value) this._value();
					if(opts.point) this._point();
				},
				_sector: function(){
					$$.sector.each(function(i){
						var offset = methods.GetDashOffset(opts.num[i], opts.pi);
						$(this).delay(opts.delay[i]).animate({
							'stroke-dashoffset' : offset+'%'
						}, {
							easing: 'linear',
							duration: opts.duration[i]
						});
					});
				},
				_value: function(){
					$$.valueItem.each(function(i){
						var $me = $(this),
							$em = $me.find('em'),
							num = $em.text();
						$em.text('0');

						var $calc = $$.valueItem.siblings('.calc').find('em');;
						var calcText = $calc.text();

						$me.delay(opts.delay[i]).animate({
							num :num
						},{
							easing: 'linear',
							duration: opts.duration[i],
							step: function(n){
								var n = parseInt(n);
								$calc.text(calcText-n);
								$em.text(n);
							}
						});
					});
				},
				_point: function(i){
					$$.point.each(function(i){
						var $me = $(this);
						$me.delay(opts.delay[i]).animate({
							deg :opts.pointDeg[i+1]
						}, {
							easing: 'linear',
							duration: opts.duration[i],
							start: function(){
								$me.show();
								arguments[0].tweens[0].start = opts.pointDeg[i]
							},
							step: function(now, fx){
								$me.css('transform', 'rotate('+ now +'deg)');
							}
						});
					});
				}
			},
		}
	}

	ui.SELECT = function(){
		var $$ = core.Selector(arguments[0], {
			anchor : ">button",
			group : ">ul",
			item : ">ul >li",
			itemAll: ">ul >li.all"
		});

		var opts = core.DataSet($$._dataSet, {
			selectIdx : 0,
			length: $$.item.length,
			limit : 1,
			type : "default",
			selectItems : [],
			anchorMsg: $$.anchor.text(),
			disabled: false,
			scroll: $$.item.length,
		});

		this.events = {
			_init: function(){
				if(opts.disabled || $$.container.hasClass("disabled")) return;
				this._set();

				core.$doc.on("click", $.proxy(this._escapeSelect, this));
				$$.container.on("click", ">button", $.proxy(this._accessSelect, this));
				$$.container.on("click", ">ul >li:not('.all')", $.proxy(this._inputSelect, this));
				$$.container.on("click", ">ul >li.all", $.proxy(this._allSelect, this));

				$$.container.on("INIT", this._ajaxInit); //ajax data append시 이벤트 발생
				$$.container.on("SELECT", $.proxy(function(){
					var arr = [];
					for(var i=1; i<arguments.length;i++){
						arr.push(arguments[i]);
					}
					this._setSelectIndex(arr);
				}, this));
				$$.container.on("SET_SCROLL", this._setScroll);
			},
			_set: function(){
				if(opts.selectIdx !== 0) this._setSelectIndex();
				if(opts.type == "multi") this._multiSet();
				this._setScroll();
			},
			_setScroll: function(){
				if($$.item.length > opts.scroll){
					var $el = $$.item.filter(":lt("+opts.scroll+")"),
						scrollHeight = 0;

					$el.each(function(){
						scrollHeight += $(this).outerHeight();
					});
					$$.group.css({
						"height": scrollHeight,
						"overflow": "auto"
					});
				}
			},
			_setSelectIndex: function( idx ){
				var arrIdx = idx || opts.selectIdx;
				opts.selectItems = [];
				if(idx!=undefined) {
					arrIdx.forEach(function(val, idx){
						opts.selectItems[idx] = {
							idx: val,
							text: $$.item.eq(val).text()
						};
					});

					this._outputSelect();
				}
			},
			_multiSet: function(){
				opts.limit = $$._dataSet.limit || opts.length;
			},
			_ajaxInit: function(){
				$$.reInit();
				opts.reInit();
			},
			_inputSelect: function(e){
				var $target = $(e.currentTarget),
					sIdx = $target.index();

				switch(opts.type){
					case "default":
						opts.selectItems[0] = {idx: sIdx, text: $$.item.eq(sIdx).text()};
						this._hideGroup();
					break;
					case "multi":
						this._alreadyCheck(sIdx);
						if(opts.selectItems.length > opts.limit){
							opts.selectItems.pop();
							return alert(opts.limit+"개 까지 선택 가능합니다");
						}
					break;
				}
				this._outputSelect(e);
			},
			_allSelect: function(e){
				var is = $(e.currentTarget).hasClass("active");

				if(!is){
					var arr = [];
					for(var i=0; i < opts.length; i++){
						arr[i] = i;
					}
					this._setSelectIndex(arr);
					$$.item.filter(".all").addClass("active");
				}else{
					$$.item.removeClass("active");
					opts.selectItems = [];
					this._outputSelect();
					$$.item.filter(".all").removeClass("active");
				}
				this._hideGroup();
			},
			_alreadyCheck: function(idx){
				if($$.item.eq(idx).hasClass("active")){
					for(var i in opts.selectItems){
						if(idx == opts.selectItems[i].idx){
							opts.selectItems.splice(i, 1);
						}
					}
				}else{
					opts.selectItems.push({
						idx : idx,
						text: $$.item.eq(idx).text()
					});
				}
			},
			_outputSelect: function(evt){
				var val = [];
				$$.item.removeClass("active");
				for(var i in opts.selectItems){
					if($$.item.eq(opts.selectItems[i].idx).hasClass("all")) continue;
					$$.item.eq(opts.selectItems[i].idx).addClass("active");
					val.push(opts.selectItems[i].text);
				}
				if(!val.length) val.push(opts.anchorMsg);
				$$.anchor.text(val.join(", "));

				//SELECTED CALLBACK
				if(evt !== undefined){
					$$.container.trigger("SELECTED", [opts.selectItems]);
				}
			},
			_hideGroup: function(){
				$$.container.removeClass("active");
				$$.group.removeClass("above");
			},
			_detectPosition: function(){
				var pos_t = $$.container.offset().top,
					con_h = $$.container.outerHeight(),
					group_h = $$.group.outerHeight();

				if(pos_t + con_h + group_h >= core.screen.scrollTop + core.screen.height){
					$$.group.addClass("above");
				}else{
					$$.group.removeClass("above");
				}
			},
			_accessSelect: function(){
				this._detectPosition();
				$$.container.toggleClass("active");
			},
			_escapeSelect: function(e){
				if(!$(e.target).closest($$.container).length) this._hideGroup();
			},
		}
	}

	ui.FILEINPUT = function(){
		var $$ = core.Selector(arguments[0], {
		});
		var opts = core.DataSet($$._dataSet, {
			btnTitle : 'file',
		});
		var $obj;
		this.events = {
			_init: function(){
				var $file = $$.container;
				console.log($file.html());
				$obj = $('<div class="file-input"></div>')
				.append('<div class="file-name"><span></span></div>')
				.append('<span class="file-btn"><span></span></span>')
				.insertAfter($file);
				$obj.find('.file-btn').append($file);
				$obj.find('.file-btn').find('span').text(opts.btnTitle);

				$file.on('change', this._change);
			},
			_change:function(e){
				var file = e.target.files !== undefined ? e.target.files[0] : { name: e.target.value.replace(/^.+\\/, '') };
				if ( !file ) return;
				$obj.find( '.file-name > span' ).text(file.name);
			}
		}
	}

	ui.PLACEHOLDER = function(){
		var Browser = {chk : navigator.userAgent.toLowerCase()}
		var version = {ie : Browser.chk.indexOf('msie') != -1, ie6 : Browser.chk.indexOf('msie 6') != -1, ie7 : Browser.chk.indexOf('msie 7') != -1, ie8 : Browser.chk.indexOf('msie 8') != -1, ie9 : Browser.chk.indexOf('msie 9') != -1}  
		var $txtfield = $(arguments[0]);
		this.events = {
			_init: function(){
				if(version.ie9|| version.ie8 || version.ie7 || version.ie){
					  $txtfield.each(function(){
						  if( $(this).val() == ""){
							$(this).val($(this).attr("placeholder"));
						  }
					  });
					  $txtfield.on('focusin', this._focusIn);
					  $txtfield.on('focusout', this._focusOut);
				  }
			},
			_focusIn:function(){
				if( $(this).val() == $(this).attr("placeholder")){
					$(this).val('');
				}
			},
			_focusOut:function(){
				if( $(this).val() == ""){
				  $(this).val($(this).attr("placeholder"));
			    }
			}
		}
	}

	ui.TAB = function(){
		var $$ = core.Selector(arguments[0], {
			nav : '> .tab-nav li',
			btn : '> .tab-nav a',
			cont : '> .tab-content > div'
		});
		var opts = core.DataSet($$._dataSet, {
			activeIdx : null,
			duration : 400
		});

		this.events = {
			_init:function(){
				$$.btn.on('click', this._tabSelect);
				if(opts.activeIdx != null){
					$$.nav.eq(opts.activeIdx).find('a').trigger('click');
				}
			},
			_tabSelect:function(e){
				var $tar = $(e.target);
				var targetIdx = $tar.parent().index();
				$$.nav.removeClass('active');
				$tar.parent().addClass('active');
				if($$.container.hasClass('anchor')){
					core.scroll.to($$.cont.eq(targetIdx).offset().top, opts.duration);
				}else{
					$$.cont.filter('.active').hide().removeClass('active');
					$$.cont.eq(targetIdx).fadeIn().addClass('active');
				}
				if($tar.attr('href').substring(0,1) == "#"){
					e.preventDefault();
				}
			}
		}

	}

	ui.ACCORDION = function(){
		var $$ = core.Selector(arguments[0], {
			item : '>.acc-item',
			head : '.acc-head',
			cont : '.acc-cont'
		});
		var opts = core.DataSet($$._dataSet, {
			sync: false,
			activeIdx : null,
			duration : 400
		});

		this.events = {
			_init:function(){
				console.dir(opts.sync);
				$$.head.on('click', this._accSelect);

				if(opts.activeIdx !== null){
					$$.item.eq(opts.activeIdx).find('.acc-head').trigger('click');
				}
			},
			_accSelect:function(e){
				var $tar = $(e.target),
					$root = $tar.closest('.acc-item');

				if($root.hasClass('active')){
					$root.removeClass('active');
					$root.find('.acc-cont').slideUp(opts.duration);
				}else{
					if(opts.sync){
						$$.item.removeClass('active').find('.acc-cont').slideUp(opts.duration);
					}
					$root.addClass('active');
					$root.find('.acc-cont').slideDown(opts.duration);
				}
			}
		}
	}

	ui.POPUP = function(){
		var $$ = core.Selector(arguments[0]);
		$$.popup = $($$._dataSet.target);
		$$.content = $$.popup.find('.content');
		var opts = core.DataSet($$._dataSet, {
			popup : {
				type : 'layer'
			},
			overflow: true
		});

		this.events = {
			_init: function(){
				$$.container.on('click OPEN', $.proxy(this.open._check, this));
				$$.popup.on('click', '.btn_close', this._close);
				$$.popup.on('CLOSE', this._close);
				if(opts.popup.type == 'layer') core.observer.on('RESIZE', this._detectSize);
			},
			open: {
				_check: function(){
					switch(opts.popup.type){
						case 'layer': this.open._layer.call(this);
						break;
						case 'link' : this.open._link.call(this);
						break;
						case 'iframe' : this.open._iframe.call(this);
						break;
						case 'window' : this.open._window();
						break;
					}
				},
				_layer: function(){
					if(opts.overflow) core.scroll.disable();
					$$.popup.addClass('on');
					this._detectSize();

					$$.focus = $$.content.find('a, button, textarea, :input, [tabindex]');
					opts.focusL = $$.focus.length;

					$$.focus.first().off().on('keydown', {type:'first'}, this._detectFocus)
					$$.focus.last().off().on('keydown', {type:'last'}, this._detectFocus)
					$$.content.focus();
				},
				_link: function(){
					var me = this;
					$$.content.load(opts.popup.url, function(){
						var $this = $(this),
							$img = $this.find("img"),
							len = $img.length,
							n = 0;

						if(len < 1){
							me.open._layer.call(me);
						}else{
							$img.load(function(){
								if(++n == len){
									me.open._layer.call(me);
								}
							});
						}


					});

					/* $$.content.load(opts.popup.url, $.proxy(function(){
						this.open._layer.call(this);
					},this)); */
				},
				_window: function(){
					var name = (!opts.popup.name) ? 'winPop' : opts.popup.name,
						left = (core.screen.width - opts.popup.w) / 2 + window.screenX,
						top = (core.screen.height - opts.popup.h) / 2 + window.screenY,
						option = 'width=' + opts.popup.w + ', height=' + opts.popup.h + ', top=' + top + ', left=' + left + ', scrollbars=yes, toolbar=no, resizable=yes',
						newWin = window.open(opts.popup.url, name, option);
					if(window.focus) newWin.focus();
				}
			},
			_close: function(){
				if(opts.overflow) core.scroll.enable();
				$$.popup.removeClass('on');
				$$.container.focus();
			},
			_detectFocus: function(e){
				var key = e.keyCode || e.which,
					type = e.data.type;

				switch(type){
					case 'first' :
						if(key == 9 && e.shiftKey){
							e.preventDefault();
							$$.focus.last().focus();
						}
					break;
					case 'last' :
						if(key == 9){
							e.preventDefault();
							if(e.shiftKey){
								$$.focus.eq(opts.focusL-2).focus();
								return;
							}
							$$.focus.first().focus();
						}
					break;
				}
			},
			_detectSize: function(){
				var $body = $$.popup.find('.body'),
					bodyH = $body[0].scrollHeight,
					headerH = $$.popup.find('.header').outerHeight(),
					cH = headerH + bodyH,
					limitH = core.screen.height * 0.9,
					scrollH = limitH - headerH;

				if(cH >= limitH){
					$body.css('height', scrollH);
				}else{
					$body.css('height', 'auto');
				}
			}
		}
	}

	ui.SLIDE = function(){
		var $$ = core.Selector(arguments[0], {
			view: '>.view',
			navigation: '.navigation'
		});
		var opts = core.DataSet(arguments[1], {
			direction: 'horizontal', // horizontal, vertical
			speed: 500,
			pager: false,
			navigation: false,
			loop: false,
			column: 1,
			columnGroup: 1,
			flicking: true,
			currentIndex: 0,
			slideMax: $$.view.children().length,
			slideMargin: 0,
			endDisabled: false,

		});

		this.events = {
			_init: function(){
				this.detect._opts.call(this);
				this._bindEvent();
			},
			detect: {
				_opts: function(){
					if(opts.direction == 'vertical') this.set._vertical();
					if($$.navigation.length > 0) this.set._navigation();
					if(opts.pager == 'list') this.create._pagerList();
					if(opts.pager == 'number') this.create._pagerNumber();
					if(opts.loop) this.create._cloneItem.call(this);
				},
				_resize: function(){
					$$.view.scrollLeft(this.calc.CurrentIndex() * this.calc.SlideWidth());
				},
				_flicking: function(){

				}
			},
			flicking: {
				_init: function(){

				}
			},
			_bindEvent: function(){
				$$.prev.on('click', {dir: -1}, $.proxy(this.slide._detect, this));
				$$.next.on('click', {dir: +1}, $.proxy(this.slide._detect, this));
				core.observer.on('RESIZE', $.proxy(this.detect._resize, this));

				if(opts.flicking) this.flicking._init();

				this.detect._resize.call(this);
			},
			calc: {
				SlideWidth : function(){ return $$.view.width() / opts.columnGroup },
				CurrentIndex: function(){ return (!opts.loop) ? opts.currentIndex : opts.currentIndex + 1 },
				Indexing: function(){

				},
				NextIndex: function( dir ){
					var idx = opts.currentIndex + dir;

					console.dir(idx);

					if(!opts.loop){
						if(idx == opts.slideMax) idx = 0;
						if(idx < 0) idx = opts.slideMax-1;
						return idx;
					}else{
						if(idx > opts.slideMax+1) idx = 0;
						if(idx < 0) idx = -1;
						return idx + 1;
					}

				},
				MovePosition: function(toIndex){
					return this.SlideWidth() * toIndex;
				}
			},
			set: {
				_navigation: function(){
					$$.prev = $$.navigation.find('.prev');
					$$.next = $$.navigation.find('.next');
				},
				_vertical: function(){
					$$.container.addClass('direction-vertical');
				},
			},
			create: {
				_pagerList: function(){

				},
				_pagerNumber: function(){

				},
				_cloneItem: function(){
					$$.itemFirst = $$.view.children().first().clone().addClass('clone-last');
					$$.itemLast = $$.view.children().last().clone().addClass('clone-first');
					$$.view.prepend($$.itemLast).append($$.itemFirst);
					$$.item = $$.view.children();
					//$$.view.scrollLeft(opts.SlideWidth() * (opts.slideIndex + 1));
					//opts.currentIndex = 1;
				}
			},
			slide: {
				_detect: function(e){
					var nextIdx = this.calc.NextIndex(e.data.dir);
					/* if(opts.slideIndex !== nextIdx){
						this.slide._to(nextIdx);
					} */
					this.slide._to.call(this, nextIdx);
				},
				_to: function(idx, speed){
					if(opts.isAni) return;
					opts.isAni = true;
					var duration = (speed !== undefined) ? speed : opts.speed;

					var a = this.calc.MovePosition(idx)

					$$.view.animate({
						scrollLeft: this.calc.MovePosition(idx)
					}, duration, $.proxy(function(){
						this.callBack._slideEnd(idx);
					}, this));
				},
			},
			callBack: {
				_slideEnd: function(idx){
					opts.isAni = false;
					opts.slideIndex = idx;



					if(!opts.loop) return;
					/* if(idx > opts.slideMax){
						$$.view.scrollLeft(opts.SlideWidth() * 1);
						opts.slideIndex = 0;
					}else if(idx <= 0){
						$$.view.scrollLeft(opts.SlideWidth() * opts.slideMax);
						opts.slideIndex = opts.slideMax-1;
					} */
				}
			},
			public: {
				getIndex: function(){
					console.dir(this);
				}
			}
		}
	}

	ui.PARALLAX_ANIMATION = function(){
		var $$ = core.Selector(arguments[0]);
		$$.target = (!$$._dataSet.target) ? $$.container : $$.container.find($$._dataSet.target);

		var data = [];
		$$.target.each(function(i){
			data[i] = core.DataSet($(this).data(), {
				option : {
					start : 0,
					duration: 1,
					length: $$.target.length
				},
			});
		});

		var events = this.events = {
			_init: function(){
				this._setStyle();
				core.observer.on('SCROLL', events._detectPosition);
			},
			_setStyle: function(){
				$$.target.each(function(i){
					TweenMax.set(this, data[i].animationStart);
				});
			},
			_detectPosition: function(){
				var complete = 0;
				$$.target.each(function(i){
					var $me = $(this);
					var elTop = $me.offset().top - core.screen.height + data[i].option.start;

					if(core.screen.scrollTop >= elTop){
						TweenMax.to($me, data[i].option.duration, data[i].animationEnd);
						++complete;
					}
					if(complete >= data.length) core.observer.off('SCROLL', events._detectPosition);
				});
			}
		}
	}

	ui.PARALLAX_SCROLL = function(){
		var $$ = core.Selector(arguments[0]);
		var data = core.DataSet($$._dataSet,{
			start: 0,
			speed: 0,
		});

		var events = this.events = {
			_init: function(){
				core.observer.on('SCROLL', events._detectPosition);
			},
			_detectPosition: function(){
				var top = $$.container.offset().top - core.screen.height + data.start,
					gap = core.screen.scrollTop - top;

				if(gap > 0){
					TweenMax.set($$.container,  {y:'+='+ (data.speed/10) });
				}else{
					TweenMax.set($$.container,  {y:0});
				}

				/* if(core.screen.scrollTop >= elTop){
					TweenMax.to($me, 1, {y:data});
					++complete;
				} */
			},

		}
	}
	ui.MAIN = function(){
		var $$ = core.Selector(arguments[0], {
			header : '> header',
			topBannerOpen: '> header .info',
			tvcmBtnPop: '.video-wrap .info > button',
			tvcmPop: '.video-wrap .info .detail-pop',
			btnTop: '.btn-top button',
			contents: '.contents > div'
		});

		var data = {
		};

		this.events = {
			_init: function(){
				if($$.container.attr('id') == 'main') this.header.init();
				//this.footer.init();
				this.tvcmPopup.init();
				this.contents.init();
				core.observer.notify('SCROLL');
			},
			header :{
				init: function(){
					core.observer.on('SCROLL', function(){
						if(core.screen.scrollTop > 0){
							$$.header.addClass('scroll');
						}else{
							$$.header.removeClass('scroll');
						}
					});

					$('header .nav li').hover(function(){
						$$.header.addClass('active');
					},function(){
						$$.header.removeClass('active');
					});

					$$.tb = $('.top-banner-wrap');
					$$.tc = $('.banner-cls');
					$$.td = $('.pc-all-open');
					$$.te = $('.mo-gnb-open');
					var tl = new TimelineMax({paused: true});

					tl.to($$.tb, .5, {y:0+'%', opacity:1})
					.to($$.header, .5, {y:$$.tb.height(), delay:-0.5});

					setTimeout(function(){
						tl.play();
					},1200);

					/*$$.topBannerOpen.on('click', function(){
						tl.play();
					});*/
					$$.tc.on('click', function(){
						tl.reverse();
					});
					$$.td.on('click', function(){
						TweenMax.to($$.tb, 1, {y:-130,ease:Back.easeOut});
						$$.header.css('transform','none');
						//TweenMax.to($$.header, 1, {y:0,ease:Back.easeOut});
						//tl.reverse();
					});
					$$.te.on('click', function(){
						TweenMax.to($$.tb, 1, {y:-130,ease:Back.easeOut});
						$$.header.css('transform','none');
						//TweenMax.to($$.header, 1, {y:0,ease:Back.easeOut});
						//tl.reverse();
					});
					$(window).on('scroll',function(){
						var scrollTop = $(window).scrollTop();
						console.log(scrollTop);
						if(scrollTop > 0){
							TweenMax.to($$.tb, 1, {y:-130,ease:Back.easeOut});
							$$.header.css('transform','none');
						}
					});
				}
			},
			/*footer: {
				init: function(){
					$$.btnTop.on('click', function(){
						alert('click');
						core.scroll.to('first', 1000);
					});
				}
			},*/
			tvcmPopup: {
				init: function(){
					$$.tvcmBtnPop.on('click', this.show);
					$$.tvcmPop.on('click', this.hide);
				},
				show: function(){
					TweenMax.set($$.tvcmPop, {display:'block', opacity:0, y:100});
					TweenMax.to($$.tvcmPop, .75, {opacity:1, y:0, ease:Back.easeOut});
				},
				hide: function(){
					TweenMax.to($$.tvcmPop, .75, {opacity:0, y:100, ease:Back.easeIn, display:'none'});
				}
			},
			contents: {
				init: function(){
					core.observer.on('SCROLL', this.detectContents);
					this.setContents();

					$$.contents.on('animation', function(){
						var $me = $(this);
						if($me.hasClass('end')) return;
						$me.addClass('end');
					});
					$$.recruit.on('animation', function(){
						TweenMax.to($$.recruit_a1, 1, {y:0, opacity:1, ease:Back.easeOut});
						TweenMax.staggerTo($$.recruit_a2, 1, {delay:.5, y:0, opacity:1, ease:Back.easeOut}, .2);
					});

					$$.question.on('animation', function(){
						TweenMax.staggerTo($$.question_a1, 1, {y:0, opacity:1, ease:Back.easeOut}, .2);
					});

					$$.news.on('animation', function(){
						TweenMax.to($$.news_a1, 1, {y:0, opacity:1, ease:Back.easeOut});
						TweenMax.to($$.news_a2, 1, {delay:.2, y:0, opacity:1, ease:Back.easeOut});
						TweenMax.staggerTo($$.news_a3, 1, {delay:.2, y:0, opacity:1, ease:Back.easeOut}, .2);
					});

					$$.tv.on('animation', function(){
						TweenMax.to($$.tv_a1, 1, {y:0, opacity:1, ease:Back.easeOut});
						TweenMax.to($$.tv_a2, 1, {delay:.2, y:0, opacity:1, ease:Back.easeOut});
						TweenMax.staggerTo($$.tv_a3, 1, {delay:.2, y:0, opacity:1, ease:Back.easeOut}, .2);
					});

					$$.business.on('animation', function(){
						if(!core.business) return;
						TweenMax.to($$.business_a1, 1, {y:0, opacity:1, ease:Back.easeOut});
						TweenMax.to($$.business_a2, 2, {delay:.2, y:0, opacity:1, ease:Back.easeOut});
						TweenMax.staggerTo($$.business.find('.list li'), 1, {delay:0.5, y:0, opacity:1, ease:Back.easeOut}, .2);
					});
				},
				setContents: function(){
					/* recruit */
					$$.recruit = $$.contents.filter('.recruit-wrap');
					$$.recruit_a1 = $$.recruit.find('strong');
					$$.recruit_a2 = $$.recruit.find('.cont');

					TweenMax.set([$$.recruit_a1, $$.recruit_a2], {y:100, opacity:0});

					/* question */
					$$.question = $$.contents.filter('.company-wrap');
					$$.question_a1 = $$.question.find('ul li');

					TweenMax.set($$.question_a1, {y:100, opacity:0});

					/* news & notice */
					$$.news = $$.contents.filter('.news-wrap');
					$$.news_a1 = $$.news.find('strong');
					$$.news_a2 = $$.news.find('.more');
					$$.news_a3 = $$.news.find('.news ul li');

					TweenMax.set([$$.news_a1, $$.news_a2, $$.news_a3], {y:100, opacity:0});

					/* tv / cm */
					$$.tv = $$.contents.filter('.video-wrap');
					$$.tv_a1 = $$.tv.find('strong');
					$$.tv_a2 = $$.tv.find('.more');
					$$.tv_a3 = $$.tv.find('.vod-wrap');

					TweenMax.set([$$.tv_a1, $$.tv_a2, $$.tv_a3], {y:100, opacity:0});

					/* business */
					$$.business = $$.contents.filter('.business-wrap');
					$$.business_a1 = $$.business.find('.tit');
					$$.business_a2 = $$.business.find('.sub-tit');
					$$.business_a3 = $$.business.find('.list li');

					TweenMax.set([$$.business_a1, $$.business_a2, $$.business_a3], {y:100, opacity:0});

					$$.business_a3.each(function(){
						var $me = $(this);

						$me.hover(function(){
							TweenMax.to($me.find(".img img"), .4, {scale:1.1, ease:Power0.easeNone});
							TweenMax.to($me.find(".over"), .4, {opacity:1, ease:Power2.easeOut});
							TweenMax.staggerFromTo($me.find('.over .txt'), .4, {opacity:0, y:30}, {opacity:1, y:0, ease:Back.easeOut}, 0.1)
							TweenMax.fromTo($me.find('.flag'), .4, {opacity:0, y:-75, x:75}, {x:0, y:0, opacity: 1});
						},function(){
							TweenMax.to($me.find(".img img"), .4, {scale:1, ease:Power0.easeNone});
							TweenMax.to($me.find(".over"), .4, {opacity:0, ease:Power2.easeOut});
							TweenMax.staggerTo($me.find('.over .txt'), .4, {opacity:0, y:30}, 0.1)
							TweenMax.to($me.find('.flag'), .4, {opacity:0, y:-75, x:75});
						});
					});
				},
				detectContents: function(){
					$$.contents.each(function(){
						var top = $(this).offset().top - (core.screen.height / 1.4);
						var gap = core.screen.scrollTop - top;


						if(gap > 0) $(this).trigger('animation');
					});
				}
			}
		}
	}

	ui.VISUAL = function(){
		var $$ = core.Selector(arguments[0], {
			visualItem : '.view> li',
			visualPrev: '.control .prev',
			visualNext: '.control .next',
			navCurrent: '.count .current',
			navCircle : '.circleSvg .circle',
			navPlay: '.circleSvg .play',
			infoText: '.info-wrap .text li'
		});

		var detect = {
			bgPos: [0,5,15,35,65,85,95],
			bgSpace: [5,10,20,30,20,10,5],
			bgCalc: {
				left: [],
				width : []
			},
			duration: 6000,
			length: $$.visualItem.length,
			msg: [],
		}

		var events = this.events = {
			_init: function(){
				this._set();
				$$.visualPrev.on('click', {dir: -1}, $.proxy(this._detectSelector, this));
				$$.visualNext.on('click', {dir: 1}, $.proxy(this._detectSelector, this));

				$$.navPlay.on('click', $.proxy(this.timer._check, this));
				core.observer.on('RESIZE', $.proxy(this._resize, this));
			},
			_set: function(){
				this._intro();
				this.timer._init();
				this._detectDevice();
				this._createBackgroundImage();
			},
			_intro: function(){
				var $a = $$.visualItem.first().find('.text-wrap').children();
				TweenMax.staggerFromTo($a, .7, {opacity:0, y:30}, {delay:0.5, opacity:1, y:0, ease:Back.easeOut}, .2);
			},
			_resize: function(){
				this._detectDevice();
			},
			_detectDevice: function(){
				if(core.screen.width < 768 || core.browser.isMobile){
					detect.mobile = true;
					$$.container.addClass('mobile');
				}else{
					detect.mobile = false;
					$$.container.removeClass('mobile');
				}
			},
			_createBackgroundImage: function(){
				$$.visualItem.each(function(){
					var $me = $(this);
					var temp = '<div class="bg">';
					for(var i=0;i<detect.bgPos.length;i++){
						temp += '<div><span></span></div>';
					}
					temp += '</div>';
					$me.append(temp);
				});
			},
			_detectSelector: function(e){
				e.preventDefault();
				if(detect.isAni) return;
				detect.isAni = true;
				detect.dir = e.data.dir;
				detect.$current = $$.visualItem.filter('.on');
				detect.$currentBg = detect.$current.find(".bg");
				detect.$currentSpan = detect.$currentBg.find("span");
				detect.tOrigin = (detect.dir !== 1) ? 'right' : 'left';
				detect.nIdx = detect.$current.index() + detect.dir;
				if(detect.nIdx >= detect.length) detect.nIdx = 0;
				if(detect.nIdx < 0) detect.nIdx = detect.length - 1;

				detect.$next = $$.visualItem.eq(detect.nIdx);
				detect.$nextBg = detect.$next.find('.bg');
				detect.$nextLi = detect.$nextBg.children();
				detect.$nextSpan = detect.$nextLi.find('span');

				if(detect.dir !== 1){
					detect.$currentSpan = $(detect.$currentSpan.get().reverse());
					detect.$nextBg.addClass('reverse');
				}
				if(!e.isTrigger || arguments[1]){
					TweenMax.killTweensOf($$.navCircle);

					if(detect.isPlay){
						TweenMax.to($$.navCircle, 1.3, {strokeDashoffset: -314, ease:Power2.easeOut});
						events.timer._clear();
						events.timer._play();
					}else{
						TweenMax.fromTo($$.navCircle, 1.3, {strokeDashoffset:314}, {strokeDashoffset: -314, ease:Power2.easeOut});
						events.timer._clear();
					}
				}
				if(!detect.mobile){
					this.animation._default();
				}else{
					this.animation._mobile();
				}

			},
			animation: {
				_default: function(){
					detect.$current.find('.bg').attr('data-dir', detect.tOrigin);

					TweenMax.staggerTo(detect.$current.find('.text-wrap').children(), .7, {opacity:0}, .2);
					/*detect.$currentSpan.each(function(i){
						var $me = $(this);
						setTimeout(function(){
							$me.addClass('animation').css({
								"background-position": "calc(50% + "+i*30*detect.dir+"px) 50%",
							});
						}, i*100);
					});*/
					TweenMax.set(detect.$next, {visibility:'visible', zIndex:3});
					$$.navCurrent.text(detect.nIdx + 1);
					events.animation._text();
					if(detect.isPlay) events.animation._circle(detect.duration/1000 - 1.3);

					TweenMax.from(detect.$nextLi, .7, {opacity:0, width:0, ease:Power2.easeInOut,
						onComplete: function(){
							detect.$next.addClass('on').removeAttr('style');
							detect.$currentSpan.removeClass('animation').removeAttr('style');
							detect.$current.removeClass('on');
							detect.$nextBg.removeClass('reverse');
							detect.$nextLi.removeAttr('style');

							detect.isAni = false;
						}
					});
					/*TweenMax.delayedCall(1.3, function(){
						
					});*/

					/* TweenMax.staggerFromTo(detect.$currentSpan, .7, {opacity:1, scaleX:1}, {scaleX:1.1, opacity:0.25, ease:Power3.easeBack}, .1, function(){
						TweenMax.set(detect.$next, {visibility:'visible', zIndex:3});
						$$.navCurrent.text(detect.nIdx + 1);
						events.animation._text();
						if(detect.isPlay) events.animation._circle(detect.duration/1000 - 1.3);

						TweenMax.from(detect.$nextLi, .7, {opacity:0, width:0, ease:Power2.easeInOut,
							onComplete: function(){
								TweenMax.set(detect.$currentSpan, {opacity:1, scaleX: 1});
								detect.$current.removeClass('on');
								detect.$next.addClass('on').removeAttr('style');
								detect.$nextBg.removeClass('reverse');
								detect.$nextLi.removeAttr('style');

								detect.isAni = false;
							}
						});
					}); */
				},
				_mobile: function(){
					$$.navCurrent.text(detect.nIdx + 1);
					events.animation._text();

					if(detect.isPlay){
						TweenMax.delayedCall(1.3, function(){
							events.animation._circle(detect.duration/1000 - 1.3);
						});
					}

					TweenMax.fromTo(detect.$current, 1.3, {opacity:1}, {opacity:0});
					TweenMax.set(detect.$next, {opacity:0, visibility:'visible', zIndex:3});
					TweenMax.to(detect.$next, 1.3, {opacity:1,
						onComplete: function(){
							TweenMax.set(detect.$currentSpan, {opacity:1, x: 0});
							TweenMax.set(detect.$nextSpan, {opacity:1, x: 0});

							detect.$current.removeClass('on').removeAttr('style');
							detect.$next.addClass('on').removeAttr('style');
							detect.$nextBg.removeClass('reverse');

							detect.isAni = false;
						}
					});
				},
				_complete: function(){
					detect.isAni = false;
				},
				_text: function(){
					$$.infoText.removeClass('on').eq(detect.nIdx).addClass('on');
					TweenMax.staggerFromTo(detect.$next.find('.text-wrap').children(), .7, {opacity:0, y:30}, {delay:0.5, opacity:1, y:0, ease:Back.easeOut}, .2);
				},
				_circle: function(dur){
					var _dur = dur || detect.duration / 1000;
					TweenMax.killTweensOf($$.navCircle);
					TweenMax.fromTo($$.navCircle, _dur, {strokeDashoffset: 314}, {strokeDashoffset: 0, ease:Power0.easeNone,
						onComplete: function(){
							TweenMax.to($$.navCircle, 1.2, {strokeDashoffset: -314});
						}
					});
				}
			},
			timer: {
				_init: function(){
					events.animation._circle();
					this._play();
				},
				_check: function(){
					if(!detect.isPlay){
						this.timer._init();
					}else{
						this.timer._destory();
					}
				},
				_play: function(){
					detect.isPlay = true;
					$$.navPlay.removeClass('pause');
					events.timer.vars = setInterval(function(){
						detect.isPlay = true;
						$$.navPlay.removeClass('pause');
						$$.visualNext.triggerHandler('click'); //triger event bubble Not || document click
					}, detect.duration);
				},
				_clear: function(){
					detect.isPlay = false;
					$$.navPlay.addClass('pause');
					clearInterval(events.timer.vars);
				},
				_destory: function(){
					TweenMax.killTweensOf($$.navCircle);
					TweenMax.to($$.navCircle, 0.6, {strokeDashoffset: 314});
					this._clear();
				}
			},
		}
	}
	ui.BORDER = function(){
		var $$ = core.Selector(arguments[0]);
		var data = core.DataSet($$._dataSet,{
			w : $$.container.width(),
			h : $$.container.height()
		});

		this.events = {
			_init: function(){
				this._createBorder();
				$$.container.on('mouseenter mouseleave', this._detectHover);
			},
			_createBorder: function(){
				$$.lwBorder = $('<span class="lw"></span>');
				$$.lhBorder = $('<span class="lh"></span>');
				$$.rwBorder = $('<span class="rw"></span>');
				$$.rhBorder = $('<span class="rh"></span>');

				$$.container.append($$.lwBorder, $$.lhBorder, $$.rwBorder, $$.rhBorder);

				data.tl = new TimelineMax({paused: true});
				data.tl.to([$$.lwBorder, $$.rwBorder], .3, {width:100+'%'})
				.to([$$.lhBorder, $$.rhBorder], .15, {height:100+'%'});
			},
			_detectHover: function(evt){
				if(evt.type !== 'mouseleave'){
					data.tl.play();
				}else{
					data.tl.reverse();
				}
			}
		}
	}
	core.observer.on('READY', function(){
		core.debug.init();
		//문서상에서 실행 ui('PIE_CHART', '.ui-pieChart');
		ui('POPUP', '.ui-popup-open');
		ui('SELECT', '.ui-select');
		ui('FILEINPUT', 'input[type="file"]');
		ui('PLACEHOLDER', ':text, textarea');
		ui('TAB', '.ui-tab');
		ui('ACCORDION', '.ui-accordion');
		ui('PARALLAX_ANIMATION', '.ui-parallax-animation');
		ui('PARALLAX_SCROLL', '.ui-parallax-scroll');
		ui('MAIN', '#main');
		ui('BORDER', '.ui-border');
	});
	core.observer.on('LOAD', function(){
		ui('VISUAL', '.visual-wrap');
		ui('POPUP', '.prj-open');
	});
	window.core = core;

})(jQuery, window[APP_NAME], window[APP_NAME].ui);
