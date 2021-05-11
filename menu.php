<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
          <?php
            if(file_exists("images/$doc/usuario.png")){?>
              <img src="images/<?php echo $doc;?>/usuario.png" class="img-circle" alt="User Image">
          <?php 
            } else {echo '<h3 style="color:white;"><a href="?modulo=cliente&acao=upload_image"><i class="fa fa-user-circle img-circle"></i></a></h3>';}
          ?>
          
        </div>
        <div class="pull-left info">
          <p><?php echo $nome; ?></p>
          <?php
            if($admin=='1'){
              echo '<a href="#"><i class="fa fa-user-secret text-success"></i>';
              echo "Administrador";
            }else{
              echo '<a href="#"><i class="fa fa-user text-success"></i>';
              echo "Usuário ";
            }
            switch ($tipo) {
              case 'PF':
                echo " PF";
                break;
              case 'PJ':
                echo " PJ";
                break;
            }
          ?>
          </a>
        </div>
      </div>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVEGAÇÃO</li>        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Administradores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=admin&amp;acao=adicionar"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li><a href="?modulo=admin&amp;acao=listar"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=cliente&amp;acao=adicionar"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li><a href="?modulo=cliente&amp;acao=listar"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-circle"></i></i> <span>Receitas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=receitas&amp;acao=adicionar"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li><a href="?modulo=receitas&amp;acao=listar"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-minus-square "></i> <span>Despesas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?modulo=despesas&amp;acao=adicionar"><i class="fa fa-circle-o"></i> Adicionar</a></li>
            <li><a href="?modulo=despesas&amp;acao=listar"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Relatórios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <!-- <li><a href="?modulo=relatorios&amp;acao=adicionar"><i class="fa fa-circle-o"></i> Adicionar</a></li>-->
            <li><a href="?modulo=relatorios&amp;acao=listar"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
    </ul>
</section>
