<?php 
class Cliente{
 	public $cliente_id;
 	public $cliente_nome;
 	public $cliente_cpf;
 	public $cliente_login;
 	public $cliente_senha;
 	public $cliente_email;
 	public $cliente_saldo;

	function setcliente_Id($cliente_id){
        $this -> cliente_id = $cliente_id;
    }
    function getcliente_Id(){
        return $this -> cliente_id;
    }
    
    function setcliente_Nome($cliente_nome){
        $this -> cliente_nome = $cliente_Nome;
    }
    function getcliente_Nome(){
        return $this -> cliente_nome;
    }
    
    function setcliente_CPF($cpf){
        $this -> cliente_cpf = $cliente_cpf;
    }
    function getcliente_CPF(){
        return $this -> cliente_cpf;
    }

    function setcliente_Login($cliente_login){
        $this -> cliente_login = $cliente_login;
    }
    function getcliente_Login(){
        return $this -> cliente_login;
    }

    function setcliente_Senha($cliente_senha){
        $this -> cliente_senha = $cliente_senha;
    }
    function getcliente_Senha(){
        return $this -> cliente_senha;
    }

    function setcliente_Email($cliente_email){
        $this -> cliente_email = $cliente_email;
    }
    function getcliente_Email(){
        return $this -> cliente_email;
    }

    function setcliente_Saldo($cliente_saldo){
        $this -> cliente_saldo = $cliente_saldo;
    }
    function getcliente_Saldo(){
        return $this -> cliente_saldo;
    }

    
 }
 ?>