<?php
include_once("connection.php");
include_once("url.php");

session_start();

if (!empty($_GET)) {

  $genero = $_GET["genero"];
  $condicao = $_GET["condicoes"];

  if ($genero <> "" and $condicao <> "") {

    $query = "SELECT * FROM book WHERE GENERO=:GENERO AND CONDICAO=:CONDICAO";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":GENERO",   $genero);
    $stmt->bindParam(":CONDICAO", $condicao);
  } elseif ($genero <> "") {

    $query = "SELECT * FROM book WHERE GENERO=:GENERO ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":GENERO",   $genero);
  } elseif ($condicao <> "") {

    $query = "SELECT * FROM book WHERE CONDICAO=:CONDICAO";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":CONDICAO", $condicao);
  } else {
    $query = "SELECT * FROM book";
    $stmt = $conn->prepare($query);
  }
} else {

  $query = "SELECT * FROM book";
  $stmt = $conn->prepare($query);
}


$stmt->execute();
$books = $stmt->fetchAll();

// FECHAR CONEXÃO
$conn = null;
