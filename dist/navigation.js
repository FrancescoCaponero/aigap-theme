function toggleMenu() {
    const nav = document.getElementById('site-navigation');
    const hamburger = document.querySelector('.hamburger');
    const closeMenu = document.querySelector('.close-menu');

    if (nav.style.display === 'none' || nav.style.display === '') {
        nav.style.display = 'flex';
        nav.classList.add('active');
        hamburger.style.display = 'none';
        closeMenu.style.display = 'block';
    } else {
        nav.style.display = 'none';
        nav.classList.remove('active');
        hamburger.style.display = 'block';
        closeMenu.style.display = 'none';
    }
}