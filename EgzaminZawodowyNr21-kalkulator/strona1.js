const form = document.querySelector("#form");
const a = document.querySelector("#a");
const b = document.querySelector("#b");
const dodawanie = document.querySelector("#dodawanie");
const odejmowanie = document.querySelector("#odejmowanie");
const mnozenie = document.querySelector("#mnozenie");
const dzielenie = document.querySelector("#dzielenie");
const comment = document.querySelector("#comment");

form.addEventListener('submit', (event) => {
    event.preventDefault();



    if (event.submitter === dodawanie){
        if(a.value == "" || b.value == ""){
            comment.innerHTML = "proszę uzpełnić obie liczby";
        } else{
            const wynik = Number(a.value) + Number(b.value);
            comment.innerHTML = "Wynik działania wynosi: " + wynik;
        }
    }

    if (event.submitter === odejmowanie){
        if(a.value == "" || b.value == ""){
            comment.innerHTML = "proszę uzupełnić obie liczby";
        } else{
            const wynik = Number(a.value) - Number(b.value);
            comment.innerHTML = "Wynik działania wynosi: " + wynik;
        }
    }

    if (event.submitter === mnozenie){
        if(a.value == "" || b.value == ""){
            "Proszę uzupełnić obie liczby";
        } else{
            const wynik = Number(a.value) * Number(b.value);
            comment.innerHTML = "Wynik działania wynosi: " + wynik;
        }
    }

    if (event.submitter === dzielenie){
        if (a.value == "" || b.value == ""){
            "proszę uzupełnić obie liczby";
        } else if(b.value == 0){
            comment.innerHTML = "Nie wolno dzielić przez 0";
        } else{
            const wynik = Number(a.value) / Number(b.value);
            comment.innerHTML = "Wynik działania wynosi: " + wynik;
        }
    }

})