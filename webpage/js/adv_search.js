$(document).on('ready', function(){
	populateAdvFields();


	$(".adv_form").on("submit", function(event){

		// $(".keyword_search").html("");
		// $(".btn-cuisine").html("Cuisine");
		// $(".btn-venue-type").html("Venue Type");
		// $(".btn-price").html("Price");
		// $(".btn-rating").html("Average Rating");
		// $(".city_search").html("");
		// $(".state_search").html("");
		// $(".zip_search").html("");
		// $(".btn-order-by").html("");
		// $(".adv-info").html('');

		event.preventDefault();

		var keyword = {};
		if ($(".keyword_search").val() == ""){
			keyword.search = "%";
		}
		else{
			keyword.search = $(".keyword_search").val();
		}
		if ($(".btn-cuisine").html().substring(0,4) == "Cuis"){
			keyword.cuisine = "%";
		}
		else{
			keyword.cuisine = $(".btn-cuisine").html();
		}
		if ($(".btn-venue-type").html().substring(0,4) == "Venu"){
			keyword.venue_type = "%";
		}
		else{
			keyword.venue_type = $(".btn-venue-type").html();
		}
		if ($(".btn-price").html().substring(0,4) == "Pric"){
			keyword.price = "%";
		}
		else{
			keyword.price = $(".btn-price").html().length;
		}
		if ($(".btn-rating").html().substring(0,4) == "Aver"){
			keyword.avg_rating = 0;
		}
		else{
			keyword.avg_rating = parseInt($(".btn-rating").html());
		}
		if ($(".city_search").val() == ""){
			keyword.city = "%";
		}
		else{
			keyword.city = $(".city_search").val();
		}
		if ($(".state_search").val() == ""){
			keyword.state = "%";
		}
		else{
			keyword.state = $(".state_search").val();
		}
		if ($(".zip_search").val() == ""){
			keyword.zip = "%";
		}
		else{
			keyword.zip = $(".zip_search").val();
		}
		if ($(".btn-order-by").html().substring(0,4) == "Orde" || $(".btn-order-by").html().substring(0,4) == "Aver"){
			keyword.order_by = "avg_rating";
		}
		else{
			keyword.order_by = "price";
		}

		console.log(keyword);
		populateRest(keyword);
	});
});


function populateAdvFields(){
	$.ajax({
		url: '../../php/adv_populate.php',
		type: 'GET',	
		dataType: 'json',
		success: function(data){
			console.log(data);

			for(var i = 0; i < data.cuisine.length; i++){
				$(".dd-cuisine").append(`<li><a class="dropdown-item" href="#">${data.cuisine[i].type}</a></li>`);
			}
			for(var j = 0; j < data.venue_type.length; j++){
				$(".dd-venue-type").append(`<li><a class="dropdown-item" href="#">${data.venue_type[j].type}</a><li>`);
			}
		},
		complete: function(){
			$(".dd-cuisine a").on("click", function(){
				$(".btn-cuisine").html($(this).html());

			});

			$(".dd-venue-type a").on("click", function(){
				$(".btn-venue-type").html($(this).html());

			});

			$(".dd-price a").on("click", function(){
				$(".btn-price").html($(this).html());

			});

			$(".dd-rating a").on("click", function(){
				$(".btn-rating").html($(this).html());

			});
			$(".dd-order-by a").on("click", function(){
				$(".btn-order-by").html($(this).html());

			});
		}
	})
}

function populateRest(user_data){
	console.log(user_data);
	$.ajax({
		url: '../../php/adv_search.php',
		type: 'GET',
		dataType: 'json',
		data: ({user_data: user_data}),
		success: function(data){
			console.log(data);
			for(var i = 0; i < data.length; i++){
				$(".adv-info").append(`<div><h5>
											<a href="rest_pro.php?phone=${data[i].phone}">${data[i].name}</a>
											</h5>
											<p>Rating: ${data[i].avg_rating}</p>
											<p>Address: ${data[i].street} ${data[i].city}, ${data[i].state} ${data[i].zip}</p>
											<p>Phone Number: ${data[i].phone}</p>
											<p>Price: ${data[i].price}</p>
											<p>Cuisine: ${data[i].cuisine}</p>
											<p>Venue Type: ${data[i].venue_type}</p>
										</div>`);
			}
		}
	})
}
