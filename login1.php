<?php include "koneksi1.php"; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style=" background-color: lightskyblue;">
  <!DOCTYPE html>
<html lang="en">

  <head>
    <style type="text/css">
      .pertama{
        color: black;
      }
      .kedua{
        color: black;
      }
      .ketiga{
        color: black;
      }
    </style>
    <meta charset="utf-8">

    <h1>Login</h1>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  </head>

  <body class="align">

    <div class="grid">

      <form action="../pages/proseslogin1.php" method="POST" class="form login" role="form">

        <div class="form__field">
          <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
          <input style="background-color: white;" id="login__username" type="text" name="username" class="pertama" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label for="login__
          password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
          <input style="background-color: white;" id="login__password" type="password" name="password" class="kedua" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input style="background-color: grey;" type="submit" name="login" value="Sign In">
        </div>

      </form>
    </div>
    
    
  </body>

</html>
  
  
</body>
</html>