var swiper = new Swiper(".mySwiper", {
    loop: true, // Faz com que o slide seja infinito
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 6000, // Tempo entre os slides (em milissegundos)
        disableOnInteraction: false,
    },
    speed: 1300, // Tempo de transicao entre os slides (em milissegundos)
});

let btn_home = document.querySelector("#home_link");



btn_home.addEventListener("click", (e) => {
    e.preventDefault();
    if (window.scrollY == 0) {
        console.log('Você já está na página inicial')
        window.location.reload(true);
    } else {
        window.scrollTo(0, 0);
    }
    e.preventDefault();
    return false;
});

