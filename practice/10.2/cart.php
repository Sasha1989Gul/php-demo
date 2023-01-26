<?php
    include "lib.php";
    // 5. Создать файл cart.php, в котором будут выводиться
    // продукты, добавленные в productList массива класса
    // Session

    $session = new Session();
    $products = $session->GetCart();

    foreach($products as $index => $product) {
        echo "<p>";

        echo $product->getProduct();

        echo "</p>";
    }
?>