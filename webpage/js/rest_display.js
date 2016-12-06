//var $ = require('jQuery');
$(document).on('ready', function(){
	$(".search-form").on("submit", function(event){
		console.log("hello");
		$(".rest-info").html('');
		event.preventDefault();

		var keyword = $(".user-input").val();

		populateRest(keyword);
	});
});


function populateRest(keyword){
	console.log("in here");
	$.ajax({
		url: '../../php/rest_display.php',
		type: 'GET',
		dataType: 'json',
		data: ({keyword: keyword}),
		success: function(data){
			console.log(data);
			for(var i = 0; i < data.length; i++){
				$(".rest-info").append(`<div><h3>
											<a href="rest_pro.php?phone=${data[i].phone}">${data[i].name}</a>
											</h3>
											<p>Rating: ${data[i].avg_rating}</p>
											<p>Address: ${data[i].street} ${data[i].city}, ${data[i].state} ${data[i].zip}</p>
											<p>Phone Number:${data[i].phone}</p>
										</div>`);
			}
		},
		error: function(reponse, error){
			console.log(error);
		}
	})
}
