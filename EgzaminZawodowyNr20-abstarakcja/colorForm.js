document.addEventListener('DOMContentLoaded', function(){
    var links = document.querySelectorAll('#lista a');
    var square = document.querySelector('#square');

    function ObslugaKlikniecia(event){
        event.preventDefault();
        
        var id = event.target.id;
        var listItem = event.target.parentNode;
        var kolor;

        if(id.startsWith('id_1')){
            kolor = "white";
        } else if(id.startsWith('id_2')){
            kolor = "red";
        } else if(id.startsWith('id_3')){
            kolor = "blue";
        } else if(id.startsWith('id_4')){
            kolor = "yellow";
        } else if(id.startsWith('id_5')){
            kolor = "green";
        } else if(id.startsWith('id_6')){
            kolor = "black";
        } else if(id.startsWith('id_7')){
            kolor = "purple";
        }
        
        listItem.style.color = kolor;
        square.style.backgroundColor = kolor;
    }

    links.forEach(function(link){
        link.addEventListener('click', ObslugaKlikniecia);
    });
});

