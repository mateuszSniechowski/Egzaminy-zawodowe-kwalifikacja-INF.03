const passwd = document.querySelector('#passwd');
const powiadomienie = document.querySelector('#powiadomienie');
const form = document.querySelector('form');


form.addEventListener('submit', (event) => {
    event.preventDefault();

    if(passwd.value === ""){
        powiadomienie.innerHTML = "WPISZ HASŁO!";
        powiadomienie.style.color = "red";
    }

    if(!/\d/.test(passwd.value) && passwd.value.length > 1){
        powiadomienie.innerHTML = "SŁABE";
        powiadomienie.style.color = "yellow";
    }

    if(/\d/.test(passwd.value)){
        if(passwd.value.length >= 4 && passwd.value.length <=6){
            powiadomienie.innerHTML = "ŚREDNIE";
            powiadomienie.style.color = "blue";
        } else if(passwd.value.length >= 7){
            powiadomienie.innerHTML = "DOBRE";
            powiadomienie.style.color = "green";
        }
    }
})