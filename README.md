# Les Clefs de la Ville

Ce projet est un site web fictif qui génère des tickets PDF pour un événement culturel appelé "Les Clefs de la Ville". Les utilisateurs peuvent réserver des tickets gratuits pour accéder aux lieux culturels de la ville pendant deux week-ends de l'année.

## Fonctionnalités

- Formulaire de réservation de tickets
- Génération de tickets PDF personnalisés
- Intégration de QR codes dans les tickets
- Page de confirmation avec lien de téléchargement du ticket

## Prérequis

- PHP 7.4 ou supérieur
- Composer (pour gérer les dépendances)
- Serveur web (Apache, Nginx, etc.)

## Installation

1. Clonez ce dépôt dans votre environnement local :
   ```
   git clone [URL_DU_REPO]
   ```

2. Naviguez dans le répertoire du projet :
   ```
   cd les-clefs-de-la-ville
   ```

3. Installez les dépendances via Composer :
   ```
   composer install
   ```

4. Assurez-vous que le répertoire `tickets/` est créé et que le serveur web a les permissions d'écriture dessus.

## Dépendances

Les principales dépendances du projet sont :

- dompdf/dompdf : pour la génération de PDF
- endroid/qr-code : pour la génération de QR codes

Ces dépendances seront installées automatiquement via Composer.

## Configuration

1. Assurez-vous que votre serveur web est configuré pour exécuter PHP.
2. Pointez votre serveur web vers le répertoire racine du projet.
3. Vérifiez que les permissions sont correctement configurées pour permettre l'écriture dans le répertoire `tickets/`.

## Utilisation

1. Accédez au site via votre navigateur.
2. Remplissez le formulaire de réservation sur la page d'accueil.
3. Après soumission, vous serez redirigé vers une page de confirmation avec un lien pour télécharger votre ticket PDF.

## Dépannage

- En cas de problèmes, vérifiez les logs d'erreur de votre serveur web et le fichier `debug.log` dans le répertoire du projet.
- Assurez-vous que toutes les dépendances sont correctement installées.
- Vérifiez les permissions des répertoires, en particulier pour `tickets/`.

## Développeur

Ce projet a été développé par Souleimane Z. Pour plus d'informations ou pour voir d'autres projets, visitez mon portfolio : [https://www.souleimane-z.com](https://www.souleimane-z.com)