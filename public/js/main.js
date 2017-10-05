/*
$(".js-form").submit(event=>{
	event.preventDefault();
});
*/
$(window).scroll(function() {
	sessionStorage.scrollTop = $(this).scrollTop();
});
$("input").focus(function(){
	$(this).css("background-color", "#cccccc");
});
$("input").blur(function(){
	$(this).css("background-color", "#ffffff");
});
$("#list").find("tr:not(:eq(0))").hover(function(){
		$(this).css("background-color", "#ffef96");
	}, function(){
		$(this).css("background-color", "#fce5cd");
	}
);
$("input:text").keyup(function(){
	$(this).val( $(this).val().replace(/['"]/g, ''));
});
