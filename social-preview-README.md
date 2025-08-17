# Génération d'image pour les réseaux sociaux

Ce dossier contient les fichiers nécessaires pour générer une image d'aperçu qui sera affichée lorsque le lien du site est partagé sur les réseaux sociaux.

## Option 1 : Génération automatique avec Node.js

1. Assurez-vous d'avoir Node.js installé sur votre ordinateur
2. Installez Puppeteer en exécutant dans le terminal :
   ```
   npm install puppeteer
   ```
3. Exécutez le script de génération :
   ```
   node generate-social-image.js
   ```
4. L'image sera générée à `public/assets/images/logo/social-preview.jpg`

## Option 2 : Génération manuelle

1. Ouvrez le fichier `public/social-preview-generator.html` dans votre navigateur
2. Prenez une capture d'écran de la page (sans la bulle d'instructions)
3. Enregistrez l'image en tant que `social-preview.jpg` dans le dossier `public/assets/images/logo/`

## Vérification

Pour vérifier que l'image et les méta-tags fonctionnent correctement, vous pouvez utiliser les outils suivants :
- [Facebook Sharing Debugger](https://developers.facebook.com/tools/debug/)
- [Twitter Card Validator](https://cards-dev.twitter.com/validator)
- [LinkedIn Post Inspector](https://www.linkedin.com/post-inspector/)

## Personnalisation

Si vous souhaitez modifier l'apparence de l'image d'aperçu, vous pouvez éditer le fichier HTML `public/social-preview-generator.html` et régénérer l'image.
