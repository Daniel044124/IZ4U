<?php
    $daniel = mysqli_connect("localhost","root","","iz4you");
    if(mysqli_connect_errno()){
        die("Conexao Falhou: ". mysqli_connect_errno);
        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/styles.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/java.js"></script>
</head>
<body>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="index.html">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="Perfil.html">Perfil<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.html">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="lanc_duvida.html">Lançar Duvida</a>
				          <a class="dropdown-item" href="duv_lanc.html">Duvidas Lancadas</a>
				          <a class="dropdown-item" href="resp_lanc.html">Respostas Lancadas</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="Resul_busc.html">Procurar Duvidas</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="Cadastro.php">Cadastro</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="login.html"><a href="index.html">Home</a></button>
				    </form>
				  </div>
				</nav>
		<div class="corpo">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<div class="wrapper">
			  <h1>Registre-se!</h1>
			  <p>Seu cadastro é fundamental e Obrigatório para que você possa lançar ou responder alguma dúvida!</p>
			  <form class="form" method="post" action="Cadastro.php">
			  	  <input type="text" name="cpd" class="name" placeholder="CPD">
			    <div>
			      <p class="name-help">Por favor informe seu cpd.</p>
			    </div>
			    <input type="text" name="nome" class="name" placeholder="Nome">
			    <div>
			      <p class="name-help">Por favor informe seu nome completo.</p>
			    </div>
			    <input type="text" name="Telefone" class="name" placeholder="Telefone">
			    <div>
			      <p class="name-help">Por favor informe seu nome completo.</p>
			    </div>
			    <input type="text" name="Curso" class="name" placeholder="Curso">
			    <div>
			      <p class="name-help">Por favor informe seu curso.</p>
			    </div>
			    <input type="text" name="semestre" class="name" placeholder="Semestre">
			    <div>
			      <p class="name-help">Por favor informe seu curso.</p>
			    </div>
			    <input type="password" name="Senha" class="name" placeholder="Senha">
			    <div>
			      <p class="name-help">Por favor informe seu nome completo.</p>
			    </div>
			    <input type="password" name="conf_Senha" class="name" placeholder="Confirmar Senha">
			    <div>
			      <p class="name-help">Por favor informe seu nome completo.</p>
			    </div>
			    <input type="email" name="Email" class="Email" placeholder="Email">
			     <div>
			      <p class="email-help">Please enter your current email address.</p>
			    </div>
			    <input type="submit" class="submit" value="Cadastrar">
			  </form>
		</div>
</div>
</body>
</html>
<?php
		if ( isset($_POST["cpd"]) ) {
    	$cpd = $_POST["cpd"];
    	$nome = $_POST["nome"];
    	$Telefone = $_POST["Telefone"];
    	$curso = $_POST["Curso"];
    	$Semestre = $_POST["semestre"];
    	$Email = $_POST["Email"];
    	$Senha = $_POST["Senha"];
    	$conf_Senha = $_POST["conf_Senha"];
    	if ($Senha == $conf_Senha) {
    		$sen = $Senha;
    	}else{
    		die();
    		$conf = ("Senhas não conferem!");
    		print_r($conf);
    	}
    }
    $inserir = "INSERT INTO usuario (CPD, Nome, Curso, Semestre, Telefone, Email, Senha) VALUES ($cpd, '$nome', '$curso', $Semestre, '$Telefone', '$Email', '$sen')";

    $operacao_inser = mysqli_query($daniel, $inserir);
    if(!$operacao_inser){
    	die("Não foi efetuado a inserção");
    }
	?>
<?php
	mysqli_close($daniel);

?>