<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form-login.css">
    <title> Primeval </title>
    <style media="screen">
      p {
        font-family: Simplicity;
        font-size: 50px;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="box">
      <div class="box-judul">
        <p><img src="judul1.png"></p>
      </div>
      <div class="box-form">
        <form class="form" action="login.php" method="post">
          <?php
            $user = $_POST['username'];
            $pass = $_POST['password'];
              if (($user == "Naili") && ($pass == "abcde"))
              {
                echo "<p>Login Berhasil</p>";
              }
              else
              {
                echo "<p>Login Gagal</p>";
              }
           ?>
        </form>
      </div>
    </div>
  </body>
</html>
