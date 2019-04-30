const noEmp     =   document.getElementById('NoEmp');
const userPass  =   document.getElementById('EmpPass');
const btnLogin  =   document.getElementById('btnLogin');



eventListener();

function eventListener() {
    document.addEventListener('DOMContentLoaded',inicioLogin);
    noEmp.addEventListener('blur');
    userPass.addEventListener('blur');
}

function inicioLogin() {
    btnLogin.disabled(true);
}

function iniciarSesion(e) {
    console.log('Bienvenido');
    const spinnerGif    =   document.querySelector('#spinner');
    spinnerGif.style.display    =   "block";
     const enviado  =   document.createElement('img');
     enviado.src="assets/img/spinner.gif";
     enviado.style.display  =   'block';
     e.preventDefault();
}
