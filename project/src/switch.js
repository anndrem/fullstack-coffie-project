// const $ = (element) => {
//     return document.querySelector(element)
// }

const swt = $('.switch-opt')
const almoco = $('.swt-almoco')
const cafe = $('.swt-cafe')

const divCafe = $('#divCafe')
const divAlmoco = $('#divAlmoco')

document.addEventListener('DOMContentLoaded', (e) => {
    divCafe.style.opacity = '0'
})

swt.addEventListener('click', () => {
    swt.classList.toggle('active');
    divCafe.style.opacity = '1'

    if (swt.classList.contains('active')) {
        cafe.classList.add('escolhido');
        almoco.classList.remove('escolhido');


        divAlmoco.classList.add('card-escondido');
        divCafe.classList.remove('card-escondido');

        divAlmoco.classList.remove('card-aparece');
        divCafe.classList.add('card-aparece');

    } else {
        almoco.classList.add('escolhido');
        cafe.classList.remove('escolhido');



        divAlmoco.classList.remove('card-escondido');
        divCafe.classList.add('card-escondido');

        divAlmoco.classList.add('card-aparece');
        divCafe.classList.remove('card-aparece');
    }



})

