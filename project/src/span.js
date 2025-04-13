// Função para selecionar elementos
// const $ = (e) => document.querySelector(e);

const aviso = $('.aviso-span');
const btn = $('.btn');
const allinput = document.querySelectorAll('.input_cad');

document.addEventListener('DOMContentLoaded', () => {
    verificarInputs();
});

function verificarInputs() {
    let algumVazio = Array.from(allinput).some(input => input.value.trim() === '');
    if (algumVazio) {
        btn.classList.add('disable');
        btn.disabled = true;
    } else {
        btn.classList.remove('disable');
        btn.disabled = false;

        btn.addEventListener('click', () => {
            // alert('cadastrado');
            aviso.style.visibility = 'visible'
        })
    }

}

allinput.forEach(input => {
    input.addEventListener('input', verificarInputs);
});
