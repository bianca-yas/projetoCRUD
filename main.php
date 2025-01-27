<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;

    $cliente1 = new Cliente("12333487384",
                          "João",
                          "1112994676",
                          "Rua Jipa, 15",
                          1500);
    
    //Vizualizar os dados
    echo $cliente1->imprimir();
    $func1 = new Funcionario("22645536333",
                             "Clara",
                             "119676674",
                             "Rua Flores, 12",
                              5000.00);

    echo "<br>".$func1->imprimir();




?>