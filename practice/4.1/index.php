<style>
    b {
        color: red;
    }
</style>

<p><b>1. Создать массив из 10 элементов (чисел). Вывести:<br>
    a) четные элементы;<br>
    b) максимальный и минимальный элемент;<br>
    c) отсортировать массив по возрастанию.</b></p>
<?php 
$arr1 = [];
for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = rand(1, 20);
}
echo '<h2> Input array: ' . implode(', ', $arr1) . '</h2>';

$arrEven = [];
$max = $arr1[0];
$min = $arr1[0];
foreach ($arr1 as $i => $value) {
    if ($value % 2 == 0) {
        $arrEven[] = $value;
    }
    if ($value > $max) {
        $max = $value;
    }
    if ($value < $min) {
        $min = $value;
    }
}
echo '<h2> Even: ' . implode(',', $arrEven) . '</h2>';

echo '<h2>MAX: ' . $max . ', MIN: ' . $min . '</h2>';

sort($arr1);
echo '<h2> Sorted array: ' . implode(', ', $arr1) . '</h2>';
?>
<p><b>2. Создать 2 массива с числами по 10 элементов. Создать скрипт, который объединит уникальные значения из двух
массивов в один.</b></p> 
<?php
$array1 = [];
$array2 = [];
$resultArray = [];

for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(1, 33);
    $array2[$i] = rand(1, 33);
}
echo '<h2> Input 1 array: ' . implode(', ', $array1) . '</h2>';
echo '<h2> Input 2 array: ' . implode(', ', $array2) . '</h2>';

$newArray = array_merge($array1, $array2);

for ($i = 0; $i < count($newArray); $i++) {
    $counter = 0;
    for ($y = $i + 1; $y < count($newArray); $y++) {
        if ($newArray[$i] == $newArray[$y]) {
            $counter += 1;
        }
    }
    if ($counter == 0) {
        $resultArray[] = $newArray[$i];
    }
}
echo '<h2> Output array: ' . implode(', ', $resultArray) . '</h2>';
?>
<p><b>3. Создать массив из 10 элементов. Посчитать количество повторов каждого числа в массиве (цвет цифр, в
     которых нет повторов — красный, цвет тех чисел, в которых есть повторы — синий). Размер текста — 20рх.
      Число в каждой строке выделять жирным.</b></p>
<style>
    .blue {
        color: blue;
        font-size: 20px;
    }

    .red {
        color: red;
        font-size: 20px;
    }
</style>
<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 9);
}
echo '<h2> Input array: ' . implode(', ', $arr) . '</h2>';

$result = array_count_values($arr);
arsort($result);
foreach ($result as $key => $value) {
    if ($value > 1) {
        echo '<p class="blue"><strong>' . $key . '</strong> - ' . $value . '</p>';
    } else {
        echo '<p class="red"><strong>' . $key . '</strong> - ' . $value . '</p>';
    }
}
?>
<p><b>4. Создать массив фруктов (состоит из названия, типа, цены и количества). Проделать с массивом такие
     действия:<br>
    d) вывести только цитрусовые;<br>
    e) посчитать и вывести цену фруктов;<br>
    f) посчитать общую цену всех фруктов.</b></p>
<?php
$fruits = array(
    "Orange" => array('Type' => 'Citrus', 'Price' => rand(1, 50), 'Amount' => rand(1, 9),),
    "Banana" => array('Type' => 'Fruit', 'Price' => rand(1, 50), 'Amount' => rand(1, 9)),
    "Lemon"  => array('Type' => 'Citrus', 'Price' => rand(1, 50), 'Amount' => rand(1, 9)),
    "Apple"  => array('Type' => 'Fruit', 'Price' => rand(1, 50), 'Amount' => rand(1, 9)),
    "Kiwi"   => array('Type' => 'Fruit', 'Price' => rand(1, 50), 'Amount' => rand(1, 9))
);
echo '<h1 style="margin:2px;"> All </h1>';
$total = 0;
foreach ($fruits as $name => $items) {
    echo '<div style="float:left; padding:10px; background-color:green;"><h2>' . $name . '</h2>';
    $items['Total price'] = $items['Price'] * $items['Amount'];

    foreach ($items as $key => $value) {
        if ($key === 'Type') {
            echo '<h5>' . $key . ' : ' . $value . '; ';
        }
        if ($key === 'Price') {
            echo $key . ' : ' . $value . '</h5>';
        }
        if ($key === 'Amount') {
            echo '<h3>' . $key . ' : ' . $value . '</h3>';
        } else if ($key === 'Total price') {
            echo '<h6>' . $key . ' : ' . $value . '</h6>';
            $total += $value;
        }
    }
    echo '</div>';
}
echo '<div style="clear:both;"></div>';
echo '<h1 style="margin:2px;"> Citrus </h1>';

foreach ($fruits as $name => $items) {
    $items['Total price'] = $items['Price'] * $items['Amount'];
    if ($items['Type'] === 'Citrus') {
        echo '<div style="float:left; padding:10px; background-color:orange;"><h2>' . $name . '</h2>';
        foreach ($items as $key => $value) {
            if ($key === 'Type') {
                echo '<h5>' . $key . ' : ' . $value . '; ';
            }
            if ($key === 'Price') {
                echo $key . ' : ' . $value . '</h5>';
            }
            if ($key === 'Amount') {
                echo '<h3>' . $key . ' : ' . $value . '</h3>';
            } else if ($key === 'Total price') {
                echo '<h6>' . $key . ' : ' . $value . '</h6>';
            }
        }
        echo '</div>';
    }
}
echo '<div style="clear:both;"></div>';
echo '<h1 style="margin:2px;"> Total: ' . $total . '</h1>';
?>
<p><b>5. Создать массив со странами и вывести &lt;select&gt;-элемент, который будет включать в себя список стран.</b></p>
<?php
$data = file_get_contents("http://country.io/names.json");
$countries = json_decode($data, true);
sort($countries);

echo '<select name="country">';
foreach ($countries as $key => $country) {
    echo '<option value="' . $key . '">' . $country . '</option>';
}
echo '</select>';
?>
<p><b>6. Создать массив, который будет содержать название изображения, ссылки и альтернативный текст на 
    следующие ресурсы: Youtube, Facebook, Google, Gmail и разработать &lt;div&gt;, который будет показывать 
        изображение и по клику на изображение будет перенаправлять на соответствующий сайт.</b></p>
<style>
    img{
        width: 50px;
    }
</style>
<?php
$x = array(
    "Youtube"  => array('name' => 'youtube', 'a' => 'https://www.youtube.com', 'img' => 'youtube.png',),
    "Facebook" => array('name' => 'facebook', 'a' => 'https://www.facebook.com', 'img' => 'facebook.png'),
    "Google"   => array('name' => 'google', 'a' => 'https://www.google.com', 'img' => 'google.png'),
    "Gmail"    => array('name' => 'gmail', 'a' => 'https://www.gmail.com', 'img' => 'gmail.png')
);
foreach ($x as $name => $items) {
    echo '<div style="float: left;"><a href="' . $items['a'] . '"><img src="img/' . $items['img'] . '" alt=""></a>';
}
?>