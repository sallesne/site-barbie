function calcularSoma() {
    var num1 = parseFloat(document.getElementById("numero1").value);
    var num2 = parseFloat(document.getElementById("numero2").value);
    var resultado = document.getElementById("resultado");
    var soma = num1 + num2;
    resultado.innerHTML = "<p>A soma é: " + soma + "</p>";
}
