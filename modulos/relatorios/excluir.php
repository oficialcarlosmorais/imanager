<?php
    include("classes/Cliente.class.php");
    $id = $_GET['id'];
    if(isset($_POST['botao']) && $_POST['botao'] == "Excluir"){ 
        $cliente = new Cliente();
        $cliente->setId($_POST['id']);
        $cliente->setNome($_POST['nome']);
        $cliente->setEmail($_POST['email']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->excluir();    
    }

    $clientes = Cliente::selecionar($id);

if($clientes){
    foreach($clientes as $cliente){
?>
<form method='post' action=''>
Nome:       <input type="text" name='nome' value = "<?php echo $cliente->getNome();?>"></br>
Email:      <input type="text" name='email' value = "<?php echo $cliente->getEmail();?>"></br>
Telefone:   <input type="text" name='telefone' value = "<?php echo $cliente->getTelefone();?>"></br>
<input type="hidden" name='id' value = "<?php echo $cliente->getId();?>">

<input type='submit' name='botao' value='Excluir'>
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
</table>

