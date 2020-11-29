<?php
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $name = 'sikepegawaian';  
 
  $koneksi=mysql_connect($host, $user, $password)or die ("koneksigagal");
  mysql_select_db($name, $koneksi) or die ( "tidak ada");
  ?>
  