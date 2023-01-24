<?php
//1. Разработать функцию, которая на входе принимает контент из textarea и символ и возвращает количество
// повторов этого символа в контенте textarea. 
?>
<form>
    <input type="text" name="symbol" 
        value="<?= $_REQUEST["symbol"]?>">
    <br/>
    <textarea name="text"><?= $_REQUEST["text"]?></textarea>
    <br/>
    <input type="submit" value="Submit" />
</form>

<?php
    function counter($text, $symbol) {
        return str_word_count($text, 0, $symbol);
    }

    if( isset($_REQUEST) && 
        isset($_REQUEST["symbol"]) && !empty($_REQUEST['symbol']) &&
        isset($_REQUEST["text"]) && !empty($_REQUEST['text'])
    ) {
        $count = counter($_REQUEST["text"], $_REQUEST["symbol"]);
        echo "Count symbol '".$_REQUEST["symbol"]."': $count";
    }

echo "<br>";
//2. Разработать функцию, которая на входе принимает ссылки на массив и заполняет его случайными числами
//от 10 до 100 функция возвращает true, если все сработало корректно или false, если где-то произошла ошибка.
function genArr (&$arr) {
    $arr = array_map(fn($el) => random_int(10, 100), $arr);
    return true;
 }

function printArr($arr) {
     array_walk($arr, function ($el, $i) {
         echo "$el, ";
         if(($i+1) % 5 === 0) echo "<br/>";
     });
 }

 $arr = range(1, 25);
 genArr($arr);
 printArr($arr);

echo "<br>";
//3. Разработать функцию сортировки массива (на входе принимает ссылки на массив и число 0, если сортировать по
// убыванию или 1, если сортировать по возрастанию) и возвращает "true" в случае успешного выполнения или
// "false" при ошибке.
function sortArr(&$arr, $dir = 0) {
    $func = $dir ? 'sort' : 'rsort';
    $func($arr);
    return true;
}

sortArr($arr, 1);
printArr($arr);

echo "<br>";
//4. Разработать функцию, которая на входе принимает массив, строит на его основе таблицу из тегов input и
// заполняет каждый input соответствующим значением из массива.


echo "<br>";
//5. Разработать функцию "кубики", которая на входе не принимает никаких параметров. Ее задача сгенерировать 2
// случайных числа от 1 до 6 и вывести на страницу 2 изображения кубиков с соответствующим количеством точек на
// кубике. На странице сделать кнопку, по щелчку на которую выполняется функция.

var_dump(getRandomNumbers(1, 6, 2));

function getRandomNumbers($min, $max, $count)
{
    if ($count > (($max - $min)+1))
    {
        return false;
    }
    $values = range($min, $max);
    shuffle($values);
    return array_slice($values,0, $count);
}

?>