<?php
$a = 15;
$b = 5;
$operator = '%';

switch ( $operator ) {

    case '+':
        echo $a . ' + ' . $b . ' = ' . ($a+$b) . '<br />';
        break;

    case '-':
        echo $a . ' - ' . $b . ' = ' . ($a-$b) . '<br />';
        break;

    case '/':
        if( $b == 0 ){
            echo $a . ' / ' . $b . '<br />';
            echo "Делить на ноль нельзя!!!";
            break;
        }
        echo $a . ' / ' . $b . ' = ' . ($a/$b) . '<br />';
        break;

    case '*':
        echo $a . ' * ' . $b . ' = ' . ($a*$b) . '<br />';
        break;

    case '%':
        echo $a . ' % ' . $b . ' = ' . ($a%$b) . '<br />';
        break;

    default:
        echo 'Не допустимая операция';
        break;

}