<?php


function replaceSpace($string){
	
    if (!is_string($string)) {
        return "incorrect argument {$string}";
    }else {
		return preg_replace('/\s/', '_', $string);
	};
}

echo replaceSpace('Проверка работы функции замены пробелов на нижнее подчеркивание');

