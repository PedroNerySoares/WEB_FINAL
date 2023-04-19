<?php
$host="localhost";
$dbname="adobook";
$user="root";
$pass="";

try{

    $conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);


}catch(PDOException $e){
    $error = $e->getMessage();
    echo("error:$error");
}




?>