const rdnNumb = Math.floor(Math.random() * 10);
let counter = 0;

function guess() {
    let nbrGuess = +document.getElementById("number").value;
    if (Number.isInteger(nbrGuess)) {
        counter++;
        console.log(nbrGuess, " is a number");
        if (nbrGuess === rdnNumb) {
            document.getElementsByTagName("h1")[0].innerHTML = "Congratulations you won!";
            document.getElementById("hint").innerHTML = " ";
        } else {
            if (nbrGuess > rdnNumb) {
                document.getElementById("hint").innerHTML = "Smaller!";
            }
            if (nbrGuess < rdnNumb) {
                document.getElementById("hint").innerHTML = "Bigger!";
            }
        }
    }
    document.getElementById("number").focus();
    document.getElementById("number").value = "";
    document.getElementsByTagName("h3")[0].innerHTML = counter + " tries"
}