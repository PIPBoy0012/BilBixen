   <!DOCTYPE html>

   <?php
function OpenCon()
 {
 $dbhost = "94.177.229.154";
 $dbuser = "FL0D1N";
 $dbpass = "Pepsi1234";
 $db = "Bilbixen";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bilbixen</title>
    <link rel="stylesheet" href="Forside.css">
  </head>
  <body>

    <div class="Navbar">
      <ul>
        <li> <a href="#">Biler</a></li>
        <li><a href="#">Om os</a></li>
        <li><a href="#">Kontakt</a></li>
        <li><a href="#">Forhandler Login</a></li>
      </ul>
    </div>

    <h2 class="h2title">Personbiler</h2>

<?php
$select_image = query("SELECT * FROM Cars WHERE ``='$product_idn'") or die(mysql_error());

while($data = mysql_fetch_assoc($select_image))
{
   echo $data['image'];
}
 ?>
 <a href="Bil.html">
   <div class="Imagegallery">
     <div class="Carcontainer">
       <img class="Carimage" src="img\371426730_c9db1a67cd_z.jpg" alt="">
       <p class="DescriptionPris">100000 Dkk</p>
       <p class="Description">Navn: allah</p>
       <p class="Description">Aargang: 2032</p>
       <p class="Description">KM: 222000</p>

     </div>


     <p class="Descriptionbottom">Se alt Information</p>
   </div>
 </a>


  </body>

  <footer>
    <div class="Footerdiv">
      <p>Bilbixen A/S</p>
      <p>Brugtvognsvej 100</p>
      <p>3784Brugtvogn City</p>
      <p>+45 637-726-78</p>

    </footer>
    </div>

</html>
