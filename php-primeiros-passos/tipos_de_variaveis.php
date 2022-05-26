<?php 

// Essas variáveis são chamadas de tipos primitivos!!!


$idade = 22;
echo gettype($idade). ' ';

/*------------------------*/

$salario = 2000.1;
echo gettype($salario) . ' ';

/*------------------------*/

$divisao = 10 / 3;
echo gettype($divisao) . ' ';

/*------------------------*/

$texto = "Olá, Marcos" . ' ';
echo gettype($texto);

/*------------------------*/

$verdadeiro = true;
$falso = false;
echo gettype($verdadeiro) . ' ';
echo gettype($falso);