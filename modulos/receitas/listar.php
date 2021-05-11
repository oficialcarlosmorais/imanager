<?php
  include("classes/Receitas.class.php");
  $receitas = Receita::selecionar($id);

  if($receitas){
?>

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="default.php">Home</a> / Receitas / Listar
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Receita</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Comandos</th>
              </tr>
              <?php
                foreach($receitas as $receita){
                  if($receita->getIdCliente()==$id){
              ?>
              <tr>
                <td><?php echo $receita->getIdReceita();?></td>
                <td><?php echo $receita->getReceita();?></td>
                <td><?php echo "R$ ". $receita->getValor();?></td>
                <td><?php $data=$receita->getData(); echo date('d/m/Y', strtotime($data))?></td>
                <td>
                  <a href="?modulo=receitas&acao=editar&id=<?php echo $receita->getIdReceita();?>"><button class="btn btn-warning" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                  <a href="?modulo=receitas&acao=excluir&id=<?php echo $receita->getIdReceita();?>"><button class="btn btn-danger" title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
              </tr>
              <?php
                  }
                }
  }?>
            </table>
        <!-- /.box-footer-->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>  
    <!-- /.content -->