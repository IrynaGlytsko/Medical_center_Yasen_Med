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


/* Слайдер на странице О НАС */

