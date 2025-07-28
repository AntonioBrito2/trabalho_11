    <?php
    require_once "helpers/base_dados_helper.php";
    require_once "helpers/funcao_helper.php";
    ?>
   
   
   <div class="container">
        <h1>Login</h1>

        <form action="/Trabalho_11/login" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Nome</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>

</body>
</html>