function verificarParOuImpar() {
    var numero = parseInt(document.getElementById("numero").value);
    var resultado = document.getElementById("resultado");

    if (numero % 2 === 0) {
        resultado.innerHTML = "<p>O número " + numero + " é par.</p>";
    } else {
        resultado.innerHTML = "<p>O número " + numero + " é ímpar.</p>";
    }
}
