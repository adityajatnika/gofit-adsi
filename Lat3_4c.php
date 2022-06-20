<!DOCTYPE html>
<html>
 <head>
 <title>Order Form</title>
 </head>
 <body>
 <p><u>Order Summary</u></p>
 <?php
 $num_cd_order = $_COOKIE['cd_order'];
 $num_dvd_order = $_COOKIE['dvd_order'];
 echo "Ordered CD: ".$num_cd_order." pieces <br>";
 echo "Ordered DVD: ".$num_dvd_order." pieces <br>";
 ?> <br>
<form id="form1" name="form1" method="post" action="pesan.php">  <input type="submit" name="button" id="button" value="Edit" />  </form> <br>
<form id="form2" name="form2" method="post" action="logout.php">  <input type="submit" name="button" id="button" value="Logout" />  </form>
 </body>
</html>
