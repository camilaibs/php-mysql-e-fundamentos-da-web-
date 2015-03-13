<?php
    include("cabecalho.php");
    include("logica-usuario.php");

    //if(usuarioEstaLogado()){
    if(isset($_GET["login"]) && $_GET["login"] == true){
?>
    <p class="alert-sucess">Logado com sucesso!</p>
    <a href="logout.php">Deslogar</a>
<? php
   }
?>
<?php
    if(isset($_GET["login"] && $_GET["login"] == false){
?>
    <p class="alert-danger">Usuário ou senha inválida!</p>
<?php
   }
?>
<?php
    if(isset($_GET[logout] && $_GET["logout"] == true){
?>
    <p class="alert-danger">Deslogado com sucesso!</p>
<?php
    }
?>
<?php
    if(usuarioEstaLogado()){
?>
    <p class="text-success">Você está logado como <?= usuarioLogado() ?></p>
<?php
   }else{
?>     
    <h1>Bem Vindo!</h1>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" text="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Logar</button></td>
            </tr>
        </table>
    </form>
<?php
    }
?>
<?php include("rodape.php");?>