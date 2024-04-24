<?php


// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "127.0.0.1:3307";
$username = "cleiton";
$password = "1q2w3e4r";
$dbname = "artigos";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "INSERT INTO `comentarios` ( `nome`, `review`) VALUES ( '".$_POST['nome']."', '".$_POST['comentario']."')";

$statement = $mysqli->prepare($query);
$statement->execute();

$result = $statement->get_result();

header('location:processar_formulario.php');





// Insira aqui o código para processar os dados do formulário e inserir no banco de dados

?>