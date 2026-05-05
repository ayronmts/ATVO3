<?php

$porta = 0;

echo "Iniciando varredura de portas...<br><br>";

while ($porta < 20) {
    $porta++;

    if ($porta == 18) {
        echo "Varredura interrompida por segurança na porta 18<br>";
        break;
    }

    if ($porta % 5 == 0) {
        continue;
    }

    echo "A verificar porta $porta<br>";
}

echo "<br>Processo finalizado.<br>";
