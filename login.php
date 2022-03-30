<?php
include "koneksi.php";
if(isset($_SESSION['username'])){
  echo "<script> alert('Anda sudah login');</script>";
  echo "<script> location= 'setelahlogin.php'; </script>";
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="login.css">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form action="koneksi.php?proses_login" method="post" class="form">
      <a href="homepage.php"></a> 
        <label for="user-email" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="user-email" class="form-content" type="username" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="proses_login" value="LOGIN" /><a href="registrasi.php" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>

</html>