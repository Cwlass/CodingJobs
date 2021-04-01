function checkTime() {
    const now = new Date();
    let currentHour = now.getHours(); // -> 10
    let currentMinutes = now.getMinu

    //Open or Close
    if (((currentHour > 10) && (currentHour < 16) || ((currentHour > 19) && (currentHour < 23)))) {
        document.querySelector('#blackBg').innerHTML = "Open"
    } else {
        document.querySelector('#blackBg').innerHTML = "Closed"
    }
    //Closing or Opening soon
    if ((currentMinutes >= 30) && (currentHour == 16 || currentHour == 17 || currentHour == 10 || currentHour == 22)) {
        if (currentHour == 14 && currentMinutes >= 30 || currentHour == 17 && currentMinutes >= 30) {
            document.querySelector('#whiteBg').innerHTML = 'Closes in ' + (60 - currentMinutes);
        }
        if (currentHour == 10 && currentMinutes >= 30 || currentHour == 22 && currentMinutes >= 30) {
            document.querySelector('#whiteBg').innerHTML = 'Opens in ' + (60 - currentMinutes);
        }
    } else {
        document.querySelector('#whiteBg').style.display = "none"
    }
}
//Initial check
checkTime();
//Check again every minute
var t = setInterval(checkTime(), 60000);