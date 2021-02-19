function checkAge() {
    let date = document.getElementById("birthdate").value;
    console.log(date, " ", date.slice(0, 4));
    if (2021 - (date.slice(0, 4)) >= 18) {
        window.location = "https://betway.com/en/sports/cat/soccer";
    } else {
        alert("go away child.");
        setTimeout(() => {
            window.location = "https://www.google.com"
        }, 2000);
    }
}
