<?php
   session_start();
   if (!isset($_SESSION['username'])) {
       header("Location: login.php");
       exit;
   }
?>
<html>
 <head>
 <title>Order Form</title>
 </head>
 <body>
   <h2>Pesan Tes Covid-19</h2>
   <a href="home.php">kembali</a>
 <form class="" action="kontrol_data.php" method="post">
   <table>
     <tr>
       <td>Nama Pemesan</td>
       <td> : </td>
       <td><input type="text" name="nama" value="<?php if(isset($_COOKIE['nama'])){echo $_COOKIE['nama'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>Jenis Tes</td>
       <td> : </td>
       <td>
         <select class="tes" name="jenis">
           <option value="RT-PCR">RT-PCR</option>
           <option value="TCM">TCM</option>
           <option value="Rapid antigen">Rapid antigen</option>
           <option value="Rapid antibodi">Rapid antibodi</option>
         </select>
       </td>
     </tr>
     <tr>
       <td>Metode Tes</td>
       <td> : </td>
       <td>
         <select class="tes" name="metode">
           <option value="drive-thru">Drive Thru</option>
           <option value="ditempat">Di Tempat</option>
         </select>
       </td>
     </tr>
     <tr>
       <td>Tempat Tes</td>
       <td> : </td>
       <td>
         <select class="tes" name="tempat">
           <option value="sesuai">Sesuai Alamat</option>
           <option value="baru">Alamat Baru</option>
         </select>
       </td>
     </tr>
     <br>
     <tr>
       <td>Provinsi</td>
       <td> : </td>
       <td><input type="text" name="provinsi" value="<?php if(isset($_COOKIE['provinsi'])){echo $_COOKIE['provinsi'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>Kabupaten / Kota</td>
       <td> : </td>
       <td><input type="text" name="kab_kota" value="<?php if(isset($_COOKIE['kab_kota'])){echo $_COOKIE['kab_kota'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>Kecamatan / Kelurahan</td>
       <td> : </td>
       <td><input type="text" name="kec_kel" value="<?php if(isset($_COOKIE['kec_kel'])){echo $_COOKIE['kec_kel'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>Detail Alamat</td>
       <td> : </td>
       <td><input type="text" name="alamat" value="<?php if(isset($_COOKIE['alamat'])){echo $_COOKIE['alamat'];} else{echo "";} ?>"></td>
     </tr>
   </table>
   <tr>
     <td>
       <input type="submit" name="submit" value="SUBMIT PESANAN">
     </td>
   </tr>
 </form>
 </body>
</html>
