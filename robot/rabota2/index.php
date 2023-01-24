<?php 
    function inc(&$arr) {
        foreach($arr as &$el) {
            $el++;
        }
    }

    $inc= 'inc';    

    $arr = [1,2,3];
    print_r($arr);

    $inc($arr);
    print_r($arr);
?>

<hr/>

<?php
    $arr = [1,2,3];
    print_r($arr);

    $arr = array_map( function ($el) { return ++$el; }, $arr);

    print_r($arr);
?>

<hr/>

<?php
    $arr = [1,2,3];
    $arr = array_map( fn($el) => ++$el, $arr);
     print_r($arr);
?>