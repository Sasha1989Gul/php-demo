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