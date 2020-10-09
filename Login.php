<?php
///
/* Version 0.83 */
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

     <li> <a href="Forside.php">Biler</a></li>
     <li><a href="#">Om os</a></li>
     <li><a href="#">Kontakt</a></li>
     <li><a href="#">Forhandler Login</a></li>

   </ul>
 </div>

<div class="inputers">
  <form action="Scripts/LoginScript.php" method="post">
    <div class="Logindivs">
      <label class="labelfix" for="fname">E-mail:</label>
      <input class="textboxes" type="text" name="mailuid" placeholder="E-mail"><br><br>
    </div>
    <div class="Logindivs">
      <label for="lname">Password:</label>
      <input class="textboxes" type="password" name="pwd" placeholder="Password"><br><br>
      <input class="submitbutton" type="submit" name="" value="submit">
    </div>

  </form>
</div>



</body>


<footer>

 <div class="Footerdiv">

   <p>Bilbixen A/S  /  Brugtvognsvej 100  /  3784Brugtvogn City  /  +45 637-726-78</p>

 </div>
 </footer>
</html>
