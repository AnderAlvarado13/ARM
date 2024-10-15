let btnMenu = document.querySelector('.btn-menu');
let menu = document.querySelector('.list-container');
let containerMenu = document.querySelector('.menu');
let activador = true;

// Menu de navegacion

btnMenu.addEventListener('click', () => {

   document.querySelector('.btn-menu i').classList.toggle('fa-times');
    
    if(activador){
      
     menu.style.left = "0";
     menu.style.transition = "0.5s";

     activador = false;

    }else{
        activador = false;

     menu.style.left = "-100%";
     menu.style.transition = "0.5s";
     
     activador = true;

    }

});

// Intercalar clase Active

let enlaces = document.querySelectorAll('.list li a');

enlaces.forEach( (element) => {
   
 element.addEventListener('click', (event) => {

    enlaces.forEach( (link) => {
        link.classList.remove('activo');
    });

    event.target.classList.add('activo');

 });

});

// Efectos Scroll

let prevScrollPos = window.pageYOffset;
let goTop = document.querySelector('.go-top');

window.onscroll = () => {

  let currenScrollPos = window.pageYOffset;

   // Mostrar y ocultar menu
   if (prevScrollPos > currenScrollPos) {

      containerMenu.style.top = "0";
      containerMenu.style.transition = "0.3s";

   }else{
    containerMenu.style.top = "-60px";
    containerMenu.style.transition = "0.3s";
   }

   prevScrollPos = currenScrollPos;

   // Mostrar y ocultar scroll Estilos
   
   let arriba = window.pageYOffset;

   if (arriba <= 500) {
     containerMenu.style.borderBottom = "none";

     goTop.style.right = "-100%";

   }else{
    containerMenu.style.borderBottom = "3px solid #141681";

     goTop.style.right = "0";
     goTop.style.transition = "0.3s";
   }
  
}

goTop.addEventListener('click', () => {
  
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;

});


