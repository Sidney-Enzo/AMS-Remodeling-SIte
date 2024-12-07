let buttons = document.getElementsByClassName('toggleButton');
let texts = document.getElementsByClassName('extraText');

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        if (texts[i].classList.contains('active')) {
            texts[i].classList.remove('active');
            buttons[i].textContent = '\u25BC'; // Ícone de seta para baixo
        } else {
            texts[i].classList.add('active');
            buttons[i].textContent = '\u25B2'; // Ícone de seta para cima
        }
    });
}
