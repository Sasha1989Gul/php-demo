<?php 
//1. Вывести N нечетных чисел (N записывается в переменной) и дополнительно:
    //a) посчитать их среднее значение;
    //b) вывести их в обратном порядке (от большего к меньшему).Формат вывода: <span>-элемент; размер текста 
    //должен быть равен наибольшему числу, цвет текста — красный. 
for($i = 1; $i <= 30; $i++) {
        if($i % 2 != 0) {
            echo $i . ", ";
        }
    }
echo "<br>";

$values = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29); 
    $average = array_sum($values) / count($values);
    echo 'Среднее значение равно ' . $average;
echo "<br>";

$array = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29);
for ($i = count($array) - 1; $i >= 0; $i--) {
    echo '<span style="color:red; font-size: 29px">' . $array[$i] . ', ' . '</span> ';
}
echo "<br>";

//2. Найти количество 4-значных чисел, в которых:
    //c) цифры зеркальные (например, 2112);
    $c = 0;
    for ($i = 1000; $i <= 9999; $i++) {
        $str_i = (string) $i;
        if ($str_i[0] == $str_i[3] && $str_i[1] == $str_i[2]) {
            $c += 1;
        }
    }
echo 'Количество зеркальных чисел: ' . $c . '<br>';
    //d) все цифры четные;
    $d = 0;
    for ($i = 1000; $i <= 9999; $i++) {
        $str_i = (string) $i;
        if ($str_i[0] % 2 == 0 && $str_i[1] % 2 == 0 && $str_i[2] % 2 == 0 && $str_i[3] % 2 == 0) {
            $d += 1;
        }
    }
echo 'Количество чисел c четными цифрами: ' . $d . '<br>';
    //e) все цифры нечетные;
    $e = 0;
    for ($i = 1000; $i <= 9999; $i++) {
        $str_i = (string) $i;
        if ($str_i[0] % 2 != 0 && $str_i[1] % 2 != 0 && $str_i[2] % 2 != 0 && $str_i[3] % 2 != 0) {
            $e += 1;
        }
    }
echo 'Количество чисел c нечетными цифрами: ' . $e . '<br>';
    //f) цифры идут в порядке от большего к меньшему (например, 4321).
    $f = 0;
    for ($i = 1000; $i <= 9999; $i++) {
        $str_i = (string) $i;
        if (($str_i[0] - 1 == $str_i[1]) && ($str_i[1] - 1 == $str_i[2]) && ($str_i[2] - 1 == $str_i[3])) {
            $f += 1;
        }
    }
echo 'Количество чисел c  цифрами по порядку: ' . $f . '<br>';

//3. Вывести на экран 10 кругов в один ряд (диаметр 50 рх, цвет синий).
?>
<style>
.circle{
    float: left;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: blue;
}
</style>

<?php
$i = 1;
while($i <= 10){
    echo '<div class="circle"></div>';
    $i++;
}
echo "<br>";

//4. Перевести число из двоичной в шестнадцатеричную систему счисления. Формат вывода по умолчанию,
// поместить в элемент <p>.
echo "<br>";
$binary = "10000010";
$hex = dechex(bindec($binary));
echo '<p> Число' . $binary . ' переводится в ' . $hex . '</p>';

//5. Отобразить число в римской системе счисления. Формат вывода по умолчанию, поместить в элемент <p>.
function numberToRoman(int $number) {
    $map = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
echo '<p> Число 6 переводится в ' . numberToRoman(6) . '</p>';

echo "<br>";
?>

<style>
        td {
        width: 50px;
        height: 50px;
        text-align: center;
    }

    td:hover {
        background-color: black;
        color: white;
        transition: 0.5s linear;
    }

    .weekend{
        color:red;
    }

    .weekend:hover {
        background-color: red;
        color: white;
        transition: 0.5s linear;
    }
</style>

<?php
//6. Вывести на экран календарь на текущий месяц:
    //a) выходные и праздники выделить красным цветом текста;
    //b) текущий день обвести рамкой синего цвета;
    //c) добавить стиль hover, который будет менять цвет на противоположный: цвет текста станет белым,
    //а цвет заднего фона красным или черным.
    $time = strtotime(date('Y') . '-' . date('n') . '-01');
    $firstDayMonth = date('w', $time);
    if ($firstDayMonth == 0) {
        $firstDayMonth = 7;
    }
    
    $emptySell = 1;
    $countDays = 1;
    echo '<br>Год - ' . date('Y') . ', месяц - ' . date('F');
    
    echo '<br><table>';
    
    echo '<tr>';
    while ($emptySell < $firstDayMonth) {
        echo '<td></td>';
        $emptySell++;
    }
    $countDaysWeek = $emptySell;
    
    while ($countDays <= date('t')) {
        while ($countDaysWeek <= 7) {
            if ($countDays <= date('t')) {
                if ($countDaysWeek == 6 || $countDaysWeek == 7) {
                    if ($countDays == date('d')) {
                        echo '<td class="weekend" style="border-color:blue; border-style: solid">' . $countDays . '</td>';
                    } else {
                        echo '<td class="weekend">' . $countDays . '</td>';
                    }
                } else {
                    if ($countDays == date('d')) {
                        echo '<td style="border-color:blue; border-style: solid">' . $countDays . '</td>';
                    }
                    else {
                        echo '<td>' . $countDays . '</td>';
                    }
                }
            }
            $countDaysWeek++;
            $countDays++;
            if (($countDays > date('t')) && ($countDaysWeek <= 7)) {
                echo '<td></td>';
            }
        }
        echo '</tr>';
        $countDaysWeek = 1;
        echo '<tr>';
    }
    echo '</table>';
echo "<br>";
?>

<style>

    img{
        float: left;
        width: 200px;
        height: 150px;
    }

    .imgs{
        content: '';
        display: table;
        clear: both; 
    }
    
</style>

<?php
//7. В папке img есть 10 файлов (названные от img1 до img10) с расширением jpg. Разработать скрипт,
// который отобразит их на странице по 5 изображений в ряд (размер изображения 200х150 рх).
echo '<div class = "imgs">';
for ($i=1; $i <= 10; $i++) {
    echo '<img src="img/img' . $i . '.jpg">';
    if ($i % 5 == 0) {
        echo '</div><div class = "imgs">';
    }
}
echo '</div>';
?>