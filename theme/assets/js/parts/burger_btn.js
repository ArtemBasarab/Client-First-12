document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.header__burger-btn').addEventListener('click', () => {
        document.querySelector('.header__burger-btn').classList.toggle('header__burger-btn-active')
        document.querySelector('.header__menu').classList.toggle('header__menu-active')
    })
})