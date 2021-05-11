<?php 

abstract class ClasseAbstrata {
	public $nome;
	abstract function funcao();
	abstract function funcaoComParametro($p);
}


public class ClasseConcreta01 extends ClasseAbstrata{

abstract function funcao(){
		return "classe concreta";

	}

	abstract function funcaoComParametro($parametro){
		return "Classe concreta" . $parametro;
	} 
}


public class ClasseConcreta02 extends ClasseAbstrata{

abstract function funcao(){
		return "classe concreta";

	}

	abstract function funcaoComParametro($parametro){
		return "Classe concreta" . $parametro;
	} 
}
$classe1 = new ClasseConcreta01();
echo $classe->funcao();
echo $classe->funcaoComParametro("01");
$classe2 = new ClasseConcreta02();
echo $classe->funcao();
echo $classe->funcaoComParametro("02");

?>