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
				border: 40% solid #1A237E;
				background: #F8BBD0;
                width: 100%;
                height: 15%;
                position: absolute;
                z-index: -1;
            }
               #left2{
               box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				border: 35px solid #303F9F;
                background: #3F51B5;
                   top:15%;
                width: 100%;
                height: 0%;
                position: absolute;
                z-index: -1;
               }
            #left {
                left: 0;
                background-color: #1A237E;
            }
               .kutular
                    {
                        font-family: 'roboto_condensedlight';
                        font-size:150%;
                        float: left;
                        height: 20%;
                        width: 11%;
                        background-color: #FAFAFA;
                        text-align: left;
                                                border-bottom: 2px solid #B0BEC5; border-top:2px solid #ECEFF1; border-left:2px solid #ECEFF1;  border-right:2px solid #ECEFF1;

                    }
               .kutular2
                    {
                        font-family: 'roboto_condensedlight';
                          border: solid  0px; 
                        font-size:300%;
                        float: left;
                        
                    }
               .kutular3
                    {
                         font-family: 'roboto_condensedlight';
                      border: solid  1px; 
                        font-size:150%;
                        text-align:center;
                        float: left;
                        height: 44%;
                        width: 50%;
                        background-color: #FAFAFA;
                      
                        border-bottom: 3px solid #B0BEC5; border-top:3px solid #ECEFF1; border-left:3px solid #ECEFF1;  border-right:3px solid #ECEFF1;
                    }
               h1 {
                    font-size: 400%;
                    line-height: 80px;
                    text-align: center;
                  
 
               }
@font-face {
    font-family: 'roboto_condensedlight';
    src: url('roboto_lightcondensed_ubasic/RobotoCondensed-Light-webfont.eot');
    src: url('roboto_lightcondensed_ubasic/RobotoCondensed-Light-webfont.eot?#iefix') format('embedded-opentype'),
         url('roboto_lightcondensed_ubasic/RobotoCondensed-Light-webfont.woff') format('woff'),
         url('roboto_lightcondensed_ubasic/RobotoCondensed-Light-webfont.ttf') format('truetype'),
         url('roboto_lightcondensed_ubasic/RobotoCondensed-Light-webfont.svg#roboto_condensedlight') format('svg');
    font-weight: normal;
    font-style: normal;

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
    float: right;                   
}
    </style>
     </head>  
  <body bgcolor="#E8EAF6">
     

     <!-- EMAİL-SEARC İKONLARI--> 
      <div   id="left">
          <div style="font-family: 'roboto_condensedlight'; font-size:300%; color:#E8EAF6;position:absolute;  left:7%; right:10%; top:20%; bottom:10%;  outset #ECEFF1;" ><b>Hassan & Tekstil</b></div>
                <div style="font-family: 'roboto_condensedlight'; font-size:200%; color:#E8EAF6;position:absolute;  left:7%; right:10%; top:48%; bottom:10%;  outset #ECEFF1;" >www.hassantekstil.com </div>
          
          <div class="img" style="position:absolute; left:82%; right:10px; top:50%; bottom:10px;">
            <a href="http://localhost/deneme/meterial.php">
                <img src="icon/ic_search_white_48dp_1x.png" alt="Klematis" width="36" height="36">
                </a>
          </div>     
          <div class="img" style="position:absolute; left:86%; right:10px; top:50%; bottom:10px;">
            <a href="http://localhost/deneme/meterial.php">
            <img src="icon/ic_email_white_48dp_1x.png" alt="Klematis" width="36" height="36">
            </a>
          </div>
            <div class="img" style="position:absolute; left:90%; right:10px; top:50%; bottom:10px;">
                <a href="http://localhost/deneme/meterial.php">
                <img src="icon/ic_more_vert_white_48dp_1x.png" alt="Klematis" width="36" height="36">
                </a>
            </div>
      </div>
      <!--Koyu Mavi Başlık stunu-->
      <div id="left2"> </div>
      <!-- Fabrika Veri Kutusuları    -->          <!--------- an alt 1---------------->

      <div class ="kutular" style="position:absolute;text-align:left; width:15%; left:7%; right:10%; top:76%; bottom:10%;  outset #E3F2FD;" ><font color="#757575">Makina Durumu: </font>  
            <div class="img" style="position:absolute; left:20%; right:%; top:30%; bottom:%;">
                    <a href="klematis_big.htm"> <img src="icon_web/grey_new_seo-05-512df.png" alt="Klematis" width="100" height="100">
  </a>
</div>     
      </div>
         <!-- an alt 2 -->
      <div class ="kutular" style="position:absolute; width:19%; text-align:left; left:23%; right:10%; top:76%; bottom:10%;  outset #E3F2FD;" ><font color="757575">Makina Calisma Suresi</font>
          <div class="img" style="position:absolute; left:20%; right:%; top:20%; bottom:%;">
                    <a href="klematis_big.htm"> <img src="icon_web/ic_timelapse_black_48dp_2x.png" alt="Klematis" width="90" height="90">
  </a>
</div>
          <div class="kutular2" style="position:absolute; left:45%; right:100%; top:45% ; bottom:60%; "><font color="616161">58</font></div>
          <div class="kutular2" style="position:absolute; font-size:200%;left:65%; right:100%; top:57% ; bottom:60%; "><font color="616161">dk</font></div>
</div>     
          
      </div>
        <!--an alt 3 -->
         <!-- Fabrika Veri Kutusuları    -->          <!--------- orta 1---------------->
      
       <div class ="kutular" style="text-align: left; position:absolute; width:35%;left:7%; right:10%; top:52%; bottom:10%;  outset #E3F2FD;" ><font color="757575"> </font>
            <div style=" position:absolute; left:5%; right:10%; top:13%; bottom:10%;  outset #E3F2FD;"><font color="757575">Toplam Bez Adedi:</font></div>
           <div class="img" style="position:absolute; left:60%; right:%; top:10%; bottom:%;">
                    <a href="klematis_big.htm"> <img src="icon_web/3-Linen-5123.png" alt="Klematis" width="60" height="60">
  </a>
</div>  
                         <div class="kutular2" style="position:absolute; left:85%; right:100%; top:0.01% ; bottom:60%; "><font color="616161">22</font></div>
                     <!-- <div class="kutular2" style="position:absolute; left:0%; right:0%; top:24% ; bottom:0%; "><hr width="100%"></div>-->
<div style=" width:40%;position:absolute; text-align:center;left:5%; right:10%; top:68%; bottom:10%;  outset #E3F2FD;"><font color="757575">Dakikada Uretilen Bez  Adedi:</font></div>
      <div class="img" style="position:absolute; left:61%; right:20%; top:60%; bottom:20%;">
                    <a href="klematis_big.htm"> <img src="icon_web/3-Linen-5123.png" alt="Klematis" width="50" height="50">
  </a>
</div>     
       <div class="kutular2" style="position:absolute; left:85%; right:100%; top:48% ; bottom:60%; "><font color="616161">5</font></div>
      </div>
    
      </div>
         <!-- orta 2 -->
      
        <!--orta 3 -->
      
      
        <!-- Fabrika Veri Kutusuları    -->          <!--------- üst 1---------------->
      
              <!-- üst 2 -->
          <div class ="kutular" style="width:35%; text-align:left; position:absolute; left:7%; right:10%; top:28%; bottom:10%;  outset #E3F2FD;" ></font>  
          
                <div style="width:35%;text-align:left; position:absolute; left:6%; right:10%; top:0%; bottom:10%;  outset #E3F2FD;" > <font color="757575"> Harcanan Kece: </font></div>
       <div class="img" style="position:absolute; left:0%; right:50%; top:22%;  bottom:50%;">
                    <a href="klematis_big.htm"> <img src="icon_web/14-512.png" alt="Klematis" width="100" height="100">
  </a>
              </div>  
                      <div style="position:absolute;font-size:250%; left:15%; right:10%; top:23%; bottom:10%;  outset #E3F2FD;" > <font color="757575">30</font></div>
                        <div style="position:absolute;font-size:170%; left:24%; right:10%; top:33%; bottom:10%;  outset #E3F2FD;" > <font color="757575">m</font></div>
                <div style="position:absolute; left:45%; right:10%; top:0%; bottom:10%;  outset #E3F2FD;" > <font color="757575"> Dakikada Harcanan Kece Metresi: </font></div>
            <div class="img" style="position:absolute; left:75%; right:50%; top:22%;  bottom:50%;">
                    <a href="klematis_big.htm"> <img src="icon_web/Tailor_16-512d.png" alt="Klematis" width="100" height="100">
  </a>
              </div> 

      </div>
        <!--üst 3 -->          
      <div class ="kutular" style="position:absolute;text-align:left;width:50%;left:45%; right:10%; top:28%; bottom:10%;  outset #E3F2FD;" >
        <div style=" position:absolute; left:9%; right:10%; top:0%; bottom:10%;  outset #E3F2FD;"><font color="757575">Urun Kadu:</font></div>

          <div class="img" style="position:absolute; left:10%; right:20%; top:20%; bottom:20%;">
                    <a href="klematis_big.htm"> <img src="icon_web/Logistics-16-512f.png" alt="Klematis" width="90" height="90">
  </a>
</div>     
      <div style=" position:absolute; left:37%; right:10%; top:0%; bottom:10%;  outset #E3F2FD;"><font color="757575">Bez Gramaji:</font></div>
      <div class="img" style="position:absolute; left:40%; right:20%; top:20%; bottom:20%;">
                    <a href="klematis_big.htm"> <img src="icon_web/17-512f.png" alt="Klematis" width="80" height="80">
  </a>         
</div>     
      <div style=" position:absolute; left:78%; right:10%; top:0%; bottom:10%;  outset #E3F2FD;"><font color="757575">Bez Rengi:</font></div> 
          <div class="img" style="position:absolute; left:80%; right:20%; top:20%; bottom:20%;">
                    <a href="klematis_big.htm"> <img src="icon_web/color_picker.png" alt="Klematis" width="70" height="70">
  </a>         
</div>  
      </div>
      <!-- Fabrika Veri Kutusuları    -->          <!--------- Sağ Büyük Kutu 1---------------->
       
      <div class ="kutular3" style="position:absolute; left:45%; right:10%; top:52%; bottom:10%;  outset #E3F2FD;" ><font color="757575">Gunluk istatistik Raporu:</font>
     
      </div>
      <!-- <div class="img" style="position:absolute; left:43.5%; right:10%; top:50%; bottom:10%;">
                    <a href="klematis_big.htm"> <img src="icon_web/market_monitoringssbul-512.png" alt="Klematis" width="995" height="400">
  </a>
</div> -->
    </body>
</html>