<?php
  foreach (range(1,100) as $n) {	
    echo $n . ' ' . ( !($n%3)  ? 'CUBE' : '' ) . ( !($n%5) ? 'Systems' : '' ) . '<br>';
  }
?>
