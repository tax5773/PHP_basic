/*
2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

Я НЕ СОГЛАСЕН С РЕШЕНИЕМ ЧерЕЗ switch ниже будет решение через for
*/
<?php
 $a = 4;
 /*
 switch ($a) {
                case ($a <= 0):
                    echo $a++;
				case ($a <= 1):
                    echo $a++;
				case ($a <= 2):
                    echo $a++;
				case ($a <= 3):
                    echo $a++;
				case ($a <= 4):
                    echo $a++;
				case ($a <= 5):
                    echo $a++;
				case ($a <= 6):
                    echo $a++;
				case ($a <= 7):
                    echo $a++;
				case ($a <= 8):
                    echo $a++;
				case ($a <= 9):
                    echo $a++;
				case ($a <= 10):
                    echo $a++;
				case ($a <= 11):
                    echo $a++;
				case ($a <= 12):
                    echo $a++;
				case ($a <= 13):
                    echo $a++;
				case ($a <= 14):
                    echo $a++;
				case ($a <= 15):
                    echo $a++;
				break;
 }
 */
for ($i = $a; $i <= 15; $i++) {
	echo $a++;
}
?>
