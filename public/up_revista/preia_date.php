<?php

$x=mysql_connect("localhost", "MBotescu", "alexmihaigaming");
 if(!$x)
 die ('Nu s-a realizat conectarea'.mysql_error());
 $y=mysql_select_db("MBotescu", $x);
$a=$_POST['nume'];
$b=$_POST['prenume'];
$c=$_POST['media_bac'];
$d=$_POST['initiala'];
$e=$_POST['media_generala'];

if(strlen($a)!=0 and strlen($b)!=0 and strlen($c)!=0 and strlen($d)!=0 and strlen($e)!=0)
 {
 $t=mysql_query( "INSERT INTO clasa(nume, prenume, media_bac, initiala, media_generala) VALUES ('". mysql_real_escape_string( $a ) ."', '". mysql_real_escape_string( $b ) ."','". mysql_real_escape_string( $c ) ."', '". mysql_real_escape_string( $d ) ."', '". mysql_real_escape_string( $e ) ."' )");
 if(!$t)
      die('Inserarea nu a putut fi realizata!'.mysql_error());
   else
      echo 'Inserarea a fost realizata.';
}
else
echo'Introduceti date in formular si apoi vizualizati datele!';
	  
 mysql_close($x);
?>