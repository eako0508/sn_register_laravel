




/* Form */

$(".js-form").submit(event=>{
	event.preventDefault();

	let obj = {};
	obj.company = $('#company').val();
	obj.invoice = $('#invoice').val();
	obj.product = $('#product').val();
	obj.product_sn = $('#product_sn').val();
	obj.hdd = $('#hdd').val();
	obj.hdd_sn = $('#hdd_sn').val();
	$('#hdd_sn').val('');
	//console.log(obj);	
//	$.post('api/add', obj, getDB);
/*
	$.ajax({
		type: 'POST',
		url: 'api/add',
		data: obj,
		success: getDB
	});
*/
	$.get('api/add',obj,getDB);
});


/* Cosmetics  */

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


/* Render */
function renderDB(data){
	return `
			<tr>
				<td>${data.company}</td>
				<td>${data.invoice}</td>
				<td>${data.product}</td>
				<td>${data.product_sn}</td>
				<td>${data.hdd}</td>
				<td>${data.hdd_sn}</td>
				<td>${data.created_at}</td>
				<td>${data.updated_at}</td>
			</tr>`;
}
function getDB(data){
	const result = Object.values(data).map((item, index) => {
			return renderDB(item);
	});
	$('#table_title').after(result);
}

function boot(){
//load the data initially without ajax... in future
	$.get('/api/sn_table', getDB);
}

$(boot);
/*
$('.edit-btn').on('click', function(){
	

});
*/
