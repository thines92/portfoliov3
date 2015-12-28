

$("li").mouseenter(function() {
	if (!$(this).hasClass("active")) {
	    $(this).css({"background-color":"#ff8400"});
	}
});

$("li").mouseleave(function() {
	if (!$(this).hasClass("active")) {
	    $(this).css({"background-color":"inherit"});
	}
});