<?php 

include "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuario (nome, telefone, email) VALUES ('$nome','$telefone','$email')";
    $consulta = $pdo->query($sql);
    //qyery(consulta) esta pegando o que esta em $sql e passado para o $pdo que esta com a coneção no banco para ai executar
}
?>