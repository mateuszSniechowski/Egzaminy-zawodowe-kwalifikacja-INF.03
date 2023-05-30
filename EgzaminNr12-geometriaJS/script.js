const form = document.querySelector('#form');
const kwadrat = document.querySelector("#kwadrat");
const kolo = document.querySelector("#kolo");
const panelPrawy = document.querySelector("#panel-prawy");


kwadrat.addEventListener('mouseenter', () => {

  const image = new Image();
  image.src = "grafika/kwadrat.png";
  image.classList.add("image");

  const width = panelPrawy.getBoundingClientRect().width - 80;
  const height = panelPrawy.getBoundingClientRect().height - 80;

  const topPosition = Math.floor(Math.random() * height);
  const leftPosition = Math.floor(Math.random() * width);

  image.style.position = 'absolute';
  image.style.top = `${topPosition}px`;
  image.style.left = `${leftPosition}px`;

  panelPrawy.appendChild(image);
  
});

kwadrat.addEventListener('mouseleave', ()=>{
    location.reload();
})

kolo.addEventListener("mouseenter", () =>{
    const imageK = new Image();
    imageK.src = "grafika/kolo.png";
    imageK.classList.add("image");

    const width = panelPrawy.getBoundingClientRect().width - 80;
    const height = panelPrawy.getBoundingClientRect().height - 80;

    const top = Math.floor(Math.random() * height);
    const left = Math.floor(Math.random() * width);

    imageK.style.position = 'absolute';
    imageK.style.top = `${top}px`;
    imageK.style.left = `${left}px`;

    panelPrawy.appendChild(imageK);
})

kolo.addEventListener("mouseleave", ()=>{
    location.reload();
})