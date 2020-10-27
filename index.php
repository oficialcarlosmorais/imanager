
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
		<meta name="copyright" content="El Anara Nascimento, José Carlos Nogueira Morais, Roseany Lobato de Sousa" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>I - MANAGER</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

			$("#fbotao2").mousedown(function(){
			$login = $("#flogin").val();

			if ($login == "pessoajuridica") {
				window.location.href = "default_juridica.html";
			} else {
				if ($login == "pessoafisica") {
					window.location.href = "default_pessoal.html";
			} else {
				alert("LOGIN INCORRETO");
			}
			}
		})

			function assineagora(){alert("LIGUE *9000 E ASSINE AGORA");}

			$('#assine_agora').click(function(){
			assineagora();
			})

			$('#conquisteja').click(function(){
			assineagora();
			})

		})
		</script>
		<style>
			* {box-sizing: border-box; margin:0; padding: 0; font-family: arial;}

			main, header, article, section, aside, footer, div, input{display: block;} 
			
			main {
				width: 1000px;
				margin: 0px auto;
				background: white;
			}

			header{
				width: 100%;
				height: 140px;
				background: rgba(00,100,00, 0.8);
				display: flex;
				flex-wrap: nowrap;
				justify-content: space-between;

			}

			header div{
				width: 30%;
				display: flex;
				padding: 20px;
			}

			header div img {width: 100%;}

			header div form {
				width: 100%;
			}

			input[type=text]{
 				width: 80%;
  				padding: 8px;
 				margin: 5px 0;
  				display: block;
  				border: 1px solid #ccc;
  				border-radius: 4px;
  				box-sizing: border-box;
				}

			input[type=submit]:hover {
  				background-color: cyan;
				}
			#fbotao {
  				width: 40%;
  				background: silver;
  				color: gray;
  				text-align: center;
  				padding: 5px;
 				margin: 2px 0;
  				border: none;
  				border-radius: 2px;
  				cursor: pointer;
  				float: right;
				}

			nav {
				background: #F0FFF0;
				height: 60px;
				}

			nav div {
				width: 50%;

			}

			nav span {
				margin: 0px auto; width: 30%; color: white; font-family: arial; text-align: center; border: 1px solid black; border-radius: 5px; cursor: pointer; background: #32CD32; padding: 10px;
			}

			#selfpub{
				width: 80%;
				height: auto; 
				font-family: arial; 
				text-align: justify; 
				border: 1px solid black; 
				border-style: dashed; 
				background: white; 
				padding-top: 10px; 
				padding-left: 10px; 
				padding-right: 4px;
			}

			#selfpub * {padding: 2px; text-align: justify-all;}

			footer{
				text-align: center; 
				font-family: arial; 
				font-size: 12px; 
				background: green; 
				padding: 5px;
			}

			.flex {
				display: flex;
			}

			.coluna {flex-direction: column;}
			
			.dir_esq {align-items: flex-end;}

			.centralizar {
				justify-content: center;
				align-items: center;
				align-content: center;
				align-self: center;
			}

			.borda {border: 1px solid black;}

			.div2{width: 50%;}

			.espaco_abaixo{ margin-bottom: 10px; }
			.espaco_acima{ margin-top: 10px;}

			#minibanner2 {display: none;}

		@media (max-width: 856px) {

			main{width:100%;}

			header{

				display: block;
				width: 100%;
				height: auto;
				margin-bottom: 10px;
				padding: 2px;
			}

			header div{
				width: auto;
				height: auto;
				padding: 2px;
			}

			#divform {
				width: 100%;
				display: flex;
				justify-content: flex-end;

			}

			#minibanner2{
				width: 50%;
				display: block;
				min-height: 76px;
				}


			input[type=text], select {
 				width: 80%;
  				padding: 8px;
 				margin: 3px;
  				display: block;
  				border: 1px solid #ccc;
  				border-radius: 4px;
  				box-sizing: border-box;
				}

			input[type=submit]:hover {
  				background-color: cyan;
				}
				
			#fbotao {
  				width: 25%;
  				background: silver;
  				color: gray;
  				text-align: center;
  				padding: 2px ;
 				margin: 2px;
  				border: none;
  				border-radius: 2px;
  				cursor: pointer;
  				float: right;
				}

			nav, nav div, nav div span, nav p {
				display: none;
				visibility: hidden;
				width: 0px;
				height: 0px;
				border:0px;
				margin:0px;
			}

			footer{
				text-align: center; 
				font-family: arial; 
				font-size: 3vw; 
				background: green; 
				padding: 5px;
			}
		}

		@media (max-width: 375px) {
			main{ width: 375px; height: auto;}
		}


		</style>
		 
	</head>
	<body>
		<main>
			<header>
				<div><img src=images/logo.png></div>
				<div id="divform">
					<picture id="minibanner2">
  						<source srcset="images/minibanner2.png" media="(max-width: 855px)">
 						<img src="images/minibanner2.png" width="100%">
					</picture>
					
					<form class="flex coluna dir_esq" id="formulario_login" action="login.php" method="POST">
    					<input type="number" id="flogin" name="cpf" placeholder="login" required>
    					<input type="password" id="fsenha" name="senha" placeholder="senha" required>
						<input type="submit" id="btn_login" name="btn_login" value="Entrar">
 					</form>
 				</div>
			</header>

			<nav class="flex centralizar" style="color: #3CB371; font-weight: bold;">
				<div class="flex centralizar" ><p>Faça como os grandes!</p></div>
				<div class="flex centralizar"><span><a href="cliente_novo.php">Sign in</a></span></div>
			</nav>
			<article>
				<section class="rotator">
					<a href="cliente_novo.php"><picture>
  						<source srcset="images/minibanner1.png" media="(max-width: 855px)">
 						<source srcset="images/banner.png" media="(max-width: 1500px)">
  						<img src="images/banner.png" width="100%">
					</picture></a>
				</section>

				<section class="flex espaco_acima">
					<div class="div2 flex"><img src="images/amostra.png" width="100%"></div>
					<div id="selfpub"><h3>Sua empresa na palma da mão</h3><p>Onde quer que
					esteja, consulte seu caixa, veja o que entrou ou saiu.<br> Com <strong><font
					color="green">I-Manager</font> é <font color="yellow">você</font> no
					<font color="green">controle</font><br><br>	
				<p id="assine_agora"> Assine agora</p></strong></div>
				</section>
			</article>
			<footer><h4>I-Manager</h4>Copyright 2022</footer>
		</main>
	</body>
</html>	