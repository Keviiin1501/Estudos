<?php
    require_once 'classes/Aluno.class.php';

    //instanciar a classe 
    $aluno1 = new Aluno();
    $aluno2 = new Aluno();

    $aluno1-> nome = 'Kevin Souza';
    $aluno1-> email = 'kevin_123@gmail.com';

    $aluno2-> nome = 'Carl jonhson';
    $aluno2-> email = 'groove_street_forever@gmail.com';

    echo "<pre>";
    print_r($aluno1);
    //var_dump($aluno1);

    echo "<pre>";
    print_r($aluno2);
    //var_dump($aluno1);

?>