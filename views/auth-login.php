<?php @$msg=$_GET['msg']; ?>
<article class="auth">
    <div class="auth_content container content">
        <header class="auth_header">
            <h1>Fazer Login</h1>
            <p>Ainda não tem conta? <a title="Cadastre-se" href="?file=auth-register">Cadastre-se!</a></p>
        </header>

        <form class="auth_form" action="login.php" method="post" enctype="multipart/form-data">
            <?php if($msg==1){ ?>
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Login ou senha inválidos</strong>
                </div>
            <?php } ?>
            <label>
                <div><span class="icon-envelope">Email:</span></div>
                <input type="text" name="email" placeholder="Informe seu e-mail:"/>
            </label>

            <label>
                <div class="unlock-alt">
                    <span class="icon-unlock-alt">Senha:</span>
                    <span><a title="Recuperar senha" href="?file=auth-forget">Esqueceu a senha?</a></span>
                </div>
                <input type="password" name="senha" placeholder="Informe sua senha:"/>
            </label>

            <label class="check">
                <input type="checkbox" name="save"/>
                <span>Lembrar dados?</span>
            </label>

            <input type="submit" class="auth_form_btn transition gradient gradient-green gradient-hover" name="botao" value="entrar">
        </form>
    </div>
</article>

<?php
    
 require __DIR__ . "/optout.php"; ?>