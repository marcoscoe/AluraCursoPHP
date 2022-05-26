<?php 

$idade = 22;
echo 'Olá mundo! Minha idade é $idade anos. ' . "\n";

/*----------------------------------------------------*/
$nome = "Marcos";
$email = "marcos@gmail.com";

echo 'Olá! Meu nome é ' . $nome . '. Meu e-mail é ' . $email . "\n";

/*----------------------------------------------------*/

echo "Olá mundo! Minha idade é $idade anos. \n";

echo "Olá mundo! Minha idade é $idade anos." . PHP_EOL; //PHP_EOL = \n

echo "\t Olá mundo! Minha idade é \t $idade ";

/* O PHP_EOL é usado porque esta constante leva 
em consideração os diferentes caracteres utilizados 
para quebrar linha em diferentes sistemas operacionais.*/