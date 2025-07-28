    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";

    $apagar = (!empty($_GET["apagar"])) ? intval($_GET["apagar"])  : "";
    $form = !empty($_GET["resposta"]) && !empty($_GET["resposta"]);
    $produtos = select_sql_unico("SELECT * FROM produtos where id = $apagar");

    if($form){
        idu_sql("DELETE FROM produtos WHERE id = $apagar");
        header("Location: index_apagar.php");
    }
    ?>

    <div class="container">
        <h1>Deletar Produto</h1>
    </div>

    <div class="caixa">
        <h3>Tem a certeza que deseja deletar o produto de id <?= $produtos["id"] ?> e nome <?= $produtos["nome"] ?>?</h3>
        <br>
        <form action="">
            <input type="hidden" name="apagar" value="<?= $apagar?>">
            <button class="btn" name="resposta" value="sim">Sim</button>
            <a href="index_apagar.php">
                <button class="btn" type="button">Não</button>
            </a>
        </form>
    </div>
</body>
</html>