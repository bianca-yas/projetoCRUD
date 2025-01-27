<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php')
    use PHP\Modelo\DAO\Conexao;


    class Consultar{
        function consultarClienteIndi(
            Conexao $conexao, int $cpf
        ){
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from cliente where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo'] == $cpf){
                        echo "<br>CPF: ".$dados['cpf']. 
                             "<br>Nome: ".$dados['nome']. 
                             "<br>Telefone: ".$dados['telefone']. 
                             "<br>Endereço: ".$dados['endereco']. 
                             "<br>Total: ".$dados['total'];
                        return; //finalizar o while
                    }
                    return "Código digitado inválido!";
                }
            }catch(Except $erro){
                echo $erro;
            }
        } //fim do consultar individual
    } //fim da classe
?>