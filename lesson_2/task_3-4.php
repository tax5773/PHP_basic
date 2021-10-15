/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, 
$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
 $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
  (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

*/
 function sum($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a - $b;
    }

    function div($a, $b) {
        return $a / $b;
    }

 function multi($a, $b) {
        return $a * $b;
    }

     function mathOperation($arg1, $arg2, $operation) {
            switch ($operation) {
                case 'sum':
                    return sum($arg1, $arg2);
                case 'sub':
                    return sub($arg1, $arg2);
                case 'div':
                    return div($arg1, $arg2);
                case 'multi':
                    return multi($arg1, $arg2);
                default:
                    echo 'Операция не предусмотрена';
                    break;
            }
        }

