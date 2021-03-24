<?php

$x=mysql_connect("localhost", "MBotescu", "alexmihaigaming");
 if(!$x)
 die ('Nu s-a realizat conectarea'.mysql_error());
 $y=mysql_select_db("MBotescu", $x);
$a=$_POST['nume'];
$b=$_POST['prenume'];
$c=$_POST['CNP'];
$d=$_POST['categoria'];
$e=$_POST['punctaj'];
$f=$_POST['nume_examinator'];
$g=$_POST['data'];
$h=$_POST['ora_min_examinare'];

if(strlen($a)!=0 and strlen($b)!=0 and strlen($c)!=0 and strlen($d)!=0 and strlen($e)!=0 and strlen($f) !=0 and strlen($g) !=0 and strlen($h) !=0)
 {
 $t=mysql_query( "INSERT INTO permise(nume, prenume, CNP, categoria,  punctaj, nume_examinator, data, ora_min_examinare) VALUES ('". mysql_real_escape_string( $a ) ."', '". mysql_real_escape_string( $b ) ."','". mysql_real_escape_string( $c ) ."', '". mysql_real_escape_string( $d ) ."', '". mysql_real_escape_string( $e ) ."' , '". mysql_real_escape_string( $f ) ."', '". mysql_real_escape_string( $g ) ."', '". mysql_real_escape_string( $h ) ."' )");
 if(!$t)
      die('Inserarea nu a putut fi realizata!'.mysql_error());
   else
      echo 'Inserarea a fost realizata.';
}
else
echo'Introduceti date in formular si apoi vizualizati datele!';
$datedintabel=mysql_query("SELECT * FROM permise",$x);
if(!$datedintabel)
 {die ('Nu s-au preluat date!'.mysql_error());exit;}

//afisam datel sub forma unui tabel

echo "<TABLE BORDER=6>";
//afisam capul de tabel
echo "<TR><TD align='center'><strong>Numele candidatului</td><td align='center'><strong>Prenumele candidatului</td><td align='center'><strong>CNP</td><td align='center'><strong>Categoria</td><td align='center'><strong>Punctajul acumulat</td><td align='center'><strong>Numele si prenumele examinatorului in clar</td><td align='center'><strong>Data examinarii</td><td align='center'><strong>Ora si minutul inceperii examinarii</td></tr>";
//pentru fiecare rand al tabelului
 while($rand=mysql_fetch_array($datedintabel))
     { echo "<TR>";
        echo "<TD align='center'>".$rand["nume"]."<TD align='center'>".$rand["prenume"]."<TD align='center'>".$rand["CNP"]."<TD align='center'>".$rand["categoria"]<TD align='center'>".$rand["punctaj"]<TD align='center'>".$rand["nume_examinator"]<TD align='center'>".$rand["data"]<TD align='center'>".$rand["ora_min_examinare"];
	if(permise.punctaj<=20) echo "<TD align='center'><"ADMIS"></td>
	else echo "<TD align='center'><"RESPINS"></td>
	echo"</TR>";

	
     }
echo "</TABLE>";

 mysql_close($x);
?>