<?php
    include("classes/Despesas.class.php");
    @$id = $_GET['id'];
    if($id){
        $despesa = new Despesa();
            $despesa->setIdDespesa($_GET['id']);
            $despesa->excluir();    

        $despesas = Despesa::selecionar($id);

        if($despesas){
            foreach($despesas as $despesa){
                echo "<a href='default.php?modulo=despesas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Ação não executada! Tente novamente mais tarde ou procure o suporte</strong></div></a>";   
            }
        } else {
            echo "<a href='default.php?modulo=despesas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Despesa excluída com sucesso!</strong></div></a>";
        }
    } else {
?>
<script type="text/javascript">
    window.location.href = "default.php?modulo=despesas&acao=listar";
</script>
<?php 
    }
?>



