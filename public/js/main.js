const iconoMenu = document.querySelector('#icono-menu'),
        menu = document.querySelector('#menu');

iconoMenu.addEventListener('click', (e) => {
    //Alteramos estilos para el menu y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');
    const rutaActual = e.target.getAttribute('src');

    if(rutaActual == 'assets/hamb-icono.png'){
        e.target.setAttribute('src', 'assets/hamb-icono.png')
    }else{
        e.target.setAttribute('src', 'assets/hamb-icono.png')
    }

});

function cerrarMenu(){
    menu.classList.add('active');
}

// Slider

const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function Next() {
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 500); // = 0.5s
}

function Back() {
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 500); // = 0.5s
}

btnRight.addEventListener('click', function(){
    Next();
});

btnLeft.addEventListener('click', function(){
    Back();
});

setInterval(function() {
    Next();
}, 5000);