<?php
//вывод ошибок на страницу
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);

  //подключение файлов
  var_dump(include "./lib1.php");
  var_dump(include "./lib2.php");

//   phpinfo();




?>