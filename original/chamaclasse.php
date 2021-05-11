<?php
include("/class/cliente.php");
include("/class/transacoes.php");
include("/class/agendamentos.php");
include("/class/relatorio.php");
include("/class/administrador.php");
//ADMINISTRADOR
$adm = new Administrador();
 	$adm->admin_nome="LÚCIO MAURO";
 	$adm->admin_cpf="141.222.653-14";
 	$adm->admin_login="luciomauro";
 	$adm->admin_senha="meu aniversário";
 	$adm->admin_email="luciomauro@gmail.com";
 	$adm->ChamaAdm();

//TRANSACOES
echo "<hr>";
$tra = new Transacoes();
$tra->cliente_nome = "Carlos";
$tra->cliente_saldo = 7000;
$cliente = $tra->cliente_nome;

echo "Nome do Cliente : ".  $tra->cliente_nome;
echo "<br/>Saldo : R$ ".$tra->cliente_saldo . "<br><hr>";

//Crédito
echo "<hr>";
echo "<STRONG>CRÉDITO EM CONTA: </STRONG><br>";
$valor = $tra->tra_valor = 500;
$movimentacao = $tra->movimentacao = "Salário";
$tipo = $tra->tipo = "credito";
$origem='';
$tra->movimentar($valor, $movimentacao, $tipo, $origem);

//Débitos
echo "<STRONG>DÉBITO EM CONTA: </STRONG><br>";
$valor = $tra->tra_valor = 250;
$movimentacao = $tra->movimentacao = "Luz";
$tipo=$tra->tipo = "debito";
$tra->movimentar($valor, $movimentacao, $tipo, $origem);

$saldo= $tra->cliente_saldo;


//AGENDAMENTOS
$ag = new Agendamentos();
$ag_inicio = $ag->ag_inicio = "04/06/2020";

$ag_fim = $ag->ag_fim = "04/12/2021";
$ag_parc_pagas = $ag->ag_parc_pagas= 9;
$ag_nome = $ag->ag_nome = "Empréstimo 1";
$ag_email = $ag->ag_email = "eletronic@mail.com";
$ag->Agenda($ag_inicio, $ag_fim, $ag_parc_pagas, $ag_nome, $ag_email);

//RELATÓRIOS
$rel = new Relatorio();
$rel_pinicio = $ag_inicio;
$rel_pfim = $ag_fim;
$rel_parc_pagas = $ag_parc_pagas;
$rel_nome = $ag_nome;

$rel->ExibeRelatorio($rel_pinicio, $rel_pfim, $rel_nome, $rel_parc_pagas, $cliente, $saldo);

?>