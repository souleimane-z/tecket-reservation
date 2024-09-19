<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Clefs de la Ville</title>
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
        <div class="description-container">
            <p class="description-main">
                Un événement spécial pour tous ceux qui réservent leur place !
            </p>
            <div class="description-important">FONCEZ !</div>
            <p class="description-sub">
                Grâce au formulaire ci-dessous, vous pourrez réserver votre ticket qui vous
                permettra d'accéder gratuitement à chaque lieu culturel de la ville.
                Et ce, pendant deux week-ends dans l'année !

                <br /> 
                <span class="description-span">
                    Réservez vite vos tickets, un nombre limité sera généré !
                </span>
            </p>
        </div>
        <form action="generate_pdf.php" method="post">
            <input type="hidden" name="submitted" value="1">

            <label for="name" class="label-name">Nom :</label>
            <input type="text" id="name" name="name" class="input-name" required>

            <label for="firstname" class="label-firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" class="input-firstname" required>

            <label for="email" class="label-email">Email :</label>
            <input type="email" id="email" name="email" class="input-email" required>

            <div class="dates-container">
                <label for="date-one" class="label-date first-date_label">Week-end 1 :</label>
                <input type="date" id="date-one" name="date_one" class="input-date first-date_input" required>

                <label for="date-two" class="label-date second-date_label">Week-end 2 :</label>
                <input type="date" id="date-two" name="date_two" class="input-date second-date_input" required>
            </div>

            <button type="submit" class="submit-button">Avoir son billet !</button>
        </form>
    </div>

    <!-- Script pour désactiver le bouton de soumission après un clic -->
    <script>
        document.querySelector('form').addEventListener('submit', function() {
            document.querySelector('.submit-button').disabled = true;
        });
    </script>

</body>

</html>
