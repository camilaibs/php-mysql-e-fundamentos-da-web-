<?php
session_start();

function logaUsuario($email){
    //setcookie("usuario_logado", $usuario['email'], time() + 60);
    $_SESSION["usuario_logado"] = $email;
}

function usuarioLogado(){
    //return $_COOKIE["usuario_logado"];
    return $SESSION["usuario_logado"];
}

function usuarioEstaLogado(){
    //return isset($_COOKIE["usuario_logado"]);
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

function logout(){
    $session_destroy();
}