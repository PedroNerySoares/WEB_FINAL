<?php
include_once("connection.php");
include_once("url.php");

session_start();

$filtro = $_GET["categoria"];

if (is_null($filtro)) {
    $query = "SELECT * FROM book";


    $stmt = $conn->prepare($query);


    $stmt->execute();

    $books = $stmt->fetchAll();
} else {
   
    $query = "SELECT * FROM book WHERE CATEGORIA=:CATEGORIA";

    $stmt = $conn->prepare($query);
      $stmt = $conn->prepare($query);
      $stmt->bindParam(":CATEGORIA", $filtro);

    $stmt->execute();

    $books = $stmt->fetchAll();

}

// FECHAR CONEXÃO
$conn = null;
