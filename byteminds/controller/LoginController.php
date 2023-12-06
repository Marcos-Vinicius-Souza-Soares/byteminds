<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once "../model/database.php";
        $con = conectar();
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $con->query($sql);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            include_once "../view/_partials/header.php";
            include_once "../view/login/login.php";
            include_once "../view/_partials/footer.php";
        }

        else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            include_once "../view/_partials/header.php";
            include_once "../view/sistema/sistema.php";
            include_once "../view/_partials/footer.php";
        }
    }
    else {
        include_once "../view/_partials/header.php";
        include_once "../view/login/login.php";
        include_once "../view/_partials/footer.php";
    }
?>