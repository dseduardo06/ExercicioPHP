<?php

$dia_semana = 3;

switch ($dia_semana) {
    case 1:
        echo "Domingo<br>";
        echo "Fim de semana!";
        break;

    case 2:
        echo "Segunda-feira<br>";
        echo "Dia útil.";
        break;

    case 3:
        echo "Terça-feira<br>";
        echo "Dia útil.";
        break;

    case 4:
        echo "Quarta-feira<br>";
        echo "Dia útil.";
        break;

    case 5:
        echo "Quinta-feira<br>";
        echo "Dia útil.";
        break;

    case 6:
        echo "Sexta-feira<br>";
        echo "Dia útil.";
        break;

    case 7:
        echo "Sábado<br>";
        echo "Fim de semana!";
        break;

    default:
        echo "Número inválido.";
}

?>