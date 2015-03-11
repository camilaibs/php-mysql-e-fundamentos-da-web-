<?php include("cabecalho.php") ;?>
    <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];

        $query = "insert into produtos(nome, preco) values ('{$nome}', '{$preco}')";
        $conexao = mysqli_connect('localhost', 'root', '', 'loja');
        if(mysqli_query($conexao, $query)){
    ?>
    <p class="alert-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php
        }else{
    ?>
    <p class="alert-danger">O produto <?= $nome; ?> não foi adicionado</p>
    <?php
        }
    ?>
    <p class="alert-success">
        Produto <?php echo $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!
    </p>
    <!-- 
        atalho imprimir variável
        Produto <? =nome; ?>, <? =preco; ?> adicionado com sucesso!
<?php include("rodape.php") ;?>