<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');

$statement = oci_parse($connection, "SELECT DISTINCT CUISINE FROM 
    RESTAURANT WHERE CUISINE IS NOT NULL");
oci_execute($statement);

 $cuisine = array();

while ($row = oci_fetch_object($statement)) {
  $row_clean = [
    'type' => oci_result($statement, 1)
  ];

  array_push($cuisine, $row_clean);
}
$statement = oci_parse($connection, "SELECT DISTINCT VENUE_TYPE FROM 
    RESTAURANT WHERE VENUE_TYPE IS NOT NULL");
oci_execute($statement);

 $venue_type = array();

while ($row = oci_fetch_object($statement)) {
  $row_clean = [
    'type' => oci_result($statement, 1)
  ];

  array_push($venue_type, $row_clean);
}
$reply =  [
    'cuisine' => $cuisine,
    'venue_type'=> $venue_type
    ];
echo json_encode($reply);
//
// VERY important to close Oracle Database Connections and free statements!
//
oci_free_statement($statement);
oci_close($connection);



?>