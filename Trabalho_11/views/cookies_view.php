    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcoes.php";
    
    // Fetch Cookies texts from database
    $cookies_textos = select_sql("SELECT * FROM cookies ORDER BY id");
    
    // Fallback to static Lorem ipsum if database is not available or empty
    if (empty($cookies_textos)) {
        $cookies_textos = [
            ['id' => 1, 'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
            ['id' => 2, 'texto' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
            ['id' => 3, 'texto' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.']
        ];
    }
    ?>
    
    <div class="container">
        <h1>Política de Cookies</h1>
    </div>

    <div class="container">
        <?php foreach ($cookies_textos as $item): ?>
            <div class="caixa" style="margin-bottom: 20px;">
                <p><?= htmlspecialchars($item['texto']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>