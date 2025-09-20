    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcoes.php";
    
    // Fetch RALC texts from database
    $ralc_textos = select_sql("SELECT * FROM ralc ORDER BY id");
    
    // Fallback to static Lorem ipsum if database is not available or empty
    if (empty($ralc_textos)) {
        $ralc_textos = [
            ['id' => 1, 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
            ['id' => 2, 'texto' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
            ['id' => 3, 'texto' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.']
        ];
    }
    ?>
    
    <div class="container">
        <h1>RALC - Regulamento de Apoio à Liderança e Coordenação</h1>
    </div>

    <div class="container">
        <?php foreach ($ralc_textos as $item): ?>
            <div class="caixa" style="margin-bottom: 20px;">
                <p><?= htmlspecialchars($item['texto']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>