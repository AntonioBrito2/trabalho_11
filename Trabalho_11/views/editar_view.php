    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";

    $editar = (!empty($_GET["editar"])) ? intval($_GET["editar"])  : "";

    $form = !empty($_GET["editar"]) && !empty($_GET["nome"]) && !empty($_GET["preco"]) && !empty($_GET["fornecedor"]) && !empty($_GET["codigo"]) && !empty($_GET["stock"]);

    if($form){
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $stock = $_GET["stock"];
        $fornecedor = $_GET["fornecedor"];
        $codigo = $_GET["codigo"];

        idu_sql("UPDATE produtos SET nome = '$nome', preco = '$preco', fornecedor = '$fornecedor', codigo = '$codigo', stock = '$stock' WHERE id = $editar ");
        header("Location: index_editar.php");
    }

    $pe= select_sql_unico("SELECT * FROM produtos WHERE id = $editar");
    ?>

    <div class="container">
        <h1>Editar Produto</h1>
    </div>

    <div class="caixa">
        <form action="">
            <input type="hidden" name="editar" value="<?= $editar ?>"> <br> <br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required value="<?= $pe["nome"] ?>"> <br> <br>

            <label for="preco">Preço (€):</label>
            <input type="number" step="0.01" id="preco" name="preco" required value="<?= $pe["preco"] ?>"> <br> <br>

            <label for="fornecedor">Fornecedor:</label>
            <input type="text" id="fornecedor" name="fornecedor" required value="<?= $pe["fornecedor"] ?>"> <br> <br>

            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required value="<?= $pe["codigo"] ?>"> <br> <br>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" required value="<?= $pe["stock"] ?>"> <br> <br>

            <button type="submit" class="btn">Salvar</button>
        </form>
    </div>

</body>
</html>