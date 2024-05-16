document.addEventListener("DOMContentLoaded", function() {
    var contador = document.getElementById("contador");
    var numero = 10;

    function exibirContagemRegressiva() {
        contador.textContent = numero;
        numero--;

        if (numero >= 0) {
            setTimeout(exibirContagemRegressiva, 1000); // Aguarda 1 segundo
        }
    }

    exibirContagemRegressiva();
});
