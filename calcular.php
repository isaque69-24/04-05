<?php
    $exercicio = $_POST['exercicio'] ?? 1;
    $palavra = strip_tags($_POST['palavra'] ?? '');
    $numero = intval($_POST['numero'] ?? 0);
    $intervalo = intval($_POST['intervalo'] ?? 1);

    echo "<h2>Resultado:</h2>";

    switch ($exercicio) {
        case 1:
            for ($i = 0; $i < 5; $i++) echo "Bom dia, boa tarde, boa noite<br>";
            break;
        case 2:
            $i = 0;
            while ($i <= 10) {
                echo "$i ";
                $i++;
            }
            break;
        case 3:
            $i = 0;
            do {
                echo "$i ";
                $i += 3;
            } while ($i <= 10);
            break;
        case 4:
            for ($i = 0; $i < 10; $i++) echo "$palavra<br>";
            break;
        case 5:
            $i = 0;
            while ($i < $numero) {
                echo "$palavra<br>";
                $i++;
            }
            break;
        case 6:
            $i = 0;
            do {
                echo "$i ";
                $i += 2;
            } while ($i <= $numero);
            break;
        case 7:
            for ($i = $numero; $i >= 0; $i -= 2) echo "$i ";
            break;
        case 8:
            for ($i = 1; $i <= 10; $i++) echo "$numero x $i = " . ($numero * $i) . "<br>";
            break;
        case 9:
            $i = 0;
            while ($i <= $numero) {
                echo "$i ";
                $i += $intervalo;
            }
            break;
        case 10:
            $i = $numero;
            do {
                echo "$i ";
                $i -= $intervalo;
            } while ($i >= 0);
            break;
        default:
            echo "Escolha inválida.";
    }
?>