  <!-- Content Header (Page header) -->
    <section class="content-header">
      Relatórios / adicionar
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
	        <?php
				if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){ 
					include("classes/Relatorios.class.php");
					$receitas = new Relatorios();
		    		$receitas->setIdCliente($_POST['id_cliente']);
		    		$receitas->setMes($_POST['mes']);
		    		$receitas->setValor($_POST['valor']);
		    		$receitas->setAno($_POST['ano']);
		    		$receitas->adicionar();
		    		echo "<a href='index.php?modulo=relatorios&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Relatório adicionado com sucesso!</strong></div></a>";		    		
				} else {
			?>

				<form method='post' action=''>
					<div class="form-group">
						<label for="id_cliente">Cliente</label>
						<select name="id_cliente" class="form-control">
						<?php
							include("classes/Cliente.class.php");
	    					$clientes = Cliente::listar();
							if($clientes){
								foreach($clientes as $cliente){
						?>
									<option value="<?php echo $cliente->getId();?>">
										<?php echo $cliente->getNome();?>
									</option>
						<?php 	}
							}
						?>
						</select>
					</div>
					<div class="form-group">
						<label for="mes">Mês</label>
						<select name="mes" class="form-control">
							<option value="Janeiro">Janeiro</option>
							<option value="Fevereiro">Fevereiro</option>
							<option value="Março">Março</option>
							<option value="Abril">Abril</option>
							<option value="Maio">Maio</option>
							<option value="Junho">Junho</option>
							<option value="Julho">Julho</option>
							<option value="Agosto">Agosto</option>
							<option value="Setembro">Setembro</option>
							<option value="Outubro">Outubro</option>
							<option value="Novembro">Novembro</option>
							<option value="Dezembro">Dezembro</option>
						</select>
					</div>
					<div class="form-group">
				    	<label for="valor">Ano</label>
				        <input type="number" class="form-control" id="ano" name="ano" placeholder="Ex.: 2004">
				    </div>
					<div class="form-group">
				    	<label for="valor">Valor:</label>
				    	<input type="number" class="form-control" id="valor" name="valor" placeholder="R$">
					</div>
					<input type='submit' name='botao' value='Salvar'>
				</form>
			<?php } ?>
			</div>
		</div>
	</section>