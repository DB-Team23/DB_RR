<?php
$connection = oci_connect($username = 'jcr',
                          $password = 'Sweestu1!',
                          $connection_string = '//oracle.cise.ufl.edu/orcl');
$statement = oci_parse($connection, 'SELECT * FROM users');
oci_execute($statement);

while (($row = oci_fetch_object($statement))) {
	$reply = ['row'=>$row];
	echo json_encode($reply);
    var_dump($row);
}

//
// VERY important to close Oracle Database Connections and free statements!
//
oci_free_statement($statement);
oci_close($connection);