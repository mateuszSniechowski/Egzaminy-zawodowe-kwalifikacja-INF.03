const form = document.querySelector('#form');
const btn = document.querySelector('#submit');
const pow = document.querySelector('#pow');
const wynik = document.querySelector('#wynik');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    if(pow.value > 0){
        var liczba_puszek = pow.value / 4;
        wynik.innerHTML = "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " + Math.ceil(liczba_puszek);
    } else{
        wynik.innerHTML = "Podaj powierzchnię";
    }
})