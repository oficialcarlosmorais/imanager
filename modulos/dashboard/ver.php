    <section class="content-header">
      <h1>
        Home /
        <small>Visão geral</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php
                  $id_cliente=$id;
                  include("classes/Receitas.class.php");
                  $receita = Receita::selecionar($id);
                  $entrada = 0;
                  if($receita){
                    foreach($receita as $receita){
                      if($receita->getIdCliente()==$id){
                      $entrada = $entrada + $receita->getValor();
                    }
                    }
                  }
                  echo $entrada;
                ?>
                
              </h3>

              <p>Receita</p>
            </div>
            <div class="icon">
              <i class="fa fa-plus"></i>
            </div>
            <a href="?modulo=receitas&amp;acao=listar" class="small-box-footer"> Relatório <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
              <?php
                $id_cliente=$id;
                include("classes/Despesas.class.php");
                $despesa = Despesa::selecionar($id);
                $subtrair = 0;
                if($despesa){
                  foreach($despesa as $despesa){
                    if($despesa->getIdCliente()==$id){
                    $subtrair = $subtrair + $despesa->getValor();
                  }
                }
                }
                echo $subtrair;
              ?>
              </h3>

              <p>Despesas</p>
            </div>
            <div class="icon">
              <i class="fa fa-minus"></i>
            </div>
            <a href="?modulo=despesas&amp;acao=listar" class="small-box-footer"> Relatório <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                <?php echo $entrada - $subtrair;?>
              </h3>

              <p>Saldo</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">  Relatório  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>  
    <!-- /.content -->