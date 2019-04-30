//Variables
const email     =   document.getElementById('mail');
const asunto    =   document.getElementById('asunto');
const mensaje   =   document.getElementById('message_text');
const btnEnviar =   document.getElementById('btnMail');

//EventListener
eventListeners();

function eventListeners() {
    document.addEventListener('DOMContentLoaded',inicioApp);
    email.addEventListener('blur',validarCampo);
    asunto.addEventListener('blur',validarCampo);
}

function inicioApp() {
    btnEnviar.disabled  =   true;
}

function validarCampo() {
    if (this.type   === 'mail'){
        validarEmail(this);
    }
}

function validarEmail(campo) {
    const mensaje   =   campo.value;
    if (mensaje.index('@')!==-1){
        campo.style.borderBottomColor   =   'green';
        campo.classList.remove('error');
    }else
    {
        campo.style.borderBottomColor   =   'red';
        campo.classList.add('error');
    }
}