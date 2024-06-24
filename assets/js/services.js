const servicios = document.querySelector('.servicio_container');
const alertaServicios = document.querySelector('.alerta-servicios');
const circulos = document.querySelectorAll('.servicios_circle');

servicios ? alertaServicios.style.display = "none" : alertaServicios.style.display = "block";

circulos.forEach((circulo, i) => {
    if(i%2 == 0) {
        circulo.style.right = "40%";
    } else {
        circulo.style.left = "40%";
    }
})

