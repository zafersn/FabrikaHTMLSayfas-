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
				border: 40px solid #303F9F;
				background: #F8BBD0;
                width: 100%;
                height: 18%;
                position: absolute;
                z-index: -1;
            }
               #left2{
               box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				border: 35px solid #1A237E;
                background: #1A237E;
                   top:170px;
                width: 100%;
                height: 0%;
                position: absolute;
                z-index: -1;
               }
            #left {
                left: 0;
                background-color: #303F9F;
            }
               .kutular
                    {
                        border: solid  1px; 
                        
                        float: left;
                        height: 30%;
                        width: 20%;
                        background-color: #FFFFFF;
                      
                        border-bottom: 3px solid #B0BEC5; border-top:3px solid #ECEFF1; border-left:3px solid #ECEFF1;  border-right:3px solid #ECEFF1;
                    }
               .kutular2
                    {
                        border: solid  1px; 
                        
                        float: left;
                        height: 5.4%;
                        width: 10%;
                        background-color: #1A237E;
                      
                        border-bottom: 3px solid #1A237E; border-top:3px solid #1A237E; border-left:3px solid #1A237E;  border-right:3px solid #1A237E;
                    }
               h1 {
                    font-size: 400%;
                    line-height: 80px;
                    text-align: center;
                  
                  
               }

                h2 {
                    font-size:100%;
                     color: #455A64;
                        text-align: left;
                    }

                h3 {
                     font-size: 300%;
                    line-height: 40px;
                    text-align: center;
                     
                    } 
               h4 {
                font-size: 200%;
               color: #FFFFFF;
                line-height: 10%;
                text-align: left;
                   font-family: verdana;
               }
                h5 {
                    font-size: 150%;
                     color: #FFFFFF;
                        text-align: left;
                    }
               div.img {
    margin: 5px;
    padding: 5px;
    border: 0px solid #0000ff;
    height: auto;
    width: auto;
    float: left;
    text-align: center;
                   
}
    </style>
     </head>  
  <body bgcolor="#E8EAF6">
      

      
      <div   id="left"> <td><h4>HASAN TEKSTIL</h4> </td></div>
      <div style="position:relative; left:5%; right:10px; top:10%; bottom:10px;"><h5>www.hasantekstil.com </h5></div>
      <div id="left2"> </div>
      <div  class="kutular2"  style="position:relative; left:0%; right:10px; top:11.5%; bottom:10px;  outset #7986CB; color:#9FA8DA;  text-align:center; line-height:50px " ;  ><td  <b> Günlük Makina Verileri </b>   </td>   
    </div> <div  class="kutular2"  style="position:relative; left:5%; right:10px; top:11.5%; bottom:10px;  outset #7986CB; color:#9FA8DA;  text-align:center; line-height:50px " ;  ><td  <b> Cihaz Bakım Geçmeşi </b>   </td>   
    </div> <div  class="kutular2"  style="position:relative; left:10%; right:10px; top:11.5%; bottom:10px;  outset #7986CB; color:#9FA8DA;  text-align:center; line-height:50px " ;  ><td  <b> Toplam Makina Verileri </b>   </td>   
    </div> <div  class="kutular2"  style="position:relative; left:14%; right:10px; top:11.5%; bottom:10px;  outset #7986CB; color:#9FA8DA;  text-align:center; line-height:50px " ;  ><td  <b> İşci Ücretleri </b>   </td>   
    </div> <div  class="kutular2"  style="position:relative; left:16%; right:10px; top:11.5%; bottom:10px;  outset #7986CB; color:#9FA8DA;  text-align:center; line-height:50px " ;  ><td  <b> Makina Vardiya </b>   </td>   
    </div>

            <div style="position:absolute; left:10px; right:10px; top:200px; bottom:10px;">
                
                
                <!--------------------------------------------üst 3lük tablo----------------------------->
            <div class ="kutular" style="position:relative; left:7%; right:10px; top:70px; bottom:10px;  outset #ECEFF1;" >
                
                    <td align="center" > <h2> Makin Çalısma Süresi:</h2> </td>
                <div class="img" style="position:relative; left:0%; right:10px; top:0px; bottom:60px;">
                    <a href="klematis_big.htm"> <img src="icon/ic_timelapse_black_48dp_2x.png" alt="Klematis" width="120" height="120">
  </a>
</div>
                    <td align="center" > <h1> 00:40:10</h1> </td>
                
                </div>
            <div class ="kutular" style="position:relative; left:8%; right:10px; top:70px; bottom:10px;  outset #ECEFF1;" >
                    <td align="center"><h2>Ürün Adedi:</h2></td>
                <div class="img" style="position:relative; left:0%; right:10px; top:0px; bottom:60px;">
                    <a href="klematis_big.htm"> <img src="icon/ic_local_shipping_black_48dp_2x.png"   alt="Klematis" width="120" height="120">
  </a>
</div>
                 <td align="center" > <h1> 55</h1> </td>
                </div>
            <div class ="kutular" style="position:relative; left:9%; right:10px; top:70px; bottom:10px;  outset #ECEFF1;" >
                    <td align="center"><h2>Ürün Kodu:</h2></td>
                <div class="img" style="position:relative; left:0%; right:10px; top:0px; bottom:60px;">
                    <a href="klematis_big.htm"> <img src="icon/ic_gradient_black_48dp_2x.png"   alt="Klematis" width="120" height="120">
  </a>
</div>
                 <td align="center" > <h1> fbA88</h1> </td>
                </div>
            <div class ="kutular" style="position:relative; left:10%; right:10px; top:70px; bottom:10px;  outset #ECEFF1;" >
                    <td align="center"><h2>Günçelleme Zamanı:</h2></td>
                 <div class="img" style="position:relative; left:0%; right:10px; top:0px; bottom:60px;">
                    <a href="klematis_big.htm"> <img src="icon/ic_timer_black_48dp_2x.png"   alt="Klematis" width="120" height="120">
  </a>
</div>
                 <td align="center" > <h3> 2015-08-23 14:01:00</h3> </td>
                </div>
                                <!------------------------Alt 3lük tablo--------------------------------->
            
             <div class ="kutular" style="position:relative; left:7%; right:10px; top:150px; bottom:10px; outset #ECEFF1; text-align:center; " >
                    <td align="center"><h2>Ortalama Hız:</h2></td>
                  <td align="center" > <h1> 12 m/s</h1> </td>
                </div>
             <div class ="kutular" style="position:relative; left:8%; right:10px; top:150px; bottom:10px; outset #ECEFF1; text-align:center;  " >
                    <td align="center"><h2>Makinanın Durma Sebebi:</h2></td>
                  <td align="center" > <h3> ELEKTRIKLER KOPTU</h3> </td>
                </div>
            <div class ="kutular" style="position:relative; left:9%; right:10px; top:150px; bottom:10px; outset #ECEFF1; text-align:center; " >
                    <td align="center"><h2>Duruş Saati:</h2></td>
                 <td align="center" > <h3> 2012-04-29 01:41:42</h3> </td>
                </div>
            <div class ="kutular" style="position:relative; left:10%; right:10px; top:150px; bottom:10px;  outset #ECEFF1;" >
                    <td align="center"><h2>Tarih:</h2></td>
                 <td align="center" > <h1> 23-08-2015</h1> </td>
                </div>
            
	 </div>
      </div>
       <div class="img" style="position:relative; left:35%; right:10px; top:5%; bottom:10px;">
  <a href="http://localhost/deneme/meterial.php">
    <img src="icon/ic_search_white_48dp_1x.png" alt="Klematis" width="36" height="36">
  </a>
</div>     
       <div class="img" style="position:relative; left:35%; right:10px; top:5%; bottom:10px;">
  <a href="http://localhost/deneme/meterial.php">
    <img src="icon/ic_more_vert_white_48dp_1x.png" alt="Klematis" width="36" height="36">
  </a>
</div>

   
    
    </body>
</html>
