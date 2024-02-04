// Creando una variable para "obtener" todas las entradas
const inputs = document.querySelectorAll('.input');

// Función para agregar etiquetas dinámicas a las entradas
function subirTexto() {
    let parent = this.parentNode.parentNode;
    parent.classList.add('texto');
}

// Función para colapsar la etiqueta dinámica cuando hay un clic del mouse fuera del formulario
function bajarTexto() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove('texto');
    }
}


//Funcion para agregar los eventos
inputs.forEach(input => {
    input.addEventListener('focus', subirTexto);
    input.addEventListener('blur', bajarTexto);
});
