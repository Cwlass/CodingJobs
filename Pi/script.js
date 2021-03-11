let pointsTotal = 0;
let pointsInCircle = 0;

function calculatePI(n) {
    for (let i = 0; i <= n; i++) {
        let x = Math.random();
        let y = Math.random();
        if (Math.pow(x, 2) + Math.pow(y, 2) < 1) {
            pointsInCircle++
        }
        pointsTotal++
    }
    return 4 * (pointsInCircle / pointsTotal)
}

function btnPressed() {
    document.querySelector('p').innerText = calculatePI(document.querySelector('input').value);
}

document.querySelector('button').addEventListener('click', btnPressed);

console.log(calculatePI(document.querySelector('input').innerText));