
<nav class="navbar navbar-expand-lg py-0">
    <div class="container align-items-stretch">
        <div class="container-fluid ">
            <a class="navbar-brand" href="?c=Landing&m=landing">
                <img src="./assets/images/logo-navbar.svg" alt="Logo" width="219px" height="56px">
            </a>
        </div>
        <div class="collapse navbar-collapse align-items-stretch" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item d-flex fw-bold align-items-center">
                    <a class="nav-link gris-color" aria-current="page" href="?c=Landing&m=landing">Inicio</a>
                </li>
                <li class="nav-item d-flex fw-bold align-items-center">
                    <a class="nav-link gris-color" aria-current="page" href="?c=Services&m=index">Servicios</a>
                </li>
                <li class="nav-item d-flex fw-bold align-items-center">
                    <a class="nav-link gris-color"  href="?c=Products&m=products">Productos</a>
                </li>
                <li class="nav-item d-flex fw-bold align-items-center">
                    <a class="nav-link gris-color" href="?c=Appointments&m=index"> Reserva</a>
                </li>
                <li class="nav-item d-flex fw-bold align-items-center">
                    <div class="nav-link gris-color name-user d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" color="#7C838A" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                        <div class="name">
                        </div>
                    </div>
                    <ul class="notificacion position-absolute d-none">
                        <li class="info-logout d-flex justify-content-evenly align-items-center d-none" onclick="logout()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                            <div class="text-user">
                                Cerrar sesión
                            </div>
                        </li>
                        <li class="info-login d-flex justify-content-evenly align-items-center" onclick="window.location.href='?c=Login&m=login'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                            <div class="text-user">
                                Iniciar sesión
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="./assets/js/navBar.js"></script>