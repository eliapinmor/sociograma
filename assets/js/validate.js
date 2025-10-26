document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formulario");
    const name = document.getElementById("nombre");
    const submit_enviar = document.getElementById("button-enviar");
    const horaInicio = document.getElementById("disponibilidad_horas_inicio");
    const horaFin = document.getElementById("disponibilidad_horas_fin");

    const disponibilidad_horas = [horaInicio, horaFin];
name.addEventListener("input", function () {
        if (this.value.trim().length < 3) {
            console.log("escribe un nombre");
            name.style.border = "1px solid #f15454ff;"
            submit_enviar.disabled = true;

        } else {
            console.log("gracias por escribir tu nombre");
            submit_enviar.disabled = false;
        }
    });



disponibilidad_horas.forEach(input => {
    input.addEventListener("change", function () {
        if (horaInicio.value && horaFin.value && horaInicio.value >= horaFin.value) {
            horaInicio.style.border = horaFin.style.border = "1px solid #f15454";
            console.log("La hora de inicio debe ser anterior a la hora de fin");
        } else {
            horaInicio.style.border = horaFin.style.border = "1px solid #6664ef";
        }
    });
});

});
