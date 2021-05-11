<?php
  include("classes/Relatorios.class.php");
  $relatorios = Relatorio::selecionarReceitas($id);
  $soma_despesas=0;
  $soma_receitas=0;

  if($relatorios){ 
?>

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="default.php">Home</a> / Relatórios / <a href="?modulo=receitas&amp;acao=adicionar">Receitas</a>
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
                foreach($relatorios as $relatorio){
                  if($relatorio->getIdCliente()==$id){
                  $soma_receitas=$soma_receitas+$relatorio->getValor();
              ?>
              <tr>
                <td><?php echo $relatorio->getIdReceita();?></td>
                <td><?php echo $relatorio->getReceita();?></td>
                <td>R$ <?php echo $relatorio->getValor();?></td>
                <td><?php $data=$relatorio->getData(); echo date('d/m/Y', strtotime($data))?></td>
                <td>
                  <a href="?modulo=receitas&acao=editar&id=<?php echo $relatorio->getIdReceita();?>"><button class="btn btn-warning" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                  <a href="?modulo=relatorios&acao=excluir&id=<?php echo $relatorio->getIdReceita();?>"><button class="btn btn-danger" title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
              </tr>
              <?php
                  }
                }
                }?>
              <tr>
                <td colspan="5">
                  <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-plus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Total</span>
                      <span class="info-box-number"><?php echo "R$ " . $soma_receitas;?></span>

                      <div class="progress">
                        <div class="progress-bar" style="width:100%"></div>
                      </div>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </td>
              </tr>
            </table>
        <!-- /.box-footer-->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>

    <section class="content-header">
      <a href="default.php">Home</a> / Relatórios / <a href="?modulo=despesas&amp;acao=adicionar">Despesas</a>
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
              $despesa = Relatorio::selecionarDespesa($id);

              if($despesa){
                foreach($despesa as $despesa){
                  if($despesa->getIdCliente()==$id){
                  $soma_despesas=$soma_despesas+$despesa->getValor();
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
              }else{

                }

              ?>
              <tr>
                <td colspan="5">
                  <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-minus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Total</span>
                      <span class="info-box-number"><?php echo "R$ " . $soma_despesas;?></span>

                      <div class="progress">
                        <?php 
                        $porcentagem_despesa = ($soma_despesas*100)/$soma_receitas;
                        $porcentagem_despesa = round($porcentagem_despesa, 2 );
                        ?>
                        <div class="progress-bar" style="width:<?php echo $porcentagem_despesa;?>%"></div>
                      </div>
                      <span class="progress-description">
                         Consumo de <?php echo $porcentagem_despesa; ?>% das receitas    
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                </td>
              </tr>
            </table>
        <!-- /.box-footer-->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>  
    <!-- /.content -->