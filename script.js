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
