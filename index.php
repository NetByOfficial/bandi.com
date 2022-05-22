<!DOCTYPE html>


<!--alap-->


<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandi oldala</title>

    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    

    </style>
</head>

<body>
<?php
include ("alap.php");
?>

     <!--Főoldal-TXT-->

    <div class="container">
        <div class="főoldal-TXT">
     </h1>
     <h1>
        Főoldal
     </h1>
     </div>

     
    
<div class= "lista">
   
  <div class="Outline-Text-Green h1">
         <a href ="index-újdonságok.html">
        
<h1>

Újdonságok  
        
</h1> 
    
    </a>
     
      </div>
     <div class="container">
        <div class="Outline-Text-red h1 a">
           <a href ="index-Bandi YouTube Csatornája.html">
            <h1>
          Bandi YouTube Csatornája
        
        
    </h1>
      
</div>
<div class="container">
   <div class="Outline-Text-Blue h1 a">
      <a href ="bejelentkezes.html">
       <h1>
    Bejelentkezés/Regisztráció
   
   
</h1>
             
        
      
 </a>
 </div>
 </div>
 </div>
 


 


     
    </a>
    <br>
    <br>
    <br>


    <div class="container">
        <div class="főoldal-TXT">
     </h1>
     <h1>
        
    
    <div id="clockbox"></div>

    <script type="text/javascript">
    var tday=["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","péntek","Szombat"];
    var tmonth=["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"];
    
    function GetClock(){
    var d=new Date();
    var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
    var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
    
    if(nhour==0){ap=" ";nhour=24;}
    else if(nhour<24){ap=" ";}
    else if(nhour==24){ap=" ";}
    else if(nhour>24){ap=" ";nhour-=24;}
    
    if(nmin<=9) nmin="0"+nmin;
    if(nsec<=9) nsec="0"+nsec;
    
    var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
    document.getElementById('clockbox').innerHTML=clocktext;
    }
    
    GetClock();
    setInterval(GetClock,1000);
    </script>
     </h1>
     
     <a class="weatherwidget-io" href="https://forecast7.com/hu/47d9317d68/padan/" data-label_1="PADÁNY" data-theme="dark" >PADÁNY</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>
<br>

                
       <div class="Outline-Text">   
         <div class="doboz-3">
        </h1>
        <h1>
           
        </h1>
        
        <p></p>
            <div class="Blokk">
    </h1>
    <h1>
        Bandi
    </h1>

    <p>9186 éves</p>

</div>
<br>
<div class="Blokk">
</h1>
<h1>
    öregannya
</h1>

<p>Döglött 2021-ben!</p>
 
</div>
<br>
<div class="Blokk">
</h1>
<h1>
    öregapja
</h1>

<p>döglött 1-ben!</p>
 
</div>
<br>
<div class="Blokk">
</h1>
<h1>
   dédöregapja
</h1>

<p>fosott nagyon sokat és döglött 3000-ben!</p>
 
</div>
<br>

    </body>
</html>