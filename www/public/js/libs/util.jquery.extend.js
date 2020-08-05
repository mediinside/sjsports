/*
 * eluo jquery util
 * 	2017.11
 */

/**
 * jquery serialize json
 * @param $
 */
(function($) {
	$.fn.serializeJson = function() {
		var obj = {};
	    this.each(function() {
	    	obj[this.name] = this.value;
	    });
	    return obj;
	};
})(jQuery);


/**
 * jquery valid rules setting
 * 		- data-requiredimg :: 대체텍스트 file input 시 체크할 지의 여부
 *
 * 		- data-reqmsg :: 대체 텍스트 (placeholder 와 구분지어쓸때)
 * 		- 위 모든 것에 해당사항이 없으면 placeholder 값으로 valid msg
 * 		ex) $f.find("input.required, select.required, textarea.required, input[data-requiredimg]").autoRules();
 */
(function($) {
    $.fn.autoRules = function() {
        return this.each(function() {
            var $element = $(this);
        	/*  ----------- valid msg custom */

			var reqMsg = "";

			// placeholer 또는 reqmsg 로 메세지 custom
			if(reqMsg == "") {
				reqMsg = $element.data("reqmsg");
				if(reqMsg == undefined || reqMsg == ""){
					reqMsg = $element.attr("placeholder");
				}
			}

        	/*  ----------- valid required custom */

			var required = true;
			// Img 대체 텍스트 확인
			var requiredImg = $element.data("requiredimg");
			if(requiredImg != undefined){
				required = function (ele) {
					return ($(ele).closest("div.devImg").find("input[type=file]").val()!=""
							? true : false);
				};
			}

			/* 최종 */
			//console.log( $element, required, reqMsg);
			$element.rules('add', {
		        required: required,
		        messages: {  required : reqMsg }
		    });
			$element.data("validchk","chk");
        });
    };
})(jQuery);

/**
 * vaildator 공백 처리
 * */
(function ($) {
    $.each($.validator.methods, function (key, value) {
        $.validator.methods[key] = function () {
            if(arguments.length > 0) {
                arguments[0] = $.trim(arguments[0]);
            }

            return value.apply(this, arguments);
        };
    });
} (jQuery));

/**
 * jquery valid same name elements
 * 	동일한 name 의 ele 가 여러개 있을 경우 하나만 체크하는 이슈가 있어 수정.
 * 	각 name의 메세지를 다르게 하고 싶을 경우에 (배열로 넘기는 경우는 ele의 이름을 name[0] name[1] 로 변경하면 따로 지정할 수 있다)
 */
$(function () {
	if ($.validator) {
		$.validator.prototype.checkForm = function() {
		    //overriden in a specific page
		    this.prepareForm();
		    for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
		        if (this.findByName(elements[i].name).length !== undefined && this.findByName(elements[i].name).length > 1) {
		            for (var cnt = 0; cnt < this.findByName(elements[i].name).length; cnt++) {
		                this.check(this.findByName(elements[i].name)[cnt]);
		            }
		        } else {
		            this.check(elements[i]);
		        }
		    }
		    return this.valid();
		};

		$.validator.prototype.elements= function() {
			var validator = this,
			    rulesCache = {};

			// select all valid inputs inside the form (no submit or reset buttons)
			// workaround $Query([]).add until http://dev.jquery.com/ticket/2114 is solved
			return $([]).add(this.currentForm.elements)
			.filter(":input")
			.not(":submit, :reset, :image, [disabled]")
			.not( this.settings.ignore )
			.filter(function() {
			    !this.name && validator.settings.debug && window.console && console.error( "%o has no name assigned", this);

			    // select only the first element for each name (EXCEPT elements that end in []), and only those with rules specified
			    if ( (!this.name.match(/\[\]/gi) && this.name in rulesCache) || !validator.objectLength($(this).rules()) )
			        return false;

			    rulesCache[this.name] = true;
			    return true;
			});
		};

		$.validator.prototype.idOrName = function(element) {
			// Special edit to get fields that end with [], since there are several [] we want to disambiguate them
			// Make an id on the fly if the element doesnt have one
			if(element.name.match(/\[\]/gi)) {
			    if(element.id){
			        return element.id;
			    } else {
			        var unique_id = new Date().getTime();
			        element.id = new Date().getTime();
			        return element.id;
			    }
			}

			return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
		};
	}
});