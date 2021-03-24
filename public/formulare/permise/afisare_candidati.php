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
