<?php
// Activation de l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fonction de journalisation
function debug_log($message) {
    error_log(date('[Y-m-d H:i:s] ') . $message . "\n", 3, __DIR__ . '/debug.log');
}

debug_log("Script démarré");

// Vérification de la méthode de requête
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    debug_log("Méthode de requête non autorisée ou formulaire non soumis");
    header("Location: index.php");
    exit("Méthode de requête non autorisée ou formulaire non soumis");
}

debug_log("Requête valide reçue");

// Inclure l'autoloader généré par Composer
$autoloader_path = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloader_path)) {
    require $autoloader_path;
    debug_log("Autoloader chargé");
} else {
    debug_log("ERREUR : Autoloader non trouvé à " . $autoloader_path);
    die("Erreur de configuration : Autoloader non trouvé");
}

use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

debug_log("Classes importées");

// Traitement des données du formulaire
$name = htmlspecialchars($_POST['name'] ?? '');
$firstname = htmlspecialchars($_POST['firstname'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$date_one = htmlspecialchars($_POST['date_one'] ?? '');
$date_two = htmlspecialchars($_POST['date_two'] ?? '');

debug_log("Données du formulaire traitées");

// Générer un QR code
try {
    $qrData = "Nom: $firstname $name\nEmail: $email\nPremier week-end: $date_one\nSecond week-end: $date_two";
    $result = Builder::create()
        ->data($qrData)
        ->writer(new PngWriter())
        ->build();
    $qrCodeBase64 = base64_encode($result->getString());
    debug_log("QR code généré");
} catch (Exception $e) {
    debug_log("ERREUR lors de la génération du QR code : " . $e->getMessage());
    die("Erreur lors de la génération du QR code : " . $e->getMessage());
}

// Contenu HTML du PDF
$html = "
<html>
<head>
    <title>Pass Illimité - Les Clefs de la Ville</title>
    <style>
        .ticket-container { border: 2px dashed #333; padding: 20px; width: 80%; margin: 0 auto; text-align: center; }
        h1 { color: #333; }
        .details { margin-top: 20px; text-align: left; }
        .details p { font-size: 18px; }
        .qr-code { margin-top: 20px; }
    </style>
</head>
<body>
    <div class='ticket-container'>
        <h1>Pass Illimité - Les Clefs de la Ville</h1>
        <p>Merci pour votre réservation, $firstname $name !</p>
        <div class='details'>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Premier week-end :</strong> $date_one</p>
            <p><strong>Second week-end :</strong> $date_two</p>
        </div>
        <div class='qr-code'>
            <p>QR Code :</p>
            <img src='data:image/png;base64, $qrCodeBase64' alt='QR Code'>
        </div>
        <p>Présentez ce pass pour accéder gratuitement aux événements culturels de la ville lors des week-ends mentionnés.</p>
    </div>
</body>
</html>
";

debug_log("Contenu HTML créé");

// Créer une instance de Dompdf
try {
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $options->set('isRemoteEnabled', true);

    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    debug_log("HTML chargé dans Dompdf");

    // Définir le format du papier et l'orientation
    $dompdf->setPaper('A4', 'portrait');
    debug_log("Format du papier défini");

    // Rendre le PDF
    $dompdf->render();
    debug_log("PDF rendu");

    // Sauvegarder le PDF dans un répertoire accessible via le web
    $pdf_file_name = 'ticket_' . $firstname . '_' . $name . '.pdf';
    $pdf_file_path = __DIR__ . '/tickets/' . $pdf_file_name;
    file_put_contents($pdf_file_path, $dompdf->output());
    debug_log("PDF sauvegardé sur le serveur");

    // Rediriger vers la page de confirmation avec le lien de téléchargement
    header("Location: confirmation.php?file=" . urlencode('tickets/' . $pdf_file_name));
    exit();

} catch (Exception $e) {
    debug_log("ERREUR lors de la génération du PDF : " . $e->getMessage());
    die("Erreur lors de la génération du PDF : " . $e->getMessage());
}
?>
