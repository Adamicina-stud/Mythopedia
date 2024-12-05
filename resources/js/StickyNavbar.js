window.addEventListener('scroll', function () {
    const headerTop = document.querySelector('.header-top');
    const nav = document.querySelector('nav');
    const mainContent = document.querySelector('main');
    const footer = document.querySelector('footer');

    // Prepočítanie výšky iba pri zmene
    const navHeight = nav.offsetHeight;
    const footerHeight = footer.offsetHeight;

    // Sticky navigácia
    if (window.scrollY > headerTop.offsetHeight) {
        if (!nav.classList.contains('sticky')) {
            nav.classList.add('sticky');
            mainContent.style.paddingTop = `${navHeight}px`;
        }
    } else {
        if (nav.classList.contains('sticky')) {
            nav.classList.remove('sticky');
            mainContent.style.paddingTop = '0';
        }
    }

    // Padding pre footer
    const currentPaddingBottom = parseInt(window.getComputedStyle(mainContent).paddingBottom, 10);
    if (currentPaddingBottom !== footerHeight) {
        mainContent.style.paddingBottom = `${footerHeight}px`;
    }
});
