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

    return 4 * (pointsInCircle / pointsTotal)
}
setInterval(() => {
    calculatePI()
}, 1000 / 60)

function btnPressed() {
    document.querySelector('p').innerText = calculatePI(document.querySelector('input').value);
}

document.querySelector('button').addEventListener('click', btnPressed);

console.log(calculatePI(document.querySelector('input').innerText));