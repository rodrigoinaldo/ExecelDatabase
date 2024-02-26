<?php 

include "config.php";

$search_banco = "SELECT id, nome, telefone, email FROM usuario ORDER BY id DESC";
$user_list = $pdo->prepare($search_banco);
$user_list->execute();


 $nomeExel = "usuariorr.csv";

 //o header vai fazer uma alteração via HTTP 
 header('Content-Type: text/csv');
 header('Content-Disposition: attachment;filename="' . $nomeExel . '"');

 //para abrir para arquivo CSv
 //o metodo "fopen" serve para abrir um tipo de arquivo
 // o metodo pode abrir e criar um arquivo 
 // o metodo fopen pode abrir e criar varios tipos 
 $open = fopen("php://output", "w");

 // Escreve os cabeçalhos do CSV
fputcsv($open, ['ID', 'Nome', 'Telefone', 'E-mail']);

// Itera sobre os resultados da consulta e escreve cada linha no arquivo CSV
 while ($row = $user_list->fetch(PDO::FETCH_ASSOC)) {
   fputcsv($open, $row);
}

 //fechar parar
 fclose($open);
?>