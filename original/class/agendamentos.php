<?php 
class Agendamentos{
 	public $ag_id;
 	public $ag_inicio;
 	public $ag_fim;
 	public $ag_parc_pagas;
 	public $ag_nome;
 	public $ag_email;

 	function setag_Id($ag_id){
        $this -> ag_id = $ag_id;
    }
    function getag_Id(){
        return $this -> ag_id;
    }

    function setag_Inicio($ag_inicio){
        $this -> ag_inicio = $ag_inicio;
    }
    function getag_Inicio(){
        return $this -> ag_inicio;
    }

 	function setag_Fim($ag_fim){
        $this -> ag_fim = $ag_fim;
    }
    function getag_Fim(){
        return $this -> ag_fim;
    }

 	function setag_Nome($ag_nome){
        $this -> ag_nome = $ag_nome;
    }
    function getag_Nome(){
        return $this -> ag_nome;
    }

 	function setag_Email($ag_email){
        $this -> ag_email = $ag_email;
    }
    function getag_Email(){
        return $this -> ag_email;
    }

 	function setag_Parc_pagas($ag_parc_pagas){
        $this -> ag_parc_pagas = $ag_parc_pagas;
    }
    function getag_Parc_pagas(){
        return $this -> ag_parc_pagas;
    }

    function Agenda($ag_inicio, $ag_fim, $ag_parc_pagas, $ag_nome, $ag_email){
    	echo "<hr><strong>AGENDAMENTO:</strong><br>";
 		echo "Nome: " . $ag_nome . "<br>";
 		echo "Período: " . $ag_inicio . " até " . $ag_fim. "<br>";
 		echo "Parcelas pagas: " . $ag_parc_pagas. "<br>";
 		echo "Email: ". $ag_email . "<hr>";
 		    }
 }
 ?>