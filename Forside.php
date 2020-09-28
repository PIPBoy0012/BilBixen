<?php
///
/* Version 0.62 */
///

  $serverName = "94.177.229.154";
  $userName = "FL0D1N";
  $password = "Pepsi1234";
  $dbName = "Bilbixen";

  // Create connection
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect";
    exit();
  }else {
    echo "Connected successfully";
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <title>Bilbixen</title>
  <link rel="stylesheet" href="Main.css">

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
 echo "Hello";
 ?>

<a href="Bil.php">

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

 </div>
 </footer>
</html>
