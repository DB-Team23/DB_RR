<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');
if(isset($_GET)){
   $temp = $_GET["username"];
 }
$statement = oci_parse($connection, "SELECT * FROM (SELECT * FROM (users JOIN visits ON visits.userid = users.username) JOIN restaurant ON visits.rest = restaurant.phone WHERE users.username = '{$temp}' ORDER BY numvisits DESC) WHERE ROWNUM <= 3");
oci_execute($statement);

$reply = array();

$row = oci_fetch_object($statement);
$row_clean = [
    'username' => oci_result($statement, 1),
    'password' => oci_result($statement, 2),
    'lname' => oci_result($statement, 3),
    'fname' => oci_result($statement, 4),
    'birthday' => oci_result($statement, 5),
    'owns' => oci_result($statement, 6)
];
array_push($reply, $row_clean);
$row_clean = [
    'name' => oci_result($statement, 10),
    'phone' => oci_result($statement, 7),
    'venue_type' => oci_result($statement, 14),
    'cuisine' => oci_result($statement, 19),
    'city' => oci_result($statement, 17),
    'avg_rating'  => oci_result($statement, 21),
    'numvisits'  => oci_result($statement, 9)
];
array_push($reply, $row_clean);
while ($row = oci_fetch_object($statement)) {
  $row_clean = [
    'name' => oci_result($statement, 10),
    'phone' => oci_result($statement, 7),
    'venue_type' => oci_result($statement, 14),
    'cuisine' => oci_result($statement, 19),
    'city' => oci_result($statement, 17),
    'avg_rating'  => oci_result($statement, 21),
    'numvisits'  => oci_result($statement, 9)
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