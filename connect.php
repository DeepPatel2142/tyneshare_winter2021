<?php
try
{
 $dsn = 'mysql:host=localhost;
 dbname=COMP_1006_Winter2021Sem';
 $username = 'root';
 $password = 'root';

 $db = new PDO($dsn,$username,$password);
 echo 'Connected Sucessfully! Whoo hoo!!!';
}
catch(PDOException $e)
{
 $error_messege = $e->getMessage();
 echo 'Something went wrong!!!' . $errormessage . '!';
}

?>