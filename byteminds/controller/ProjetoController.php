<?php
include_once "../model/ProjetoModel.php";

if (isset($_POST['adicionar'])) {
    adicionar();
    header('Location: ProjetoController.php');
} 

elseif (isset($_POST['atualiza'])) {
    editar();
    header("Location: ProjetoController.php");
} 

elseif (isset($_POST['exclui'])) {
    $projetos = buscar($_POST['id']);
    include_once("../view/sistema/excluir.php");
} 

elseif (isset($_GET['sim'])) {
    $id = $_GET['sim'];
    excluir($id);
    header("Location: ProjetoController.php");

} 

elseif (isset($_GET['id'])) {
    $projetos = buscar($_GET['id']);
    include_once "../view/sistema/atualizarProjeto.php";
} 

else {
    index();
}

function adicionar()
{
    $cargo = $_POST['cargo'];
    $cliente = $_POST['cliente'];
    $preco = $_POST['preco'];
    $data = $_POST['data'];
    inserir($cargo, $cliente, $preco, $data);
}

function editar()
{
    $id = $_POST['id'];
    $cargo = $_POST['cargo'];
    $cliente = $_POST['cliente'];
    $preco = $_POST['preco'];
    $data = $_POST['data'];
    atualizar($id, $cargo, $cliente, $preco, $data);
}

function index()
{
    $projetos = listar();
    include_once "../view/sistema/projeto.php";
}
?>