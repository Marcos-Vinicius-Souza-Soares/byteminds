<?php
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: LoginController.php');
}
$logado = $_SESSION['email'];
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main class="container mt-5">
        <div class="main-content">
            <form action="ProjetoController.php" method="POST">
                <div class="btns">
                    <button type="submit" name="" class="btn btn-primary">Projetos</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
