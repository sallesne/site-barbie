<?php


// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "127.0.0.1:3307";
$username = "cleiton";
$password = "1q2w3e4r";
$dbname = "artigos";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM artigos_esportivos order by nome desc";

$statement = $mysqli->prepare($query);
$statement->execute();

$result = $statement->get_result();

?>


<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>suplemente </title>

    

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


  <li>  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
  </svg></li>
  </nav>

  </ul>
  <br>
  </nav>
  <div></div>
  </header>




   

   

        
 <div class="container">  
        <div class="row">


<?php

 //Echo dos dados coletados no banco de dados   
foreach($result as $resultado){
echo 
'
<!-- divisao das bonecas -->
<div class="col-3">
<div class="card" style="width: 18rem;">
    
 
  <img src="'.$resultado['cam_img'].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$resultado['nome'].'</h5>
    <p class="card-text">'.$resultado['preço'].'</p>
    <!--<a href="'.$resultado['link_compra'].'" class="btn btn-primary">adicionar ao carrinho</a>-->
    <a href="add_carrinho.php?id='.$resultado['id'].'" class="btn btn-primary">adicionar ao carrinho</a>
  </div>
</div>
</div>
';

}
?>
 </div>
 </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</script>

<br><br><br><br>

<center>
	<button onclick="changeColor()">
    <h1><i class="bi bi-universal-access-circle"></i></h1></button>
</center>
	

	<h2 id="acess" style="color:rgb(43, 43, 43);"></h2>

	<script>
		let result = document.getElementById("acess");
var cor='white';


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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</head></html>