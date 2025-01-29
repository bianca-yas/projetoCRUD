<?php
    namespace PHP\Modelo\Telas;

?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <nav>
                <h1>TINT CRUD</h1>
            </nav>
        </header>


        <a class="btn btn-dark" href="cadastroFuncionario.php" role="button">Cadastrar Funcionário</a>
        <a class="btn btn-dark" href="cadastroCliente.php" role="button">Cadastrar Cliente</a>
        <a class="btn btn-dark" href="atualizarCliente.php" role="button">Atualizar Cliente</a>
        <a class="btn btn-dark" href="atualizarFuncionario.php" role="button">Atualizar Funcionário</a>
        <a class="btn btn-dark" href="consultarCliente.php" role="button">Consultar Cliente</a>
        <a class="btn btn-dark" href="consultarFuncionario.php" role="button">Consultar Funcionário</a>
        <a class="btn btn-dark" href="excluirCliente.php" role="button">Excluir Cliente</a>
        <a class="btn btn-dark" href="excluirFuncionario.php" role="button">Excluir Funcionário</a>
    </body>
</html>