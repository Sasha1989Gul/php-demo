<?php 
    function recursion($a)
    {
        if ($a < 20) {
            echo "$a\n";
            recursion($a + 1);
        }
    }

    recursion(-10);
?>

<br/>

<?php
    function functionExample(): void  {
        echo "functionExample Call";
    }

    functionExample();
?>

<br/>

<?php
    $argument = 2;
    $arg2 = 3;
    var_dump($argument);

    $funcWithArguments = function (int &$arg1) use(&$arg2) {
        var_dump($arg1);
        $arg1 = 1;
        var_dump($arg1);

        var_dump($arg2);
        $arg2 = 4;
        var_dump($arg2);
    };

    // $example = function ($arg) use ($message) {
    //     var_dump($arg . ' ' . $message);
    // };
    // $example("hello");

    $funcWithArguments($argument);
    var_dump($argument);
    var_dump($arg2);
?>

<br/>

<?php
    function funcWithReturn(): bool {
        return "string";
    }
    
    $var = funcWithReturn();
    var_dump($var);
?>

<br/>

<?php
    $var = 3;
    function funcOtherExample() {
        var_dump($var);
    }

    // var_dump(funcWithRetutn());
?>