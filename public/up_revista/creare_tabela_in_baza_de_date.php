<?php
#include 'conectare_baza_de_date.php';

$x=mysql_connect("localhost", "MBotescu", "alexmihaigaming");
 if(!$x)
 die ('Nu s-a realizat conectarea'.mysql_error());
 $y=mysql_select_db("MBotescu", $x);
 if(!$y)
 die('Baza de date nu poate fi accesata'. mysql_error());
 

 $interogare="CREATE TABLE NEMULTUMIRI(Nume varchar(50),Prenume varchar(50),Text varchar(10000)";
 $z=mysql_query($interogare);
if(!$z)
   die ('Nu  s-a realizat crearea tabelei cerute'.mysql_error());
if($z)
   die ('S-a realizat crearea tabelei cerute'.mysql_error());

 mysql_close($x);
?>
