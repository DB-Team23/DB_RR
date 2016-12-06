<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');

$statement = oci_parse($connection, "SELECT sum(r) as total from ((select count(*) r from hours)
	union all (select count(*) r from restaurant)
	union all (select count(*) r from review)
	union all (select count(*) r from users) 
	union all (select count(*) r from visits))");
oci_execute($statement);
$row = oci_fetch_object($statement);

echo oci_result($statement, 1);

//
// VERY important to close Oracle Database Connections and free statements!
//
oci_free_statement($statement);
oci_close($connection);



?>