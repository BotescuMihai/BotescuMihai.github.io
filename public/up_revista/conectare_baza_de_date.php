<?php
$x=mysql_connect("localhost", "MBotescu", "alexmihaigaming");
 if(!$x)
 die ('Nu s-a realizat conectarea'.mysql_error());
 $y=mysql_select_db("MBotescu", $x);
 if(!$y)
 die('Baza de date nu poate fi accesata'. mysql_error());
 if($y)
 die('Baza de date  poate fi accesata'. mysql_error());

 mysql_close($x);
?>
