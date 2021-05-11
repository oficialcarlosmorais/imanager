<?php
	/*$senha1 = $_POST['senha'];
	$senha2 = $_POST['senha2'];
	if($senha1 != $senha2){
		header('location:index.php?file=auth-register&msg=1');
	
	}*/

	echo $_POST['nome'];
				    echo $_POST['sobrenome'];
				    echo $_POST['nasc'];
				    echo $_POST['doc'];
				    echo $_POST['email'];
				    echo $_POST['senha'];
				    echo $_POST['endereco'];
				    echo $_POST['bairro'];
				    echo $_POST['cidade'];
				    echo $_POST['estado'];
				    echo $_POST['pais'];
				    echo $_POST['telefone'];
				    echo $_POST['tipo'];
				    echo $_POST['data_cad'];
				    
?><!-- Content Header (Page header) -->
    <section class="content-header">
      Clientes / adicionar
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
			<?php
				if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){ 
				    include("classes/Cliente.class.php");
				    $cliente = new Cliente();
				    $cliente->setNome($_POST['nome']);
				    $cliente->setSobrenome($_POST['sobrenome']);
				    $cliente->setNasc($_POST['nasc']);
				    $cliente->setDoc($_POST['doc']);
				    $cliente->setEmail($_POST['email']);
				    $cliente->setSenha($_POST['senha']);
				    $cliente->setEndereco($_POST['endereco']);
				    $cliente->setBairro($_POST['bairro']);
				    $cliente->setCidade($_POST['cidade']);
				    $cliente->setEstado($_POST['estado']);
				    $cliente->setPais($_POST['pais']);
				    $cliente->setTelefone($_POST['telefone']);
				    $cliente->setTipo($_POST['tipo']);
				    $cliente->setDataCad($_POST['data_cad']);
				    $cliente->setAdmin('0');
				    $cliente->adicionar(); 
				    echo "CLIENTE CADASTRADO COM SUCESSO";   
				}
			?>

				<form method='post' action=''>
					<div class="form-group">
				    	<label for="nome">Nome:</label>
				    	<input type="text" class="form-control" id="nome" name="nome"placeholder="Nome completo">
					</div>
					<div class="form-group">
				    	<label for="email">Email</label>
				        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
				    </div>
					<div class="form-group">
				    	<label for="nome">Telefone:</label>
				    	<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
					</div>
					<input type='submit' name='botao' value='Salvar'>
				</form>
			</div>
		</div>
	</section>