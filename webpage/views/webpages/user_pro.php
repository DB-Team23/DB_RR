<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript"> var username = <?php echo $_REQUEST['username']?>;
		console.log(username);
	</script>
	<script src="../../js/user_pro.js"></script>
</head>
<body>

<div class = "container">
	<div class="wrapper">
		<nav class="navbar navbar-light bg-faded">
        <img class="logo" src="../../photos/unnamed.png">
        <a class="navbar-brand" href="http://192.168.99.100/">ЯR</a>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active">
             <a class="nav-link" href="http://192.168.99.100/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link table-counter" href=""><span>Total Tuples</span></a>
          </li>

        </ul>
      </nav>
		<div class="user_pro_info">

		</div>
				
	</div>
</div>


</body>
</html>