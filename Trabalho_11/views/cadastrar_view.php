    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";
    ?>
    
    
    <div class="container">
        <h1>Cadastrar Produto</h1>
    </div>

    <div class="caixa">
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required placeholder="Nome do produto">

            <label for="preco">Preço (€):</label>
            <input type="number" name="preco" id="preco" required step="0.01" min="0" placeholder="Preço">

            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" required min="0" placeholder="Quantidade em stock">

            <label for="fornecedor">Fornecedor:</label>
            <input type="text" name="fornecedor" id="fornecedor" required placeholder="Nome do fornecedor">

            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo" required placeholder="Código do produto">

            <button type="submit">Cadastrar</button>
        </form>
        <br>
        <a href="cadastrar.php">Reset</a>
    </div>

    <?php if(isset($novo_produto) && $novo_produto): ?>
        <div class="caixa">
            <h3>Produto cadastrado com sucesso!</h3>
            <br>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>PREÇO</th>
                    <th>STOCK</th>
                </tr>
                <tr>
                    <td><?= $novo_produto["id"] ?></td>
                    <td><?= $novo_produto["nome"] ?></td>
                    <td><?= number_format($novo_produto["preco"], 2, ",", " ") ?> €</td>
                    <td><?= $novo_produto["stock"] ?></td>
                    <td><?= $novo_produto["fornecedor"] ?></td>
                    <td><?= $novo_produto["codigo"] ?></td>
                </tr>
            </table>
        </div>
    <?php endif; ?>

</body>
</html>