<?php
if(isset ($_POST['metode']) &&
          isset ($_POST['jenis']) &&
          isset ($_POST['tempat']) &&
          isset ($_POST['provinsi']) &&
          isset ($_POST['kab_kota']) &&
          isset ($_POST['kec_kel']) &&
          isset ($_POST['alamat']))
{
  setcookie("metode", $_POST['metode']);
  setcookie("jenis", $_POST['jenis']);
  setcookie("tempat", $_POST['tempat']);
  setcookie("provinsi", $_POST['provinsi']);
  setcookie("kab_kota", $_POST['kab_kota']);
  setcookie("kec_kel", $_POST['kec_kel']);
  setcookie("alamat", $_POST['alamat']);
  header("Location: konfirmasi.php");
}
if(isset ($_POST['nama']) &&
          isset ($_POST['tgl_lahir']) &&
          isset ($_POST['jenis_kelamin']) &&
          isset ($_POST['no_hp']) &&
          isset ($_POST['provinsi']) &&
          isset ($_POST['kab_kota']) &&
          isset ($_POST['kec_kel']) &&
          isset ($_POST['alamat']))
{
  setcookie("nama", $_POST['nama']);
  setcookie("jenis_kelamin", $_POST['jenis_kelamin']);
  setcookie("no_hp", $_POST['no_hp']);
  setcookie("provinsi", $_POST['provinsi']);
  setcookie("kab_kota", $_POST['kab_kota']);
  setcookie("kec_kel", $_POST['kec_kel']);
  setcookie("alamat", $_POST['alamat']);
  header("Location: home.php");
}
