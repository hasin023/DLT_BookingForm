var hh = 0;
var mm = 0;
var ss = 10;
let timeface = document.getElementById("timeface");
let timer = null;

let cresend = document.getElementById("cresend");
let done_counting = document.getElementById("done_counting");
let counting = document.getElementById("counting");

document.getElementById("startBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent link behavior

    // Retrieve the input values
    var hourInput = document.getElementById("hr").value;
    var minuteInput = document.getElementById("min").value;
    var secondInput = document.getElementById("sec").value;

    // Store the input values in variables
    if(hourInput >= 0){
        hh = 0;
    }
    if(minuteInput >= 0){
        mm = 0;
    }
    if(secondInput >=0){
        ss = 10;
    }
});

function stopwatch(){
    if(isNaN(hh)){
        hh = 0;
    }
    if(isNaN(mm)){
        mm = 0;
    }
    if(isNaN(ss)){
        ss = 0;
    }

    if(hh === 0 && mm === 0 && ss === 0){
        cresend.style.display = "block";
        done_counting.style.display = "block";
        counting.style.display = "none";
        stop();
    }
    else{
        ss--;
        if(ss < 0){
            mm--;
            ss = 59;
            if(mm < 0){
                hh--;
                mm = 59;
            }
        }
    }
  
    let h = hh < 10 ? "0"+hh : hh;
    let m = mm < 10 ? "0"+mm : mm;
    let s = ss < 10 ? "0"+ss : ss;
    timeface.innerHTML =  m + " : " + s;
}

function start(){
    if(timer !== null){
      clearInterval(timer);
    }
    timer = setInterval(stopwatch, 1000);
    
}

function stop(){
    clearInterval(timer);
    ss = 0;
    hh = 0;
    mm = 0;
    timeface.innerHTML = "00 : 00 : 00";
    document.getElementById("hr").value = "";
    document.getElementById("min").value = "";
    document.getElementById("sec").value = "";
  }
