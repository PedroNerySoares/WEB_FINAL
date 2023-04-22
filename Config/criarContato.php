<?php

session_start();

include_once("connection.php");
include_once("url.php");



$data = $_POST;
if (!empty($data)) {
   

    //     // Criar contato


    $nome = $data["nome"] ." ".$data["sobreNome"];
    $email = $data["email"];
    $celular = $data["celular"];
    $observacao = $data["observacao"];

    $query = "INSERT INTO contacts (name,email,phone, observations) VALUES (:name, :email, :phone, :observations)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $nome );
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $celular);
    $stmt->bindParam(":observations",  $observacao);



    try {

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
        // Redirect HOME
        header("Location:" . $BASE_URL . "../index.php");
    } catch (PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }
}



// FECHAR CONEXÃO
$conn = null;
