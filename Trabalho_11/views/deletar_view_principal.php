    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";

    $produtos = select_sql("SELECT * FROM produtos ORDER BY id DESC");
    ?>

    <div class="container">
        <h1>Deletar Produtos</h1>
    </div>

    <div class="caixa">
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>PREÇO</th>
                <th>Quantidade</th>
            </tr>
            <?php foreach($produtos as $p): ?>
                <tr>
                    <td><?= $p["id"] ?></td>
                    <td><?= $p["nome"] ?></td>
                    <td><?= number_format($p["preco"], 2, ",", " ") ?> €</td>
                    <td><?= $p["stock"] ?></td>
                    <td>
                        <a href="apagar.php?apagar=<?= $p["id"] ?>">
                            <button class="btn">Deletar</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>