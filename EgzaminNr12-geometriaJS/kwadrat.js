const dane = document.querySelector("#dane");
const form = document.querySelector("#form");
const wynik = document.querySelector("#wynik");
const obwodBTN = document.querySelector('input[type="submit"][name="obwod"]');
const poleBTN = document.querySelector('input[type="submit"][name="pole"]');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    console.log(event.submitter.value);

    if(event.submitter === obwodBTN){
        const obwod = dane.value * 4;
        wynik.innerHTML = "Obw = 4a = " + obwod;
        
        if(obwod === 0){
            const error = "Należy wpisać daną liczbową";
            wynik.innerHTML = error;
        }
    } else if(event.submitter === poleBTN){
        const pole = Math.pow(dane.value, 2);
        wynik.innerHTML = "P = a<sup>2</sup> = " + pole;

        if(pole === 0){
            const error = "Należy wpisać daną liczbową";
            wynik.innerHTML = error;
        }
    }

})

