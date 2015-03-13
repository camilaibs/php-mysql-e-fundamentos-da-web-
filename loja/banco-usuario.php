<?php
function buscaUsuario($conexao, $email, $senha){
    $senhaMD5 = md5($senha);
    $query = "select * from usuarios where email = '{$email}' and senha = '{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}