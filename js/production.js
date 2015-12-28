

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

// $(".modalImg").hover(function() {
// 	$(this).css({"opacity":".5"})
// });

$(document).ready(function(){
  $('.owl-carousel').owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        768:{
            items:2,
            nav:true
        },
        1200:{
        	items:3,
        	nav:true
        }
    }
})