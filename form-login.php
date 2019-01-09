<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form-login.css">
    <title> Primeval </title>
  </head>
  <body>
    <div class="box">
      <div class="box-judul">
        <p><img src="judul1.png"></p>
      </div>
      <div class="box-form">
        <form class="form" action="login.php" method="post">
          <p>
            <input type="text" class="form-input" name="username" value="" placeholder="Username" required>
          </p>
          <p>
            <input type="password" class="form-input" name="password" value="" placeholder="Password" required>
          </p>
          <p>
            <input type="submit" class="submit" name="submit" value="L o g i n" onsubmit="return validasi()">
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
