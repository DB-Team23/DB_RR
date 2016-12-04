<?php

$connection = oci_connect($username = 'jcr',
                        $password = 'Sweestu1!',
                        $connection_string = '//oracle.cise.ufl.edu/orcl');
 if(isset($_POST)){
   $temp = $_POST["review"];
 }
$statement = oci_parse($connection, "INSERT INTO review VALUES({$temp[rating]},to_timestamp('{$temp[now]}','YYYY-MM-DD'),'Name77',{$temp[phone]},'{$temp[text]}')");
$r = oci_execute($statement);
if($r){
	echo 'success';
}
else{
	echo 'fail';
}
//echo json_encode({now:date("c")});
//
// VERY important to close Oracle Database Connections and free statements!
//
oci_free_statement($statement);
oci_close($connection);



?>