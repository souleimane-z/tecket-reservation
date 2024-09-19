# Les Clefs de la Ville

## Description

"Les Clefs de la Ville" est un projet de site web fictif qui génère des tickets PDF pour un événement culturel. Les utilisateurs peuvent réserver des tickets gratuits pour accéder aux lieux culturels de la ville pendant deux week-ends de l'année.

## Fonctionnalités

- Formulaire de réservation de tickets
- Génération de tickets PDF personnalisés
- Intégration de QR codes dans les tickets
- Page de confirmation avec lien de téléchargement du ticket

## Prérequis

- PHP 7.4 ou supérieur
- Composer (pour gérer les dépendances)
- Serveur web (Apache, Nginx, etc.)
- Extensions PHP : gd, mbstring, xml

## Installation

Suivez ces étapes pour installer et configurer le projet "Les Clefs de la Ville" :

1. **Vérification des prérequis**
   - Vérifiez votre version de PHP :
     ```
     php -v
     ```
   - Installez Composer depuis [getcomposer.org](https://getcomposer.org/) si nécessaire.

2. **Clonage du dépôt**
   ```
   git clone https://github.com/souleimane-z/tecket-reservation.git
   cd tecket-reservation
   ```

3. **Installation des dépendances**
   ```
   composer install
   ```

4. **Configuration du serveur web**
   - Pour Apache, activez le module `mod_rewrite`.
   - Créez un VirtualHost pointant vers le répertoire du projet ou placez le projet dans votre `DocumentRoot`.

5. **Configuration des permissions**
   ```
   mkdir tickets
   chmod 755 tickets
   chown www-data:www-data tickets  # Remplacez www-data par l'utilisateur de votre serveur web si différent
   ```

6. **Vérification des extensions PHP**
   - Assurez-vous que les extensions suivantes sont activées dans votre `php.ini` : gd, mbstring, xml
   - Vérifiez les extensions activées :
     ```
     php -m
     ```

7. **Test de l'installation**
   - Accédez à l'URL de votre site via un navigateur.
   - Essayez de soumettre le formulaire pour générer un ticket PDF.

## Dépendances

Les principales dépendances du projet sont :

- dompdf/dompdf : pour la génération de PDF
- endroid/qr-code : pour la génération de QR codes

Ces dépendances sont installées automatiquement via Composer.

## Configuration

1. Assurez-vous que votre serveur web est configuré pour exécuter PHP.
2. Pointez votre serveur web vers le répertoire racine du projet.
3. Vérifiez que les permissions sont correctement configurées pour le répertoire `tickets/`.

## Utilisation

1. Accédez au site via votre navigateur.
2. Remplissez le formulaire de réservation sur la page d'accueil.
3. Après soumission, vous serez redirigé vers une page de confirmation avec un lien pour télécharger votre ticket PDF.

## Dépannage

- En cas de problèmes, vérifiez les logs d'erreur de votre serveur web et le fichier `debug.log` dans le répertoire du projet.
- Assurez-vous que toutes les dépendances sont correctement installées.
- Vérifiez les permissions des répertoires, en particulier pour `tickets/`.
- Assurez-vous que la fonction `error_log()` peut écrire dans le fichier `debug.log`.

## Sécurité

- Assurez-vous que le répertoire `tickets/` n'est pas accessible directement via le web.
- Configurez correctement les en-têtes CORS si nécessaire.
- Pour un déploiement en production, considérez l'utilisation d'un CDN pour les assets statiques et configurez HTTPS.

## Personnalisation

- Modifiez le fichier `index.php` pour mettre à jour le contenu du site selon vos besoins.
- Ajustez les styles dans `css/styles.css` si nécessaire.

## Environnements de développement

- Si vous utilisez un environnement de développement local comme XAMPP ou WAMP, assurez-vous que tous les services nécessaires sont en cours d'exécution.

## Développeur

Ce projet a été développé par Souleimane Z. Pour plus d'informations ou pour voir d'autres projets, visitez mon portfolio : [https://www.souleimane-z.com](https://www.souleimane-z.com)

## Contact

Pour toute question ou suggestion, n'hésitez pas à me contacter via mon site web : [https://www.souleimane-z.com](https://www.souleimane-z.com)

---

Merci d'utiliser "Les Clefs de la Ville" !