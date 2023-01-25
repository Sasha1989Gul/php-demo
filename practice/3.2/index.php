<p><b>1. Вывести все високосные года (до текущего) на страницу в виде таблицы с количеством столбцов
     равным 20.</b></p>

<style>
    b {
        color: red;
}

    tr, td {
        border: 3px double black;
    }
</style>

<?php 
$years = [];
$current = 0;

while($current < 2022) {
    if(
        ($current % 4 === 0 && $current % 100 !== 0 ) || ($current % 400 === 0)
    ) {
        $years[] = $current;
    }
    $current++;
}
?>

<table>
    <tr>
    <?php
        foreach($years as $index => $year) {
            echo "<td>$year</td>";

            if($index>0 && ($index+1) % 20 === 0) {
                echo "</tr><tr>";
            }            
        }

    ?>
    </tr>
</table>

<p><b>2. Вывести две пирамиды на 15 строк, одна должна быть заполнена внутри, а вторая — пустая:</b></p>
<?php
echo 'Заполненная: <br> <br>';
$x = 1;
for ($i = 1; $i <= 15; $i++) {
    while ($x <= $i) {
        echo '<span>*</span>';
        $x++;
    }
    $x = 1;
    echo '<br>';
}

echo '<br> Пустая: <br> <br>';
for ($i = 1; $i <= 15; $i++) {
    while ($x <= $i) {
        if ($x == 1 || $x == $i || $i == 15) {
            echo '<span>*</span>';
        } else {
            echo '<span>&nbsp;&nbsp;</span>';
        }

        $x++;
    }
    $x = 1;
    echo '<br>';
}
?>
<p><b>3. Вывести наибольшее число, на которое число на входе может поделиться нацело. Входное число должно
 быть нечетным и содержать минимум 5 цифр.</b></p> 
<?php
 $number = 12345;

if ($number % 2 == 0 || strlen($number) < 5) {
        echo 'Вы ввели данные неверно';
    } else {
        echo '<h1> Ваше число: ' . $number . '</h1>';

        for ($i = 3; $i < $number; $i++) {
            if ($number % $i == 0) {
                $divider = $i;
            }
        }
        echo '<h3> Результат: ' . $divider . '</h3>';
}
?>

<p><b>4. Посчитать !N, которое записывается в переменной.!N — произведение натуральных чисел от единицы
 до N включительно. Например, 5! = 5*4*3*2*1 = 120, 8! = 8*7*6*5*4*3*2*1 = 40320.</b></p>
<?php
    $N = 6;
    $natur = 1;
    echo '<h1> Ваше число: ' . $N . '</h1>';
    for ($i = 1; $i <= $N; $i++) {
        $natur = $natur * $i;
    }
    echo '<h3>' . $N . ' = ' . $natur . '</h3>';
?>

<p><b>5. Вывести квадрат, состоящий из div размером 30х30рх.Количество div, составляющих квадрат,
 инициализируется в переменной</b></p>
 <style>
.clear{
        clear: both;
    }

.coob {
        float: left;
        background-color: red;
        border: 1px solid black;
        width: 30px;
        height: 30px;
    }
 </style>
<?php
$count = 3;
echo '<p> Count: ' . $count . '</p>';
for ($i = 1; $i <= $count; $i++) {
    for ($y = 1; $y <= $count; $y++) {
        echo '<div class="coob"></div>';
    }
    echo '<div class="clear"></div>';
}
?>

<p><b>6. Разработать страницу с таблицей. Первая колонка таблицы — номер месяца, первый столбец — номер дня.
 Все остальное — input type text. </b></p>
 <style>
    .text{
        width: 50px;
    }

    .day{
        border: none;
        font-weight: 600;
    }

    .border{
        border: 1px solid white;
    }
 </style>
<?php
echo '<table><tr><td class="day"></td>';
for ($x = 1; $x <= 12; $x++) {
    echo '<td class="day">'  . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $x . '</td>';
}
echo '</tr>'; 
for ($i = 1; $i <= 31; $i++) {
    echo '<tr>'; 
    echo '<td class="day">' . $i . '</td>';
    for ($y = 1; $y <= 12; $y++) {
        echo '<td class="border"><input class="text" type="text"></td>';
    }
    echo '</tr>'; 
}
echo '</table>';
?>