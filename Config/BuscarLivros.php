<?php

include_once("connection.php");
include_once("url.php");

session_start();




$query = "SELECT * FROM book";


$stmt = $conn->prepare($query);


$stmt->execute();

$books = $stmt->fetchAll();


// FECHAR CONEXÃO
$conn = null;
