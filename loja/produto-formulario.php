<?php include("cabecalho.php") ;?>
    <h1>Formulário de cadastro</h1>
        <form action="adiciona-produto.php">
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
            </table>
        </form>
<?php include("rodape.php") ;?>