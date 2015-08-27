<?php
$hostname='localhost';
$username='root';
$password='';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=android_api",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database<br/>';

    $sql = "SELECT * FROM fabrikadb";
foreach ($dbh->query($sql) as $row)
    {
       }


    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	
?> 

<html>
     <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	     <title>Tablo �rnek</Title>
     </head>  
  <body>
  
      <table border="20" width="80%" cellpadding="0" cellspacing="0" bgcolor="cccc33" align="center">
          <caption align="center"><strong>Fabrikam�z�n Makina �statistikleri</strong></caption>
          <tr  height="70px">
              <th rowspan="1" colspan="2"  align="center">Makin �al�sma S�resi</th>
              <th rowspan="1" colspan="2"  align="center">�r�n Adedi</th>
			  <th rowspan="1" colspan="2"  align="center">�r�n Kodu</th>
			  <th rowspan="1" colspan="2"  align="center">Ortalama H�z</th>
			  <th rowspan="1" colspan="2"  align="center">Makinan�n Durma Sebebi</th>
			  <th rowspan="1" colspan="2"  align="center">Duru� Saati</th>
			  <th rowspan="1" colspan="2"  align="center">G�n�elleme Zaman�</th>
			  <th rowspan="1" colspan="2"  align="center">Tarih</th>
          </tr>
		  <tr  height="50px" >
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["makina_calisma_sure"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["urun_adedi"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["urun_kodu"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["ortalama_hiz"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["description_durus_nedeni"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["durus_saati"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"><?php echo $row["guncelleme_zamani"]; ?>	</td>
		  <td align="center" colspan="2"  bgcolor="gold"> <?php  echo $row["tarih_zaman"]; ?> </td>
		  
		  
		  </tr>
			
         
     </table>
	
</html>
