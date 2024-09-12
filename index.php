<DOCCTYPE html>
  <html class="html" lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ACCUEIL</title>
  </head>

  <body>
    
    <header id="indexHeader">

      <h1>STEPHANOVALENTINOPHOTO</h1>
<nav class="border">
     
        <ul>
          <li>ACCUEIL</li>
          <li><a href="page2.php">COULEURS</a></li>
          <li><a href="image2.php">N&B</a></li>
          <li><a href="portrait.php">PORTRAIT</a></li>
          <li><a href="charme.php">CHARME</a></li>
          <li><a href="paysage.php">PAYSAGES</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
        </nav>
     


    </header>
    <div class="corps">
    <p class="presentation">Bienvenue dans mon univers photographique, dans lequel le noir et blanc transcende les vues.<br>
     mais rassurez-vous, je n'oublies pas pour autant les couleurs...
    <p class="propos"><a href="apropos.php">QUI SUIS-JE ?</a></p>
    
      
        <p class="">SALON MATRA</p>
        <img class="img ad" src="./image/matra salon lyon NB .jpg">           
     
        <p class="">BILLARD</p>
        <img class="img ab" src="./image/billard.jpg">    
     
        <p class="">MARCHE</p>
        <img class="img ac" src="./image/marche.jpg">   
      
        <p class="">NEIGE</p>
        <img class="img aa" src="./image/308 neige.jpg">
      
        <p class="">CENTRALE</p>
        <img class="img ac" src="./image/central.jpg">  
        <p class="">VINTAGE</p>
        <img class="img ad" src="./image/yes.jpg">   
      
        <p class="">GARE</p>
        <img class="img ad" src="./image/gare.jpg">     
    </div><br>
    <a class="" href="page2.php">.../...</a>
  </div>




   
    <script>
      let myImage = document.querySelector("img");

      myImage.addEventListener("click", function () {
        let mySrc = myImage.getAttribute("src");
        if (mySrc === "image/matra salon lyon NB .jpg") {
          myImage.setAttribute("src", "image/salon lyon NB 2023.jpg");
        } else {
          myImage.setAttribute("src", "image/matra salon lyon NB .jpg");
        }
      });
             
      

    </script>
  </body>
  </html>