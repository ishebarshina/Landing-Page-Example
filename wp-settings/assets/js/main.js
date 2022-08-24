// Пишем с проверкой, что html прогрузился
// С помощью символа $ мы можем обратиться к любому элемену 
// через CSS-селектор следующим образом: $('CSS-селектор')
$(document).ready(function() {
    //------------------ скролл страницы -----------------------
    // напишем селектор + по клику
    $('.header a[href^="#"]').click( function() { 
        // создаем переменную target
        // в данном контексте this - это ссылка, по которой был выполнен клик
        // метод attr позволяет выбрать атрибут и получить его значение
        // итак -- бере значение из атрибута href 
        // и записываем его в переменную target
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
        // удалим статус active для всех ссылок
        // parent() - обращаемся к li, т.е. к родителю
        $('.menu__item a').removeClass('active');
        // установим active для текущей ссылки,
        // то есть для той, на которую кликнули
        $(this).addClass('active');
        $('.menu__mobile .menu').toggle(600);
        $('.menu__burger').toggleClass('close');
        return false;
    });
    //--------------- мобильное меню -------------------------
    $('.menu__burger').click(function() {
        $(this).toggleClass('close');
        $('.menu__mobile .menu').toggle(600);
    });
    // слайдер
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });

})