const $ = (element) => {
    return document.querySelector(element)
}

const menuPai = $('.menu-list');
const ul = $('.list');
const li = document.querySelectorAll('.item')
const body = document.body.innerHTML
var w_body = document.body.clientWidth

if (menuPai.style.width == '5%') {
    menuPai.addEventListener('click', () => {
        menuPai.style.width = '18%';
        li.forEach((element) => {
            element.style.display = 'block'
        })
    })
} else if (w_body <= '500px') {
    menuPai.addEventListener('click', () => {
        menuPai.style.width = '5%';
        li.forEach((element) => {
            element.style.display = 'none'
        })
    })
}

