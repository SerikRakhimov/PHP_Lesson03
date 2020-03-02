<?php

// 1. Вернуть строку с числами от одного до n через пробел. // "1 2 3 4 5 ...". НЕ ВЫВОДИТЬ, А ВЕРНУТЬ!
function space(int $n, bool $lastDigit = true):string{
    if ($n > 0) {
        return space($n - 1, false) . $n . ($lastDigit==true?"":" ");
    }
    else{
        return "";
    }
}

$n = 5;
echo space($n).PHP_EOL;

// 2. Вернуть точную степень двойки. Операцией возведения в степень пользоваться нельзя!
function stepen2(int $n):int{
    if ($n > 0) {
        return stepen2($n - 1) * 2;
    }
    else{
        return 1;
    }
}

$n = 5;
echo stepen2($n).PHP_EOL;

// 3. Дано натуральное число N. Вычислите сумму его цифр.
// При решении этой задачи нельзя использовать строки, списки, массивы (ну и циклы, разумеется).
function sum(int $n):int{
    if ($n > 0) {
        $work = intval($n/10);
        return sum($work) + ($n - $work*10);
    }
    else{
        return 0;
    }
}

$n = 165;
echo sum($n).PHP_EOL;