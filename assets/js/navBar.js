document.addEventListener('DOMContentLoaded', () => {
    renderizarInfo();
    renderizarNombre();
})


//Variables
const btnUser = document.querySelector('.navbar-nav li:last-child .nav-link');
const btnInfo = document.querySelector('.navbar-nav li:last-child .notificacion');

//Funciones
function idUser() {
    const email = localStorage.getItem('email');
    if(email) {
        return true
    } else {
        return false;
    }

}

function renderizarInfo() {
    const infoLogout = document.querySelector('.navbar-nav li:last-child .info-logout');
    const infoLogin = document.querySelector('.navbar-nav li:last-child .info-login');
    if(!idUser()) {
        infoLogin.classList.remove('d-none');
        infoLogout.classList.add('d-none');
    } else {
        infoLogout.classList.remove('d-none');
        infoLogin.classList.add('d-none');
    }
}




//Eventos
btnUser.addEventListener('click', () => {
    btnInfo.classList.toggle('d-none');
});

function logout() {
    localStorage.removeItem('email');
    localStorage.removeItem('name');
    location.reload();
}

function renderizarNombre() {
    const divNombre = btnUser.querySelector('.name');
    const nombre = localStorage.getItem('name');
    if (nombre) {
        divNombre.textContent = nombre; 
        return;
    }
    divNombre.textContent = 'Login'
}
