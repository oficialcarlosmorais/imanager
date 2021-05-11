<?php
  include("classes/Despesas.class.php");
  $despesa = Despesa::selecionar($id);

  if($despesa){
?>

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="default.php">Home</a> / Despesas / Listar
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
                <th>Despesa</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Comandos</th>
              </tr>
              <?php
                foreach($despesa as $despesa){
                  if($despesa->getIdCliente()==$id){
              ?>
              <tr>
                <td><?php echo $despesa->getIdDespesa();?></td>
                <td><?php echo $despesa->getDespesa();?></td>
                <td><?php echo "R$ ". $despesa->getValor();?></td>
                <td><?php $data=$despesa->getData(); echo date('d/m/Y', strtotime($data))?></td>
                <td>
                  <a href="?modulo=despesas&acao=editar&id=<?php echo $despesa->getIdDespesa();?>"><button class="btn btn-warning" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                  <a href="?modulo=despesas&acao=excluir&id=<?php echo $despesa->getIdDespesa();?>"><button class="btn btn-danger" title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
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