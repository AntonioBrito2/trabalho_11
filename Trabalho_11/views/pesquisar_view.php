    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";
    ?>
    
    
    <div class="container">
        <h1>Pesquisar Produto por Código</h1>
    </div>

    <div class="caixa">
        <form action="" method="get">
            <label for="codigo">Código do Produto:</label>
            <input type="text" name="codigo" id="codigo" required placeholder="Insira o código aqui">

            <button type="submit">Pesquisar</button>
        </form>
        <br>
        <a href="pesquisar.php">Reset</a>
    </div>

    <?php if(isset($produto) && $produto): ?>
        <div class="caixa">
            <h3>Produto encontrado</h3>
            <br>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>PREÇO</th>
                    <th>STOCK</th>

                </tr>
                <tr>
                    <td><?= $produto["id"] ?></td>
                    <td><?= $produto["nome"] ?></td>
                    <td><?= number_format($produto["preco"], 2, ",", " ") ?> €</td>
                    <td><?= $produto["stock"] ?></td>
                    <td><?= $produto["fornecedor"] ?></td>
                    <td><?= $produto["codigo"] ?></td>
                </tr>
            </table>
        </div>
    <?php elseif(isset($pesquisado) && $pesquisado): ?>
        <div class="caixa">
            <h3>Nenhum produto encontrado com esse código.</h3>
        </div>
    <?php endif; ?>

</body>
</html>