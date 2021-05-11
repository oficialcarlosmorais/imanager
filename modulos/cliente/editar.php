<section class="content-header">
    <a href="default.php">Home</a> / <?php if($admin=='0'){echo "Cliente ";} else { echo "Administrador";} ?> / editar
</section>

<section class="content-header">
      
</section>

<!--<form action="upload.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
        <label for="nasc">Selecione a imagem:</label>
        <input type="file" name="anexo1" id="anexo1" class="form-control">
        <input type="hidden" name="doc" value="<?php echo $doc;?>">
	</div>
	<input type="submit" value="Upload Image" name="submit" class="btn btn-sucess">
</form>
-->
<!-- Main content -->
<section class="content">
<!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <?php
                if(isset($_POST['botao']) && $_POST['botao'] == "Editar"){ 
                    $cliente = new Cliente();
                    $cliente->setId($_POST['id']);
                    $cliente->setNome($_POST['nome']);
                    $cliente->setSobrenome($_POST['sobrenome']);
                    $cliente->setDoc($_POST['doc']);
                    $cliente->setNasc($_POST['nasc']);
                    $cliente->setEmail($_POST['email']);
                    $cliente->setSenha($_POST['senha']);
                    $cliente->setTelefone($_POST['telefone']);
                    $cliente->setEndereco($_POST['endereco']);
                    $cliente->setBairro($_POST['bairro']);
                    $cliente->setCidade($_POST['cidade']);
                    $cliente->setEstado($_POST['estado']);
                    $cliente->setPais($_POST['pais']);
                    $cliente->atualizar();
                    ?>
                    <script type="text/javascript">window.location.href = "default.php?modulo=cliente&acao=editar";</script> 
                    <?php    
                }
            ?>
            <form method='post' action=''>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value = "<?php echo $cliente->getNome();?>">
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" value = "<?php echo $cliente->getSobrenome();?>">
                </div>
                <div class="form-group">
                    <label for="doc">Documento:</label>
                    <input type="text" class="form-control" id="doc" name="doc" value = "<?php echo $cliente->getDoc();?>">
                </div>
                <div class="form-group">
                    <label for="nasc">Data de nascimento:</label>
                    <input type="text" class="form-control" id="nasc" name="nasc" value = "<?php echo $cliente->getNasc();?>">
                </div>
                <div class="form-group">
            		<label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value = "<?php echo $cliente->getEmail();?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" value = "<?php echo $cliente->getSenha();?>">
                </div>
                <div class="form-group">
                    <label for="nome">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value = "<?php echo $cliente->getTelefone();?>">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value = "<?php echo $cliente->getEndereco();?>">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value = "<?php echo $cliente->getBairro();?>">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value = "<?php echo $cliente->getCidade();?>">
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input type="text" class="form-control" id="estado" name="estado" value = "<?php echo $cliente->getEstado();?>">
                </div>
                <div class="form-group">
                    <label for="pais">País:</label>
                    <input type="text" class="form-control" id="pais" name="pais" value = "<?php echo $cliente->getPais();?>">
                </div>
                
                <input type="hidden" name='id' value = "<?php echo $cliente->getId();?>">
                <input type='submit' name='botao' value='Editar'>
            </form>
        </div>
    </div>
</section>