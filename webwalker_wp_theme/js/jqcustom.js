(function($){
$("#foot-menus li:last-child").css("padding-right", "0");

$("#searchsubmit").mousedown(function(){
	jQuery(this).css("top","1px");
	jQuery(this).css("left","1px");
}).mouseup(function(){
	jQuery(this).css("top","0");
	jQuery(this).css("left","0");
});
})( jQuery);