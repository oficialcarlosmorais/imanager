<?php

//receber email
	$email = $_POST['email'];
	
//receber senha
	$senha = $_POST['senha'];
	echo $email."<br>". $senha ."<hr>";
//procurar email e senha no banco
	if(isset($_POST['botao']) && $_POST['botao'] == "entrar"){
		include("classes/Cliente.class.php"); 
   		$clientes = Cliente::login($email, $senha);
   		if($clientes){
    		foreach($clientes as $cliente){
       			session_start();
				$_SESSION['nome'] = $cliente->getNome();
				$_SESSION['id'] = $cliente->getId();
				$_SESSION['doc'] = $cliente->getDoc();
				header("location:default.php");
			}
		} else { header("location:index.php?file=auth-login&msg=1");}
    }

    if(@$_GET['action'] == "logout"){
    session_start();
    session_destroy();
    header("location:index.php");
	}
//caso positivo, mande para default.php
//caso negativo, retornar para index.php
    
//header("Location: index.php?desativado=1");

/*	if(password_verify($senha, $hash)){
		session_start();

		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['id'] = $dados['id_usuario'];

        if($dados['representante'] != "S"){
			if($dados['admin'] == 'S'){
                header("Location: usuarioVisualizar.php");
            }
            else{
				if(time() - $dados['data_renovacao'] <= 31536000 && $dados['ativo'] == 'S'){
                    mysqli_query($conexao, "UPDATE bem SET status_sinal = 'D' WHERE cliente = '$dados[id_usuario]'");
                    header("Location: default.php");
                }
                else{
                    mysqli_query($conexao, "UPDATE usuarios SET ativo = 'N', data_inativacao = UNIX_TIMESTAMP() WHERE apelido = '$usuario'");
                    header("Location: index.php?desativado=1");
                }
            }			
		}
        else{
            header("Location: usuarioVisualizarFranqueado.php");
        }

	}
	else{
		header("Location: index.php?error=1");
	}
*/
?>