const nav = document.getElementById('navbar');
const logoText = document.getElementById('logo-text');
const logoSub = document.getElementById('logo-sub');

window.addEventListener('scroll', () => {
    if (!nav) return;

    if (window.scrollY > 60) {
        nav.classList.add('scrolled');

        if (logoText) logoText.style.color = '#262525';
        if (logoSub) logoSub.style.color = '#B7B7B7';
    } else {
        nav.classList.remove('scrolled');

        if (logoText) logoText.style.color = '#FFFFFF';
        if (logoSub) logoSub.style.color = 'rgba(255,255,255,.7)';
    }
});