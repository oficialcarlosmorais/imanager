<?php
    include("classes/Receitas.class.php");
    @$id = $_GET['id'];
    if($id){
        $receita = new Receita();
            $receita->setIdReceita($_GET['id']);
            $receita->excluir();    

        $receitas = Receita::selecionar($id);

        if($receitas){
            foreach($receitas as $receita){
                echo "<a href='default.php?modulo=receitas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Ação não executada! Tente novamente mais tarde ou procure o suporte</strong></div></a>";   
            }
        } else {
            echo "<a href='default.php?modulo=receitas&acao=listar'><div class='alert alert-info alert-dismissible'><button type='button' class='close'>&times;</button><strong>Receita excluída com sucesso!</strong></div></a>";
        }
    } else {
?>
<script type="text/javascript">
    window.location.href = "default.php?modulo=receitas&acao=listar";
</script>
<?php 
    }
?>



