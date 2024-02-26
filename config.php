<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastroexecel";

try {
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;",$usuario,$senha);
} catch (\Exception $e) {
    echo"erro";
    echo $e->getMessage();
}
?>