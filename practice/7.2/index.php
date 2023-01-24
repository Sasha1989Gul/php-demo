<?php
//1. Разработать функцию, которая на входе принимает число и степень округления, а на выходе возвращает
// округленное число до степени.
function roundNum(float $num, int $perc): float {
    return round($num, $perc);
}

$num = pi();
$rounded = roundNum($num, 3);
?>

<div>
    <p><?= "$num rounded to 3 = $rounded"?></p>
</div>

<?php
echo "<br>";

//2. Разработать функцию, которая на входе принимает дату и число дней, а на выходе возвращает дату, которая
// наступит через указанное количество дней.
function reverse(int $timestamp, int $days): int {
    return $timestamp + $days * 24 * 60 * 60;
}

$timestamp = time();
$days = 320;
?>

<div>
<p>
    <?= date('m/d/Y', $timestamp) .
        "+${days}d=". 
        date('m/d/Y', reverse($timestamp, $days))
    ?>
</p>
</div>

<?php
echo "<br>";
//3. Разработать функцию, которая на входе принимает текст и слово и проверяет, есть ли такое слово в тексте.
// Если есть, посчитать сколько раз оно встречается в тексте. Функция возвращает количество повторов или 0,
// если не нашла данного слова в тексте.
function counter(string $text, string $word): int {
    return substr_count($text, $word);
}

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus finibus risus iaculis consequat. Nullam dictum rutrum sapien eget lobortis. Integer eget ultricies nunc. Suspendisse vel tortor quis mauris suscipit auctor. Aliquam non ultricies odio. Aliquam eget arcu dui. Etiam purus arcu, consequat ultricies libero sed, aliquam bibendum nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ut tristique ipsum. Donec sed libero quis arcu porttitor eleifend. Etiam gravida rutrum est ut rutrum.";
$word = "el";
?>

<div>
<p><?= str_replace($word, '<span style="color: red;">'.$word.'</span>', $text)?></p>
<p>Word to Find: <?= $word?></p>
<p>Result: <?= counter($text, $word) ?></p>
</div>

<?php
echo "<br>";
//4. Разработать функцию, которая на входе принимает массив, а возвращает среднее значение элементов массива.
$arr = [5,5,17];
function summ(&$arr){
    $arr_sum = 0;
    for ($i=0; $i <count($arr) ; $i++) {
        $arr_sum += $arr[$i];
    }
    echo 'Среднее значение равно ' . $arr_sum / count($arr);
}
echo summ($arr).'<br>';

echo "<br>";
//5. Разработать функцию, которая на входе принимает массив, а на выходе возвращает два массива. В один массив
// записываются только четные элементы из входного массива, во второй — нечетные.
$arr = [3,6,9,13,25,76,3,4,11];
?>



#include <iostream>
using namespace std;
 
int main()
{
    int N = 10;
    int nums[N] = {6,124,-1,345,34,25,346,93,-2435,2};
    int odd[N/2];
    int even[N-N/2];
    for (int i = 0; i < N; i++)
    {
        if ((i+1)%2)
        {
            odd[i/2] = nums[i];
        }
        else
        {
            even[i/2] = nums[i];
        }
    }
    for (int i = 0; i < N/2; i++)
    {
        cout << odd[i] << ' ';
    }
    cout << endl;
    for (int i = 0; i < N/2; i++)
    {
        cout << even[i] << ' ';
    }
}