<?php
$myName = "Юлия";
$age = '90 hggg';

echo "Меня зовут: {$myName}</br>";

echo "Мне {$age} лет</br>";

if ( $age < 0 || !is_numeric( $age ) ) {

    echo "Неизвестный возраст";

} else {

    if ( $age >= 18 && $age <= 59 ) {

        echo "Вам еще работать и работать";

    } elseif ( $age > 59 ){

        echo "Вам пора на пенсию";

    } elseif ( $age >= 0 && $age <= 17 ) {

        echo "Вам еще рано работать";

    }

}
