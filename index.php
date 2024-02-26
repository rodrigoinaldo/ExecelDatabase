<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<?php 
// criando a sessao para cada usuario 
session_start();
unset($_SESSION['count']);


?>

    <main>
        <h1>Inserir Usuario</h1>

        <form action="inseBanco.php" method="post">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Enviar">
        </form>
        
        <h2>cria um arquivo Execel</h2>
            <a href="criarExecel.php">criar Execel</a>
  
    </main>
    
</body>
</html>