var slideAllowed = true;
$("li.event").click(function(){
	if(slideAllowed){
		slideAllowed = false;
		$(this).find(".details").slideToggle(200, function(){
			slideAllowed = true;
		});
	}
});
var lastScroll = 0;
$("ul.events").scroll(function(event){
	$(this).focus();
  //Sets the current scroll position
  var st = $(this).scrollTop();
  //Determines up-or-down scrolling
  if (st > lastScroll){
     //Replace this with your function call for downward-scrolling
     
  }
  else {
     //Replace this with your function call for upward-scrolling
     
  }
  //Updates scroll position
  lastScroll = st;
});