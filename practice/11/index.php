<?php
    include 'Control.php';
    // 6. В файле index.php создать функцию convertToHTML(),
    // которая на входе принимает объект класса Control и
    // превращает поля в HTML-код и возвращает его.
    
    // function convertToHTML(Control $element): string {
    //     var_dump(get_class($element));
    //     return "${get_class($element)}";
    // }

    // 7. Создать объект класса Button и Text. Добавить в объ-
    // ект класса Text объект класса Label и вызвать для всех
    // функцию convertToHTML().

    // $button = new Button("red", 200, 50, "submit", null, true);
    // var_dump(convertToHTML($button));
    $button = new Button("red", 200, 50, "submit", null, true);
    $label = new Label("green", 200, 50, $button);

    echo $label->convertToHTML();
    echo $button->convertToHTML();
?>