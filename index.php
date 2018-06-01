<!DOCTYPE html>
<html>
<head>
  <title>Šampinjoni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

 <?php require 'heading.php';?>

  <div class="grid-container">
    <div class="first">
      <h2 style="text-align: center;">Već 17 godina ponosno se bavimo uzgojem šampinjona, kao i pakovanjem i distribucijom istih.</h2>
      <p>Garantovano najkvalitetniji u regiji !</p>
    </div>
    <div class="second">
      <img src="css/gljiva.png">
      <h2>Zašto su šampinjoni zdravi?</h2>
      <p>Šampinjoni su niskokalorična namirnica. Sto grama šampinjona ima samo 26 kalorija. One su bogate proteinima i vlaknima, ali i raznim vitaminima i mineralima...<a href="zdravlje.php"><b>Čitajte još</b></a></p><br>
      <h2>Gdje se nalazimo?</h2>
        <div class="map" id="map"> </div>
      
        </div>
      </div>
<br>
      
      

      <div class="bottomstuffcontainer">
        
        <div class="bottomstuff">
         <b style="grid-area: za">Sa našim šampinjonima možete spremati sledeca jela:</b>
         <a href="https://www.coolinarika.com/tag/gljive/"><img src="css/0.png">Piletina sa šampinjonima</a>
         <a href="https://finirecepti.net.hr/priprema/savijaca-od-sampinjona-i-bukovaca/"><img src="css/1.png">Savijača</a>
         <a href="https://finirecepti.net.hr/priprema/pohani-janjeci-odresci-s-lovackim-umakom/"><img src="css/2.png">Pohani janjeći odresci</a>
         <a href="https://finirecepti.net.hr/priprema/piletina-u-crnom-vinu-coq-au-vin/"><img src="css/3.png">Piletina u crnom vinu</a>
         <a href="https://finirecepti.net.hr/priprema/madarska-juha-od-gljiva/"><img src="css/4.png">Madjarska juha</a>
         <a href="https://finirecepti.net.hr/priprema/gratinirani-sampinjoni-s-prosom-i-mozzarellom/"><img src="css/5.png">Gratinirani šampinjoni</a>
         <a href="http://www.stvarukusa.rs/recept/punjeni-sampinjoni"><img src="css/6.png">Punjeni šampinjoni</a>
         <a href="http://www.stvarukusa.rs/recept/krem-sos-od-sampinjona"><img src="css/7.png">Krem sos od šampinjona</a>
         <div class="slika">
         <img src="css/foodbackground.jpg">
       </div>
       </div>
       
       
      <!-- <video class="videoo" autoplay muted loop>
        <source src="videos/hd.mp4" type="video/mp4">
          <source src="videos/hd.ogg" type="video/ogg">
          wtf
        </video>-->
      </div>

       <?php require 'footer.php';?>

      <script src="script.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFKTYNhJ2ydwX4d3GqX5AaievoBpcYa9U&callback=myMap"></script>
    </body>
    </html>