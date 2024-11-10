document.addEventListener("DOMContentLoaded", () => {
  renderizarInfo();
  renderizarNombre();
  renderizarBtnCitas();
});

//Variables
const btnUser = document.querySelector(".navbar-nav li:last-child .nav-link");
const btnInfo = document.querySelector(
  ".navbar-nav li:last-child .notificacion"
);

//Eventos
btnUser.addEventListener("click", () => {
  btnInfo.classList.toggle("d-none");
});

//Funciones
function idUser() {
  const id = localStorage.getItem("id");
  if (id) {
    return true;
  } else {
    return false;
  }
}

function renderizarInfo() {
  const infoLogout = document.querySelector(
    ".navbar-nav li:last-child .info-logout"
  );
  const infoLogin = document.querySelector(
    ".navbar-nav li:last-child .info-login"
  );
  if (!idUser()) {
    infoLogin.classList.remove("d-none");
    infoLogout.classList.add("d-none");
  } else {
    infoLogout.classList.remove("d-none");
    infoLogin.classList.add("d-none");
  }
}

function logout() {
  localStorage.removeItem("email");
  localStorage.removeItem("name");
  localStorage.removeItem("id");
  window.location.href = './'
}

function renderizarNombre() {
  const divNombre = btnUser.querySelector(".name");
  const nombre = localStorage.getItem("name");
  if (nombre) {
    divNombre.textContent = nombre;
    return;
  }
  divNombre.textContent = "Login";
}

function renderizarBtnCitas() {
    const btnCitas = document.querySelector('li.appointments');
    if (idUser()) {
        btnCitas.classList.remove('d-none');
        console.log('si')
    } else {
        btnCitas.classList.add('d-none');
    }
}

function tusCitas() {
    const id = localStorage.getItem("id");
    window.location.href = `?c=AppointmentsDetails&m=index&id=${id}`
}
