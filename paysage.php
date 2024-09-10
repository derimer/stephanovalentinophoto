<!DOCTYPE html>
<html class="html" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="./style.css">
   
<?php
$title ="paysages";
include 'menu.php';
?>

</head>
<!--<p class="atout1"><a href="./apropos.php">QUI SUIS-JE</a>       <a href="index.php">ACCEUIL</a>     <a href="page2.php">COULEURS</a> <a href="image2.php">NOIR&BLANC</a>       <a href="./portrait.php">PORTRAIT</a>     <a href="paysage.php">PAYSAGE</a>    <a href="contact.php#">CONTACT</a><br>-->



<body>
    <div class="paysages">
<h1 class="h1">STEPHANOVALENTINOPHOTO</h1> 
<h1 class="h1 header">LES PAYSAGES</h1>
    <div onclick="changeClass" class="gallerie">
 
<a href="./image/grau.du.roi.01.2021.jpg"><img class="img gallerie"src="./image/grau.du.roi.01.2021.jpg"alt="image1.jpg"><a href="./image/lebleu.jpg"><img class="img  gallerie" srcset="./image/lebleu.jpg"alt="image2.jpg">
<a href="./image/lac.02.2020.grane.jpg"><img class="img  gallerie"src="./image/lac.02.2020.grane.jpg"alt="image3.jpg"><a href="./image/hotel.jpg"><img class="img  gallerie"srcset="./image/hotel.jpg"alt="image4.jpg">
<a href="./image/turquoise.jpg"><img class="img  gallerie"src="./image/turquoise.jpg"alt="image.jpg"><a href="./image/grau.jpg"><img class="img  gallerie"srcset="./image/grau.jpg"alt="image6.jpg">
<a href="./image/horizon.jpg"><img class="img  gallerie"src="./image/horizon.jpg"><a href="./image/rue.jpg"><img class="img gallerie"src="./image/rue.jpg"><a href="./image/vercors.die.12.20 copie 2.jpg"><img class="img gallerie"src="./image/vercors.die.12.20 copie 2.jpg">
<a href="./image/piscine.jpg"><img class="img gallerie"src="./image/piscine.jpg"><a href="./image/balade.jpg"><img class="img gallerie"src="./image/balade.jpg"><a href="./image/paysage+.jpg"><img class="img gallerie"src="./image/paysage+.jpg">
<a href="./image/parc.jpg"><img class="img gallerie"src="./image/parc.jpg"><a href="./image/DP0Q4413.bretagne_HDR.jpg"><img class="img gallerie"src="./image/DP0Q4413.bretagne_HDR.jpg"><a href="./image/eoliennes.jpg"><img class="img gallerie"src="./image/eoliennes.jpg">
</div>
</div>
<script>
    function changeClass(element){
        const currentClass = element.class;
        if(currentClass=="gallerie"){
            element.class="./image";
        }else{
            element.class="gallerie";
        }
    }
</script>

    
</body>
</html>