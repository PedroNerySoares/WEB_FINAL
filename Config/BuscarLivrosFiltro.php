<?php
include_once("connection.php");
include_once("url.php");

session_start();


if (!empty($_GET)) {


  $genero = $_GET["genero"];
  $condicao = $_GET["condicoes"];

  $query = "SELECT * FROM book WHERE id = :id";

  $stmt = $conn->prepare($query);

  $stmt->bindParam(":id", $id);

  $stmt->execute();

  $book = $stmt->fetch();
}

// FECHAR CONEXÃO
$conn = null;
