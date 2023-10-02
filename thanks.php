<?php
$name = $_POST["user_name"];
$firstname = $_POST["user_firstname"];
$subject = $_POST["subject"];
$mail = $_POST["user_email"];
$phone = $_POST["user_phone"];
$message = $_POST["user_message"];
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Thanks page</title>
  </head>
  <body>
    <p>Merci <?= $name . " " . $firstname ?> de nous avoir contacté à propos de <?= $subject ?>.
Un de nos conseillers vous contactera soit à l’adresse <?= $mail ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : 
<?= $message ?>
  </body>
</html>
