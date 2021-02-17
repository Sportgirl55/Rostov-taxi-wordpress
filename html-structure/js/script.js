'use strict';

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        nav: true, //Включение навигации
        margin: 30, //Отступ от элемента справа в 50px
        responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
  });
