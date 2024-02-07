


//aca encontraremops los script de navegacion y info

//NAVEGACION
function toggleMenu() {
    const menu = document.querySelector('.menu');
    menu.classList.toggle('active');
}
function mostrarInformacion(tipo) {
    document.getElementById(`informacion${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`).style.display = 'block';
}

function ocultarInformacion(tipo) {
    document.getElementById(`informacion${tipo.charAt(0).toUpperCase() + tipo.slice(1)}`).style.display = 'none';
}


// segunda seccion //

function mostrarInformacion(tipo) {
    document.getElementById('informacionMision').style.display = tipo === 'mision' ? 'block' : 'none';
    document.getElementById('informacionVision').style.display = tipo === 'vision' ? 'block' : 'none';
}

function ocultarInformacion(tipo) {
    document.getElementById('informacionMision').style.display = 'none';
    document.getElementById('informacionVision').style.display = 'none';
}
