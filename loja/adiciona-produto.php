<?php include("cabecalho.php") ;?>
    <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        
        $conexao = mysqli_connect('localhost', 'root', '', 'loja');
        function insereProduto($conexao, $nome, $preco) {
            $query = "insert into produtos(nome, preco) values ('{$nome}', '{$preco}')";
            $resultadoDaInsercao = mysqli_query($conexao, $query);
            return $resultadoDaInsercao;
        }

        if(insereProduto($conexa, $nome, $preco){
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
<?php include("rodape.php") ;?>