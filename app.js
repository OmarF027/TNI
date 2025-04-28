// Mobile Menu Handler
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const body = document.querySelector('body');

const mobileMenu = () => {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
    body.classList.toggle('no-scroll');
    
    if(menuLinks.classList.contains('active')) {
        menuLinks.style.transform = 'translateY(0)';
        menuLinks.style.opacity = '1';
    } else {
        menuLinks.style.transform = 'translateY(-20px)';
        menuLinks.style.opacity = '0';
    }
}

menu.addEventListener('click', mobileMenu);

document.addEventListener('click', (e) => {
    if(!menu.contains(e.target) && !menuLinks.contains(e.target)) {
        if(menuLinks.classList.contains('active')) {
            mobileMenu();
        }
    }
});

document.querySelectorAll('.navbar__links').forEach(link => {
    link.addEventListener('click', () => {
        if(menuLinks.classList.contains('active')) {
            mobileMenu();
        }
    });
});

// Scroll Animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('visible');
            if(entry.target.classList.contains('main')) {
                entry.target.querySelector('.main__content').style.animation = 
                    'slideUp 1s ease-out forwards';
            }
        }
    });
}, { threshold: 0.15 });

document.querySelectorAll('.scroll-transition').forEach((el) => {
    observer.observe(el);
});

// Hover Effects
document.querySelectorAll('.hover-scale').forEach(item => {
    item.addEventListener('mouseover', () => {
        item.style.transform = 'scale(1.03)';
        item.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
    });
    
    item.addEventListener('mouseout', () => {
        item.style.transform = 'scale(1)';
    });
});

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});
