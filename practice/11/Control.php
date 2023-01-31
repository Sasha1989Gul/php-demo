<?php
    // 1. Разработать класс Control , который описывает ба-
    // зовые атрибуты стиля любого html-элемента и будет
    // базой для каждого следующего класса, в котором
    // создать private-поля background, width, height, создать
    // методы getBackground(), setBackground(), getWidth(),
    // setWidth(), getHeight(), setHeight(). Методы, которые
    // начинаются с get, должны возвращать соответству-
    // ющее им поле и не принимать параметров, методы
    // set принимают параметр и записывают его в соот-
    // ветствующее поле.

    // class Control {
    //     private $background;
    //     private $width;
    //     private $height;

    //     function getBackground() {
    //         return $this->background;
    //     }
    //     function setBackground($background) {
    //         $this->background = $background;
    //     }

    //     function getWidth() {
    //         return $this->width;
    //     }
    //     function setWidth($width) {
    //         $this->width = $width;
    //     }
        
    //     function getHeight() {
    //         return $this->height;
    //     }
    //     function setHeight($height) {
    //         $this->height = $height;
    //     }
    // }

    // 2. Создать класс Input, который описывает базовые атри-
    // буты тега <input>, унаследовать класс Control. Доба-
    // вить к классу Input private-поля name, value и методы
    // getName(), setName(), getValue(), setValue(). Методы,
    // которые начинаются с get, должны возвращать со-
    // ответствующее им поле и не принимать параметров,
    // методы set принимают параметр и записывают его в
    // соответствующее поле.

    // class Input extends Control {
    //     private $name;
    //     private $value;

    //     function getName() {
    //         return $this->name;
    //     }
    //     function setName($name) {
    //         $this->name = $name;
    //     }

    //     function getValue() {
    //         return $this->value;
    //     }
    //     function setValue($value) {
    //         $this->value = $value;
    //     }
    // }

    // 3. Создать класс Button , который будет строить на стра-
    // нице button, унаследовать класс Input. Добавить к классу
    // Button private-поле isSubmit, метод getSubmitState(),
    // который не принимает в качестве параметров ни-
    // чего и возвращает значение поля isSubmit, метод
    // setSubmitState(), записывающий в поле isSubmit зна-
    // чение"true", и конструктор, принимающий параметры
    // _background, _width, _height, _name, _value, _isSubmit
    // и вызывает соответствующие методы для заполнения
    // параметров поля.

    // class Button extends Input {
    //     private $isSubmit;

    //     function getSubmitState() {
    //         return $this->isSubmit;
    //     }
    //     function setSubmitState() {
    //         $this->isSubmit = true;
    //     }

    //     function __construct($background, $width, $height, $name, $value, $isSubmit) {
    //         $this->background = $background;
    //         $this->width = $width;
    //         $this->height = $height;
    //         $this->name = $name;
    //         $this->value = $value;
    //         $this->isSubmit = $isSubmit;
    //     }
    // }

    // 4. Создать класс Text , который будет строить на странице
    // textbox, унаследовать класс Input. Добавить к классу
    // Text private-поле placeholder, метод getPlaceholder(),
    // который не принимает в качестве параметров ни-
    // чего и возвращает значение поля placeholder, метод
    // setPlaceholder(), который принимает в качестве па-
    // раметра строку и записывает ее в поле placeholder, и
    // конструктор, принимающий в качестве параметров
    // _background, _width, _height, _name, _value, _placeholder
    // и вызывает соответствующие методы для заполнения
    // параметров поля
    // class Text extends Input {
    //     private $placeholder;

    //     function getPlaceholder() {
    //         return $this->placeholder;
    //     }
    //     function setPlaceholder($placeholder) {
    //         $this->placeholder = $placeholder;
    //     }

    //     function __construct($background, $width, $height, $name, $value, $placeholder) {
    //         $this->background = $background;
    //         $this->width = $width;
    //         $this->height = $height;
    //         $this->name = $name;
    //         $this->value = $value;
    //         $this->placeholder = $placeholder;
    //     }
    // }

    // 5. Создать класс Label , который будет добавлять label
    // ко всем элементам управления, унаследовать класс
    // Control. Добавить к классу Label private-поле for, метод
    // getParentName(), который не принимает в качестве
    // параметров ничего и возвращает значение поля for,
    // setParentName(), который принимает в качестве па-
    // раметров объект класса Button или Text, вызывает из
    // этого объекта метод getName() и записывает в поле
    // for результат его выполнения, и конструктор, прини-
    // мающий в качестве параметров _background, _width,
    // _height, _name, _value, _forObject и вызывает соответ-
    // ствующие методы для заполнения параметров поля
    // class Label extends Control {
    //     private $for;

    //     function getParentName() {
    //         return $this->for;
    //     }
    //     function setParentName(Button|Text $sibling) {
    //         $this->for = $sibling->getName();
    //     }

    //     function __construct($background, $width, $height, $forObject) {
    //         $this->background = $background;
    //         $this->width = $width;
    //         $this->height = $height;
    //         $this->forObject = $forObject;
    //     }
    // }
         
    class Control {
        function __construct(private $background, private $width, private $height) {}

        function getBackground() {
            return $this->background;
        }
        function setBackground($background) {
            $this->background = $background;
        }

        function getWidth() {
            return $this->width;
        }
        function setWidth($width) {
            $this->width = $width;
        }
        
        function getHeight() {
            return $this->height;
        }
        function setHeight($height) {
            $this->height = $height;
        }

        function getAttrubutes() {
            $attributes = 'style="
                width: '. $this->getWidth() .'px; 
                height: '. $this->getHeight() .'px;
                background-color: '. $this->getBackground() .'
            "';

            return $attributes;
        }

        function convertToHTML(): string {
            $tag = strtolower($this::class);
            $attributes = $this->getAttrubutes();
            return "<{$tag} {$attributes}>Button1</{$tag}>";
        }
    }

    class Input extends Control {
        function __construct($background, $width, $height, private $name, private $value) {
            parent::__construct($background, $width, $height);
        }        

        function getName() {
            return $this->name;
        }
        function setName($name) {
            $this->name = $name;
        }

        function getValue() {
            return $this->value;
        }
        function setValue($value) {
            $this->value = $value;
        }

        function getAttrubutes() {
            $attributes = '';
            $attributes .= 'name="'. $this->getName() .'"';
            $attributes .= 'value="'. $this->getValue() .'"';      
            return parent::getAttrubutes() . $attributes;
        }
    }

    class Button extends Input {
        function __construct($background, $width, $height, $name, $value, private $isSubmit) {
            parent::__construct($background, $width, $height, $name, $value);
        }

        function getSubmitState() {
            return $this->isSubmit;
        }
        function setSubmitState() {
            $this->isSubmit = true;
        }

        function getAttrubutes() {
            $attributes = $this->isSubmit ? 'type="submit"' : '';
            return parent::getAttrubutes() . $attributes;
        }
    }

    class Text extends Input {
        function __construct($background, $width, $height, $name, $value, private $placeholder) {
            parent::__construct($background, $width, $height, $name, $value);
        }

        function getPlaceholder() {
            return $this->placeholder;
        }
        function setPlaceholder($placeholder) {
            $this->placeholder = $placeholder;
        }
    }

    class Label extends Control {
        private $for;

        function __construct($background, $width, $height, $forObject) {
            parent::__construct($background, $width, $height);
            $this->setParentName($forObject);
        } 

        function getParentName() {
            return $this->for;
        }
        function setParentName(Button|Text $sibling) {
            $this->for = $sibling->getName();
        }

        function getAttrubutes() {
            $attributes = 'for="'.$this->for.'"';   
            return parent::getAttrubutes() . $attributes;
        }
    }
?>