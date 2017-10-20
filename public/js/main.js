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

function renderDB(data){
	return `
			<tr>
				<td>${data.company}</td>
			</tr>`;
}

function boot(){
	$.get('/api/sn_table', function(data){
		console.log(data);
		let x ='';
		const result = Object.values(data).map((item, index) => {
				return renderDB(item);
		});
		
		$('#table_title').after(result);
		/*
		const result ='';
		for(let i=0;i<data.size();i++){
			result+=renderDB(data[i]);
		}
		console.log(result);
		*/
	});
}

$(boot);
/*
$('.edit-btn').on('click', function(){
	

});
*/
