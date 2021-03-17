const puppeteer = require('puppeteer');
let gameBullets;
async function bot() {
  const browser = await puppeteer.launch({
    headless: false,
  });
  const page = await browser.newPage();
  await page.goto('https://dndduckhunt.netlify.app/');
  await page.setViewport({ width: 1920, height: 1080 });
  await delay(3000);
  await page.click('.SinglePlayer');
  await page.evaluate(() => {
    gameBullets = bullets;
  });

  await delay(4000);
  while (gameBullets > 0) {
    await page.click('.duck');
    await delay(4000);
    await page.evaluate(() => {
      gameBullets = bullets;
    })
  }
  await page.close();
}

bot();
function delay(time) {
  return new Promise(function (resolve) {
    setTimeout(resolve, time)
  });
}