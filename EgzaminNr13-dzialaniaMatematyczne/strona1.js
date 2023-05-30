const dodawanie = document.querySelector('input[type="submit"][id="dodawanie"]');
const odejmowanie = document.querySelector('input[type="submit"][id="odejmowanie"]');
const mnozenie = document.querySelector('input[type="submit"][id="mnozenie"]');
const dzielenie = document.querySelector('input[type="submit"][id="dzielenie"]');
const form = document.querySelector("#form");
const pierwszaLiczba = document.querySelector("#pierwszaLiczba");
const drugaLiczba = document.querySelector("#drugaLiczba");
const wynik = document.querySelector("#wynik");

form.addEventListener("submit", (event) =>{
    event.preventDefault();

    if(event.submitter === dodawanie || event.submitter === odejmowanie || event.submitter === mnozenie || event.submitter === dzielenie){
        if(pierwszaLiczba.value == "" || drugaLiczba.value == ""){

            wynik.innerHTML = "Prosze uzupełnić obie liczby";

        } else if(event.submitter === dzielenie){
            if(drugaLiczba.value == 0){

                wynik.innerHTML = "Nie wolno dzielić przez zero";

            } else{

                const wynikDzielenia = Number(pierwszaLiczba.value) / Number(drugaLiczba.value);
                wynik.innerHTML = "Wynik działania wynosi: " + wynikDzielenia
            
            }
        } else if(event.submitter === dodawanie){

            const wynikDodawania = Number(pierwszaLiczba.value) + Number(drugaLiczba.value);
            wynik.innerHTML = "Wynik działania wynosi: " + wynikDodawania;

        } else if(event.submitter === odejmowanie){
            
            const wynikOdejmowania = Number(pierwszaLiczba.value) - Number(drugaLiczba.value);
            wynik.innerHTML = "Wynik działania wynosi: " + wynikOdejmowania;

        } else if(event.submitter === mnozenie){

            const wynikMnozenia = Number(pierwszaLiczba.value) * Number(drugaLiczba.value);
            wynik.innerHTML = "Wynik działania wynosi: " + wynikMnozenia;

        } else{

            wynik.innerHTML = "Błąd odśwież stronę i spróbuj ponownie";
        
        }
    }
});