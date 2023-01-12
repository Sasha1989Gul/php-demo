<?php 
//1. Разработать функции, которые на входе принимают два числа и возвращают:
   //a. Большее из двух;
   //b. Возводит первое число в степень второго числа;
   //c. Находит среднее арифметическое двух чисел.
$num1 = 8; //random_int(1, 100);
$num2 = 3; //random_int(1, 100);

   function maxNumbers($a, $b) {
       return max($a, $b);
   }

   function powNumbers($num, $exp) {
       return $num ** $exp;
   }

   function avgNumbers($a, $b) {
       return ($a+$b)/2;
   }
?>

<div>
   <p>Number1: <?= $num1?> Number2: <?= $num2?> </p>
   <p>Max: <?= maxNumbers($num1, $num2)?></p>
   <p>Pow: <?= powNumbers($num1, $num2)?></p>
   <p>Avg: <?= avgNumbers($num1, $num2)?></p>
</div>

<?php 
//2. Разработать функцию, которая на входе принимает число и цифру, которую надо из числа удалить,
// и возвращает новое число, но уже без цифр, указанных во втором параметре.
    $num1 = random_int(1, 999999999999);
    $num2 = random_int(1, 9);

    function func($num1, $num2) {
        return str_replace($num2, '', $num1);
    }
?>

<div>
    <p><?= $num1 ?> убираем '<?= $num2 ?>' получаем: <?= func($num1, $num2) ?></p>
</div>

<?php
//3. Разработать функцию, которая при запуске страницы будет определять время дня и заливать фон
// соответствующим цветом: утро — синий, день — желтый, вечер — красный, ночь — черный.
    $timestamp = time();

    function getColor($timestamp) {
        $hour =  date("H", $timestamp);

        return 
            $hour > 9 ? ( 
                $hour > 14 ? (
                    $hour > 19 ? "red" 
                        : "yellow"
                ) : "blue"
            ) : "black";
    }
    
    $color = getColor($timestamp);
?>

<style>
    body {
        background-color: <?= $color ?>;
    }    
</style>

<p><?= date("H:i:s", $timestamp)?></p>

<?php
//4. Разработать функцию проверки числа на кратность другом числу (два числа являются параметрами функции,
// default-значение второго числа — "2").
$num1 = random_int(1, 100);
$num2 = random_int(1, 9);

function checkMultiplicity(int $a, int $b = 2): bool {
    return $a % $b === 0;
}
?>

<div>
<p><?= $num1 ?> <?= checkMultiplicity($num1, $num2) ? "is" : "is not" ?> multiple for <?= $num2?></p>
</div>

<?php
//5. Разработать функцию вывода таблицы (параметры: количество строк, количество столбцов, ширина столбца, высота столбца).
    $numLines = rand(3, 9);
    $numColumns = rand(3, 9);
    $width = rand(50, 100);
    $height = rand(10, 25);

    function tableOutput($numLines, $numColumns) {
        $tab = '';
        for($i = 0; $i < $numLines; $i++){
            $tab .='<tr>';
            for($j = 0; $j < $numColumns; $j++){
                $tab .='<td></td>';
            }
            $tab .='</tr>';      
        }
        return $tab;
    }
?>
<style>
    td {
        width: 50px;
        height: 50px;
    }
</style>
<table border="1">
<p><?= tableOutput($numLines, $numColumns) ?></p>
</table>

<?php
//6. Разработать рекурсивную функцию, которая на входе принимает число, выводит его и уменьшает на единицу.
//Функция работает до тех пор, пока число больше 0.
$number = rand(1, 20);

function numbers($number) {
    if ($number > 0) {
        return '<span style="padding: 20px">' . $number . '</span>' . numbers($number - 1);
    }
}
echo numbers($number);
?>