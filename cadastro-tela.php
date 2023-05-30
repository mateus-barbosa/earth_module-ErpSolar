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
  <title>Cadastro - Terra</title>
</head>

<body>
  <div class="form-div">
    <form action="./php/cadastro-script.php" method="POST">
      <img src="./assets/ERP-logo.svg" alt="Logo do ERP Solar" />
      <input type="text" class="form-input" name="name" placeholder="Nome Completo" required />
      <input type="email" class="form-input" name="email" placeholder="email@dominio.com" required />
      <input type="password" class="form-input" name="senha" placeholder="senha" required />
      <input type="date" class="form-input" name="data_nasc" required />
      <div>
        <button type="submit" class="form-button">Cadstrar</button>
        <button class="form-button"><a href="index.php">Voltar</a></button>
      </div>
    </form>
  </div>
  <footer>
    <p>&copy 2023 CPS Fatec, All rights reserved</p>
  </footer>
</body>

</html>