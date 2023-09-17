// Referencia Formulario --------------------------------
const form = document.getElementById("form");/* COMPLETAR */

// Referencia Campos formulario -------------------------
// Hora
const hora = document.getElementById("hora");/* COMPLETAR */
// Cantidad
const cantidad = document.getElementById("cantidad");/* COMPLETAR */

// Mensajes ---------------------------------------------
// span mensaje advertencia cantidad
const msgCantidad = document.getElementById("msg-cantidad");

// Ocultar mensaje cambiado propiedad css ---------------
msgCantidad.style.display = "none";

// Evento de envio del formulario -----------------------
form.addEventListener("submit", (evt) => {
    // Hay errores?
    let error = false;

     // Validar:
    // En la reserva, la cantidad de personas a la mañana debe ser
    // de un máximo de 4 personas

    const horaSeleccionada = parseInt(hora.options[hora.selectedIndex].value);


    // -> Será VERDADERO si la hora es antes del mediodía, y son más de 4 personas
    if (horaSeleccionada < 12 && cantidad.value >4) {
        // Mostrar mensaje cambiando propiedad css
        msgCantidad.style.display = "block";
        // Hay error
        error = true;
    }

    // Validar!
    if (error === true) {
        // No envía form
        evt.preventDefault();
    }
});











