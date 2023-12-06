<?php
    include_once 'database.php';

    function listar()
    {
        $con = conectar();
        $sql = "SELECT * FROM usuario";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc())
        {
            $dados[] = $d;
        }
        return $dados;
    }

    function inserir($email, $senha)
    {
        $con = conectar();
        $sql = "INSERT INTO usuario (email, senha) VALUES('$email','$senha')";
        $con->query($sql);
    }
?>