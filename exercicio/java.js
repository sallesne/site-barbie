function exibirSaudacao() {
    var nome = document.getElementById("nomeInput").value;
    var saudacao = document.getElementById("saudacao");
    saudacao.innerHTML = "<p>Olá, " + nome + "!</p>";
}
