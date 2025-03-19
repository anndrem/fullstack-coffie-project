const $ = (element) => {
    return document.querySelector(element)
}

const menuPai = $('.menu-list');
const ul = $('.list');
const icon_btn = $('.open-list-responsive')
const li = document.querySelectorAll('.item')
var opacity_body = document.body.style.opacity
icon_btn.addEventListener('click', () => {
    if (menuPai.style.width <= '12%' && menuPai.style.height <= '5%') {
        menuPai.style.width = '20%';
        menuPai.style.height = '100%';
        li.forEach(element => {
            element.style.display = 'block'
        })
        opacity_body = '0.5'
        console.log(Number(opacity_body))

    } else {
        menuPai.style.width = '12%';
        menuPai.style.height = '5%';
        li.forEach(element => {
            element.style.display = 'none'
        })
    }
})