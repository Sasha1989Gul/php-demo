<?php

    include "./Product.php";

    // $product = new Product('Product Name', .99);
    // echo $product->getProduct();
?>

<form method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="price">Price: </label>
        <input type="number" name="price" />
    </div>
    <div>
        <input type="submit" value="Add" />
    </div>
</form>

<?php

    // 3. В файле index.php создать массив объектов класса
    // Product и форму, которая состоит из двух текстовых
    // полей и кнопки Add. По клику на кнопку Add в массив
    // добавляется новый объект со значениями, которые
    // написаны в форме.
    $products = [];

    $products[] = new Product("Iphone", 500);
    $products[] = new Product("Galaxy S10", 300);
    $products[] = new Product("MacBook", 1000);

    if(isset($_POST) && isset($_POST["name"]) && isset($_POST["price"])) {
        $products[] = new Product($_POST["name"], $_POST["price"]);
    } 

    // 4. Вывести массив продуктов на страницу, используя
    // метод getProduct().

    foreach($products as $product) {
        echo $product->getProduct();
        echo "<br/>";
    }

    // 5. Создать метод searchByName(), который принимает 2
    // параметра (массив объектов класса Product и назва-
    // ние продукта), ищет по названию продукт в массиве
    // и возвращает его.

    function searchByName($products, $name) {
        return array_filter($products, fn($product) => 
            $product->name === $name);
    }
?>

<hr/>
<form method="POST">
    <div>
        <label for="name">Seacrh: </label>
        <input type="text" name="search" />
    </div>
    <div>
        <input type="submit" value="Find" />
    </div>
</form>

<?php
    // 6. Создать форму для поиска, которая состоит из тек-
    // стового поля и кнопки. По клике на кнопку вызывать
    // метод searchByName() и вывести найденный продукт
    // на страницу.

    if(isset($_POST) && isset($_POST["search"])) {
        $items = searchByName($products, $_POST["search"]);

        foreach($items as $product) {
            echo $product->getProduct();
            echo "<br/>";
        }   
    }

?>