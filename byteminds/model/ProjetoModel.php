<?php
include_once 'database.php';

function listar()
{
    $con = conectar();
    $sql = "SELECT * FROM projeto";
    $resultado = $con->query($sql);
    $dados = array();
    while ($d = $resultado->fetch_assoc()) {
        $dados[] = $d;
    }
    return $dados;
}

function inserir($cargo, $cliente, $preco, $data)
{
    $con = conectar();
    $sql = "INSERT INTO projeto (cargo, cliente, preco, data) VALUES('$cargo','$cliente','$preco', '$data')";
    $con->query($sql);
}

function buscar($id)
{
    $con = conectar();
    $sql = "SELECT * FROM projeto WHERE id='$id'";
    $resultado = $con->query($sql);
    $dados = array();
    while ($d = $resultado->fetch_assoc()) {
        $dados[] = $d;
    }
    return $dados[0];
}

function atualizar($id, $cargo, $cliente, $preco, $data)
{
    $con = conectar();
    $sql = "UPDATE projeto SET cargo='$cargo', cliente='$cliente', preco= '$preco', data='$data' WHERE id='$id'";
    $con->query($sql);
}

function excluir($id)
{
    $con = conectar();
    $sql = "DELETE FROM projeto WHERE id='$id'";
    $con->query($sql);
}
?>