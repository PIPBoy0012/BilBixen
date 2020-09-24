<!DOCTYPE html>
<?php

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
 function OpenCon()
 {
   $servername = "94.177.229.154";
   $username = "FL0D1N";
   $password = "Pepsi1234";
   $dbname = "Bilbixen";

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);

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

<?php

 ?>
