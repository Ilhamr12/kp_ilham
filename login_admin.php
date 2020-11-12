<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <br><br>
  <h1>Form Login PT. Ismata Nusantara Abadi</h1>
  <div class="kotak_login">
    <p class="tulisan_login"><strong>Login Admin</strong></p><br>
      <form action="proses_login.php" method="post">
        <input class="form_login" type="text" name="username" placeholder="Username" required=""><br>
        <input class="form_login" type="password" name="password" placeholder="Password" required="">
        <input type="submit" class="tombol_login" value="Login">
        <br/>
        <br/>
        <center>
          <a class="link" href="index.php">kembali</a>
        </center>
      </form>
  </div>
</body>
</html>