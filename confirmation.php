<!DOCTYPE html>
<html lang="fr">
<head>
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
