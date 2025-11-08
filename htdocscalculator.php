<?php
// calculator.php
$num1 = 10;
$num2 = 5;
$operator = '+'; // '+', '-', '*', '/'

if ($operator === '+') {
    $result = $num1 + $num2;
} elseif ($operator === '-') {
    $result = $num1 - $num2;
} elseif ($operator === '*') {
    $result = $num1 * $num2;
} elseif ($operator === '/') {
    if ($num2 == 0) {
        die("Hata: 0'a bölme yapılamaz.");
    }
    $result = $num1 / $num2;
} else {
    die("Hata: Geçersiz operator.");
}

echo "{$num1} {$operator} {$num2} = {$result}";
