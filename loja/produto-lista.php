<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>
    <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true'){ ?>
        <p class="alert-success">Produto apagado com sucesso.</p>
    <?php } ?>
    <?php
        $produtos = listaProdutos($conexao);
    ?>
    <table class="table table-striped table-bordered"
    <?php
        foreach($produtos as $produto) :git 
    ?>
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0, 15) ?></td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type="hidden" nome="id" value="<?= $produto['id'] ?>" />
                    <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>
    <?php
        endforeach
    ?>
    </table>
<?php include("rodape.php"); ?>