<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="./asset/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon/favicon-16x16.png">
<link rel="manifest" href="./asset/favicon/site.webmanifest">
<link rel="mask-icon" href="./asset/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="./asset/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="./asset/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation - Les Clefs de la Ville</title>
    <link rel="stylesheet" href="css/styles.css"> 
    
</head>
<body>
    <div class="container">
        <div class="banner"> 
            <h1 class="title">Les Clefs de la Ville</h1>
            <img
                src="https://res.cloudinary.com/dhqh98spd/image/upload/v1726673171/reservation-banner_zh8oi9.webp"
                alt="banner">
        </div>
        
        <div class="description-container" id="confirmation_container">
            <p class="description-main">Merci pour votre réservation !</p>
            <p class="description-important">Votre ticket a été généré avec succès.</p>
            <p class="description-sub">
                Vous pouvez télécharger votre ticket en cliquant sur le lien ci-dessous :
            </p>
        </div>

<?php
if (isset($_GET['file'])) {
    $file = urldecode($_GET['file']);
    echo "<p style='text-align: center; margin-bottom: 60px'><a  class='submit-button' href='$file' download='ticket.pdf'>Télécharger votre ticket</a></p>";
} else {
    echo "<p class='description-sub'>Erreur : le fichier PDF n'a pas pu être généré.</p>";
}
?>

    </div>
</body>
</html>
