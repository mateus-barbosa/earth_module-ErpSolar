<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./assets/terra.png" type="image/png" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <title>ERP Solar - Terra</title>
</head>

<body>
  <div class="module-screen">
  </div>

  <form action="./php/valida_login.php" method="POST">
    <div class="login_area">
      <img src="./assets/ERP-logo.svg" alt="Logo do ERP Solar">
      <input type="email" name="user" placeholder="email@dominio.com" />
      <input type="password" name="password" placeholder="password" required />
      <button type="submit">Login</button>
      <label>Click here to <a href="cadastro-tela.php">register</a></label>
      <footer>
        <p>&copy 2023 CPS Fatec, All rights reserved</p>
      </footer>
    </div>
  </form>


</body>

</html>