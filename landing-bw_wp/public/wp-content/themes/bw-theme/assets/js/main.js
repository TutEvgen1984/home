/*$(document).ready(function () {
    /~ Плавная прокрутка меню ~/
    $('.header a[href^="#"]').click(function () {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);
        $('.header a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu').toggle(500);
        $('.menu__burger').toggleClass('close');
        return false;
    });
    /~ Мобильное меню ~/
    $('.menu__burger').click(function () {
        $('.menu__mobile .menu').toggle(500);
        $(this).toggleClass('close');
    });
});*/

console.log('main.js on');

// <!-- Initialize Swiper -->
//   <script type="module">
// import Swiper from 'swiper/swiper-bundle.mjs';
// import 'swiper/swiper-bundle.css';
var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    slidesPerGroup: 3,
    loop: true,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

});
//   </script>