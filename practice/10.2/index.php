<?php 
    include "lib.php";

    $products = [
        new Phone("name", "description", "brand", 
            "cpu", "ram", "countSim", "hdd", "os"),
        new Phone("name", "description", "brand", 
            "cpu", "ram", "countSim", "hdd", "os"),
        new Phone("name", "description", "brand", 
            "cpu", "ram", "countSim", "hdd", "os"),
        new Monitor("name", "description", "brand", 
            "model", "diagonal", "frequency", "ports"),
        new Monitor("name", "description", "brand", 
            "model", "diagonal", "frequency", "ports")
    ];
?>

<?php
    if(isset($_GET['index'])) {
        $session = new Session();
        $session->AddToCart($products[$_GET['index']]);
    }
?>

<?php
    foreach($products as $index => $product) {
        echo "<p>";

        echo $product->getProduct();

        echo 
            '<div>
                <a href="?index='.$index.'"><button>Add To Cart</button></href>
                <a href="./cart.php"><button>Go To Cart</button></a>
            </div>';

        echo "</p>";
    }

?>