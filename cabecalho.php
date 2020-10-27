<?php 
session_start();
require_once 'session.php';
require_once 'admin/pdo.class.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta http-equiv="content-type" content="text/html, charset=utf-8"  />
    <meta http-equiv="content-language" content="pt-br, en-US, fr, en"  />
      <meta name="author" content="El Anara Nasciment, José Carlos Nogueira Morais, Roseany Lobato de Sousa" />
      <meta name="description" content="gerenciador pessoal e empresarial" />
      <meta name= "keywords" content="financeiro, finanças, I-manager" />
      <meta name="generator" content="sublime"/>
      <meta name="robots" content="all"/>
      <meta name="rating" content="general" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="copyright" content="El Anara Nascimento, José Carlos Nogueira Morais, Roseany Lobato de Sousa" />
      <title>I - MANAGER</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/imanager2020.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
$(document).ready(function(){

  var $entrada = parseFloat("0");
  var $saida = parseFloat("0");
  var $salario = parseFloat("0");
  var $luz = parseFloat("0");
  var $agua = parseFloat("0");
  var $celulares = parseFloat("0");
  var $mais_entrada = parseFloat("0");
  var $mais_saida = parseFloat("0");
  var $oq_entrada = [];
  var $qt_entrada = [];
  var $oq_saida = [];
  var $qt_saida = [];
  var $receita_total = parseFloat("0");
  var $despesa_total = parseFloat("0");
  var $total = parseFloat("0");

  function mais_entrada(){
    $oq_entrada.push(prompt("Origem da entrada: ", "-"));
  $entrada = $entrada + parseFloat(prompt("Qual o valor da entrada?","0"));

  }


  function mais_saida(){
    $oq_saida.push(prompt("Gastou com o que?", "-"));
  $saida = $saida + parseFloat(prompt("Qual o valor da saida?","0"));
  } 

/*  function exibir_relatorio(){
        $("#campo_relatorio").show();
      $("#campo_relatorio").css("display", "flex");
      $("#campo_calculo").hide(); 
  }

  function exibir_caixa(){
      $("#campo_calculo").show();
    $("#campo_relatorio").hide();
    atualiza_caixa();
  }

 */

  $("#caixa").click(function(){
    $("#campo_calculo").show();
    $("#receita").text("R$ " + $receita_total);
    $("#despesas").text("R$ " + $despesa_total);
    $("#total").text("R$ " + $total);
  $("#campo_relatorio").fadeOut(1);
  $("#campo_calculo").fadeIn(2000);
  //ATUALIZA O CAIXA

    $("#receita").text("R$ " + $receita_total);
    $("#despesas").text("R$ " + $despesa_total);
    $("#total").text("R$ " + $total);


  })

  //$("#entradas").click(function(){
  //  mais_entrada();
  //})


  //$("#saidas").click(function(){
  //  mais_saida();
  //})

  $("#relatorio").click(function(){

  //$("#campo_relatorio").css("display", "flex");
//$("#campo_calculo").fadeOut(1);
//$("#campo_relatorio").fadeIn(2000);
  $("#despesas").text("R$ " + $despesa_total);
    $("#total").text("R$ " + $total);

  $("#campo_relatorio").show();
    $("#campo_relatorio").css("display", "flex");
    $("#campo_calculo").hide();
    atualiza_relatorio();
  })

  $("#calcular").click(function(){
    var $salario = parseFloat($("#salario").val());
    var $luz = parseFloat($("#luz").val());
    var $agua = parseFloat($("#agua").val());
    var $celulares = parseFloat($("#celulares").val());
    var $transporte =parseFloat($("#transporte").val());
    var $receita_total = $salario + $entrada;
  var $despesa_total = $luz + $agua + $celulares + $transporte + $saida;
  var $total = $receita_total - $despesa_total;
  
    $("#receita").text("R$ " + $receita_total);
    $("#despesas").text("R$ " + $despesa_total);
    $("#total").text("R$ " + $total);

    //colocar vermelho quando negativar
    if ($total < 0) {
      $("#total").css("color","red");
      }else{
      $("#total").css("color","white");
    }


  });

  $("#entradas").hover(function(){

    $("#entradas").addClass("menu_ativo");
    $("#entradas").removeClass("menu_item");
    $("#caixa").removeClass("menu_ativo");
    $("#caixa").addClass("menu_item");
    $("#saidas").removeClass("menu_ativo");
    $("#saidas").addClass("menu_item");
    $("#relatorio").removeClass("menu_ativo");
    $("#relatorio").addClass("menu_item");
  })

  $("#caixa").hover(function(){

    $("#caixa").addClass("menu_ativo");
    $("#caixa").removeClass("menu_item");
    $("#entradas").removeClass("menu_ativo");
    $("#entradas").addClass("menu_item");
    $("#saidas").removeClass("menu_ativo");
    $("#saidas").addClass("menu_item");
    $("#relatorio").removeClass("menu_ativo");
    $("#relatorio").addClass("menu_item");
  })

    $("#saidas").hover(function(){

  $("#saidas").addClass("menu_ativo");  
  $("#saidas").removeClass("menu_item");
    $("#caixa").addClass("menu_item");
    $("#caixa").removeClass("menu_ativo");
    $("#entradas").removeClass("menu_ativo");
    $("#entradas").addClass("menu_item");
    $("#relatorio").removeClass("menu_ativo");
    $("#relatorio").addClass("menu_item");
  })

    $("#relatorio").hover(function(){

  $("#relatorio").addClass("menu_ativo"); 
  $("#relatorio").removeClass("menu_item");
    $("#caixa").addClass("menu_item");
    $("#caixa").removeClass("menu_ativo");
    $("#entradas").removeClass("menu_ativo");
    $("#entradas").addClass("menu_item");
    $("#saidas").removeClass("menu_ativo");
    $("#saidas").addClass("menu_item");
  })

  });
</script>
  </head>

  <body>
    <main>
      <header class="espacamento_abaixo">
        <a href="index.php"><img src=images/logo.png width=120px></a>
        <p class="button"><?php echo $_SESSION['nome']; ?></p>
        <a href="index.php"><p id="sair" class="button">Sair</p></a>
      </header>
      <nav class="espacamento_abaixo"><img src="images/cifrao.png">Pessoa Física</nav>
      <article class="espacamento_abaixo">
        <section class="menu sombra" >
          <a href="default_pessoal.php"><p class="menu_ativo" id="caixa">Caixa</p></a>
          <a href="pf_entrada.php"><p class="menu_item" id="entradas">Entradas</p></a>
          <a href="pf_despesa.php"><p class="menu_item" id="saidas">Despesas</p></a>
        </section>

        <section class="menu sombra">
          <form name="financeiro" action="comandos.php" method="POST"> 
            <div class="form-group"><input type="text" id="movimentacao" class="form-control" name="movimentacao" placeholder="Movimentação" required></div>
            <div class="form-group"><input type="number" name="valor" id="valor" step="0.01" class="form-control" placeholder="Valor R$" required></div>
            <div class="form-group"><select name="tipo" id="tipo" class="form-control" required>
              <option selected disabled>Tipo</option>
              <option value="r">Receita</option>
              <option value="d">Despesa</option>
            </select>
            </div>
            <div class="form-group"><input type="date" name="data" id="data" class="form-control" placeholder="Data" required></div>
            <div class="form-group"><input type="text" name="origem" id="origem" class="form-control" placeholder="Origem"></div>
            <input type="hidden" name="pessoa" value=<?php echo $_SESSION['pessoa'];?>>
            <input type="hidden" name="id" value=<?php echo $_SESSION['id'];?>>
            <input type="submit" name="btn_mov" class="btn btn-success" value="Calcular">
          </form>
          </section>
        
