<?php
include("admin/pdo.class.php");
/*	foreach (login($id) as $value) {
		$id = $value->id;
		$dsc = $value->dsc;
		$qtd = $value->qtd;
		$valor = $value->valor;
		$habilita = $value->habilita;
 } 

*/
if($_POST['btn_login']='Entrar') {
 	$id=$_POST['cpf'];

foreach (Login($id) as $value) {
	$contador = $contador+1;
		$id = $value->usf_id;
	  //$id = $value->usf_id;
		$nome = $value->usf_nome;
	  //$nome = $value->usf_nome;
		$sobrenome = $value->usf_sobrenome; 
      //$sobrenome = $value->usf_sobrenome;
		$cpf = $value->usf_cpf;
	  //$cpf = $value->usf_cpf;
		$hash =  $value->usf_senha;
		$pessoa = $value->usf_tipo;
		echo $id . $nome . $sobrenome . $cpf;
 }

  if(password_verify($_POST['senha'], $hash)){
    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['id'] = $id;
    $_SESSION['pessoa'] = $pessoa;
    header('location:default_pessoal.php');

 } else {header('location:index.php');}
}

 	
?>
