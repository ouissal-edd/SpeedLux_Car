<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style/Connect.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <!-- include Header -->
  <?php @include_once('Header.php'); ?>
  <!-- include Header -->

  <!-- content -->

  <div id="heroOne" class="hero">
    <div class="cc">
      <div class="container">
        <h1>Se Connecter</h1>
        <hr>

        <label>Email</label>
        <input type="email" placeholder="Entrer votre Email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Entrer votre Mot de Passe" name="password" required>


        <button type="submit" class="connect">Se connecter</button>
        <button class="enregistrer" onclick="EnregistreBlock()">S'enregistrer</button>

      </div>
    </div>
  </div>

  <div id="heroTwo" class="hero">
    <div class="cc">
      <div class="container">
        <h1>S'enregistrer</h1>
        <hr>
        <label>Nom Complet</label>
        <input type="text" placeholder="Entrer votre nom" name="fullname" required>

        <label>Email</label>
        <input type="email" placeholder="Entrer votre Email" name="email" required>

        <label>Password</label>
        <input type="password" placeholder="Entrer votre Mot de Passe" name="password" required>


        <button type="submit" class="connect"> S'enregistrer</button>
        <div class="divenregistrer">
          <button class="enregistrer" onclick="ConnectBlock()">Se connecter</button>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->

  <!-- footer  -->
  <!-- end footer -->

  <script src="../Js/connect.js"></script>
  <script src="../Js/navbar.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>