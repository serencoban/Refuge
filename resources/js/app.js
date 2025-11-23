import './bootstrap';

document.getElementById('burgerMenu').addEventListener('click', function() {
    document.getElementById('footerMenu').scrollIntoView({
        behavior: 'smooth'
    });
});

console.log('hello')
