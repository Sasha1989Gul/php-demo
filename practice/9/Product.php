<?php 

class Product {
    public $name;
    public $price;

    // 1. Создать класс Product с полями name, price, добавить к
    // классу конструктор, который принимает 2 параметра
    // (_name, _price) и заполняет соответствующие поля.

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // 2. Создать метод getProduct(), который возвращает строку
    // вида (Name{name}; price{price})

    function getProduct() {
        return "Name {$this->name}; price {$this->price}";
    }
}

?>