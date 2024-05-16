function reverterString() {
    var texto = document.getElementById("texto").value;
    var resultado = document.getElementById("resultado");
    
    var stringInvertida = inverterString(texto);
    resultado.textContent = "A string invertida é: " + stringInvertida;
}

function inverterString(str) {
    return str.split("").reverse().join("");
}
