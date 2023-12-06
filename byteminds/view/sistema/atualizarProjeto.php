<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>#<?=$projetos['id']?> </h2>
<hr>
<form action="" method='post'>
    <input type="hidden" name='id' value='<?=$projetos['id']?>'>
    <label>Cargo:</label>
    <input type="text" name='cargo' value='<?=$projetos['cargo']?>' required>
    <label>Cliente:</label>
    <input type="text" name='cliente' value='<?=$projetos['cliente']?>' required>
    <label>Preço:</label>
    <input type="number" name='preco' value='<?=$projetos['preco']?>' required>
    <label>Data:</label>
    <input type="date" name='data' value='<?=$projetos['data']?>' required>
    <button type="submit" name='atualiza'>
        Atualizar
    </button>  
    <button type="submit" name='exclui'>
        Excluir
    </button>
</form>
</body>
</html>
