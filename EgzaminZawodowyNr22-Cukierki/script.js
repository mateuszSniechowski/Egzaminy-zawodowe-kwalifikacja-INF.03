const form = document.querySelector("#form");
const number = document.querySelector("#number");
const r = document.querySelector("#r");
const g = document.querySelector("#g");
const b = document.querySelector("#b");
const order = document.querySelector("#order");
const color = document.querySelector("#color");
const result = document.querySelector("#result");

form.addEventListener("submit", (event)=>{
    event.preventDefault();

    if(order.eventSubmitter = true){
        console.log("I love tits");
        if(number.value == 1){
            result.innerHTML = "Twoje zamówienie to cukierek cytryna";
        } else if(number.value == 2){
            result.innerHTML = "Twoje zamówienie to cukierek liść";
        } else if(number.value == 3){
            result.innerHTML = "Twoje zamówienie to cukierek banan";
        } else{
            result.innerHTML = "inny";
        }
    }

})

function changeColor(){
    color.style.background = "rgb(" + Number(r.value) +", " + Number(g.value) + ", " + Number(b.value) + ")";

}