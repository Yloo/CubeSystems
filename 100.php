<?php
/*
  It is safe to use % operator while dealing with integers in range 1-100.
  I would offer another solution for negative and large numbers.
  There is a short code below but it could be written more 'readable' if needed.
*/
  foreach (range(1,100) as $n) {	
    echo $n . ' ' . ( !($n%3)  ? 'CUBE' : '' ) . ( !($n%5) ? 'Systems' : '' ) . '<br>';
  }
?>
