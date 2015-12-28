
  $("li").hover(function() {
    $(this).css({"background-color":"#ff8400"});
  }, function() {
    $(this).css("background-color","inherit");
  });

var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
if (sPage == "index.html") {
  $(".nav-home").css("background-color","white");
}
