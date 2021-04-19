let pointsTotal = 0;
let pointsInCircle = 0;


function calculatePI() {
    let x = Math.random();
    let y = Math.random();
    if (Math.pow(x, 2) + Math.pow(y, 2) < 1) {
        pointsInCircle++
    }
    pointsTotal++
    document.querySelector('p').innerText = 4 * (pointsInCircle / pointsTotal);

}
setInterval(() => {
    calculatePI()
}, 1000 / 60)


