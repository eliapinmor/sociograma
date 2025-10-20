document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formulario");
    const name = document.getElementById("nombre");
    const submit_enviar = document.getElementById("button-enviar");
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

});
