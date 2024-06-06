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
        name: "",
        stylist: "",
        date: "",
        duration: ""
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
            cita.name = `${servicio.dataset.name}`
        }

        marcarServicio(e.target);
    }

    function seleccionarEstilista(e) {
        const estilista = e.target
        if(e.target.classList.contains('active')) {
            cita.stylist = `${estilista.dataset.name}`
        }

        marcarEstilista(e.target)
    }

    function seleccionarDia(e) {
        const diaMarcado = document.querySelector('.days .select');
        if(diaMarcado) {
            diaMarcado.classList.remove('select');
        }
        e.target.classList.add('select');
        const diaSeleccionado = +e.target.textContent;
        cita.date = diaSeleccionado;

    }

    function seleccionarHora(e) {
        const horaMarcada = document.querySelector('.time .select');
        if(horaMarcada) {
            horaMarcada.classList.remove('select');
        }
        e.target.classList.add('select');
        const horaSeleccionada = +e.target.textContent;
        cita.duration = horaSeleccionada;
    }

    function reservar() {
        const vacio = Object.values(cita).every(cita => cita != '');
        if (!vacio) {
            for (const key in cita) {
                if(cita[key] === '') {
                    if(key == 'name') {
                        console.log('name')
                    } else if(key == 'stylist') {
                        console.log('stylist')
                    } else if(key == 'date') {
                        console.log('date')
                    } else if(key == 'duration') {
                        console.log('duration')
                    }
                }
            }
            return
        }
        console.log(cita)
    }


    function marcarServicio(componente) {
        const marcado = servicios.querySelectorAll('.marcado');
        if(!componente.classList.contains('marcado')) {
            componente.classList.add('marcado');
            componente.style.outline = '3px solid #3483fa';
        } else {
            componente.classList.remove('marcado');
            componente.style.outline = 'none';
            cita.name = '';
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
            cita.stylist = '';
        }
        marcado.forEach(marcado => {
            marcado.classList.remove('marcado');
            marcado.style.outline = 'none';
        })
    }

})