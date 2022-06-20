<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Terimakasih Telah Memesan!</h3>
    <h4><u>Pesanan anda : </u></h4> 
    <p>Pesanan atas nama : <?php echo $_COOKIE['nama'] ?></p>
    <p>Metode tes : <?php echo $_COOKIE['metode'] ?></p>
    <p>Jenis tes : <?php echo $_COOKIE['jenis'] ?></p>
    <p>Tes dilaksanakan di provinsi <?php echo $_COOKIE['provinsi'] ?>, kabupaten/kota <?php echo $_COOKIE['kab_kota'] ?>, kecamatan <?php echo $_COOKIE['kec_kel'] ?></p>
    <form id="form1" name="form1" method="post" action="home.php">  <input type="submit" name="button" id="button" value="Konfirmasi Pesanan" />  </form>
  </body>
</html>
