let scrollPosition = 0;

function scrollGallery(direction) {
    const gallery = document.querySelector('.gallery');
    const scrollAmount = 220;
    scrollPosition += direction * scrollAmount;

    const maxScroll = gallery.scrollWidth - gallery.clientWidth;  // výpočet maximálnej pozície scrollu, odpočíta o koľko sme s aposunuli od celkovej šírky elementu
    scrollPosition = Math.max(0, Math.min(scrollPosition, maxScroll)); // zabezpečenie toho, aby hodnoty scollovania nešli pod nulu. aka aby obrázky zostali vo viditeľnej časti galérie

    gallery.scrollTo({
        top: 0,
        left: scrollPosition,
        behavior: 'smooth'
    });
}