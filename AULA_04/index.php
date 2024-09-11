<?php
   //Entendendo funções nativas e criando funções
    function mostrarNome($nome,$idade){
        echo '<h1>Nome é: </h1>'.$nome;
        
    }

  

    function calculadora($numero1 = 10,$numero2 = 5){
        echo($numero1+$numero2);


    }

    
    function verdade(){
        return true;
    }

    function retornarString(){
        return 'WollygrinX';

    }

    echo retornarString();


?>