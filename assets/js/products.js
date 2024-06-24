let listElements = document.querySelectorAll('.list_button_click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{

        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;

        if(menu.clientHeight == 0){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;
    })
});


// const products = document.querySelector('.products_container');
// const alertaProducts = document.querySelector('.alerta-products');
// const circulos = document.querySelectorAll('.products_circle');

// products ? alertaProducts.style.display = "none" : alertaProducts.style.display = "block";

// circulos.forEach((circulo, i) => {
//     if(i%2 == 0) {
//         circulo.style.right = "40%";
//     } else {
//         circulo.style.left = "40%";
//     }
// })