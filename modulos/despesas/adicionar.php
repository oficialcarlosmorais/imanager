  <!-- Content Header (Page header) -->
    <section class="content-header">
     <a href="default.php">Home</a> / Despesas / adicionar
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
		<div class="box">
			<div class="box-header with-border">
	        <?php
				if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){ 
					include("classes/Despesas.class.php");
					$receitas = new Despesa();
		    		$receitas->setIdCliente($_POST['id_cliente']);
		    		$receitas->setDespesa($_POST['despesa']);
		    		$receitas->setValor($_POST['valor']);
		    		$receitas->setData($_POST['data']);
		    		$receitas->adicionar();
		    		echo "<a href='default.php?modulo=despesas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Despesa adicionada com sucesso!</strong></div></a>";		    		
				} else {
			?>
<form method='post' action=''>
					<div class="form-group">
						<!--<label for="id_cliente">Cliente</label>-->
						<input type="hidden" name="id_cliente" class="form-control" value="<?php echo $id;?>">
						<!--<select name="id_cliente" class="form-control">-->
						<?php
						/*
							include("classes/Cliente.class.php");
	    					$clientes = Cliente::listar();
							if($clientes){
								foreach($clientes as $cliente){
						?>
									<option value="<?php echo $cliente->getId();?>">
										<?php echo $cliente->getNome();?>
									</option>
						<?php 	}
							}*/
						?>
						<!--</select>-->
					</div>
					<div class="form-group">
				    	<label for="receita">Despesa: </label>
				    	<input type="text" class="form-control" id="despesa" name="despesa" placeholder="Qual o gasto?">
					</div>
					<div class="form-group">
				    	<label for="valor">Valor</label>
				        <input type="text" class="form-control" id="valor" name="valor" placeholder="R$">
				    </div>
					<div class="form-group">
				    	<label for="data">Data:</label>
				    	<input type="date" class="form-control" id="data" name="data">
					</div>
					<input type='submit' name='botao' value='Salvar'>
				</form>
			<?php } ?>
			</div>
		</div>
	</section>
