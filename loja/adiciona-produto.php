<?php include("cabecalho.php") ;?>
    <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
    ?>
    <p class="alert-success">
        Produto <?php echo $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!
    </p>
    <!-- 
        atalho imprimir variável
        Produto <? =nome; ?>, <? =preco; ?> adicionado com sucesso!
<?php include("rodape.php") ;?>