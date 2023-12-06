<div class = "login">
    <body>
        <main>
            <div class="main-login">
                <div class="center-login">
                    <div class="card-login">
                        <h1>LOGIN</h1>
                        <form action="LoginController.php" method="post">
                        <div class="textfield">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Senha">
                            <input type="checkbox" onclick="mostrarOcultarSenha()">
                            <script type="text/javascript" src="../interaction/HideShowPassword.js"></script>
                        </div>
                        <button type="submit" class="btn-login" name="submit">Conectar</button>
                    </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</div>