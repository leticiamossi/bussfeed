let logo = document.getElementById('logo');
let text1 = document.getElementById('text1');
let text2 = document.getElementById('text2');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    logo.style.top = value * 1.5 + 'px'
    text1.style.right = value * 1.5 + 'px';
    text2.style.left = value * -1.5 + 'px';
});