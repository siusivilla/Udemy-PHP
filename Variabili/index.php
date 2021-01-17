<?php include_once('../menu.php'); include_once('sottomenu.php'); ?>

<?php
  /**
   * Le variabili in php cominciano con dollaro ($) 
   * seguito da una lettera o underscore (_) 
   * poi seguito da lettere, numeri ed underscore
   */

  /* $_='test';

  echo $_;
  echo '<h1>'.$_.'</h1>';
  echo '<h1>$_</h1>'; */
  
  $name='test';
  $name2='Test2';
  $last_name = 'Villa';
  $lastName = 'Susanna Villa';
  $lastname = 'Impiduglia';

  echo '<h1>'.$name.'</h1>';
  echo "<h1>$name</h1>"; // con doppi apici non serve concatenare
  echo "<h1>$name2</h1>";
  echo "<h1>$last_name</h1>";
  echo "<h1>$lastName</h1>"; // variabili sono case-sensitive;
  echo "<h1>$lastname</h1>"; // variabili sono case-sensitive;

?>