const puppeteer = require('puppeteer');
const path = require('path');
const fs = require('fs');

(async () => {
  try {
    // Créer le dossier de destination s'il n'existe pas
    const outputDir = path.join(__dirname, 'public', 'assets', 'images', 'logo');
    if (!fs.existsSync(outputDir)) {
      fs.mkdirSync(outputDir, { recursive: true });
    }
    
    // Chemin du fichier HTML et de l'image de sortie
    const htmlPath = path.join(__dirname, 'public', 'social-preview-generator.html');
    const outputPath = path.join(outputDir, 'social-preview.jpg');
    
    console.log('Lancement du navigateur...');
    const browser = await puppeteer.launch({ 
      headless: 'new',
      args: ['--no-sandbox']
    });
    
    const page = await browser.newPage();
    
    // Configurer la taille de la page
    await page.setViewport({
      width: 1200,
      height: 630,
      deviceScaleFactor: 1,
    });
    
    console.log('Chargement de la page HTML...');
    await page.goto(`file://${htmlPath}`, { waitUntil: 'networkidle0' });
    
    // Cacher la bulle d'instructions
    await page.evaluate(() => {
      const instructions = document.querySelector('div[style*="position: fixed"]');
      if (instructions) instructions.style.display = 'none';
    });
    
    console.log('Prise de capture d\'écran...');
    await page.screenshot({
      path: outputPath,
      type: 'jpeg',
      quality: 100,
      fullPage: false
    });
    
    await browser.close();
    
    console.log(`Image d'aperçu générée avec succès: ${outputPath}`);
  } catch (error) {
    console.error('Une erreur s\'est produite:', error);
  }
})();
