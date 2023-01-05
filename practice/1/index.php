<?php 
//1. Вывести на страницу «Hello World» (echo и print).
$string1 = "Hello";
$string2 = "World!";

echo "$string1 $string2";

echo "<br>";

print "{$string1} {$string2}";

echo "</br>";
//2. ESCAPE последовательности: вывести «Hello World» в различных вариациях:
     //a) «Hello» в первой строке, «World» во второй;
     echo $string1 . "</br>" .  $string2;
echo "</br>";
     //b) «Hello» в первой строке, «World» во второй и с табуляцией;
     echo $string1 . "</br>" . " " . $string2;
echo "</br>";
     //c) Вывести на страницу строку: «Hello World. \”It’s my page!”\»;
     echo "Hello World. \"It's my page!\"";
echo "</br>";
     //d)Вывести на страницу строку: <h1>Hello</h1> <h3> World</h3> <b>I</b> <i>am</i> <u>a new PHP developer</u>;
     echo "<h1>Hello</h1> <h3> World</h3> <b>I</b> <i>am</i> <u>a new PHP developer</u>";
echo "</br>";
     //e) Вывести на страницу строку: <script>alert(‘Hello World’); </script>.
     echo "<script>alert(‘Hello World’); </script>";
echo "<br>";
//3. Вывести значение, противоположное введенному в переменную (input "5", output "-5").
$i = 5;
$s = $i * -1;
echo $s;

echo "<br>";
//4. Создать две переменные и вывести результат возможных математических операций между ними (+, -, *, /,%).
$number1 = 6;
$number2 = 2;
echo "'Сумма равна ' + ($number1 + $number2), 'Вычетание равно ' + ($number1 - $number2), 'Деление равно ' + ($number1 / $number2), 'Умножение равно ' + ($number1 * $number2)";

echo "<br>";
//5. Поменять два числа местами.
$number = 49;
$x = $number % 10;
$y = Math.floor($number / 10);
echo String($x) + String($y);

echo "<br>";
//6. Создать две переменные: username / password, вывести на страницу два input-тега, типа text,
// где placeholder — это название переменной, а text — значение, записанное в переменную.

echo "<br>";
//7. Создать страницу, где описать переменные: font_family, font_size, font_style. Значение в этих
// переменных — это value соответствующего стиля. вывести тег <p> со стилями, описанными в переменных.
$i = Arial;
$b = 60;
$c = italic;
echo '<p style="font_family:' . value($i) . '; font-size:' . value($b) . 'px; font_style:' . value($c) . '"> Hello </p>'
?>