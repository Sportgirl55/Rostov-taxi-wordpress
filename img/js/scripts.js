/* slider */
const slider = document.querySelectorAll('.slide');
const navSlider = document.querySelector('.nav-slider');

for(let i = 0; i < slider.length; i++) {
    if(i === 0) {
        navSlider.insertAdjacentHTML('beforeEnd', '<button class="nav-slider__item nav-slider__item_active"></button>');
    } else {
        navSlider.insertAdjacentHTML('beforeEnd', '<button class="nav-slider__item"></button>');
    }
}

const navItems = document.querySelectorAll('.nav-slider__item');

for(let i = 0; i < slider.length; i++) {

    navItems[i].addEventListener('click', function () {

        for(let i = 0; i < slider.length; i++) {
            navItems[i].classList.remove('nav-slider__item_active');
            slider[i].classList.remove('slide-show');
        }

        this.classList.add('nav-slider__item_active');
        slider[i].classList.add('slide-show');
    })

}
/* slider end */