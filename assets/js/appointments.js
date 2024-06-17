//Calendario
const currentDate = document.querySelector('.Current-date');
const prevNext = document.querySelectorAll('.icons .bi');
const days = document.querySelector('.days');
const fecha = new Date();
let currentYear = fecha.getFullYear();
let currentMonth = fecha.getMonth();
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

//Eventos
prevNext.forEach(arrow => {
    arrow.addEventListener('click', () => {
        currentMonth = arrow.id === 'prev' ? currentMonth - 1 : currentMonth + 1;
        calendario();
    })
})

function calendario() {
    const firstDaysMonth = new Date(currentYear, currentMonth, 1).getDay();
    const daysMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const lastDaysPrevMonth = new Date(currentYear, currentMonth, 0).getDate();
    const lastDaysMonth = new Date(currentYear, currentMonth, daysMonth).getDay();
    currentDate.innerHTML = `${meses[currentMonth]}`; 

    days.innerHTML = ''
    for (let i = firstDaysMonth; i > 1; i--) {
        days.innerHTML += `<li class="prev-next-month">${lastDaysPrevMonth - i + 1}</li>`;
        
    }
    
    for (let i = 1; i <= daysMonth; i++) {
        let today = i === fecha.getDate() && currentMonth === new Date().getMonth() && currentYear === new Date().getFullYear() ? 'today' : '';
        days.innerHTML += `<li class="${today}">${i}</li>`;
        
    }

    for (let i = lastDaysMonth; i < 7; i++) {
        days.innerHTML += `<li class="prev-next-month">${i - lastDaysMonth + 1}</li>`;
        
    }
}

calendario()


//Funcionalidad citas
document.addEventListener('DOMContentLoaded', () => {
    //Variables
    const servicios = document.querySelector('.appointments-services');
    const estilistas = document.querySelector('.appointments-stylist');
    const dias = document.querySelectorAll('.calendario .days li');
    const horas = document.querySelectorAll('.hour li');
    const btnReservar = document.querySelector('.reserva-cita')
    const cita = {
        status: "Espera",
        date: "",
        hora: "",
        clients_id: 2,
        employees_id: "",
        services_id: ""
    }
    
    //Eventos
    servicios.addEventListener('click', seleccionarServicio);
    estilistas.addEventListener('click', seleccionarEstilista);
    dias.forEach(dia => {
        dia.addEventListener('click', seleccionarDia)
    })
    horas.forEach(hora => {
        hora.addEventListener('click', seleccionarHora)
    })
    btnReservar.addEventListener('click', reservar);

    //Funciones
    function seleccionarServicio(e) {
        const servicio = e.target
        if(e.target.classList.contains('active')) {
            cita.services_id = +servicio.id
        }

        marcarServicio(e.target);
    }

    function seleccionarEstilista(e) {
        const estilista = e.target
        if(e.target.classList.contains('active')) {
            cita.employees_id = +estilista.id
        }

        marcarEstilista(e.target)
    }

    function seleccionarDia(e) {
        const diaMarcado = document.querySelector('.days .select');
        if(diaMarcado) {
            diaMarcado.classList.remove('select');
        }
        e.target.classList.add('select');
        const dia = +e.target.textContent;
        const diaSeleccionado = `${currentYear}-${currentMonth+1}-${dia}`;
        cita.date = diaSeleccionado;

    }

    function seleccionarHora(e) {
        const horaMarcada = document.querySelector('.time .select');
        if(horaMarcada) {
            horaMarcada.classList.remove('select');
        }
        e.target.classList.add('select');
        const horaSeleccionada = e.target.textContent;
        cita.hora = horaSeleccionada;
    }

    function reservar() {
        const vacio = Object.values(cita).every(cita => cita != '');
        console.log(cita)
        if (!vacio) {
            for (const key in cita) {
                if(cita[key] === '') {
                    if(key == 'services_id') {
                        mostrarMensaje("Debe seleccionar un servicio", "error");
                    } else if(key == 'employees_id') {
                        mostrarMensaje("Debe seleccionar un estilista", "error");
                    } else if(key == 'date') {
                        mostrarMensaje("Debe seleccionar una fecha", "error");
                    } else if(key == 'hora') {
                        mostrarMensaje("Debe seleccionar una hora", "error");
                    }
                }
            }
            return
        }
        agendarCita(cita)       
    }


    async function agendarCita(appointment) {
        const url = '?c=Appointments&m=create';
        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(appointment)
            });
            const result = await response.json();
            if (result.success == true) {
                mostrarMensaje("Su cita ha sido reservada correctamente");
            }
        } catch (error) {
            console.log('Error:', error);
        }
    }

    function marcarServicio(componente) {
        const marcado = servicios.querySelectorAll('.marcado');
        if(!componente.classList.contains('marcado')) {
            componente.classList.add('marcado');
            componente.style.outline = '3px solid #3483fa';
        } else {
            componente.classList.remove('marcado');
            componente.style.outline = 'none';
            cita.services_id = '';
        }
        marcado.forEach(marcado => {
            marcado.classList.remove('marcado');
            marcado.style.outline = 'none';
        })
    }
    function marcarEstilista(componente) {
        const marcado = estilistas.querySelectorAll('.marcado');
        if(!componente.classList.contains('marcado')) {
            componente.classList.add('marcado');
            componente.style.outline = '3px solid #3483fa';
        } else {
            componente.classList.remove('marcado');
            componente.style.outline = 'none';
            cita.employees_id = '';
        }
        marcado.forEach(marcado => {
            marcado.classList.remove('marcado');
            marcado.style.outline = 'none';
        })
    }

    function mostrarMensaje(mensaje, tipo) {
        const alerta = document.querySelector('.mensaje-appointment');
        alerta.textContent = mensaje;
        alerta.classList.remove('d-none');
        alerta.style.left = "1%"

        if(tipo == 'error') {
            alerta.classList.add('alert-danger');
        } else {
            alerta.classList.remove('alert-danger');
            alerta.classList.add('alert-success');
            setTimeout(() => {
                window.location.href = '?c=Landing&m=landing';
            }, 2500);
        }
        setTimeout(() => {
            alerta.style.left = "-20%";
        }, 2000);

    }

})