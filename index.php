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
	     <title>Tablo Örnek</Title>
     </head>  
  <body>
  
      <table border="20" width="80%" cellpadding="0" cellspacing="0" bgcolor="cccc33" align="center">
          <caption align="center"><strong>Fabrikamýzýn Makina Ýstatistikleri</strong></caption>
          <tr  height="70px">
              <th rowspan="1" colspan="2"  align="center">Makin Çalýsma Süresi</th>
              <th rowspan="1" colspan="2"  align="center">Ürün Adedi</th>
			  <th rowspan="1" colspan="2"  align="center">Ürün Kodu</th>
			  <th rowspan="1" colspan="2"  align="center">Ortalama Hýz</th>
			  <th rowspan="1" colspan="2"  align="center">Makinanýn Durma Sebebi</th>
			  <th rowspan="1" colspan="2"  align="center">Duruþ Saati</th>
			  <th rowspan="1" colspan="2"  align="center">Günçelleme Zamaný</th>
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
