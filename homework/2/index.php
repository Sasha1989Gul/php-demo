<?php
//1. Есть 2 переменные. Проверить и вывести на экран, является ли значение первой переменной кратным
//значению второй (первое число кратно второму, если делится на него без остатка).
$number1 = 7;
$number2 = 5;

if ($number1 % $number2 === 0) {
    echo "Число " . $number1 . " кратно числу " . $number2;
} else {
    echo "Число " . $number1 . " не кратно числу " . $number2;
}

echo "<br>";
//2. Вывести квадрат большего из двух чисел.
$numb1 = 4;
$numb2 = 6;

if ($numb1 < $numb2) {
    echo "Квадрат большего числа равен " . $numb2 * $numb2;
} else {
    echo "Квадрат большего числа равен " . $numb1 * $numb1;
}

echo "<br>";
//3. Есть переменная, в ней сохранен номер месяца (в коде скрипта). Скрипт возвращает количество дней в этом
//месяце.
$m = 4;
switch ($m) {
    case '1';
    $xl = '31';
    break;
    case '2';
    $xl = '28';
    break;
    case '3';
    $xl = '31';
    break;
    case '4';
    $xl = '30';
    break;
    case '5';
    $xl = '31';
    break;
    case '6';
    $xl = '30';
    break;
    case '7';
    $xl = '31';
    break;
    case '8';
    $xl = '31';
    break;
    case '9';
    $xl = '30';
    break;
    case '10';
    $xl = '31';
    break;
    case '11';
    $xl = '30';
    break;
    case '12';
    $xl = '31';
    break;
    default:
    echo " ";
    break;
}
echo "Kоличество дней в месяце " . $xl;
//второй способ:
// $month = 4;
// echo '<p>Month = ' . $month . '</p>';
// if ($month == 2) {
//     echo '<p>Days in the month: 28</p>';
// }
// if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
//     echo '<p>Days in the month: 31</p>';
// }
// if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
//     echo '<p>Days in the month: 30</p>';
// }

echo "<br>";
//4. Есть переменная, в ней (в скрипте) сохранен год. Проверить, является ли внесенный год високосным
$year1 = 2025;
if (($year1 % 400 == 0) || (($year1 % 4 == 0) && ($year1 % 100 !== 0))) {
    echo('Год выокосный');
}
else{
    echo('Год не высокосный');
}

echo "<br>";
//5. Вывести сумму двух чисел, если они оба кратны 3, или вывести результат деления при условии, что второе
// число не равно нулю (если ноль, то выводится сообщение о некорректном вводе).
$num1 = 6;
$num2 = 9;
if ($num1 % 3 == 0 && $num2 % 3 == 0 && $num2 != 0) {
    echo 'Сумма чисел равна ' . $num1 + $num2;
} else {
    if ($num2 != 0) {
        echo 'Частное равно ' . $num1 / $num2;
    } else {
        echo 'Некорректно введены данные';
    }
}

echo "<br>";
//6. Разработать страницу, которая проверяет, авторизован ли пользователь. на странице есть переменная
// session_id. Если в переменной записано число 0, то пользователь видит форму регистрации (логини пароль).
// Если 1, то выводит сообщение «Вы зарегистрированы, войдите».
$session_id = 0;

if ($session_id == 0) {
    echo '<h1>Please register</h1>';
    echo 'Session ID:' . $session_id . '<br>';
    echo '<br><label for=""><input type="text" placeholder="Login"></label>';
    echo '<br><label for=""><input type="password" placeholder="Password"></label><br/><br/>';
} else {
    echo '<h1>You are already registered</h1>';
    echo 'Session ID:' . $session_id . '<br>';
    echo '<br><a href="">Login</a><br>';
}

//7. Разработать программу, которая будет рисовать div по указанным в переменных координатам с указанным цветом,
// если координаты не выходят за пределы экрана.
$x = 50;
$y = 50;
$c = "green";
if($x > 0 && $y > 0) {
    echo '<div class="koob" style="width:' . $x . '; height:' . $y . '; background-color:' . $c . '"></div>';
}
else{
    echo "Некорректный ввод";
}
?>
<style>
.koob{
    position: relative;
    left: 10px;
}
</style>