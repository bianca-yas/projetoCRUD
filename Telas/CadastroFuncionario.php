<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Funcionario.php');
    use PHP\Modelo\Funcionario;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Funcionário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="lCpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="99999999999">
        </div>

        <div class="mb-3">
            <label for="lNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="tNome" name="tNome" placeholder="insira seu nome aqui">
        </div>

        <div class="mb-3">
            <label for="lTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99)99999-9999">
        </div>

        <div class="mb-3">
            <label for="lEndereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="tEndereco" name="tEndereco" placeholder="Ex.: Rua Jorge Moura, 12">
        </div>

        <div class="mb-3">
            <label for="lTotal" class="form-label">Salário</label>
            <input type="text" class="form-control" id="tSalario" name="tSalario" placeholder="0000.00">
        </div>


        <button type="submit">Cadastrar
            <?php
            if(isset($_POST['tCpf']) && isset($_POST['tNome'])){
                $cpf = $_POST['tCpf'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTelefone'];
                $endereco = $_POST['tEndereco'];
                $salario = $_POST['tSalario'];
                
                $func1 = new Funcionario($cpf,$nome,$telefone,$endereco,$salario);
            }
            ?>
        </button>
        </form>

        <?php
            echo $func1->imprimir();
        ?>

        


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>