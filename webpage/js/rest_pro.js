$(document).on('ready', function(){
	console.log("ready");
	populateRestPro(phone);
	$(".user-review").on("submit", function(event){
		$(".review").html('');
		$(".rating_bar").html('');
		event.preventDefault();

		var keyword = {};

		if($(".review").val() != ""){
			keyword.text = $(".review").val();
		}
		
		keyword.rating = $(".rating_bar").val();
		keyword.phone = phone;
		keyword.now = new Date();
		keyword.now = keyword.now.toISOString()
		keyword.now = keyword.now.substring(0,10);
		//console.log(keyword.rating);
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
			$(".rest_pro_info").append(`<div style="float: left;"><h2>${data[0].name}</h2>
											<p>Phone Number: ${data[0].phone}</p>
											<p>Venue Type: ${data[0].venue_type}</p>
											<p>Address: ${data[0].street} ${data[0].city}, ${data[0].state} ${data[0].zip}</p>
											<p>Cuisine: ${data[0].cuisine}</p>
											<p>Price: ${data[0].price}</p>
											<p>Average Rating: ${data[0].avg_rating}</p></div>`);
			for(var i = 1; i < data.length; i++){
				$(".rest-reviews").append(`<div class="comments" style="margin-bottom: 5px; text-align: center;"><a href="user_pro.php?username='${data[i].user_id}'"><pre><h5>${data[i].user_id}</h5></a>
Date Submitted: ${data[i].time}           Rating: ${data[i].rating}
${data[i].text}</pre></div>`);
			}
			$(".rest-pic").attr('src',data[0].img_url);
			var week_open = data[0].week_open.substring(10,12) + data[0].week_open.substring(26,28);
			var week_close = data[0].week_close.substring(10,12) + data[0].week_close.substring(26,28);;
			var weekend_open = data[0].weekend_open.substring(10,12) + data[0].weekend_open.substring(26,28);;
			var weekend_close = data[0].weekend_close.substring(10,12) + data[0].weekend_close.substring(26,28);;
			$(".week span").html(`${week_open} - ${week_close}`);
			$(".weekend span").html(`${weekend_open} - ${weekend_close}`);
			console.log(data[0].is_open);
			console.log(new Date());

			if(data[0].is_open){
				$(".is_open").html('Currently Open');
			}
			else{
				$(".is_open").html('Currently Closed');
			}
		}
	});
}

function addReview(review){
	$.ajax({
		url: '../../php/rest_pro_review.php',
		type: 'POST',
		dataType: 'text',
		data: ({review: review}),
		success: function(data){
			console.log(data);
			window.location.replace(`rest_pro.php?phone=${review.phone}`);
		},
		complete: function(){
			//console.log("done");
		},
		error: function(request,error){
			console.log(error);
		}
	});
}

