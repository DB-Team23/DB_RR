<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');
$statement = oci_parse($connection, 'SELECT * FROM users WHERE ROWNUM<=5');
oci_execute($statement);

 $reply = array();
 if(is_set($_GET)){
   $temp = $_GET["test"];
 }
while ($row = oci_fetch_object($statement)) {
  $row_clean = [
    'username' => oci_result($statement, 'USERNAME'),
    'password' => oci_result($statement, 'PASSWORD'),
    'lname' => oci_result($statement, 'LNAME'),
    'fname' => oci_result($statement, 'FNAME'),
    'birthday' => oci_result($statement, 'BIRTHDAY'),
    'owns' => oci_result($statement, 'OWNS')
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
