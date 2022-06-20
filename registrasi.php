<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Registrasi</title>
</head>

<body>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <form action="auth.php" method="post" name="registrasi">
        <table width="400" border="0" align="center" cellpadding="1">
            <tr>
                <td colspan="2">
                    <h2>Registrasi</h2>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Konfirmasi Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="DAFTAR"></td>
            </tr>
        </table>
    </form>
    <p align="center"><a href="login.php">Sudah punya akun?</a></p>

</body>

</html>
