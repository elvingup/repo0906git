<?php

$data;
$dia;
$mes;
switch(date('w')){
    case 0:
        $dia = "Domingo";
    break;
    case 1:
        $dia = "Segunda";
    break;
    case 2:
        $dia = "Terça";
    break;
    case 3:
        $dia = "Quarta";
    break;
    case 4:
        $dia = "Quinta";
    break;
    case 5:
        $dia = "Sexta";
    break;
    case 6:
        $dia = "Sábado";
    break;
}

switch(date('n')){
    case 1:
        $mes = 'Janeiro';
    break;
    case 2:
        $mes = 'Fevereiro';
    break;
    case 3:
        $mes = 'Março';
    break;
    case 4:
        $mes = 'Abril';
    break;
    case 5:
        $mes = 'Maio';
    break;
    case 6:
        $mes = 'junho';
    break;
    case 7:
        $mes = 'julho';
    break;
    case 8:
        $mes = 'Agosto';
    break;
    case 9:
        $mes = 'Setembro';
    break;
    case 10:
        $mes = 'Outubro';
    break;
    case 11:
        $mes = 'Novembro';
    break;
    case 12:
        $mes = 'Dezembro';
    break;
}

echo $dia. ", ".date('d')." de {$mes} de ".date('Y');

?>