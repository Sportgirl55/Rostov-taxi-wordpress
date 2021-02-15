'use strict';



window.onload = function () {

    // HAMBURGER
    const hamb = document.querySelector('.hamb');
    const header = document.querySelector('.header-page');
    const closeMenu = document.querySelector('.close-menu');
    const menuItems = document.querySelectorAll('.main-menu li');

    hamb.addEventListener('click', function () {
        console.log('tyt')
        header.classList.add('open');
    });

    closeMenu.addEventListener('click', function () {
        header.classList.remove('open');
    });

    menuItems.forEach(function (item) {
        item.addEventListener('click', function () {
            header.classList.remove('open');
        })
    })

    // BUTTON UP

    const btnUp = document.querySelector('.btn-up');
    const rootElement = document.documentElement;

    btnUp.addEventListener("click", function () {
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    })
}

