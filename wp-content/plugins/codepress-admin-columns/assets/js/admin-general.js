!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=67)}({67:function(t,e,n){"use strict";jQuery(document).ready(function(t){if(0===t("#cpac").length)return!1;!function(t){t(".ac-pointer").each(function(){!function(t){var e=t,n=jQuery,r=e.attr("rel"),o=e.attr("data-pos"),i=e.attr("data-width"),a=e.attr("data-noclick"),c={at:"left top",my:"right top",edge:"right"},l=i||250;"right"===o&&(c={at:"right middle",my:"left middle",edge:"left"});"left"===o&&(c={at:"left middle",my:"right middle",edge:"right"});e.pointer({content:n("#"+r).html(),position:c,pointerWidth:l,pointerClass:"ac-wp-pointer wp-pointer wp-pointer-"+c.edge+(a?" noclick":"")}),a||e.click(function(){e.hasClass("open")?e.removeClass("open"):e.addClass("open")});e.hover(function(){n(this).pointer("open")},function(){var t=n(this);setTimeout(function(){t.hasClass("open")||0!=n(".ac-wp-pointer.hover").length||t.pointer("close")},100)}).on("close",function(){e.hasClass("open")||0!=n(".ac-wp-pointer.hover").length||e.pointer("close")})}(t(this))}),t(".ac-wp-pointer").hover(function(){t(this).addClass("hover")},function(){t(this).removeClass("hover"),t(".ac-pointer").trigger("close")})}(t),function(t){t("a.help").click(function(e){e.preventDefault();var n=t("#contextual-help-wrap");n.parent().show(),t('a[href="#tab-panel-cpac-'+t(this).attr("data-help")+'"]',n).trigger("click"),n.slideDown("fast",function(){n.focus()})})}(t)})}});