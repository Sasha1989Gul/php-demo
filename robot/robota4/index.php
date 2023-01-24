<?php 
  include "classExample.php";

  $classInstance = new classExample('secret');
  $classInstance2 = new classExample2('secret2');

  print_r($classInstance2);
  echo $classInstance2::toString() . "<br>";
  echo $classInstance2->testAccess() . "<br>";

  echo classExample::toString() . "<br>";
  echo classExample::$staticVar . "<br>";

?>