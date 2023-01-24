<?php 
//1. Конкатенация: вывод на страницу («Hello! My name is 'Name'»), где «Name» — это переменная, в которую 
//вводится имя (выводится на странице в кавычках).
$nam = "Gven";
echo "Hello! My name is ' " . $nam . " '";

echo "<br>";
//2. Добавить к заданию 1 фразу «I’m Age», где Age — это переменная с возрастом студента (выводится с новой строки).
$age = "20 age";
echo "I’m " . $age;

echo "<br>";
//3. В задание 3 из практических добавить вывод действий в таком формате: 'a'+'b'='rez', где a — это 
//значение 1-й переменной, b — это значение 2-й переменной, rez — результат операции между ними.
$a = 5;
$b = 8;
echo "Первое число - " . $a . ", второе число - " . $b . "<br/>";
echo $a . " + " . $b . " = " . $a + $b . "<br/>";
echo $a . " - " . $b . " = " . $a - $b . "<br/>";
echo $a . " * " . $b . " = " . $a * $b . "<br/>";
echo $a . " / " . $b . " = " . $a / $b . "<br/>";
echo $a . " % " . $b . " = " . $a % $b;

echo "<br>";
//4. Поменять 2 числа местами без использования 3-й переменной.
$num1 = 7;
$num2 = 10;
echo $num1 . " и " . $num2 . "<br/>";
$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;
echo "B обратном порядке: " . $num1 . " и " . $num2;

echo "<br>";
//5. Разработать php-страницу, в которой выбрать правильные html-элементы и вывести 3 вопроса в следующем формате:
     //a) 1 — вопрос с 4 вариантами ответа и только 1 из них правильный;
     //b) 2 — вопрос с 4 вариантами ответа и может быть несколько правильных;
     //c) 3 — вопрос с развернутым ответом.


echo '<br/><label for="">Сколько будет 2 + 2: <br/>
    <input type="radio" name="age" value="2">2<br/>
    <input type="radio" name="age" value="3">3<br/>
    <input type="radio" name="age" value="4">4<br/>
    <input type="radio" name="age" value="5">5<br/>
    </label>';
echo '<br/><label for="">Из чего состоит колесо: <br/>
    <input type="checkbox" name="browser" value="шина">шина <br/>
    <input type="checkbox" name="browser" value="саморез">саморез <br/>
    <input type="checkbox" name="browser" value="диск">диск <br/>
    <input type="checkbox" name="browser" value="камень">камень<br/>
    </label>';
echo '<br/><label for=""> Какой ваш дом мечт?: </label><br/>
    <textarea name="comment" cols="40" rows="5"></textarea>';

echo "<br>";     
//6. Разработать страницу с переменными:
     //a) tag, background_color, color, width, height;
     //b) Значение в этих переменных — это значение соответствующего property тега, который описан в переменной tag;
     //c) Вывести тег, записанный в переменной tag со стилями, которые записаны в переменных.
$b = "background-color: blue;";
$c = "color: red;";
$w = "width: 100;";
$h = "height: 100;";
$tag = $b . $c . $w . $h;
echo "background-color: blue <br> color: red <br> width: 100px <br> height: 100px";
echo '<div style="' . $tag . '"> Hello </div>';
?>