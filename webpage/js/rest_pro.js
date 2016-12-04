$(document).on('ready', function(){
	console.log("ready");
	populateRestPro(phone);
	$(".user-review").on("submit", function(event){
		$(".review").html('');
		$(".rating").html('');
		event.preventDefault();

		var keyword = {};

		if($(".review").val() != ""){
			keyword.text = $(".review").val();
		}
		
		keyword.rating = $(".rating").val();
		keyword.phone = phone;
		keyword.now = new Date();
		keyword.now = keyword.now.toISOString()
		keyword.now = keyword.now.substring(0,10);
		console.log(keyword.now);
		addReview(keyword);

	});
});


function populateRestPro(phone){
	$.ajax({
		url: '../../php/rest_pro.php',
		type: 'GET',
		dataType: 'json',
		data: ({phone: phone}),
		success: function(data){
			console.log(data);
			$(".rest_pro_info").append(`<h5>${data[0].name}</h5>
											<p>${data[0].phone}</p>
											<p>${data[0].rest_desc}</p>
											<p>${data[0].rest_url}</p>
											<p>${data[0].venue_type}</p>
											<p>${data[0].zip}</p>
											<p>${data[0].street}</p>
											<p>${data[0].city}</p>
											<p>${data[0].state}</p>
											<p>${data[0].cuisine}</p>
											<p>${data[0].price}</p>
											<p>${data[0].avg_rating}</p>`);
			for(var i = 1; i < data.length; i++){
				$(".rest_pro_info").append(`<a href="user_pro.php?username='${data[i].user_id}'"><h5>${data[i].user_id}</h5></a>
											<p>${data[i].time}</p>
											<p>${data[i].rating}</p>
											<p>${data[i].text}</p>`);
			}
		}
	});
}

function addReview(review){
	$.ajax({
		url: '../../php/rest_pro_review.php',
		type: 'POST',
		//dataType: 'text',
		data: ({review: review}),
		success: function(){
			//console.log(data);
			window.location.replace(`rest_pro.php?phone=${review.phone}`);
		},
		error: function(request,error){
			console.log(error);
		}
	});
}

