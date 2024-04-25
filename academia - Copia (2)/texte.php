<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo 'produto' foi enviado
    if (isset($_POST["produto"])) {
        // Recupera o nome do produto do formulário
        $produto = $_POST["produto"];

        // Conexão com o banco de dados (substitua pelos seus dados de conexão)
        $servername = "localhost81";
        $username = "seu_usuario";
        $password = "sua_senha";
        $dbname = "seu_banco_de_dados";

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Insira aqui o código para processar os dados do formulário e inserir no banco de dados

        // Fecha a conexão
        $conn->close();
    }
}
?>
