<?php
include_once("connection.php");
include_once("url.php");

session_start();



if(!empty($_GET)) {

  $id=$_GET["id"];

    $query = "SELECT * FROM book WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $book = $stmt->fetch();

}

  

// FECHAR CONEXÃO
$conn = null;
