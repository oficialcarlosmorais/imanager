<!DOCTYPE html>
<html lang="pt-br">
	<head>
    	<meta http-equiv="content-type" content="text/html, charset=utf-8"  />
		<meta http-equiv="content-language" content="pt-br, en-US, fr, en"  />
    	<meta name="author" content="El Anara Nasciment, José Carlos Nogueira Morais, Roseany Lobato de Sousa" />
    	<meta name="description" content="gerenciador pessoal e empresarial" />
    	<meta name= "keywords" content="financeiro, finanças, I-manager" />
    	<meta name="generator" content="sublime"/>
    	<meta name="robots" content="all"/>
    	<meta name="rating" content="general" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="copyright" content="El Anara Nascimento, José Carlos Nogueira Morais, Roseany Lobato de Sousa" />
    	<title>I - MANAGER</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Add icon library -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="css/imanager2020.css">
	</head>
	<body>
		<main>
			<div class="container">
				<section id="campo_calculo" class="campo_calculo coluna sombra" style="margin-top: 30px;">
					<nav class="espacamento_abaixo d-flex flex-column" ><a href="index.php"><img src=images/logo.png width=150px></a><h3 style="color:black; margin-top: 15px;">Criar conta</h3></nav>
					<form action="comandos.php" method="post">
						<input type="text" class="form-control" name="nome" required placeholder="Nome" /><br>
						<input type="text" class="form-control" name="sobrenome"placeholder="Sobrenome" required /><br>
						<input type="text" class="form-control" name="cpf" placeholder="CPF (somente números)" required /><br>
						<select name="pessoa" class="form-control">
							<option selected disabled required>Tipo</option>
							<option value="f">Física</option>
							<option value="j">Jurídica</option>
						</select><br>
						<input type="password" class="form-control" name="senha" placeholder="Senha" required /><br>
						<input type="submit" class="btn btn-success" name="btn_new_user" value="Cadastrar">
					</form>
				</section>
			</div>
		</main>
	</body>
</html>