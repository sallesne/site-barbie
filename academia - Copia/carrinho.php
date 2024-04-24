<?php


// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "127.0.0.1:3307";
$username = "cleiton";
$password = "1q2w3e4r";
$dbname = "artigos";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT artigos_esportivos.*, carrinho.idproduto FROM `carrinho`, artigos_esportivos WHERE artigos_esportivos.id = carrinho.idproduto;";

$statement = $mysqli->prepare($query);
$statement->execute();

$result = $statement->get_result();

?>


<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="estilo.css" rel="stylesheet">
    <title>Olimpy</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body div class="">
   <header>
     <nav>
       <div id="navImg">
         <img src="https://s3-sa-east-1.amazonaws.com/projetos-artes/fullsize%2F2013%2F04%2F15%2F09%2FWDL-Logo-25268_39075_053104545_262503422.jpg" alt="logo">
       </div>
       <ul> 




         <li><a style="color: rgb(146, 0, 0)" href="index.html" >Olimpo</a></li>
         <li><a style="color: rgb(146, 0, 0)"href="suplementos.php" >Produtos</a></li>
         <li><a style="color: rgb(146, 0, 0)"href="processar_formulario.php" >Reviews</a></li>

         </ul>
      </nav>
    </header>





         <br><br>
<br><br>
<br><br>
<br><br>
<br><br>



<table class="table table-bordered">
<th>Img</th>
<th>produto</th>
<th>valor</th>

<?php
foreach($result as $resultado){
echo 
'
<tr>
<th><img src="'.$resultado['cam_img'].'" width="75px" ></th>
<th>'.$resultado['nome'].'</th>
<th>R$'.$resultado['preço'].'</th>
<tr>';
}
?>


</table>



<br><br>

<center>


<button type="button" class="btn btn-outline-success">Finalizar compra <i class="bi bi-cart4"></i></button>

<button type="button" class="btn btn-danger">Apagar Carrinho <i class="bi bi-cart4"></i></button>
</center>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        </ul>
      </nav>
    </header>