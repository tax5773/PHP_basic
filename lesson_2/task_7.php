/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/
<?php
function getNumEnding($number, $endingArray)

{

    $number = $number % 100;

    if ($number>=11 && $number<=19) {

        $ending=$endingArray[2];

    }

    else {

        $i = $number % 10;

        switch ($i)

        {

            case (1): $ending = $endingArray[0]; break;

            case (2):

            case (3):

            case (4): $ending = $endingArray[1]; break;

            default: $ending=$endingArray[2];

        }

    }

    return $ending;

}

$hours = date('H');

$minutes = date('m');

$seconds = date('s');

echo 'Осталось '.$hours.' ' .getNumEnding($hours, array('час', 'часа', 'часов')).' '.

    $minutes . ' ' .getNumEnding($minutes, array('минута', 'минуты', 'минут')).' '.

    $seconds . ' '. getNumEnding($seconds, array('секунда', 'секунды', 'секунд'));

echo '<br>';

echo 'В течение '.$hours.' ' .getNumEnding($hours, array('часа', 'часов', 'часов')).' '.

    $minutes . ' ' .getNumEnding($minutes, array('минуты', 'минут', 'минут')).' '.

    $seconds . ' '. getNumEnding($seconds, array('секунды', 'секунд', 'секунд'));
?>
