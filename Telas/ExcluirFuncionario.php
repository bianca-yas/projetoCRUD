<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Excluir Funcionário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
            <label>CPF:</label>
            <input type="text" name="tCpf"/><br><br>


            <button type="submit">Excluir
                <?php
                    $conexao = new Conexao();
                    if(isset($_POST['tCpf'])){
                        $excluir = new Excluir();

                        $cpf = $_POST['tCpf'];
                    }
                ?>

            </button>
        </form>

        <?php
            if(isset($_POST['tCpf'])){
                echo $excluir->excluirFuncionario($conexao,$cpf);
            }
        ?>
    </body>
</html>