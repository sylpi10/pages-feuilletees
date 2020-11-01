let menu = document.querySelector('nav');
let links = document.querySelector('nav>ul');
let burger = document.querySelector('#burger');



window.addEventListener("resize", () => {
    changeNav();
});

function changeNav() {
    if ( window.innerWidth < 1200) {
        links.style.display = 'none';
        burger.style.display = 'block';
        burger.className = 'fas fa-bars';
    }else{
        links.style.display = 'block';
        burger.style.display = 'none';
    }
}

burger.addEventListener('click', () => {
    if (  links.style.display == 'block') {
        links.style.display = 'none';
        burger.className = 'fas fa-bars';
        // burger.classList.remove = 'fas fa-times';
    }else{
        links.style.display = 'block';
        // burger.classList.remove = 'fas fa-bars';
        burger.className = 'fas fa-times';
    }
})

changeNav();

