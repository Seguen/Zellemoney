<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Message envoyé avec succès</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #00c9ff, #92fe9d);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    h1 {
      color: #2ecc71;
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.2em;
      color: #333;
      margin-bottom: 20px;
    }

    a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #2ecc71;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #27ae60;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .checkmark {
      font-size: 60px;
      color: #2ecc71;
      animation: bounce 1s ease;
    }

    @keyframes bounce {
      0%   { transform: scale(0.5); opacity: 0; }
      50%  { transform: scale(1.2); opacity: 1; }
      100% { transform: scale(1); }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="checkmark">✔️</div>
    <h1>THANKS !</h1>
    <p>Your form has been submitted successfully. Your information is safe with Zellemoney.</p>
    <a href="index.php">Back to Zellemoney</a>
  </div>

  <script>
    // Animation supplémentaire au chargement
    window.onload = () => {
      document.querySelector('.container').style.transform = 'scale(1)';
    };
  </script>
</body>
</html>
