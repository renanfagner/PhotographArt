<?php 
	//session_start();
	//include('conexao.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viweport" content="whidth=devide-whidth, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Old´sFantasy</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
				    <a class="navbar-brand" href="../index.html"><img class="navbar-brand" src="../img/00052.png" width="100x150" class="img-fluid">Old´sFantasy</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarNav">
				      <ul class="navbar-nav">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="../musicas.html">Music</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="../historias.html">Histórias</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="cadastro.php">Cadastre-se</a>
				        </li>
				      </ul>
				    </div>
				</div>
		    </nav>
		</header>
		<br>
		<center>
			<img src="../img/00012.png" width="300px" height="300px">
		</center>
		<br>
		<div class="text-center">
			<?php
			if(isset($_SESSION['msg'])){
		        echo "<p style='color: #FF0000;'>".$_SESSION['msg']."</p>";
		        unset($_SESSION['msg']);
		    }
		    elseif (isset($_SESSION['cadastrado'])){
		    	echo "<p style='color: #FF0000;'>".$_SESSION['cadastrado']."</p>";
		        unset($_SESSION['cadastrado']);
		    }
		        
		    
			?>

		</div>
		
		<center>
			<form method="POST" action="processa.php">
				<label>Nome:</label>
				<input type="text" name="nome" placeholder="Digite seu nome completo"><br>
				<label>E-mail:</label>
				<input type="email" name="email" placeholder="Digite seu email pessoal"><br>
				<input type="submit" value="cadastrar">
			</form>
		</center>
		<br>	

		
		<center>
			<footer>
			    <div class="copy-area">
			      <div class="container">
			        <div class="row">
			          <div class="col-md-12">
			            <p>Fielmente escrito por The Mind &copy; 2021</p>
			          </div>
			        </div>
			      </div>
			    </div>
			</footer>
		</center>
	</body>
</html>