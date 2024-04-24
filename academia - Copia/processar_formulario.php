<?php


// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "127.0.0.1:3307";
$username = "cleiton";
$password = "1q2w3e4r";
$dbname = "artigos";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM comentarios order by id desc" ;

$statement = $mysqli->prepare($query);
$statement->execute();

$result = $statement->get_result();







// Insira aqui o código para processar os dados do formulário e inserir no banco de dados

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>suplemente </title>


    </head>
  <body background="white">
   <header>
     <nav>
       <div id="navImg">
         <img src="https://s3-sa-east-1.amazonaws.com/projetos-artes/fullsize%2F2013%2F04%2F15%2F09%2FWDL-Logo-25268_39075_053104545_262503422.jpg" alt="logo">
       </div>
       <ul>
         <li><a style="color: rgb(146, 0, 0)" href="index.html" >Olimpo</a></li>
         <li><a style="color: rgb(146, 0, 0)" href="suplementos.php" >produtos</a></li>
         <li><a style="color: rgb(146, 0, 0)" href="processar_formulario.php">Reviews</a></li>
         <a href="review.php"> <i class="bi bi-card-list"></i> </a>
        <li></li>


       </ul>
     </nav>

          <d	iv></div>
   </header>
<?php
   //Echo dos dados coletados no banco de dados
foreach($result as $resultado){
echo 
'
<div class="modal--container">
	<div class="modal--main">
		<span class="modal--close">X</span>
		<div class="modal--header">
			<span class="modal--title">'.$resultado['nome'].' </span>
		</div>
		<div class="modal--body">
			<p class="modal--body--text">
      '.$resultado['review'].' 
			</p>
			<img class="modal--body--img" alt="Placeholder" src='.$resultado['cam_img'].'  />
		</div>
	</div>
</div>';
}
?>
<center>

</script>
	<button onclick="changeColor()">
    <h1><i class="bi bi-universal-access-circle"></i></h1>
	
	</button>

	<h2 id="acess" style="color:rgb(43, 43, 43);"></h2>

	<script>
		let result = document.getElementById("acess");
var cor='white';

</center>
		function changeColor() {
      if (cor == 'white' ){
        cor='gray';
        alert(cor);
        document.body.style.background = cor;

      }
      else{
        (cor=='gray');
        cor='white';
        alert(cor);
        document.body.style.background = cor;
      }
			
		}


	</script>
</body>
</html>