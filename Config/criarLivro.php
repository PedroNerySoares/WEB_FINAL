<?php

use FFI\CData;

session_start();

include_once("connection.php");
include_once("url.php");


$data = $_POST;
if (!empty($data)) {

    $nomeLivro = $data["nomeLivro"];
    $nome = $data["nomeDoador"] . " " . $data["sobreNomeDoador"];
    // $email = $data["email"];
    $celular = $data["celular"];
    $genero = $data["genero"];
    $observacao = $data["observacao"];
    $urlImg = $data["urlImage"];
    echo($genero);

    $query = "INSERT INTO book (Nome, DESCRICAO, IMAGEM, DATA_CRIACAO, DOADOR,GENERO) VALUES (:Nome, :DESCRICAO, :IMAGEM, :DATA_CRIACAO, :DOADOR,:GENERO)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":Nome",$nomeLivro);
    $stmt->bindParam(":DESCRICAO",$observacao);
    $stmt->bindParam(":IMAGEM", $urlImg );
    $stmt->bindParam(":GENERO", $genero);
    $stmt->bindParam(":DATA_CRIACAO",date('Y/m/d'));
    $stmt->bindParam(":DOADOR",$nome);
    // $stmt->bindParam(":CELULAR",$celular);


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
