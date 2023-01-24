<?php
    include("./math.php");

    $a = 4;
    $b = 7;
    $arr = [1,9,8,3,2];
?>

<div>
    <p>Sum: <?= $a ?> + <?= $b ?> = <?= sum($a, $b) ?> </p>
    <p>Sum: <?php print_r($arr) ?> = <?= sum(...$arr) ?> </p>

    <p>Sub: <?= $a ?> - <?= $b ?> = <?= sub($a, $b) ?> <p>

    <p>Mul: <?= $a ?> * <?= $b ?> = <?= mul($a, $b) ?> </p>
    <p>Mul: <?php print_r($arr) ?> = <?= mul(...$arr) ?> </p>

    <p>Div: <?= $a ?> / <?= $b ?> = <?= div($a, $b) ?> <p>
    <p>Div: <?= $a ?> / <?= 0 ?> = <?php var_dump(div($a, 0)) ?> <p>

    <p>Rand: from <?= $a ?> to <?= $b ?> = <?= rand($a, $b) ?> <p>
</div>