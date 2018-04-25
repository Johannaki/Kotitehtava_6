<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="tyyli.css">
     <title>Kotitehtävä 6</title>
     <style>
     </style>
   </head>
   <body>
     <div class="laatikko">
       <h2>HELSINGIN KAUPUNGINOSIEN ASUKASLUVUT</h2>

     <?php
     $mysql_yhteys = mysqli_connect ("", "okp", "oli9tRR3", "johanna_okp");

     if(mysqli_connect_errno()) {
       echo "No voi voi: yhteysvirhe. " . mysqli_connect_error();
     }

     $query = "select nro, nimi, nimiruotsiksi, asukasluku from kaupunginosat";

     $result = mysqli_query($mysql_yhteys, $query)
     or die("Virhe: " . mysqli_error($mysql_yhteys));

     while($rivi=mysqli_fetch_array($result)) {
       echo ($rivi["nro"] .", ". $rivi["nimi"] .", ". $rivi["nimiruotsiksi"].": ". $rivi["asukasluku"]." asukasta" ."<br>\n");
     }

     mysqli_close($mysql_yhteys);
     ?>
     </div>
   </body>
</html>
