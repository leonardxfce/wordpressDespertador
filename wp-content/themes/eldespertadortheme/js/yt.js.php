<?php if (extension_loaded('zlib')) {
    ob_start('ob_gzhandler');
}
header("Content-Type: text/javascript");
?>
(function(e,t,n,r){function o(e){var t=null;if(e.indexOf("//www.youtube.com")!==-1){t=e.match("[\\?&]v=([^&#]*)")[1]}else if(e.indexOf("//youtu.be")!==-1){t=e.substr(e.lastIndexOf("/")+1)}return t}function u(n,r){this.element=n;this.options=e.extend({},s,r);this._defaults=s;this._name=i;this._protocol=this.options.secure==="auto"?t.location.protocol==="https:"?"https://":"http://":this.options.secure?"https://":"http://";this._autoPlay=this.options.autoPlay?"&autoplay=1":"";this._showRelated=this.options.showRelated?"&rel=1":"";this._fullscreen=this.options.allowFullScreen?"&fs=1":"";this.init()}var i="ytplaylist";var s={holderId:"ytvideo",playerHeight:300,playerWidth:450,addThumbs:false,thumbSize:"small",showInline:false,autoPlay:true,showRelated:true,allowFullScreen:false,deepLinks:false,onChange:function(){},start:1,secure:"auto"};u.prototype={init:function(){var n=this;var r=n.options.deepLinks&&t.location.hash.indexOf("#yt-gal-")!==-1?t.location.hash:null;e(n.element).find("li").each(function(t){var i=e(this);var s=t+1;i.find("a:first").each(function(){var t=e(this);var r=o(t.attr("href"));var u=i.text();t.data("yt-href",t.attr("href"));t.attr("href","#yt-gal-"+s);if(r){t.addClass("yt-vid");t.data("yt-id",r);if(n.options.addThumbs){if(n.options.thumbSize=="small"){thumbUrl=n._protocol+"img.youtube.com/vi/"+r+"/2.jpg"}else{thumbUrl=n._protocol+"img.youtube.com/vi/"+r+"/0.jpg"}var a='<img src="'+thumbUrl+'" alt="'+u+'" />';t.empty().html(a+u).attr("title",u)}}else{t.addClass("img-link");if(n.options.addThumbs){var f=e("<img/>").attr("src",t.data("yt-href"));t.empty().html(f).attr("title",u)}}if(!n.options.deepLinks){t.click(function(e){e.preventDefault();n.handleClick(t,n.options);n.options.onChange.call()})}});var u=e(i.children("a")[0]);if(r){if(u.attr("href")===r){n.handleClick(u,n.options)}}else if(s===n.options.start){n.handleClick(u,n.options)}});if(n.options.deepLinks){e(t).bind("hashchange",function(r){var i=t.location.hash;var s=e(n.element).find('a[href="'+i+'"]');if(s.length>0){n.handleClick(s,n.options)}else if(i===""){n.handleClick(e(n.element).find("a:first"),n.options)}})}},getOldEmbedCode:function(e,t){var n="";n+='<object height="'+e.playerHeight+'" width="'+e.playerWidth+'">';n+='<param name="movie" value="'+this._protocol+"www.youtube.com/v/"+t+this._autoPlay+this._showRelated+this._fullScreen+'"> </param>';n+='<param name="wmode" value="transparent"> </param>';if(e.allowFullScreen){n+='<param name="allowfullscreen" value="true"> </param>'}n+='<embed src="'+this._protocol+"www.youtube.com/v/"+t+this._autoPlay+this._showRelated+this._fullScreen+'"';if(e.allowFullScreen){n+=' allowfullscreen="true" '}n+='type="application/x-shockwave-flash" wmode="transparent" height="'+e.playerHeight+'" width="'+e.playerWidth+'"></embed>';n+="</object>";return n},getNewEmbedCode:function(e,t){var n="";n+='<iframe width="'+e.playerWidth+'" height="'+e.playerHeight+'"';n+=' src="'+this._protocol+"www.youtube.com/embed/"+t'" frameborder="0"';n+=" allowfullscreen></iframe>";return n},handleClick:function(e,t){if(e.hasClass("yt-vid")){return this.handleVideoClick(e,t)}else{return this.handleImageClick(e,t)}},handleVideoClick:function(t,n){var r=this;if(n.showInline){e("li.currentvideo").removeClass("currentvideo");t.parent("li").addClass("currentvideo").html(r.getNewEmbedCode(r.options,t.data("yt-id")))}else{var i=n.holder?n.holder:e("#"+n.holderId);i.html(r.getNewEmbedCode(r.options,t.data("yt-id")));t.parent().parent("ul").find("li.currentvideo").removeClass("currentvideo");t.parent("li").addClass("currentvideo")}return false},handleImageClick:function(t,n){var r=new Image;var i=e(r);var s=e(t);r.onload=function(){if(i.height()<i.width()){i.width(n.playerWidth).css("margin-top",parseInt(i.height()/-2,10)).css({height:"auto"})}else{i.css({height:n.playerHeight,width:"auto",top:"0px",position:"relative"})}i.fadeIn()};i.attr({src:s.data("yt-href")}).css({display:"none",position:"absolute",left:"0px",top:"50%"});if(n.showInline){e("li.currentvideo").removeClass("currentvideo");s.parent("li").addClass("currentvideo").html(i)}else{var o=n.holder?n.holder:e("#"+n.holderId);o.html(i);s.closest("ul").find("li.currentvideo").removeClass("currentvideo");s.parent("li").addClass("currentvideo")}return false}};e.fn[i]=function(t){return this.each(function(){if(!e.data(this,"plugin_"+i)){e.data(this,"plugin_"+i,new u(this,t))}})}})(jQuery,window,document)
<?php if (extension_loaded('zlib')) {
    ob_end_flush();
}?>