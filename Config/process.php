<?php


  session_start();


  include_once("connection.php");
  include_once("url.php");


  $query = "SELECT * FROM book";


  $stmt = $conn->prepare($query);


  $stmt->execute();
     
  $books = $stmt->fetchAll();