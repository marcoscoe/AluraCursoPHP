<?php 

$idade = 18;
$nome = 'Rafael';

echo "Você só pode entrar se tiver mais do que 18 anos. " . PHP_EOL;

/*------------------------------------------------------------------*/

if ($idade >= 18 ) {
echo "Você tem $idade anos. Pode entrar!" . PHP_EOL;
}

else {
echo "Você tem $idade anos. Você não pode entrar!" . PHP_EOL;
}
/*------------------------------------------------------------------*/

// || == "Ou".

if($idade == 18 || $idade > 18) {
echo "Você tem $idade anos. Pode entrar!" . PHP_EOL;
}

else {
    echo "Você tem $idade anos. Você não pode entrar!" . PHP_EOL;
}

/*------------------------------------------------------------------*/

// or == || == "Ou".

if($idade == 18 or $idade > 18) {
    echo "Você tem $idade anos. Pode entrar!" . PHP_EOL;
}

else {
        echo "Você tem $idade anos. Você não pode entrar!" . PHP_EOL;
}

/*------------------------------------------------------------------*/

if($idade == 18 && $nome == 'Marcos') {
    echo "Você pode entrar $nome, pois você tem $idade" . PHP_EOL;
}

else {
    echo "Você tem $idade anos. Você não pode entrar por causa da sua idade ou seu nome não é Marcos" . PHP_EOL;
}

/*------------------------------------------------------------------*/

// and == && == "e".

if($idade == 18 and $nome == 'Marcos') {
    echo "Você pode entrar $nome, pois você tem $idade" . PHP_EOL;
}

else {
    echo "Você tem $idade anos. Você não pode entrar por causa da sua idade ou seu nome não é Marcos" . PHP_EOL;
}


