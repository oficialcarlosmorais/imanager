<?php
    include("classes/Despesas.class.php");
    $id = $_GET['id'];
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <a href="default.php">Home</a> / Despesas / editar
</section>

<!-- Main content -->
<section class="content">

<!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <?php 
                if(isset($_POST['botao']) && $_POST['botao'] == "Editar"){
                    $receita = new Despesa();
                    $receita->setIdDespesa($_POST['id']);
                    $receita->setIdCliente($_POST['id_cliente']);
                    $receita->setDespesa($_POST['despesa']);
                    $receita->setValor($_POST['valor']);
                    $receita->setData($_POST['data']);
                    $receita->atualizar();
                    echo "<a href='default.php?modulo=despesas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Despesa editada com sucesso!</strong></div></a>";    
                }

                $despesas = Despesa::selecionardespesa($id);

                if($despesas){
                    foreach($despesas as $despesa){
            ?>
                        <form method='post' action=''>
                            <div class="form-group">
                                <label for="despesa">Despesa: </label>
                                <input type="text" class="form-control" id="despesa" name="despesa" value="<?php echo $despesa->getDespesa()?>">
                            </div>
                            <div class="form-group">
                                <label for="valor">Valor R$:</label>
                                <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $despesa->getValor()?>">
                            </div>
                            <div class="form-group">
                                <label for="data">Data: </label>
                                <input type="date" class="form-control" id="data" name="data" value="<?php echo $despesa->getData()?>">
                            </div>
                            <input type="hidden" name='id' value = "<?php echo $despesa->getIdDespesa();?>">
                            <input type="hidden" name='id_cliente' value = "<?php echo $despesa->getIdCliente();?>">

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
