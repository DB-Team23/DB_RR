<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../../js/adv_search.js"></script>
</head>
<body>

<div class = "container">
	<div class="wrapper">

		<form class="adv_form">

		<input class="keyword_search" type="text" placeholder="Keyword Search">

		<div class="btn-group">
  		<button type="button" class="btn btn-danger btn-cuisine">Cuisine</button>
  		<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="sr-only">Toggle Dropdown</span>
  		</button>
  		<div class="dropdown-menu dd-cuisine">
  		</div>
		</div>

		<div class="btn-group">
  		<button type="button" class="btn btn-danger btn-venue-type">Venue Type</button>
  		<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="sr-only">Toggle Dropdown</span>
  		</button>
  		<div class="dropdown-menu dd-venue-type">
  		</div>
		</div>

		<div class="btn-group">
  		<button type="button" class="btn btn-danger btn-price">Price</button>
  		<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="sr-only">Toggle Dropdown</span>
  		</button>
  		<div class="dropdown-menu dd-price">
  			<a class="dropdown-item" href="#">$</a>
  			<a class="dropdown-item" href="#">$$</a>
  			<a class="dropdown-item" href="#">$$$</a>
  			<a class="dropdown-item" href="#">$$$$</a>
  			<a class="dropdown-item" href="#">$$$$$</a>
  		</div>
		</div>

		<div class="btn-group">
  		<button type="button" class="btn btn-danger btn-rating">Average Rating</button>
  		<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="sr-only">Toggle Dropdown</span>
  		</button>
  		<div class="dropdown-menu dd-rating">
  			<a class="dropdown-item" href="#">1</a>
  			<a class="dropdown-item" href="#">2</a>
  			<a class="dropdown-item" href="#">3</a>
  			<a class="dropdown-item" href="#">4</a>
  			<a class="dropdown-item" href="#">5</a>
  		</div>
		</div>

		<input class="city_search" type="text" placeholder="City">
		<input class="state_search" type="text" placeholder="State">
		<input class="zip_search" type="text" placeholder="Zip Code">

		<!-- <div class="checkbox">
    	<label>
      		<input type="checkbox"> Open Now 
    	</label>
 		</div> -->
 		<div class="btn-group">
  		<button type="button" class="btn btn-danger btn-order-by">Order By</button>
  		<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	<span class="sr-only">Toggle Dropdown</span>
  		</button>
  		<div class="dropdown-menu dd-order-by">
  			<a class="dropdown-item" href="#">Average Rating</a>
  			<a class="dropdown-item" href="#">Price</a>
  		</div>
		</div>

 		<button type="submit" class="btn btn-default">Submit</button>

 		</form>

 		<div class="adv-info">
		</div>	
			  					
	</div>
</div>

</body>
</html>