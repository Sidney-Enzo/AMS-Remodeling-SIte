let buttons = document.getElementsByClassName('toggleButton');
let texts = document.getElementsByClassName('extraText');

for (let i = 0; i < buttons.length; i++) 
{
    buttons[i].addEventListener('click', () => {
        if (texts[i].style.display == 'none') {
            texts[i].style.display = 'block';
            buttons[i].textContent = '\u25B2';
        } else {
            texts[i].style.display = 'none';
            buttons[i].textContent = '\u25BC';
        }
    })
}