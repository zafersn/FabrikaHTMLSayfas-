<?php

//t�rk�e karakter hatas� vermemesi i�in sayfan�n kodlamas�n� utf8 olarak ayarl�yoruz
header('Content-Type: text/html; charset=utf-8');
//Veri Taban�na baglant� kodlar�m�z
/*$db_host="localhost";
$db_username="root";
$db_password="root";
$db_name="ogrenci";*/
require_once("./config.php");

mysql_connect("$db_host","$db_username","$db_password")or die ("Host'a Baglanamadim");
mysql_select_db("$db_name")or die("Veritabanina Baglanamadim");
mysql_query("SET CHARACTER SET UTF8");
 
//T�m kay�tlar� �ekiyoruz
$sorgu=mysql_query("select * from ogrenciler");
?>
<table style="width: 400px; border: yellow 3px ridge;" border="0">
    <tr style="background: black; color: white;">
    <th>��renci No</th>
    <th>��renci Ad�</th>
    <th>��renci Soyad�</th>
    </tr>
 
<?
while($ogrenci=mysql_fetch_array($sorgu))
{
    echo '<tr>';
 
    echo '<td align="center">'.$ogrenci['ogrenci_no'].'</td>';
    echo '<td>'.$ogrenci['ogrenci_ad'].'</td>';
    echo '<td>'.$ogrenci['ogrenci_soyad'].'</td>';
 
    echo '</tr>';
}
 
?>
</table>