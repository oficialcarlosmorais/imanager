<?php 
    if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){ 
        $data_cad = date('Y-m-d');
        include("classes/Cliente.class.php");
        $cliente = new Cliente();
        $cliente->setNome($_POST['nome']);
        $cliente->setSobrenome($_POST['sobrenome']);
        $cliente->setNasc($_POST['nasc']);
        $cliente->setDoc($_POST['doc']);
        $cliente->setEmail($_POST['email']);
        $cliente->setSenha($_POST['senha']);
        $cliente->setEndereco($_POST['endereco']);
        $cliente->setBairro($_POST['bairro']);
        $cliente->setCidade($_POST['cidade']);
        $cliente->setEstado($_POST['estado']);
        $cliente->setPais($_POST['pais']);
        $cliente->setTelefone($_POST['telefone']);
        echo "aqui: " . $_POST['tipo'];
        $cliente->setTipo($_POST['tipo']);
        $cliente->setDataCad($data_cad);
        $cliente->setAdmin('0');
        $cliente->adicionar(); 
        echo "CLIENTE CADASTRADO COM SUCESSO";   
    } 
?>
<article class="auth">
    <div class="auth_content container content">
        <header class="auth_header">
            <h1>Cadastre-se</h1>
            <p>Já tem uma conta? <a title="Entrar" href="?file=auth-login">Fazer login!</a></p>
        </header>

        <?php 
            @$msg=$_GET['msg'];
            if ($msg==1){echo "<h1>Senhas não coincidem</h1>";}
        ?>
        <form class="auth_form" action="" method="post" enctype="multipart/form-data">
            <label>
                <div><span class="icon-user">Nome:</span></div>
                <input type="text" name="nome" placeholder="Primeiro nome:"/>
            </label>

            <label>
                <div><span class="icon-user-plus">Sobrenome:</span></div>
                <input type="text" name="sobrenome" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-birthday-cake">Data de nascimento:</span></div>
                <input type="date" name="nasc" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-address-card">Documento:</span></div>
                <input type="text" name="doc" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="icon-envelope">Email:</span></div>
                <input type="email" name="email" placeholder="Informe seu e-mail:"/>
            </label>

            <label>
                <div><span class="icon-unlock-alt">Senha:</span></div>
                <input type="password" name="senha"/>
            </label>

            <label>
                <div class="unlock-alt"><span class="icon-unlock-alt">Confirme a senha:</span></div>
                <input type="password" name="senha2" placeholder="Confirme a senha"/>
            </label>

            <label>
                <div class="unlock-alt"><span class="fa fa-address-book">Endereco:</span></div>
                <input type="text" name="endereco" placeholder="Informe sua senha:"/>
            </label>

            <label>
                <div><span class="fa fa-address-book">Bairro:</span></div>
                <input type="text" name="bairro" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-address-book">Cidade:</span></div>
                <input type="text" name="cidade" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-address-book">Estado:</span></div>
                <input type="text" name="estado" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-flag">País:</span></div>
                <input type="text" name="pais" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-mobile">Telefone:</span></div>
                <input type="text" name="telefone" placeholder="Último nome:"/>
            </label>

            <label>
                <div><span class="fa fa-th" aria-hidden="true">Tipo:</span></div>
                <select name="tipo" class="form-control">
                    <option value="pf" selected>Pessoa Física</option>
                    <option value="pj">Pessoa Jurídica</option>
                </select>
            </label>
            <input type="hidden" name="data_cad" value="<?php echo date('Y/m/d'); ?>"/>
            <input type="hidden" name="admin" value="0"/>
            <button type='submit' class="auth_form_btn transition gradient gradient-green gradient-hover" id="Salvar" name='botao' value='Salvar'>Criar conta</button>
        </form>
    </div>
</article>

<?php require __DIR__ . "/optout.php"; ?>