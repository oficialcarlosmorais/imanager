<?php
include("admin/pdo.class.php");

//IMANAGER

if ($_POST['btn_env_receita']){
	$dados =[
		"receita"=>$_POST['receita'],
		"valor"=>$_POST['valor'],
		"tipo"=>$_POST['tipo'],
		"data"=>$_POST['dia'],
		"pessoa"=>$_POST['pessoa'],
		"us_id"=>$_POST['id'],
		"origem"=>"-"
			];
	Cadastrar($dados);
//	$cpf=$dados['cpf'];
	header("location:default_pessoal.php");
	} 


if ($_POST['btn_mov']){
	$dados =[
		"movimentacao"=>$_POST['movimentacao'],
		"valor"=>$_POST['valor'],
		"tipo"=>$_POST['tipo'],
		"data"=>$_POST['data'],
		"pessoa"=>$_POST['pessoa'],
		"us_id"=>$_POST['id'],
		"origem"=>$_POST['Origem']
			];
	Movimentacao($dados);
	header("location:default_pessoal.php");
	} 

if ($_GET['action']=='del'){
	$mov_id = $_GET['mov_id'];
	Deletar_mov($mov_id);
	header("location:default_pessoal.php");
	} 

if ($_POST['btn_new_user']){
	$us_senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
	$dados =[
		"nome"=>$_POST['nome'],
		"sobrenome"=>$_POST['sobrenome'],
		"cpf"=>$_POST['cpf'],
		"senha"=>$us_senha,
		"pessoa"=>$_POST['pessoa']
			];
	New_user($dados);
//	$cpf=$dados['cpf'];
	header("location:index.php");
	}


?>