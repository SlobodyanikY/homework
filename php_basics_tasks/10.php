<?php
$myName = "Юлия";
$age = '90 hggg';

echo "Меня зовут: {$myName}</br>";

echo "Мне {$age} лет</br>";

if ( $age < 0 || !is_numeric( $age ) ) {

    echo "Неизвестный возраст</br>";

} else {

    if ( $age >= 18 && $age <= 59 ) {

        echo "Вам еще работать и работать</br>";

    } elseif ( $age > 59 ){

        echo "Вам пора на пенсию</br>";

    } elseif ( $age >= 0 && $age <= 17 ) {

        echo "Вам еще рано работать</br>";

    }

}

$day = 4;

switch ( $day ) {

    case 1: echo ' Это рабочий день '; break;

    case 2: echo ' Это рабочий день '; break;

    case 3: echo ' Это рабочий день '; break;

    case 4: echo ' Это рабочий день '; break;

    case 5: echo ' Это рабочий день '; break;
}