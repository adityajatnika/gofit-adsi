<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h2>Selamat Datang, <?php if (isset($_COOKIE['nama'])) {
                        echo $_COOKIE['nama'];
                      } else {
                        echo "Silahkan lengkapi profil terlebih dahulu!";
                      } ?></h2>
  <form id="form" name="form" method="post" action="pesan.php"> <input type="submit" name="button" id="button" value="Pesan Tes Covid-19" /> </form> <br>
  <form id="form1" name="form1" method="post" action="lengkapi-profil.php"> <input type="submit" name="button" id="button" value="Lengkapi Profil" /> </form> <br>
  <form id="form2" name="form2" method="post" action="logout.php"> <input type="submit" name="button" id="button" value="Logout" /> </form>
</body>

</html>