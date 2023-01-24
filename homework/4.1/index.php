<style>
    b {
        color: red;
    }
</style>

<p><b>1. Создать массив из 10 элементов (чисел). Вывести:</b></p>
<?php
$arr0 = [];
for ($i = 0; $i < 10; $i++) {
    $arr0[$i] = rand(1, 20);
}
echo '<p> Input array: ' . implode(',', $arr0) . '</p>';
?>

<p><b>a) элементы, которые больше предыдущих;</b></p>
<?php
$arr1 = [];
for ($i = 1; $i < 10; $i++) {
    if ($arr0[$i] > $arr0[$i - 1]) {
        $arr1[] = $arr0[$i];
    }
}
echo '<p> Elements whith are more prevoius: ' . implode(',', $arr1) . '</p>';
?>

<p><b>b) среднее значение и сумму всех элементов;</b></p>
<?php
$summ = array_sum($arr0);
$AVG = $summ / 10;
echo '<p> Summ: ' . $summ . ', AVG: ' . $AVG . '</p>';
?>

<p><b>c) отсортировать нечетные элементы массива по убыванию.</b></p>
<?php
$arrOdd = [];
foreach ($arr0 as $i => $value) {
    if ($value % 2 != 0) {
        $arrOdd[] = $value;
    }
}
rsort($arrOdd);
echo '<p> Sorted not pair elements: ' . implode(',', $arrOdd) . '</p>';
?>

<p><b>2. Создать массив из 5 дат. Скриптом определить сколько дней находится в пределах между двумя соседними датами.</b></p>
<?php
$dates = [];

for ($i = 0; $i < 5; $i++) {
    $timestamp = rand(strtotime("Jan 01 2023"), strtotime("Dec 31 2023"));
    $dates[$i] = date("d.m.Y", $timestamp);
}

echo '<em> Input dates: ' . implode(', ', $dates) . '</em><br>';

for ($i = 1; $i < 5; $i++) {
    $difference = (strtotime($dates[$i]) - strtotime($dates[$i - 1])) / 3600 / 24;
    echo '<em>' . $dates[$i] . ' - ' . $dates[$i - 1] . ' = ' . $difference . 'days</em><br>';
}
?>

<p><b>3. В массиве есть 10 элементов с такими ключами: type, value. Вывести 10 записей с type и value,
     записанными в каждом элементе.</b></p>
<?php
$tag = array(
    0 => array('Type' => 'text', 'Value' => 'Text 1'),
    1 => array('Type' => 'text', 'Value' => 'Text 2'),
    2 => array('Type' => 'text', 'Value' => 'Text 3'),
    3 => array('Type' => 'text', 'Value' => 'Text 4'),
    4 => array('Type' => 'text', 'Value' => 'Text 5'),
    5 => array('Type' => 'text', 'Value' => 'Text 6'),
    6 => array('Type' => 'text', 'Value' => 'Text 7'),
    7 => array('Type' => 'text', 'Value' => 'Text 8'),
    8 => array('Type' => 'text', 'Value' => 'Text 9'),
    9 => array('Type' => 'button', 'Value' => 'Button'),
);

foreach ($tag as $key => $items) {
    echo '<input type="' . $items['Type'] . '" value="' . $items['Value'] . '"style="display:block">';
}
?>

<p><b>4. Создать массив фигур (название фигуры, координаты, цвет), на основе массива построить страницу и на ней
    нарисовать фигуры с заданным цветом и в указанном месте.</b></p>

<style>
    .figure {
        position: absolute;
        width: 50px;
        height: 50px;
    }
</style>

<?php
$figures = array(
    'circle'      => array('style' => 'border-radius: 50%', 'X' => rand(10, 550), 'Y' => rand(10, 170), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'square'      => array('style' => 'height: 50px', 'X' => rand(10, 550), 'Y' => rand(10, 170), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'squareRound' => array('style' => 'border-radius: 10%', 'X' => rand(10, 550), 'Y' => rand(10, 170), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)))
);

echo '<div style="width:600px; height:200px; position:relative; padding:15px">';
foreach ($figures as $key => $items) {
    echo '<div class="figure" style="' . $items['style'] . '; top:' . $items['Y'] . 'px; left:' . $items['X'] . 'px; background-color:' . $items['color'] . ';"></div>';
}
echo '</div>';
?>

<p><b>5. Создать массивы: процессор, материнская плата, оперативная память, жесткий диск, блок питания. Описание элемента массива:<br>
   a) Процессор:<br>
       — название;<br>
       — сокет;<br>
       — частота;<br>
       — количество ядер.<br>
   b) Материнская плата:<br>
       — название;<br>
       — сокет;<br>
       — тип памяти.<br>
   c) Оперативная память:<br>
       — название;<br>
       — тип памяти;<br>
       — объем памяти.<br>
   d)Жесткий диск:<br>
       — название;<br>
       — тип диска;<br>
       — объем.<br>
   e) Блок питания:<br>
       — название;<br>
       — мощность.<br>
Разработать скрипт, который будет возвращать возможные комбинации ПК.</b></p>
<?php
$computer = array(
    'CPU' => array(
        1 => array('Title' => 'AMD Ryzen 7 1700X', 'Socket' => 'AM4', 'Frequency' => '3.4GHz', 'Cores' => '8'),
        2 => array('Title' => 'Intel Core i7-8700', 'Socket' => 'Socket 1151', 'Frequency' => '3.2GHz', 'Cores' => '8'),
    ),
    'MB'  => array(
        1 => array('Title' => 'MSI B450 TOMAHAWK', 'Socket' => 'AM4', 'RAM Type' => 'DDR4'),
        2 => array('Title' => 'ASRock J3455M', 'Socket' => 'Integrated CPU', 'RAM Type' => 'DDR3'),
    ),
    'RAM' => array(
        1 => array('Title' => 'Corsair DDR4 3000Mhz', 'RAM Type' => 'DDR4', 'Memory' => '8GB'),
    ),
    'HDD' => array(
        1 => array('Title' => 'Kingston SSDNow A400 TLC', 'Type' => 'SSD', 'Memory' => '240GB'),
    ),
    'PS'  => array(
        1 => array('Title' => 'CHIEFTEC Power Smart', 'Power' => '1450W'),
    )
);

$result = [];
foreach ($computer as $key => $details) {
    echo '<div style="float:left; padding:5px; background-color:' . sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)) . ';">';

    foreach ($details as $number => $items) {
        echo '<div style="float:left; padding:5px; height:120px;">';
        foreach ($items as $position => $value) {

            if ($position === 'Title') {
                echo '<h4>' . $value . '</h4>';
            } elseif ($position === 'Frequency') {
                echo '<p>' . $position . ': ' . $value . ', ';
            } elseif ($position === 'Cores') {
                echo $position . ': ' . $value . '</p>';
            } else {
                echo '<p>' . $position . ': ' . $value . '</p>';
            }
        }
        echo '</div>';
    }
    echo '</div>';
}
echo '<div style="clear:both;"></div>';

for ($i = 1; $i <= count($computer['CPU']); $i++) {
    for ($j = 1; $j <= count($computer['MB']); $j++) {
        if (($computer['CPU'][$i]['Socket'] === $computer['MB'][$j]['Socket']) && ($computer['MB'][$j]['RAM Type'] === $computer['RAM'][1]['RAM Type'])) {
            $result['CPU'] = $computer['CPU'][$i];
            $result['MB'] = $computer['MB'][$j];
            $result['RAM'] = $computer['RAM'][1];
            $result['HDD'] = $computer['HDD'][1];
            $result['PS'] = $computer['PS'][1];
        }
    }
}
echo '<div style="float:left; padding:10px;">';
echo '<em> Result: </em><br>';
foreach ($result as $key => $details) {
    if ($key === 'CPU') {
        echo '<em>' . $key . ': ' . $details['Title'] . '</em><br>';
    } else {
        echo '<em>' . $key . ': ' . $details['Title'] . '</em><br>';
    }
}
echo '</div>';
echo '<div style="clear:both;"></div>';
?>

<p><b>6. Есть массив из 3-х элементов (Header, Content, Footer), который состоит из высоты, цвета фона,
     цвет текста. Создайте страницу на основе этого массива.</b></p>
<?php
$x = array(
    'Header'  => array('height' => rand(30, 200), 'background-color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'Content' => array('height' => rand(30, 200), 'background-color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255))),
    'Footer'  => array('height' => rand(30, 200), 'background-color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)), 'color' => sprintf('#%02x%02x%02x', rand(0, 255), rand(0, 255), rand(0, 255)))
);

echo '<br>';
foreach ($x as $key => $items) {
    echo '<div style=" width:500px; height:' . $items['height'] . 'px ; background-color:' . $items['background-color'] . '; color:' . $items['color'] . ';">' . $key . '</div>';
}

?>