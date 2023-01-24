<?php
    include("./math.php");
    $a = "Some Text";
?>

<div>
<p>Find: <?='Text = "' . $a . '", Sumbol = "e" , Result = ' . find($a, 'e')?> </p>

<p>Replase: <?='Text = "' . $a . '", Sumbol1 = "e" , Sumbol2 = "o" Result = "' . str_replace('e', 'o', $a) . '" '?></p>

<p>Reflect: <?='Text = "' . $a . '", Result = ' . '"' . reflect($a) . '"'?> </p>

<p>Split:<?='Text = "' . $a . '", ' ?>  <?= 'Result = ' ?> <?= split($arr1)?> </p>

<p>Alphabet: <?='Text = "' . $a . '", Output = "' . alphabet($pattern, $a) . '"'?> </p>
</div>