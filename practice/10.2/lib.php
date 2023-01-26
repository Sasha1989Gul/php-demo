<?php
    // 1. Сделать класс Product с такими полями: name, price,
    // description, brand.
    abstract class Product {
        public function __construct(
            public $name, public $description, public $brand
        ) { }

        // 4. В классе Product описать метод getProduct().
        abstract function getProduct();
    }

    // 2. Сделать класс Phone производным от класса Product
    // с полями cpu, ram, countSim, hdd, os.
    class Phone extends Product {
        function __construct(
            public $name, public $description, public $brand, 
            public $cpu, public $ram, public $countSim, 
            public $hdd, public $os
        ) { 
            parent::__construct($name, $description, $brand);
        }

        // 5. В классах Phone и Monitor реализовать метод getProduct(),
        // который не принимает параметров и возвращает строку
        // с полей класса и конструкторы которой создают про-
        // дукт. Параметры конструктора в классе Phone: name,
        // description, brand, cpu, ram, countSim, hdd, os. Параме-
        // тры конструктора в классе Monitor: name, description,
        // brand, model, diagonal, frequency, ports.
        function getProduct() {
            return "{$this->name}, {$this->description}, {$this->brand}, 
                {$this->cpu}, {$this->ram}, {$this->countSim}, 
                {$this->hdd}, {$this->os}.";
        }
    }

    //  3. Сделать класс Monitor производным от класса Product
    // с полями diagonal, frequency, ports.
    class Monitor extends Product {
        function __construct(
            public $name, public $description, public $brand,
            public $model, public $diagonal, public $frequency, public $ports
        ) {
            parent::__construct($name, $description, $brand);
        }

        function getProduct() {
            return "{$this->name}, {$this->description}, {$this->brand}, 
                {$this->diagonal}, {$this->frequency}, {$this->ports}";
        }
    }
?>

<?php
    // 1. Разработать абстрактный класс Cart, в нем объявить
    // методы GetCart() и AddToCart().
    interface Cart {
        public function GetCart();
        public function AddToCart(Product $product);
    }

    // 2. Создать класс Session, который связан с классом Cart.
    // Определить отношения между двумя классами. В классе
    // Session создать поля: productList — массив объектов
    // класса Product, sessionId — число, которое заполняется
    // случайным значением, и описать методы. Метод
    // GetCart(), который на входе не принимает параметров
    // и возвращает productList. Метод AddToCart() принимает
    // объект класса Product в качестве параметра и
    // добавляет его к productList.
    class Session implements Cart {
        public Array $productList = [];
        public $sessionId;
        public DateTime $sessionDateTime;

        function __construct() {
            session_start();
            $this->sessionId = session_id();
            $this->readCart();
        }

        private function readCart() {            
            $this->productList = unserialize(
                file_get_contents(
                    "./temp/{$this->sessionId}.tmp",
                )
            );  
        }

        private function writeCart() {
            file_put_contents(
                "./temp/{$this->sessionId}.tmp",
                serialize($this->productList),
            );
        }

        function GetCart() {
            return $this->productList;
        }

        function AddToCart(Product $product) {
            $this->productList[] = $product;
            $this->writeCart();
        }
    }
?>