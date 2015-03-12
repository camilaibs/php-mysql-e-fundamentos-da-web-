<?php 
    include("cabecalho.php");
    include("conecta.php");
    include("banco-categoria.php");
    
    $categorias = listaCategorias($conexao);
?>
    <h1>Formulário de cadastro</h1>
        <form action="adiciona-produto.php" method="post">
            <table>
                <tr>
                    <td>Nome</td>
                    <td><input type="text" name="nome" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Preço</td>
                    <td><input type="number" name="preco" class="form-control" /></td>
                </tr>
                <tr>
                    <td><textarea name="descricao" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Cadastrar" class="btn btn-primary" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="usado" value="true"> Usado</td>
                </tr>
                <tr>
                    <td>
                        <!--
                            <input type="radio" name="categoria_id" value="<?= $categoria['id']?>"><?= categoria['nome'] ?></br>
                        -->
                        <select name="categoria_id">
                        <?php foreach($categoria as $categorias) : ?>
                            <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                        <? endforeach ?>
                        </select>
                        
                    </td>
                </tr>
            </table>
        </form>
<?php include("rodape.php") ;?>