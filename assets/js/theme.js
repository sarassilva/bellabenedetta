//menu mobile
const menu = document.querySelector('.side-mobile');
const overlay = document.querySelector('.overlay');

function toggleMenu() {
    menu.classList.toggle('show');
    overlay.classList.toggle('show');
}



//vantagens bar
const scrollContainer = document.querySelector(".vantagens");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});


