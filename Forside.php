<?php
///
/* Version 0.62 */
///
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


$serverName = "94.177.229.154";
$userName = "FL0D1N";
$password = "Pepsi1234";
$dbName = "Bilbixen";

// Create connection
  $conn = mysqli_connect($serverName, $userName, $password, $dbName);
/*
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect";
  exit();
}else {
  echo "Connected successfully";
}
*/

$sql = "SELECT `Car_ID`, `Type`, `Price`, `Last_Inspection`, `Driven_Km`, `Color`, `Picture_path` FROM `Cars`";
$result = $conn->query($sql);


/*var_dump(mysqli_fetch_assoc($result));*/

 //foreach ($variable as $key => $value) {

  if ($result->num_rows > 0)
  {
      // output data of each row
      while($row = $result->fetch_assoc())
      {

          echo '  <a href="Bil.php">

          <div class="Imagegallery">
            <div class="Carcontainer">

              <img class="Carimage" src="'. $row["Picture_path"].'" alt="">
              <p class="DescriptionPris">'. $row["Price"].'  Dkk</p>
              <p class="Description">Navn: '. $row["Type"].'</p>
              <p class="Description">Sidste Indskeption: '. $row["Last_Inspection"].'</p>
              <p class="Description">KM: '. $row["Driven_Km"].'</p>

            </div>

            <p class="Descriptionbottom">Se alt Information</p>

          </div>

          </a>';

      }
  } else
  {
      echo "0 results";
  }

//}

 ?>
<!--
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
-->

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
