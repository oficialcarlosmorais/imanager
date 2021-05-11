<?php 



class ContaBancaria {
	public $titular;
	public $saldo;
	public $numero;
	function setTitular($titular){
        $this -> titular = $titular;
    }
    function getTitular(){
        return $this -> titular;
    }
    
    function setSaldo($saldo){
        $this -> saldo = $saldo;
    }
    function getSaldo(){
        return $this -> saldo;
    }
    
    function setNumero($numero){
        $this -> numero = $numero;
    }
    function getNumero(){
        return $this -> numero;
    }

    public function sacar($valor){
    	$saldo=$this->saldo;
		$saldo=$saldo-$valor;
		echo "Operação saque ContaBancaria efetuada com sucesso! <br> Valor solicitado: " . $valor . "<br>Saldo atual: " . $saldo;
    }

    public function depositar($valor){
    	$saldo=$this->saldo;
    	$saldo=$saldo+$valor;
		echo "Operação efetuada com sucesso! <br> Valor depositado: " . $valor . "<br>Saldo atual: " . $saldo;
    }

}

class ContaCorrente extends ContaBancaria {
	public $taxa;
	function setTaxa(){
        $this -> taxa = 1;
    }
    function getTaxa(){
        return $this -> taxa;
    }	
	function sacar($valor){
    	$saldo=$this->saldo;
    	$taxa = $this->getTaxa();
		$saldo=$saldo-$valor-$taxa;
		echo "Operação saque ContaCorrente efetuada com sucesso! <br> Valor solicitado: " . $valor . "<br>Saldo atual: " . $saldo;

	}
}

class ContaPoupanca extends ContaBancaria{
	public $juros;
	function setJuros(){
        $this -> juros = 3;
    }
    function getJuros(){
        return $this -> juros;
    }
	function depositar($valor){
    	$saldo= $this->saldo;
    	$juros = $this->getJuros();
		$saldo=$saldo+$valor+$juros;
		echo "Operação efetuada com sucesso! <br> Valor depositado: " . $valor . "<br>Saldo atual: " . $saldo;	
	}
}
?>