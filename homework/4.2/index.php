<style>
    b {
        color: red;
    }
</style>

<p><b>1. Имеется массив из 10 элементов, структура элемента: name, company, position. Вывести на экран массив в
    следующем формате: «“Name” is working in “Company” as: “position”».</b></p>
<?php
$workers = array(
    0 => array('Name' => 'Sem', 'Company' => 'Apple', 'position' => 'Teacher'),
    1 => array('Name' => 'Alex', 'Company' => 'ITTop', 'position' => 'QC Engineer'),
    2 => array('Name' => 'Kurt', 'Company' => 'Amazon', 'position' => 'Project Manager'),
    3 => array('Name' => 'Klei', 'Company' => 'Samsung', 'position' => 'Product Owner'),
    4 => array('Name' => 'Kim', 'Company' => 'Apple', 'position' => 'Solution Architect'),
    5 => array('Name' => 'Dgenifer', 'Company' => 'Samsung', 'position' => 'Engineer'),
    6 => array('Name' => 'Robert', 'Company' => 'Amazon', 'position' => 'Developer'),
    7 => array('Name' => 'Dgesika', 'Company' => 'Microsoft', 'position' => 'Product Owner'),
    8 => array('Name' => 'Emma', 'Company' => 'ITTop', 'position' => 'Teacher'),
    9 => array('Name' => 'Tom', 'Company' => 'Apple', 'position' => 'Teacher')
);

foreach ($workers as $key => $value) {
    echo '<p>' . $value['Name'] . ' is working in ' . $value['Company'] . ' on position: ' . $value['position'] . '</p>';
}
?>

<p><b>2. Отфильтровать массив из задания 1 и вывести работников в зависимости от компаний в виде списка.</b></p>
<?php
$comp = [];
$x = [];

foreach ($workers as $key => $value) {
    $comp[] = $value['Company'];
}

for ($i = 0; $i < count($comp); $i++) {
    $counter = 0;
    for ($j = $i + 1; $j < count($comp); $j++) {
        if ($comp[$i] == $comp[$j]) {
            $counter += 1;
        }
    }
    if ($counter == 0) {
        $x[] = $comp[$i];
    }
}

echo '<ul>';
for ($i = 0; $i < count($x); $i++) {
    echo '<li>' . $x[$i] . ' :<ul>';
    foreach ($workers as $key => $value) {
        if ($value['Company'] == $x[$i]) {
            echo '<li>' . $value['Name'] . '; </li>';
        }
    }
    echo '</ul></li>';
}
echo '</ul>';
?>

<p><b>3. Создать массив из 10 чисел. В первый элемент записать число 1. Каждое следующее число генерируется случайно
    и записывается в массив при условии, если оно больше предыдущего. Результат массива вывести на страницу.</b></p>
<?php
$array[0] = 1;
$i = 1;
while ($i < 10) {
    $numb = rand(1, 99);
    if ($numb > $array[$i - 1] && $numb < $i * 10) {
        $array[$i] = $numb;
        $i++;
    }
}
echo '<p>' . implode(',', $array) . '</p>';
?>

<p><b>4. Создать массив из 10 чисел. Элемент массива: число с плавающей точкой и степень округления.
    Заполнить массив, округлить и вывести на страницу.</b></p>
<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = array('num' => rand(0, 100) + mt_rand(0, mt_getrandmax()) / mt_getrandmax(), 'deg' => rand(0, 10));
    echo '<p>' . $arr[$i]['num'] . ' rounded to ' . $arr[$i]['deg'] . ': ' . round($arr[$i]['num'], $arr[$i]['deg']) . '</p>';
}
?>

<p><b>5. Создать массив из 5 элементов. Элементом массива является массив из 5 цифр. 
Заполнить элементы случайными числами от 10 до 100. Вывести массив, минимальные значения в каждом столбце 
выделить красным цветом. Найти сумму минимальных элементов в каждом столбце и их среднее значение.</b></p>
<?php
$arr = [];
$min = [];
$sum = 0;
for ($i = 0; $i < 5; $i++) {
    $arr[$i] = [];
    for ($y = 0; $y < 5; $y++) {
        $arr[$i][$y] = rand(10, 99);
    }
}

for ($y = 0; $y < 5; $y++) {
    $min[$y] = $arr[0][$y];
    for ($i = 1; $i < 5; $i++) {
        if ($arr[$i][$y] < $min[$y]) {
            $min[$y] = $arr[$i][$y];
        }
    }
    $sum += $min[$y];
}

for ($i = 0; $i < 5; $i++) {
    echo '<p>';
    for ($y = 0; $y < 5; $y++) {
        if ($arr[$i][$y] === $min[$y]) {
            echo '<span style="color: red;">' . $arr[$i][$y] . ',</span>';
        } else {
            echo $arr[$i][$y] . ',';
        }
    }
    echo '</p>';
}
echo '<p><em>Summ of the minimums: </em>' . $sum . '</p>';
?>