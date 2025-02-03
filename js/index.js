document.querySelector('.header__burger').addEventListener('click', function() {
    this.classList.toggle('burger--active');
    document.querySelector('.header__menu').classList.toggle('menu--active');
});