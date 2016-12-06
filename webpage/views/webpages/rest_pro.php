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
  <script type="text/javascript">
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
    <h1 style="text-align:center; margin-top: -17px;">Restaurant Profile</h1>
    <div class="row banner">
    </div>

    <div class="row profile-info">
      <img src="../../photos/restaurant-1.jpg" style="float:left;" class="rest-pic">
      <div class="rest_pro_info">

      </div>
      <div class="hours" style="float:right; width: 300px;">
        <h3>Hours</h3>
        <p class="week">Week: <span></span></p>
        <p class="weekend">Weekend: <span></span></p>
        <p class="is_open"></p>
      </div>
    </div>

    <div class="rest-reviews">
      <h2 style="text-align: center;">Reviews</h2>
    </div>

    <form class="user-review" style="margin-top: 20px; text-align: center;">
          <textarea class="review" maxlength="250" placeholder="Write a Review!"></textarea><br>
          <input type="range" name="rating" min="1" max="5" step=".1" placeholder="Rating" class="rating_bar">
          <input type="submit" class="btn btn-primary" value="Submit">
    </form> 
			  					
</div>

</body>
</html>