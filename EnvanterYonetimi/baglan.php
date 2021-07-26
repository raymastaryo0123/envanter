<?php 

try {

	//$db=new PDO("mysql:host=localhost;dbname=envanter;charset=utf8",'root');
    $db=new PDO("mysql:host=remotemysql.com;dbname=gWJJxnoVn8;charset=utf8",'gWJJxnoVn8','6cydyUXP4a');

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>