<style>
    b {
        color: red;
    }
</style>

<p><b>1. Вывести на страницу «Hello World» (echo и print).</b></p>
<?php 
$string1 = "Hello";
$string2 = "World!";

echo "$string1 $string2" . "<br>";
print "{$string1} {$string2}";
?>

<p><b>2. ESCAPE последовательности: вывести «Hello World» в различных вариациях:<br></b></p>
     <p><b>a) «Hello» в первой строке, «World» во второй;</b></p>
<?php     
     echo $string1 . "</br>" .  $string2;
?>

     <p><b>b) «Hello» в первой строке, «World» во второй и с табуляцией;</b></p>
<?php     
     echo $string1 . "</br>" . " " . $string2;
?>

     <p><b>c) Вывести на страницу строку: «Hello World. \”It’s my page!”\»;</b></p>
<?php     
     echo "Hello World. \"It's my page!\"";
?>

     <p><b>d)Вывести на страницу строку: <h1>Hello</h1> <h3> World</h3> <b>I</b> <i>am</i> <u>a new PHP developer</u>;</b></p>
<?php     
     echo "<h1>Hello</h1> <h3> World</h3> <b>I</b> <i>am</i> <u>a new PHP developer</u>";
?>

     <p><b>e) Вывести на страницу строку: &lt;script&gt;alert(‘Hello
World’); &lt;/script&gt;</b></p>
<?php     
     echo "<script>alert(‘Hello World’); </script>";
?>

<p><b>3. Вывести значение, противоположное введенному в переменную (input "5", output "-5").</b></p>
<?php
$i = 4;
echo "Значение переменной " . $i . ", противоположное значение " . -$i;
?>

<p><b>4. Создать две переменные и вывести результат возможных математических операций между ними (+, -, *, /,%).</b></p>
<?php
$number1 = 6;
$number2 = 2;
echo "Первое число " . $number1 . ", второе число " . $number2 . "<br>";
echo "Сумма равна " . $number1 + $number2 . "<br>";
echo "Разность равна " . $number1 - $number2 . "<br>";
echo "Произведение равно " . $number1 * $number2 . "<br>";
echo "Частное равно " . $number1 / $number2 . "<br>";
echo "Остаток от деления равен " . $number1 % $number2;
?>

<p><b>5. Поменять два числа местами.</b></p>
<?php
$number1 = 4;
$number2 = 9;
echo "первое число " . $number1 . ", второе число " . $number2 . "<br>";
$number1 = $number1 + $number2;
$number2 = $number1 - $number2;
$number1 = $number1 - $number2;
echo "B обратном порядке: первое число " . $number1 . ", второе число " . $number2;
?>

<p><b>6. Создать две переменные: username / password, вывести на страницу два input-тега, типа text,
где placeholder — это название переменной, а text — значение, записанное в переменную.</b></p>
<?php
$username = 'User1';
$password = 'pass1';
echo '<label for="">Username: <input type="text" placeholder="' . $username . '"></label>';
echo '<label for=""> Password: <input type="password" placeholder="' . $password . '"></label>';

?>

<p><b>7. Создать страницу, где описать переменные: font_family, font_size, font_style. Значение в этих
переменных — это value соответствующего стиля. вывести тег &ltp&gt со стилями, описанными в переменных.</b></p>
<?php

$font_family = 'Arial';
$font_size = '60px';
$font_style = 'italic';
echo '<p style="font-family:' . $font_family . '; font-size:' . $font_size . '; font-style:' . $font_style . '">Hello</p>';

?>