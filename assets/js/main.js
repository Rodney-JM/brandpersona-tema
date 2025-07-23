const navbar = document.querySelector("header");
const menuButton = document.querySelector(".menu-button");


//adiciona e retira a classe show-menu
menuButton.addEventListener('click', ()=> {
    navbar.classList.toggle("show-menu");
})


window.addEventListener('scroll', function(){
    let scroll = this.document.querySelector('.scroll_top_wrapper')
    scroll.classList.toggle('show', this.window.scrollY> 850);
})

function backToTop(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}