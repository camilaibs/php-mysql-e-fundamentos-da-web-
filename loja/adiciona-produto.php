<?php
    include("cabecalho.php");
    include("banco-produto.php");
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST['descricacao'];
    $categoria_id = $_POST['categoria_id'];
    $usado = $_POST['usado'];
    if(array_key_exists('usado', $_POST)){
        $usado = "true";
    }else{
        $usado = "false";
    }

    $conexao = mysqli_connect('localhost', 'root', '', 'loja');
    if(insereProduto($conexa, $nome, $preco, $descricao, $categoria_id, $usado){
?>
        <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
    }else{
        $msg = mysqli_error($conexao);
?>
        <p class="text-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
    }
?>
    <p class="alert-success">
        Produto <?php echo $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!
    </p>
    <!-- 
        atalho imprimir variável
        Produto <? =nome; ?>, <? =preco; ?> adicionado com sucesso!
    -->
<?php include("rodape.php") ;?>