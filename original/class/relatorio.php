<?php 
class Relatorio extends Cliente{
 	public $rel_id;
 	public $rel_pinicio;
 	public $rel_pfim;
 	public $rel_parc_pagas;
 	public $rel_nome;

 	function setrel__Id($rel_id){
        $this -> rel_id = $rel_id;
    }
    function getrel_Id(){
        return $this -> rel_id;
    }
    function setrel_Pinicio($rel_pinicio){
        $this -> rel_Pinicio = $rel_pinicio;
    }
    function getrel_Pinicio(){
        return $this -> rel_Pinicio;
    }
    function setrel_pFim($rel_pfim){
        $this -> rel_pfim = $rel_pfim;
    }
    function getrel_pFim(){
        return $this -> rel_pfim;
    }
    function setrel_Parc_pagas($rel_parc_pagas){
        $this -> rel_parc_pagas = $parc_pagas;
    }
    function getrel_Parc_pagas(){
        return $this -> rel_parc_pagas;
    }
    function setrel_Nome($rel_nome){
        $this -> rel_nome = $rel_nome;
    }
    function getrel_nome(){
        return $this -> rel_nome;
    }


 	function ExibeRelatorio($rel_pinicio, $rel_pfim, $rel_nome, $rel_parc_pagas, $cliente, $saldo) {
 		echo "<hr><strong>RELATÓRIO:</strong><br>";
 		echo "<strong>Cliente: $cliente </strong><br>";
 		echo "<strong>Saldo atual: $saldo</strong><br>";

 		echo "Período: " . $rel_pinicio . " até " . $rel_pfim;
 		echo " : " . $rel_nome  . " - Parcelas pagas: " . $rel_parc_pagas . "<hr>"; 
 	}
}
 ?>