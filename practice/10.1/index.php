<?php 
    include "lib.php";

    // 6. В файле index.php создать 3 объекта класса Phone
    // и 2 объекта класса Monitor. Добавить их к массиву
    // products.

    $products = [
        new Phone("<h3>Name: Iphone 7", "Description: Phone", "Brand: Apple", 
            "CPU: A9", "RAM: 1Gb", "Count SIM: 1", "HDD: 128Gb", "OS: IOS</h3>"),
        new Phone("<h3>Name: Galaxy S10", "Description: Phone", "Brand: Samsung", 
            "CPU: Snapdragon 860", "RAM: 3Gb", "Count SIM: 1", "HDD: 128Gb", "OS: Androi</h3>"),
        new Phone("<h3>Name: Lumia 720", "Description: Phone", "Brand: Nokia", 
            "CPU: Snapdragon 300", "RAM: 500Mb", "Count SIM: 1", "HDD: 32Gb", "OS: Windown Phone</h3>"),
        new Monitor("<h3>Name: S24E650", "Description: Monitor", "Brand: Samsung", 
            "model", "Diagonal: 21'", "Frequency: 60Hz", "Ports: VGA, HDMI, Display Port</h3>"),
        new Monitor("<h3>Name: Apple Cinema Display", "Description: Monitor", "Brand: Apple", 
            "model", "Diagonal: 24'", "Frequency: 144Hz", "Ports: HDMI, Display Port</h3>")
    ];

    // 7. Вывести массив продуктов на страницу, используя
    // метод getProduct().
    foreach($products as $product) {
        echo $product->getProduct();
        echo "</br>";
    }

?>