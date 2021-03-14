function findPI(n){
    let pntsInCircle = 0;
    let pntsTotal = 0;
    for(let i = 0 ; i < n; i++){
        let x = Math.random();
        let y = Math.random();
        let distance =Math.pow(x,2) + Math.pow(y,2);
        if (distance <=1){
            pntsInCircle++;
        }
        pntsTotal++;
        
    }
    return( 4 * (pntsInCircle /pntsTotal)  );
}

function onbtnClick(){
    document.querySelector('p').innerText = findPI(document.querySelector('input').value);
}


document.querySelector('button').addEventListener("click",onbtnClick);