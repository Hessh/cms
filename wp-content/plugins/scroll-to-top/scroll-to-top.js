/** Function for scrolling to top (with smooth "animation" for laptop) */
function topScroll() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    setTimeout(1000)
}