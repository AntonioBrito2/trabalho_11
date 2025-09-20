<?php
require_once "base_dados_helper.php";

// Create RALC table
$criar_tabela_ralc = "
CREATE TABLE IF NOT EXISTS ralc (
    id INT PRIMARY KEY AUTO_INCREMENT,
    texto TEXT NOT NULL
)";

// Create Cookies table 
$criar_tabela_cookies = "
CREATE TABLE IF NOT EXISTS cookies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    texto TEXT NOT NULL
)";

// Lorem ipsum texts for RALC
$textos_ralc = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
];

// Lorem ipsum texts for Cookies
$textos_cookies = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa."
];

try {
    // Create tables
    idu_sql($criar_tabela_ralc);
    idu_sql($criar_tabela_cookies);
    
    // Check if tables are empty before inserting
    $count_ralc = select_sql_unico("SELECT COUNT(*) as count FROM ralc");
    if ($count_ralc['count'] == 0) {
        // Insert RALC texts
        foreach ($textos_ralc as $texto) {
            idu_sql("INSERT INTO ralc (texto) VALUES ('" . addslashes($texto) . "')");
        }
    }
    
    $count_cookies = select_sql_unico("SELECT COUNT(*) as count FROM cookies");
    if ($count_cookies['count'] == 0) {
        // Insert Cookies texts
        foreach ($textos_cookies as $texto) {
            idu_sql("INSERT INTO cookies (texto) VALUES ('" . addslashes($texto) . "')");
        }
    }
    
    echo "Tabelas criadas e dados inseridos com sucesso!\n";
    
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}

?>