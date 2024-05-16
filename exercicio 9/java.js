function converterParaFahrenheit() {
    var tempCelsius = parseFloat(document.getElementById("tempCelsius").value);
    var tempFahrenheit = (tempCelsius * 9/5) + 32;
    var resultado = document.getElementById("resultado");
    resultado.textContent = "Temperatura em Fahrenheit: " + tempFahrenheit.toFixed(2);
}
