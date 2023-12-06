<?php
if (isset($_POST['logar'])) {
    header('Location: HomeController.php');
} else {
    index();
}

function index()
{
    include_once "../view/_partials/header.php";
    include_once "../view/sistema/sistema.php";
    include_once "../view/_partials/footer.php";
}
?>