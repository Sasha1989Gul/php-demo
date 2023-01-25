<style>
    b {
        color: red;
    }
</style>

<p><b>1. Создать массив из 10 элементов, которые генерируются случайным образом от 10 до 100. Перевернуть массив
задом наперед, используя только одну переменную.</b></p>
<?php
$arr1 = [];
$arr2 = [];
for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = rand(10, 100);
}
for ($i = 9; $i >= 0; $i--) {
    $arr2[] = $arr1[$i];
}
echo '<h2> Input: ' . implode(', ', $arr1) . '</h2>';
echo '<h2> Output: ' . implode(', ', $arr2) . '</h2>';
?>

<p><b>2. Создать массив из 10 элементов и заполнить его случайными числами от 10 до 100. Создать переменную,
записать в нее число и реализовать алгоритм поиска данного числа в массиве. Если число было найдено, вывести
порядковый номер элемента, если нет — вывести сообщение (No result for &lt;Number&gt;), где Number — число.</b></p>
<?php
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand(10, 100);
}
echo '<h2> Input: ' . implode(',', $array) . '</h2>';
$number = rand(1, 90);
$count = 0;
    foreach ($array as $key => $value) {
        if ($number === $value) {
            echo '<h4> Number ' . $number . ' found . Index: ' . $key . '</h4>';
            $count += 1;
        }
    }
    if ($count == 0) {
        echo '<h4> No result for ' . $number . '</h4>';
    }
?>

<p><b>3. Создать массив рекламных баннеров, содержащий Название баннера и URL-изображение (Изображения
сохраняются в папке img, которая находится в корне сайта). При каждом запуске страницы, случайно выбирать
и показывать баннер на странице.</b></p>
<?php
$banners = array(
    "banner0" => '<img src="img/banner0.jpg">',
    "banner1" => '<img src="img/banner1.jpg">',
    "banner2" => '<img src="img/banner2.jpg">',
    "banner3" => '<img src="img/banner3.jpg">',
    "banner4" => '<img src="img/banner4.jpg">',
    "banner5" => '<img src="img/banner5.jpg">',
    "banner6" => '<img src="img/banner6.jpg">',
    "banner7" => '<img src="img/banner7.jpg">',
    "banner8" => '<img src="img/banner8.jpg">',
    "banner9" => '<img src="img/banner9.jpg">',
    "banner10" => '<img src="img/banner10.jpg">'
);
$i = rand(0, 10);
echo '<img src="img/banner' . $i . '.jpg" style="width: 1200px; height: 500px;">';
?>

<p><b>4. Создать числовой массив из 5 элементов. Элементом массива является массив из 5 цифр. Заполнить элементы
случайными числами от 10 до 100. Вывести массив на страницу и отсортировать элементы по возрастанию.</b></p>
<?php
$arr = [];
$str = [];
echo '<div style="float: left; padding: 20px;"><h2> Original </h2>';
for ($i = 0; $i < 5; $i++) {
    $arr[$i] = [];
    for ($y = 0; $y < 5; $y++) {
        $arr[$i][$y] = rand(10, 100);
        $str[] = $arr[$i][$y];
    }
    echo '<p>' . implode(', ', $arr[$i]) . '</p>';
}
echo '</div>';

sort($str);
$sortArr = array_chunk($str, 5);

echo '<div style="float: left; padding: 20px;"><h2> Sorted </h2>';
for ($i = 0; $i < 5; $i++) {
    echo '<p>' . implode(', ', $sortArr[$i]) . '</p>';
}
echo '</div>
    <div style="clear:both;"></div>';
?>

<p><b>5. Создать 2 массива цифр по 10 элементов каждый. Разработать скрипт, который будет создавать третий 
массив и записывать в него те элементы, которые присутствуют в одном массиве, но нет в другом.</b></p>
<?php
$array1 = [];
$array2 = [];
$absenceArray = [];
for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(10, 99);
    $array2[$i] = rand(10, 99);
}
echo '<p><h3> Input: </h3></p>';
echo '<p>' . implode(', ', $array1) . '</p>';
echo '<p>' . implode(', ', $array2) . '</p>';

$absenceArray = array_merge(array_diff($array1, $array2), array_diff($array2, $array1));

echo '<p><h3> Output: </h3></p>';
echo '<p>' . implode(', ', $absenceArray) . '</p>';
?>

<p><b>6. Создать массив из 10 элементов вида X, Y. Дополнительно создать массив цветов. Вывести на страницу
 10 div, разместить их в координатах X, Y и закрасить случайным цветом из массива цветов.</b></p>
 <style>
    .color {
        position: absolute;
        width: 30px;
        height: 30px;
    }
</style>
 <?php
$element = [];
$colors = [];

for ($i = 0; $i < 10; $i++) {
    $element[$i] = array('X' => rand(10, 550), 'Y' => rand(10, 350));
}

for ($j = 0; $j < 10; $j++) {
    $colors[$j] = sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255));
}

echo '<div style="width:1200px; height:500px; position:relative; padding:30px">';

foreach ($element as $key => $items) {
    echo '<div class="color" style="top:' . $items['Y'] . 'px; left:' . $items['X'] . 'px; background-color:' . $colors[$key] . ';"></div>';
}

echo '</div>';
?>