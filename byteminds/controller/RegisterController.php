<?php
    include_once "../model/RegisterModel.php";
    
    if(isset($_POST['novo']))
    {
        adicionar();
        header('Location: RegisterController.php');
    }

    if (isset($_POST['criar'])) {
        header('Location: RegisterController.php');
    }
    
    else
    {
        index();
    }
    function adicionar()
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        inserir($email, $senha);
    }
    function editar()
    {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        atualizar($id, $email, $senha);
    }

    function index()
    {
        $cadastrar = listar();
        include_once "../view/login/register.php";
    }
?>