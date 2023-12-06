<?php
    function  conectar()
    {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "byteminds";

        $con = new mysqli($servidor, $usuario, $senha, $banco);
        return $con;
    }
?>