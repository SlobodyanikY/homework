<?php
$myName = "Юлия";
$age = "16";

echo "Меня зовут: {$myName}</br>";

echo "Мне {$age} лет</br>";

if ( $age >=18 && $age <=59 ){

    echo "Вам еще работать и работать";

} elseif ( $age > 59 ){

    echo "Вам пора на пенсию";

} elseif ( $age >= 0 && $age <=17 ){
    echo "Вам еще рано работать";
}


?>