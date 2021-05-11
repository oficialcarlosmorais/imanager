<?php 
class Administrador{
 	public $admin_id;
 	public $admin_nome;
 	public $admin_cpf;
 	public $admin_login;
 	public $admin_senha;
 	public $admin_email;

	function setadmin_Id($id){
        $this -> admin_id = $admin_id;
    }
    function getadmin_Id(){
        return $this -> admin_id;
    }
    
    function setadmin_Nome($nome){
        $this -> admin_nome = $admin_Nome;
    }
    function getadmin_Nome(){
        return $this -> admin_nome;
    }
    
    function setadmin_CPF($cpf){
        $this -> admin_cpf = $admin_cpf;
    }
    function getadmin_CPF(){
        return $this -> admin_cpf;
    }

    function setadmin_Login($login){
        $this -> admin_login = $admin_login;
    }
    function getadmin_Login(){
        return $this -> admin_login;
    }

    function setadmin_Senha($senha){
        $this -> admin_senha = $admin_senha;
    }
    function getadmin_Senha(){
        return $this -> admin_senha;
    }

    function setadmin_Email($email){
        $this -> admin_email = $admin_email;
    }
    function getadmin_Email(){
        return $this -> admin_email;
    }

	function ChamaAdm(){
		echo "<hr><p align='center'><strong>ADMINISTRADOR DO SISTEMA</strong></p>";
		echo "Administrador: ". $this->admin_nome . "<br>";
	 	echo "CPF: ". $this->admin_cpf. "<br>";
	 	//LOGIN E SENHA MERAMENTE EXEMPLIFICATIVOS. TERÃO REAL UTILIDADE COM A IMPLEMENTAÇÃO DO SISTEMA
	 	echo "LOGIN: ". $this->admin_login. "<br>";
	 	echo "SENHA: ". $this->admin_senha. "<br>";
	 	echo "EMAIL: ". $this->admin_email. "<br>";
	 	echo "<hr>";
	}

 }
 ?>