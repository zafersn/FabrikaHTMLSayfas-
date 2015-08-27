<?php

//türkçe karakter hatasý vermemesi için sayfanýn kodlamasýný utf8 olarak ayarlýyoruz
header('Content-Type: text/html; charset=utf-8');
//Veri Tabanýna baglantý kodlarýmýz
/*$db_host="localhost";
$db_username="root";
$db_password="root";
$db_name="ogrenci";*/
require_once("./config.php");

mysql_connect("$db_host","$db_username","$db_password")or die ("Host'a Baglanamadim");
mysql_select_db("$db_name")or die("Veritabanina Baglanamadim");
mysql_query("SET CHARACTER SET UTF8");
 
//Tüm kayýtlarý çekiyoruz
$sorgu=mysql_query("select * from ogrenciler");
?>
<table style="width: 400px; border: yellow 3px ridge;" border="0">
    <tr style="background: black; color: white;">
    <th>Öðrenci No</th>
    <th>Öðrenci Adý</th>
    <th>Öðrenci Soyadý</th>
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