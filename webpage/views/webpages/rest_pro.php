<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript"> var phone = <?php echo $_REQUEST['phone']?></script>
	<script src="../../js/rest_pro.js"></script>
</head>
<body>

<div class = "container">
	<div class="wrapper">
		<div class="rest_pro_info">

		</div>
		
		<form class="user-review">
  			<textarea class="review" maxlength="250">Write a Review</textarea><br>
  			<input type="range" name="rating" min="1" max="5" step="1" placeholder="Rating" class="rating">
  			<input type="submit" value="Submit">
		</form>		  					
	</div>
</div>

</body>
</html>