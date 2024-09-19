<?php
    require_once 'classes/Cliente.class.php';

    $cliente1 = new Cliente();
    $cliente2= new Cliente();

    $cliente1->validar('Carl Johnson','groove_street_forever@gmail.com');
    $cliente1->exibir();


    $cliente2->validar('Big Smoke','big_smoke,traitor_of_groove_street');
    $cliente2->exibir();


    

?>