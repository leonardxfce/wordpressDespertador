(function($){$.fn.pjntinit=function(){return this.each(function(){var originalHtml=$(this).html();var originalWidth=parseInt($(this).width());var containerWidth=parseInt($(this).parent().width());var hasGap=$(this).data('gap');if(hasGap===false){$(this).append(originalHtml);while(parseInt($(this).width())<(containerWidth+originalWidth)){$(this).append(originalHtml);}}
$(this).bind('pjnt-start',function(event,c){var contentLeft=parseInt($(this).css('left'));if(contentLeft<=-originalWidth)
{var newLeft=containerWidth;if(hasGap===false){newLeft=contentLeft+originalWidth;}
$(this).css({left:newLeft+'px'});contentLeft=newLeft;}
else
{}
var speed=$(this).data('speed');var toGo=Math.ceil(originalWidth+contentLeft);var duration=(toGo/speed)*1000;$(this).animate({left:'-'+originalWidth+'px'},duration,'linear',function(){$(this).trigger('pjnt-start');});});$(this).trigger('pjnt-start');$(this).mouseover(function(){$(this).stop();});$(this).mouseout(function(){$(this).trigger('pjnt-start');});});};}(jQuery));jQuery(document).ready(function($){$(window).bind("load",function(){$('.pjnt-content').pjntinit();});});