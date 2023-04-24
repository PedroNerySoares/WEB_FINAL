<?php
include_once("connection.php");
include_once("url.php");

session_start();

// $genero = $_GET["genero"];
// $condicao = $_GET["condicoes"];

// echo(is_null($condicao));


// if ($genero<>"" and $condicao<>"") {
  $query = "SELECT * FROM book";
  // echo($data["categoria"]);

  $stmt = $conn->prepare($query);


  $stmt->execute();

  $books = $stmt->fetchAll();
// } else {

//   $query = "SELECT * FROM book WHERE GENERO=:GENERO";

//   $stmt = $conn->prepare($query);
//   $stmt = $conn->prepare($query);
//   $stmt->bindParam(":GENERO", $genero);

//   $stmt->execute();

//   $books = $stmt->fetchAll();

// }

// FECHAR CONEXÃO
$conn = null;
