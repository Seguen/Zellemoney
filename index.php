<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Style perso -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

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

  <!-- CONTENU PRINCIPAL -->
  <div class="container py-5 text-white">

    <!-- Titre -->
    <div class="text-center mb-4">
      <h1 class="text-white">What's Zelle? Glad you asked!</h1>
    </div>

    <!-- Paragraphe -->
    <div class="mb-4">
      <p>Zelle is a great way to send money to friends and family, </p>
      <p>even if they bank somewhere different than you do. </p>
      <p> That means it's super easy to get paid back, or split the costs of things like dinner. </p>
      <p> With Zelle, the money goes directly into your bank account. </p>
      <p> And when money goes into your bank account directly, you can live delightfully. </p>
      <p>Zelle is already in lots of banking apps, so look for it in yours today.</p>
    </div>

    <!-- Bouton vers sold out -->
    <div class="text-center mb-5">
      <a href="sold-out.php" class="btn btn-light">Cash out 0$ fees</a>
    </div>

    <!-- Image ronde -->
    <div class="text-center mb-4">
      <img src="img/cercle.png" class="rounded-circle img-fluid" alt="Profil" style="max-width: 200px;">
    </div>

    <!-- Section How to receive money with Zelle -->
    <div class="mt-5 white-section">
        <h3 class="text-center mb-4">How to receive money with Zelle<span class="text-danger">*</span></h3>

    <div class="mb-4">
        <h5><a href="sold-out.php" class="text-warning text-decoration-none">Fill out form</a></h5>
        <p >1. Get started by filling out the form. Make sure that the information entered is correct to avoid delays.</p>
    </div>

    <div class="mb-4">
        <h5><a href="sold-out.php" class="text-warning text-decoration-none">Choose the amount</a></h5>
        <p>2. Enter the amount received. Your sender is already enrolled with Zelle, the money will go directly into your bank account.</p>
    </div>

    <div class="mb-4">
        <h5><a href="sold-out.php" class="text-warning text-decoration-none">Cash out</a></h5>
        <p>3. You can cash out money you receive from anyone you know with a bank account in the U.S.</p>
    </div>

    <div>
        <p><a href="sold-out.php" class="fw-bold text-warning text-decoration-none">Cash out instantly with 0$ fees</a></p>
    </div>
    </div>


    <!-- Deuxième paragraphe -->
    <div class="mb-4">
      <p>1. To receive money by Zelle, you must have an eligible checking or savings account. Transactions typically occur instantly.</p>
      <p>2. Based on a Q3 2024 survey of financial institutions offering Zelle to their customers, 99.44% of consumer saving and checking accounts linked to Zelle do not charge a fee to send, receive, or request money.</p>
    </div>

    <!-- Lien texte vers sold out -->
    <div class="mb-4">
      <p><a href="sold-out.php" class="text-warning fw-bold">Do not sell or share my personal information</a></p>
      <p>We don't sell data. However, we do secure it to facilitate a simple, credible, and fast transaction.</p>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-dark text-white text-center p-4 mt-5">
    <p class="mb-2">
      &copy; 2025 Early Warning Services, LLC. All rights reserved. <br>
      Zelle and the Zelle marks used herein are trademarks of Early Warning Services, LLC. Other product and company names mentioned herein are the property of their respective owners.
    </p>
    <img src="img/footer.png" alt="Image Footer" width="100">
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>ss
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
