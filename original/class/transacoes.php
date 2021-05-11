<?php 
class Transacoes extends Cliente{
 	public $tra_id;
 	public $tra_movimentacao;
 	public $tra_valor;
 	public $tra_data;
 	public $tra_tipo;
 	public $tra_origem;

	function settra_Id($tra_id){
        $this -> tra_id = $tra_id;
    }
    function gettra_Id(){
        return $this -> tra_id;
    }
    
    function settra_movimentacao($tra_movimentacao){
        $this -> tra_movimentacao = $tra_movimentacao;
    }
    function gettra_movimentacao(){
        return $this -> tra_movimentacao;
    }
    
    function settra_valor($tra_valor){
        $this -> tra_valor = $tra_valor;
    }
    function gettra_valor(){
        return $this -> tra_valor;
    }

    function settra_data($tra_data){
        $this -> tra_data = $tra_data;
    }
    function gettra_data(){
        return $this -> tra_data;
    }

    function settra_tipo($tra_tipo){
        $this -> tra_tipo = $tra_tipo;
    }
    function gettra_tipo(){
        return $this -> tra_tipo;
    }

    function settra_origem($tra_origem){
        $this -> tra_origem = $tra_origem;
    }
    function gettra_origem(){
        return $this -> tra_origem;
    }

    function movimentar($valor, $movimentacao, $tipo, $origem){
    	$cliente_saldo=$this->cliente_saldo;
    	switch ($tipo) {
    		case 'credito':
    			$cliente_saldo = $cliente_saldo + $valor;
    			echo "<hr>" . date('d/m/Y') . " | ";
    			echo "R$" . $valor . " adicionados ao saldo por ". $movimentacao. ".<br> Saldo atual: " . $cliente_saldo . "<hr>";
    			break;
    		
    		case 'debito':
    			$cliente_saldo = $cliente_saldo - $valor;
    			echo "<hr>" . date('d/m/Y') . " | ";
    			echo "R$" . $valor . " subtraídos do saldo por ".$movimentacao. ".<br> Saldo atual: " . $cliente_saldo . "<hr>";
    			break;
    	}
    	$this->setcliente_saldo($cliente_saldo);
    }

 }
 ?>