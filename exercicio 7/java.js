
function validarSenha() {
    var senha = document.getElementById("senha").value;
    var resultado = document.getElementById("resultado");

    if (senha.length < 8) {
        resultado.textContent = "A senha deve ter pelo menos 8 caracteres.";
    } else if (!/[A-Z]/.test(senha)) {
        resultado.textContent = "A senha deve conter pelo menos uma letra maiúscula.";
    } else if (!/\d/.test(senha)) {
        resultado.textContent = "A senha deve conter pelo menos um número.";
    } else {
        resultado.textContent = "A senha atende aos critérios de validação.";
    }
}
