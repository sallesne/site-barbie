function calcularFatorial() {
    var numero = parseInt(document.getElementById("numero").value);
    var resultado = document.getElementById("resultado");
    
    if (numero < 0) {
        resultado.textContent = "Não é possível calcular o fatorial de um número negativo.";
    } else {
        resultado.textContent = "O fatorial de " + numero + " é: " + calcularFatorialRecursivo(numero);
    }
}

function calcularFatorialRecursivo(numero) {
    if (numero === 0 || numero === 1) {
        return 1;
    } else {
        return numero * calcularFatorialRecursivo(numero - 1);
    }
}
