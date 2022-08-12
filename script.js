/* Слайдер в боке Intro */

const slides = document.querySelectorAll(".slide");
for( const slide of slides){
    slide.addEventListener("click", () => {
        clearActiveClasses()
        slide.classList.add("active")
    })
}
function clearActiveClasses(){
    slides.forEach((slide) => {
        slide.classList.remove("active")
    })
}

/* Бургер-меню */

(function () {
    let burgerItem = document.querySelector('.burger');
    let menu = document.querySelector('.navig');
    let menuCloseItem = document.querySelector('.header__nav-close');

    burgerItem.addEventListener('click', () => {
        menu.classList.add('navig_active');
    });
    menuCloseItem.addEventListener('click', () => {
        menu.classList.remove('navig_active');
    });
}());


/* Кнопка прокрутки наверх */

$(document).ready(function(){
 
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
     
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 100);
        return false;
    });
});


