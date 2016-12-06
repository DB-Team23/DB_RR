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
		$(document).on("ready",function(){
        $(".table-counter").on("click", function(event){
          event.preventDefault();
        console.log("clicked");
        $.ajax({
            url: '/php/total_row.php',
            type: 'GET',
            dataType: 'text',
            success: function(data){
              console.log(data);
              alert("Total Number Tuples: " + data);
            },
            error: function(request,error){
              console.log(error);
            },
            complete: function(){
              console.log("done!");
            }
        });
      });
      });
	</script>
	<script src="../../js/user_pro.js"></script>

</head>
<body>

<div class = "container-fluid">
	<div class="row">
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
    </div>
    <h1 style="text-align:center; margin-top: -17px;">User Profile</h1>
    <div class="row banner">
    </div>

    <div class="row profile-info">
      <img src="../../photos/facebook-avatar.jpg" style="float:left"class="user-pic">
		  <div class="user_pro_info" style="margin-top: 50px;">
      </div>
		</div>

    <div class="favorites">
      <h2 style="text-align:center;">Top 3 Visited Restaurants</h2>
    </div>
</div>


</body>
</html>