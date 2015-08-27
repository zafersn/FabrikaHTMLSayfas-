<?php
$hostname='localhost';
$username='root';
$password='';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=android_api",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
   // echo 'Connected to Database<br/>';

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
		 
		   <style type="text/css">

            body {
                padding: 0;
                margin: 0;
            }
            #left {
				 box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				border: 100px solid #303F9F;
				background: #F8BBD0;
                width: 100%;
                height: 20%;
                position: absolute;
                z-index: -1;
            }

            #left {
                left: 0;
                background-color: #303F9F;
            }
        </style>
     </head>  
  <body bgcolor="#E8EAF6" height="30px">
  
			
            <div   id="left">         </div>
      <div style="position:absolute; left:10px; right:10px; top:150px; bottom:10px;">
       <table  border="2" width="80%" cellpadding="0" cellspacing="0" bgcolor="E8EAF6" align="center" >
          <!--<caption align="center"><strong>Fabrikamızın Makina İstatistikleri</strong></caption>-->
          <tr  height="90px">
              <th rowspan="1" colspan="3"  align="center">Makin Çalısma Süresi</th>
              <th rowspan="1" colspan="3"  align="center">Ürün Adedi</th>
			  <th rowspan="1" colspan="3"  align="center">Ürün Kodu</th>
			  <th rowspan="1" colspan="3"  align="center">Ortalama Hız</th>
			  <th rowspan="1" colspan="3"  align="center">Makinanın Durma Sebebi</th>
			  <th rowspan="1" colspan="3"  align="center">Duruş Saati</th>
			  <th rowspan="1" colspan="3"  align="center">Günçelleme Zamanı</th>
			  <th rowspan="1" colspan="3"  align="center">Tarih</th>
          </tr>
		  <tr  height="100px" >
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["makina_calisma_sure"]; ?>	</td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["urun_adedi"]; ?></td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["urun_kodu"]; ?></td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["ortalama_hiz"]; ?></td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["description_durus_nedeni"]; ?></td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["durus_saati"]; ?>	</td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"><?php echo $row["guncelleme_zamani"]; ?></td>
		  <td align="center" colspan="3"  bgcolor="E8EAF6"> <?php  echo $row["tarih_zaman"]; ?></td>
		  
		  
		  </tr>
			
         
     </table>
	 </div>
</html>
