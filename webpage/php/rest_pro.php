<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');
 if(isset($_GET)){
   $temp = $_GET["phone"];
 }
$statement = oci_parse($connection, "SELECT * FROM (restaurant JOIN review ON restaurant.phone = review.rest) JOIN hours ON hours.rest = restaurant.phone WHERE restaurant.phone = {$temp} ORDER BY review.times DESC");
oci_execute($statement);

$reply = array();
$row = oci_fetch_object($statement);
$week_open = oci_result($statement, 22);
$week_close = oci_result($statement, 23);
$weekend_open = oci_result($statement, 20);
$weekend_close = oci_result($statement, 21);

  $row_clean = [
    'name' => oci_result($statement, 1),
    'phone' => oci_result($statement, 2),
    'rest_desc' => oci_result($statement, 3),
    'rest_url' => oci_result($statement, 4),
    'venue_type' => oci_result($statement, 5),
    'zip' => oci_result($statement, 6),
    'street' => oci_result($statement, 7),
    'city' => oci_result($statement, 8),
    'state' => oci_result($statement, 9),
    'cuisine' => oci_result($statement, 10),
    'price' => oci_result($statement, 11),
    'avg_rating' => oci_result($statement, 12),
    'img_url' => oci_result($statement, 13),
    'week_open' => oci_result($statement, 22),
    'week_close' => oci_result($statement, 23),
    'weekend_open' => oci_result($statement, 20),
    'weekend_close' => oci_result($statement, 21),
    'is_open' => check_open($week_open, $week_close, $weekend_open, $weekend_close)
  ];

  function check_open($week_open, $week_close, $weekend_open, $weekend_close){
  	if(date("l") == "Saturday" || date("l") == "Sunday"){
  		$cur_time = "01-JAN-00 " . date("h.i.s A");
  		//return $weekend_open;
  		return ($cur_time >= $weekend_open && $cur_time < $weekend_close);
  	}
  	else{
  		$cur_time = "01-JAN-00 " . date("h.i.s A");
  		return ($cur_time >= $week_open && $cur_time < $week_close);
  	}
  }

  array_push($reply, $row_clean);
   $row_clean = [
    'rating' => oci_result($statement, 14),
    'time' => oci_result($statement, 15),
    'user_id' => oci_result($statement, 16),
    'rest' => oci_result($statement, 17),
    'text' => oci_result($statement, 18)
  ];

  array_push($reply, $row_clean);

while ($row = oci_fetch_object($statement)) {
  $row_clean = [
    'rating' => oci_result($statement, 14),
    'time' => oci_result($statement, 15),
    'user_id' => oci_result($statement, 16),
    'rest' => oci_result($statement, 17),
    'text' => oci_result($statement, 18)
  ];

  array_push($reply, $row_clean);
}
echo json_encode($reply);
//
// VERY important to close Oracle Database Connections and free statements!
//
oci_free_statement($statement);
oci_close($connection);



?>