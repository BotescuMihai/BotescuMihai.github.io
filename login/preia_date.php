<?php

$x=mysql_connect("localhost", "MBotescu", "alexmihaigaming");
 if(!$x)
 die ('Nu s-a realizat conectarea'.mysql_error());
 $y=mysql_select_db("MBotescu", $x);
$a=$_POST['ID'];
$b=$_POST['Parola'];

if(strlen($a)!=0 and strlen($b)!=0)
 {
 $t=mysql_query( "INSERT INTO CONTURI_REVISTA(ID, Parola) VALUES ('". mysql_real_escape_string( $a ) ."', '". mysql_real_escape_string( $b ) ."' )");
 if(!$t)
      die('Inserarea nu a putut fi realizata!'.mysql_error());
   else
      echo 'Contul dvs. a fost creat si retinut cu succes De acum va puteti autentifica cu id-ul si parola trimise.';
}
else
echo'Introduceti date in formular si apoi vizualizati datele!';
$datedintabel=mysql_query("SELECT * FROM 11CREDIT2",$x);
if(!$datedintabel)
 {die ('Nu s-au preluat date!'.mysql_error());exit;}

//afisam datel sub forma unui tabel
/*
echo "<TABLE BORDER=6>";
//afisam capul de tabel
echo "<TR><TD align='center'><strong>Autor</td><td align='center'><strong>Titlu</td><td align='center'><strong>Editura</td><td align='center'><strong>Cota</td>";
//pentru fiecare rand al tabelului
 while($rand=mysql_fetch_array($datedintabel))
     { echo "<TR>";
        echo "<TD align='center'>".$rand["autor"]."<TD align='center'>".$rand["titlu"]."<TD align='center'>".$rand["editura"]."<TD align='center'>".$rand["cota"];

	echo"</TR>";

     }
echo "</TABLE>";*/
	  
 mysql_close($x);
?>