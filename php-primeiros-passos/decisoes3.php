<?php

for ($contador = 1; $contador <=15; $contador++) {
    if($contador != 13) {
        echo "contador #$contador". PHP_EOL;
    }
}
// Os dois códigos fazem a mesma coisa.

for ($contador = 1; $contador <=15; $contador++) {
    if($contador == 13) {
       continue; 
    }
    echo "contador #$contador". PHP_EOL;
}

//No código abaixo, quando o contador chegar a 13, o código será interrompido.
for ($contador = 1; $contador <=15; $contador++) {
    if($contador == 13) {
       break;
    }
    echo "contador #$contador". PHP_EOL;
}