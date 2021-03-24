<?php
#include 'conectare_baza_de_date.php';

$x=mysql_connect("localhost", "MBotescu", "alexmihaigaming");
 if(!$x)
 die ('Nu s-a realizat conectarea'.mysql_error());
 $y=mysql_select_db("MBotescu", $x);
 if(!$y)
 die('Baza de date nu poate fi accesata'. mysql_error());
 

 $interogare="CREATE TABLE permise(nume varchar(50),prenume varchar(50),CNP varchar(50), categoria varchar(5), punctaj int(12), nume_examinator varchar(50)";
 $z=mysql_query($interogare);
if(!$z)
   die ('Nu  s-a realizat crearea tabelei cerute'.mysql_error());
if($z)
   die ('S-a realizat crearea tabelei cerute'.mysql_error());

 mysql_close($x);
?>
