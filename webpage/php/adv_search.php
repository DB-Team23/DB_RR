<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');
 if(isset($_GET)){
   $temp = $_GET["user_data"];
 }
$statement = oci_parse($connection, "SELECT * FROM restaurant WHERE (LOWER(name) LIKE LOWER('%{$temp[search]}%') OR 
										LOWER(venue_type) LIKE LOWER('%{$temp[search]}%') OR
										LOWER(street) LIKE LOWER('%{$temp[search]}%') OR
										LOWER(city) LIKE LOWER('%{$temp[search]}%') OR
										LOWER(state) LIKE LOWER('%{$temp[search]}%') OR
										LOWER(cuisine) LIKE LOWER('%{$temp[search]}%') OR
										zip = '{$temp[search]}') AND
                    LOWER(cuisine) LIKE LOWER('{$temp[cuisine]}') AND
                    LOWER(venue_type) LIKE LOWER('{$temp[venue_type]}') AND
                    price LIKE '{$temp[price]}' AND
                    avg_rating >= {$temp[avg_rating]} AND
                    LOWER(city) LIKE LOWER('{$temp[city]}') AND
                    LOWER(state) LIKE LOWER('{$temp[state]}') AND
                    LOWER(zip) LIKE LOWER('{$temp[zip]}')
                    ORDER BY {$temp[order_by]} DESC");
oci_execute($statement);

 $reply = array();

while ($row = oci_fetch_object($statement)) {
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
    'img_url' => oci_result($statement, 13)
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