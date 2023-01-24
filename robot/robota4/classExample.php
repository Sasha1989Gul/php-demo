<?php

    class classExample {
        public $var = "default";
        protected $protected;
        private $privateVar;
        public static $staticVar = "default value";

        function __construct($value) {
            $this->privateVar = $value;
        }

        public function displayVar() {
            echo $this->var;
        }

        public static function toString() {
            return 'test';
        }
    }

    class classExample2 extends classExample {
        public $protected;
        public $privateVar;

        public function testAccess() {
            var_dump($this->$privateVar);
        }
    }

?>