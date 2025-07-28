    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";
    ?>
    
    <div class="container">
        <h1>Ordenar Produtos</h1>
    </div>

    <div class="caixa">
        <form action="" method="get">
        <label for="coluna">Ordenar por:</label>
        <select name="coluna" id="coluna">
            <option value="preco" <?= $coluna == "preco" ? "selected" : "" ?>>Preço</option>
            <option value="stock" <?= $coluna == "stock" ? "selected" : "" ?>>Stock</option>
            <option value="nome" <?= $coluna == "nome" ? "selected" : "" ?>>Nome</option>
            <option value="id" <?= $coluna == "id" ? "selected" : "" ?>>ID</option>
        </select>

        <label for="ordem">Ordem:</label>
        <select name="ordem" id="ordem">
            <option value="ASC" <?= $ordem == "ASC" ? "selected" : "" ?>>Crescente</option>
            <option value="DESC" <?= $ordem == "DESC" ? "selected" : "" ?>>Decrescente</option>
        </select>

        <button type="submit">Listar</button>
        </form>
        <br>
        <a href="listar.php">Reset</a>
    </div>

    <div class="caixa">
        <h3>Produtos ordenados por <?= ($coluna) ?> (<?= $ordem ?>)</h3>
        <br>
        <table>

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>STOCK</th>
        </tr>

        <?php foreach($produtos as $p): ?>
            <tr>
            <td><?= $p["id"] ?></td>
            <td><?= $p["nome"] ?></td>
            <td><?= number_format($p["preco"], 2, ",", " ") ?> €</td>
            <td><?= $p["stock"] ?></td>
            <td><?= $p["fornecedor"] ?></td>
            <td><?= $p["codigo"] ?></td>
            </tr>
        <?php endforeach ?>

        </table>
    </div>
        

</body>
</html>