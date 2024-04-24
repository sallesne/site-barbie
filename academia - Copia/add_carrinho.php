<?php


// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "127.0.0.1:3307";
$username = "cleiton";
$password = "1q2w3e4r";
$dbname = "artigos";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "INSERT INTO `carrinho` (`idproduto`) VALUES (".$_GET['id'].")";

$statement = $mysqli->prepare($query);
$statement->execute();

header('location:carrinho.php');

?>