<?php
   session_start();
   if (!isset($_SESSION['username'])) {
       header("Location: login.php");
       exit;
   }
?>
<html>
 <head>
 <title>Profil Form</title>
 </head>
 <body>
   <h2>Lengkapi Profil</h2>
   <a href="home.php">kembali</a>
 <form class="" action="kontrol_data.php" method="post">
   <table>
     <tr>
       <td>Nama Lengkap</td>
       <td> : </td>
       <td><input type="text" name="nama" value="<?php if(isset($_COOKIE['nama'])){echo $_COOKIE['nama'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>No. HP / WhatsApp</td>
       <td> : </td>
       <td><input type="number" name="no_hp" value="<?php if(isset($_COOKIE['no_hp'])){echo $_COOKIE['no_hp'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>Tanggal Lahir</td>
       <td> : </td>
       <td><input type="date" name="tgl_lahir" value="<?php if(isset($_COOKIE['tgl_lahir'])){echo $_COOKIE['tgl_lahir'];} else{echo "";} ?>"></td>
     </tr>
     <tr>
       <td>Jenis Kelamin</td>
       <td> : </td>
       <td>
         <select class="jk" name="jenis_kelamin">
           <option value="Laki-laki">Laki - laki</option>
           <option value="Perempuan">Perempuan</option>
         </select>
       </td>
     </tr>
     <p>Alamat :</p>
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
       <input type="submit" name="submit" value="LANJUT">
     </td>
   </tr>
 </form>
 </body>
</html>
