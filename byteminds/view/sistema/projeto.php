<?php
session_start();
include_once "../model/ProjetoModel.php";

if (isset($_POST['adicionar'])) {
    adicionar();
    header('Location: projeto.php');
}

$projetos = listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Projetos</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Projeto
                            <a href="SistemaController.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label>Cargo</label>
                                <input type="text" name="cargo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cliente</label>
                                <input type="text" name="cliente" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Preço</label>
                                <input type="number" name="preco" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Data</label>
                                <input type="date" name="data" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="adicionar" class="btn btn-primary">Adicionar</button>
                            </div>
                        </form>
                        <hr>
                        <?php if (isset($projetos) && count($projetos) > 0) : ?>
                            <?php foreach ($projetos as $projeto) : ?>
                                <p>
                                    <a href="?id=<?= $projeto['id'] ?>">
                                        #<?= $projeto['id'] ?><br>
                                    </a>
                                    Cargo: <?= $projeto['cargo'] ?><br>
                                    Cliente: <?= $projeto['cliente'] ?><br>
                                    Preço: R$ <?= $projeto['preco'] ?><br>
                                    Data: <?= $projeto['data'] ?><br>
                                </p>
                            <?php endforeach ?>
                        <?php else : ?>
                            <p>Nenhum projeto encontrado</p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>