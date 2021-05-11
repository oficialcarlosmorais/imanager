<?php
    include("classes/Receitas.class.php");
    $id = $_GET['id'];
?>
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
                if(isset($_POST['botao']) && $_POST['botao'] == "Editar"){
                    $receita = new Receita();
                    $receita->setIdReceita($_POST['id']);
                    $receita->setIdCliente($_POST['id_cliente']);
                    $receita->setReceita($_POST['receita']);
                    $receita->setValor($_POST['valor']);
                    $receita->setData($_POST['data']);
                    $receita->atualizar(); 
                    echo "<a href='default.php?modulo=receitas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Receita editada com sucesso!</strong></div></a>";    
                }

                $receitas = Receita::selecionarreceita($id);

                if($receitas){
                    foreach($receitas as $receita){
            ?>
                        <form method='post' action=''>
                            <div class="form-group">
                                <label for="receita">Receita: </label>
                                <input type="text" class="form-control" id="receita" name="receita" value="<?php echo $receita->getReceita()?>">
                            </div>
                            <div class="form-group">
                                <label for="valor">Valor R$:</label>
                                <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $receita->getValor()?>">
                            </div>
                            <div class="form-group">
                                <label for="data">Data: </label>
                                <input type="date" class="form-control" id="data" name="data" value="<?php echo $receita->getData()?>">
                            </div>
                            <input type="hidden" name='id' value = "<?php echo $receita->getIdReceita();?>">
                            <input type="hidden" name='id_cliente' value = "<?php echo $receita->getIdCliente();?>">

                            <input type='submit' name='botao' value='Editar'>
                        </form>
            <?php
                    }
                }else{
                    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
                }
            ?>
        </div>
    </div>
</section>


