<?php
include("polimorfismo.php");
$op = new ContaCorrente();
$op->titular = "Carlos";
$op->setSaldo(500);

echo "<strong>BANCO DO BRASIL </strong><br/>Nome do Cliente : ".  $op->titular;
echo "<br/>Nome do Saldo : R$".$op->saldo . "<br><hr>";

//sacar
echo "Sacar: <br>";
$op->setTaxa(1);
$op->sacar(300);
echo "<br><hr>";

//depositar
echo "Depositar: <br>";
$op->depositar(600);






?>