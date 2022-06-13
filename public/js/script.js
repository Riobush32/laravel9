window.onscroll = function () {
    const header = document.querySelector('header');
    const fixNav = header.offsetTop;

    if (window.pageYOffset > fixNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}

// hamberger  

const hamberger = document.querySelector('#humberger');
const navMenu = document.querySelector('#nav-menu');

hamberger.addEventListener('click', function () {
    hamberger.classList.toggle('hamberger-active');
    navMenu.classList.toggle('hidden');
});